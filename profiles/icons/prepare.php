<?php /*
╔══════════════════════════════════╗
║ omg.lol icon preparation utility ║
╚══════════════════════════════════╝

Copyright 2022 Neatnik LLC

Permission is hereby granted, free of charge, to any person obtaining a copy of 
this software and associated documentation files (the "Software"), to deal in 
the Software without restriction, including without limitation the rights to 
use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies 
of the Software, and to permit persons to whom the Software is furnished to do 
so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all 
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR 
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, 
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE 
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER 
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, 
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE 
SOFTWARE.

--

This utility prepares the files necessary for icons to be displayed correctly 
on omg.lol profile pages. It does this by combining the Font Awesome Free icons 
with our own icon font and related metadata.

If you want to make changes to omg.lol icons, please edit the files that begin 
with `defined_` — don’t edit the .json files directly, as they’re overwritten 
during this preparation process.

The comments in the script explain the process in detail. */

header("Content-Type: text/plain");

// First, prepare our domain file, `domains.json`, which maps domains in omg.lol profiles to the appropriate icon. This is constructed from `defined_domains.txt`, because editing JSON directly can often be problematic (looking at you, @lxjv).

$domain_data = file('defined_domains.txt', FILE_IGNORE_NEW_LINES);
foreach($domain_data as $line) {
	$bits = explode(' ', $line);
	$domains[$bits[0]] = $bits[1];
}
file_put_contents('domains.json', json_encode($domains, JSON_PRETTY_PRINT));

// Next, we’ll create an array of the Font Awesome Free icons.

$font_awesome_free = json_decode(file_get_contents('https://omg.cache.lol/type/fontawesome-free/metadata/icons.json'));
foreach($font_awesome_free as $icon => $obj) {
	$font_awesome_icons[$icon] = 'fa-'.$obj->styles[0].' fa-'.$icon;
}

// Now, we’ll load our omg.lol icon font data into an array. We’ll also generate the CSS used for the omg.lol icon font. Also, we’ll be notified of any conflicts that might occur between Font Awesome and the omg.lol icon font (in case new icons are added to Font Awesome that we’ve already defined).

$omg_icon_data = file('defined_omgicons.txt', FILE_IGNORE_NEW_LINES);
$omg_icons = array();
$omg_css = null;
foreach($omg_icon_data as $line) {
	$bits = explode(' ', $line);
	if(isset($font_awesome_icons[$bits[0]])) {
		echo 'There is an existing Font Awesome icon: '.$bits[0]."\n";
	}
	else {
		$omg_icons[$bits[0]] = 'omg-icon omg-'.$bits[0];
		$omg_css .= '.omg-'.$bits[0].':before { content: "\\'.$bits[1].'"; }'."\n";
	}
}

// Now we’ll save the omg.lol icon CSS file.

file_put_contents('omg.lol-glyphs.css', $omg_css);

// We’ll merge the Font Awesome and omg.lol icon arrays, and check for any icons that we’ve chosen to override.

$icons = array_merge($font_awesome_icons, $omg_icons);
$overrides = file('defined_overrides.txt', FILE_IGNORE_NEW_LINES);
foreach($overrides as $line) {
	$bits = explode(' ', $line);
	if(isset($icons[$bits[0]])) {
		$icons[$bits[0]] = implode(' ', array_slice($bits, 1));
	}
}

// Finally, we’ll write the icon .json file.

$icons = json_encode($icons, JSON_PRETTY_PRINT);
file_put_contents('icons.json', $icons);

echo 'Finished.';

// Bonus utility! Alphabetize our definition files.

if(isset($_REQUEST['tidy'])) {
	foreach(array('defined_domains.txt', 'defined_omgicons.txt', 'defined_overrides') as $file) {
		$data = file($file, FILE_IGNORE_NEW_LINES);
		sort($data);
		file_put_contents($file, implode("\n", array_filter($data)));
	}
}
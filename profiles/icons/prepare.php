<?php /*
╔══════════════════════════════════╗
║ omg.lol icon preparation utility ║
╚══════════════════════════════════╝

Copyright 2023 Neatnik LLC

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

// Set a version for this run

$version = microtime(1);

// First, prepare our domain file, `domains.json`, which maps domains in omg.lol profiles to the appropriate icon. This is constructed from `defined_domains.txt`, because editing JSON directly can often be problematic (looking at you, @lxjv).

$domain_data = file('defined_domains.txt', FILE_IGNORE_NEW_LINES);
foreach($domain_data as $line) {
	$bits = explode(' ', $line);
	if($bits[0] == '' || $bits[0][0] == '/') continue;
	$domains[$bits[0]] = $bits[1];
}
file_put_contents('domains.json', json_encode($domains, JSON_PRETTY_PRINT));

// Next, we’ll create an array of the Font Awesome Free icons.

$font_awesome_free = json_decode(file_get_contents('../../type/fontawesome-free/metadata/icons.json'));
foreach($font_awesome_free as $icon => $obj) {
	$font_awesome_icons[$icon] = 'fa-'.$obj->styles[0].' fa-'.$icon;
}

// Now, we’ll load our omg.lol icon font data into an array. We’ll also generate the CSS used for the omg.lol icon font. Also, we’ll be notified of any conflicts that might occur between Font Awesome and the omg.lol icon font (in case new icons are added to Font Awesome that we’ve already defined).

$omg_icon_data = file('defined_omgicons.txt', FILE_IGNORE_NEW_LINES);
$omg_icons = array();
$omg_css = null;
foreach($omg_icon_data as $line) {
	$bits = explode(' ', $line);
	
	$omg_lol_icons[$bits[0]] = $bits[1];
	
	if(isset($font_awesome_icons[$bits[0]])) {
		echo "\n".'There is an existing Font Awesome icon: '.$bits[0]."\n";
	}
	else {
		$omg_icons[$bits[0]] = 'omg-icon omg-'.$bits[0];
		$omg_css .= '.omg-'.$bits[0].':before { content: "\\'.$bits[1].'"; }'."\n";
	}
}

ksort($omg_lol_icons);

$html = '<!DOCTYPE html><html lang="en"><head><meta charset="utf-8"><title>omg.lol Icons</title><style>@import url(omg.lol-icons.css);body{font-family:sans-serif;text-align:center;}table{margin:auto;border-collapse:collapse;}td{font-size:2em;padding:.5em;border-top:1px solid #ccc;text-align:left;border-bottom:1px solid #ccc;text-align:left;}h1{text-align: center; margin: 2em;}a{margin:2em;display:block;}.unicode{font-family:monospace;font-size:60%;color:#777;}</style></head><body><h1>omg.lol icons generated '.date("c").'</h1><table><tbody>';
foreach($omg_lol_icons as $name => $unicode) {
	$html .= '<tr><td><i class="omg-icon omg-'.$name.'"></i></td><td>'.$name.' <span class="unicode">&bsol;'.$unicode.'</span></td></tr>';
}
$html .= '</tbody></table><a href="https://validator.w3.org/nu/?doc=https%3A%2F%2Fomg.cache.lol%2Fprofiles%2Ficons%2Fomg.lol-icons.html">
<img src="https://www.w3.org/html/logo/badge/html5-badge-h-solo.png" width="63" height="64" alt="HTML5 Powered" title="HTML5 Powered">
</a></body></html>';

// Now we’ll save the omg.lol icon review and CSS files.

file_put_contents('omg.lol-icons.html', $html);
file_put_contents('omg.lol-glyphs.css', $omg_css);

// And update omg.lol-icons.css with the latest version in the query strings

/*
$css = file_get_contents('omg.lol-icons.css');
preg_match_all("/\?v=(.*)'/m", $css, $matches, PREG_SET_ORDER);
$css = str_replace($matches[0][1], $version, $css);
file_put_contents('omg.lol-icons.css', $css);
*/

// As well as /themes/css/base.css

/*
$css = file_get_contents('../themes/css/base.css');
preg_match_all("/\?v=(.*)'/m", $css, $matches, PREG_SET_ORDER);
$css = str_replace($matches[0][1], $version, $css);
file_put_contents('../themes/css/base.css', $css);
*/

// We’ll merge the Font Awesome and omg.lol icon arrays, and check for any icons that we’ve chosen to override.

$icons = array_merge($font_awesome_icons, $omg_icons);
$overrides = file('defined_overrides.txt', FILE_IGNORE_NEW_LINES);
foreach($overrides as $line) {
	$bits = explode(' ', $line);
	if(isset($icons[$bits[0]])) {
		$icons[$bits[0]] = implode(' ', array_slice($bits, 1));
	}
}

// Next, we’ll write the icon .json file.

$icons = json_encode($icons, JSON_PRETTY_PRINT);
file_put_contents('icons.json', $icons);
$id = uniqid();

echo "\n".'Icon preparation complete. Check icons: <a href="https://cdn.cache.lol/profiles/icons/omg.lol-icons.html?v='.$version.'">https://cdn.cache.lol/profiles/icons/omg.lol-icons.html?v='.$version.'</a>';

// Finally, we’ll flush the bunny.net cache for icons

$access_key = file_get_contents('/var/www/html/secret/bunny_access_key');
$url = 'https://cdn.cache.lol/profiles/icons/*';
$tmp = shell_exec("curl --request GET \
--url 'https://api.bunny.net/purge?url=".urlencode($url)."&async=false' \
--header 'AccessKey: $access_key' \
--header 'accept: application/json'");

// And for the base theme

$access_key = file_get_contents('/var/www/html/secret/bunny_access_key');
$url = 'https://cdn.cache.lol/themes/css/base.css';
$tmp = shell_exec("curl --request GET \
--url 'https://api.bunny.net/purge?url=".urlencode($url)."&async=false' \
--header 'AccessKey: $access_key' \
--header 'accept: application/json'");

// And for custom emoji

$access_key = file_get_contents('/var/www/html/secret/bunny_access_key');
$url = 'https://cdn.cache.lol/type/emoji/*';
$tmp = shell_exec("curl --request GET \
--url 'https://api.bunny.net/purge?url=".urlencode($url)."&async=false' \
--header 'AccessKey: $access_key' \
--header 'accept: application/json'");

// And recache key resources

$recache[] = 'https://cdn.cache.lol/profiles/icons/omg.lol-glyphs.css';
$recache[] = 'https://cdn.cache.lol/profiles/icons/omg.lol-icons.css';
$recache[] = 'https://cdn.cache.lol/profiles/icons/omg.lol-icons.html';
$recache[] = 'https://cdn.cache.lol/profiles/icons/omg.lol-icons.otf';
$recache[] = 'https://cdn.cache.lol/profiles/icons/omg.lol-icons.woff';
$recache[] = 'https://cdn.cache.lol/profiles/icons/omg.lol-icons.woff2';
$recache[] = 'https://cdn.cache.lol/profiles/icons/domains.json';
$recache[] = 'https://cdn.cache.lol/profiles/icons/icons.json';
$recache[] = 'https://cdn.cache.lol/profiles/icons/omg.lol-icons.html';
$recache[] = 'https://cdn.cache.lol/profiles/themes/css/base.css';
foreach($recache as $url) {
	file_get_contents($url);
}
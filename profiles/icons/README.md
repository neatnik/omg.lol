# omg.lol Icons

This directory contains files used in preparing icons for omg.lol profiles.

This table explains what everything is, and more importantly, which files can be edited:

| File | Editable | Purpose |
| ---- | -------- | ------- |
| defined_domains.txt | Yes | This is a space-delimited key-value pair of domains and their associated omg.lol icons. |
| defined_omgicons.txt | Yes | This is a space-delimited key-value pair of icon classes and their associated Unicode glyphs in the custom omg.lol icon font. |
| defined_overrides.txt | Yes | This is a space-delimited key-value pair of icon classes where an icon other than the default Font Awesome icon should be used. |
| domains.json | No | The JSON file used by the profile page generator to map domains to icons. |
| icons.json | No | The JSON file used by the profile page generator to determine available icons (a combination of Font Awesome Free and omg.lol icons). |
| omg.lol-glyphs.css | No | The CSS file used by the omg.lol icon font. |
| omg.lol-icons.css | No | The CSS file used by omg.lol profiles/themes. |
| omg.lol-icons.woff2 | No | The omg.lol custom icon font in WOFF2 format. |
| omg.lol.icons.glyphs | Yes | The omg.lol custom icon font in Glyphs format. |
| prepare.php | Yes | The utility script that prepares the JSON and CSS files above. |

## The omg.lol icon preparation utility

`prepare.php` is a script that will generate the required JSON and CSS files in the table above based on the contents of the .txt files in this directory. The script contains comments that explain its functions.

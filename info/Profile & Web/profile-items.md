---
Description: How to manage the many beautiful items on your omg.lol profile  
Last Updated: 2022-12-14 12:41 PM EDT
---

# Profile Items

One of the best parts of an [omg.lol profile](/info/profiles) is the total flexibility you have in adding and managing your profile items.

Your profile items can be just about anything: plain text, a link to something (like a personal website or a social media profile), or whatever. Add as many as you’d like! You can re-order them any time (by dragging them around in the Classic editor, or just changing their text placement in the Advanced editor).

## Adding items

 - In the Classic editor: Click the friendly **Add an item** button to get a new profile item field.
 - In the Advanced editor: Just insert a new Markdown list item (starting with `-`) within the `--- Profile Items ---` section of your page.

## Removing items

If you want to remove a profile item in the Classic editor, just clear the contents of the field. When you save your profile, it’ll vanish. In the Advanced editor, just delete the text and list item.

## Using Markdown

Markdown is supported, so you can format text or add links as you see fit. For example, you can add a link with custom text like this:

```markdown
[My awesome link text](https://myawesomesite.example.com)
```

Setting links to be opened in a new tab (i.e., `target="_blank"`) can be achieved by appending `⧉` to the end of the link markdown, like this:

```markdown
[This opens in a new tab](https://example.com)⧉
```

## Linking to social profiles or other sites

When you link to a known social profile or website, we’ll try to clean up the display of that link for you by showing a nice icon and your username (taken from the URL). If you’re not seeing a certain icon that you’re expecting, [get in touch](/info/contact) or [add an icon request on GitHub](https://github.com/neatnik/omg.lol/issues/new?assignees=&labels=icon&template=icons.yml&title=%5BIcon%5D+) and we’ll add it for you.

## Special Items

* {snowfall} will make it snow on your profile.
* {norelme} will disable the global default `rel="me"` attribute applied to all profile page links.

## Keys

You can easily share your [cryptographic public keys](/info/keys) on your profile. These key types are supported:

* `{pgp-key}` for your PGP key
* `{ssh-key}` for your SSH key
* `{age-key}` for your age key
* `{cosign-key}` for your Cosign key
* `{minisign-key}` for your Minisign key

## Choosing icons

If you’d like to have a specific icon appear on a profile item, just use an icon tag, like this: `{cat}`. Put it at the end of the line, and when your profile is published, the tag will be removed and the icon will be applied. You can use any icon in the [Font Awesome free set](https://fontawesome.com/search?m=free&o=r), as well as any of the custom omg.lol icons.

For example:

* ` - https://instagram.com/foobar` will show the Instagram icon by default
* ` - https://instagram.com/foobar {cat}` will show the cat icon (useful for Instagram feeds dedicated to your cat)

<!-- todo: link to catalog of icons -->

Want to add a new icon tag? [Add an issue in GitHub](https://github.com/neatnik/omg.lol/issues/new) or just [get in touch](/info/contact) to request one.

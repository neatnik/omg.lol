---
Description: The advanced web editor is our most advanced editor yet, as the name would suggest
Last Updated: 2022-10-15 1:03 PM EDT
---

# Advanced Web Editor

Our Advanced web editor is a major improvement over the [Classic editor](/info/classic-editor), offering a unique Markdown-powered approach to managing your profile page. With this editor, your profile page is essentially a Markdown document, making it easy to add content and rearrange things however you wish.

## Profile or Web pages

The Advanced editor can be used to edit and publish [Profile](/info/profiles) pages (with the aforementioned Markdown document approach), or to manage a simple web page (just set your **Page type** to **Raw HTML only**).

## Profile Metadata

The Advanced editor uses a custom approach to defining profile metadata, intended to preserve the beauty of the underlying Markdown document. You can define a metadata block like this:

```
| Pronouns: they/them
| Occupation: Seed Preservationist
| Location: Svalbard
```

Each line above is its own _metadata item_, which is in turn rendered into HTML with a “metadata” class and a unique ID to aid in page styling and structure. For example, the metadata block above would be rendered into HTML as:

```html
<div class="metadata" id="pronouns">they/them</div>
<div class="metadata" id="occupation">Seed Preservationist</div>
<div class="metadata" id="location">Svalbard</div>
```

Certain metadata items also receive icons automatically, but this can be disabled if desired.

## Profile Sections

Sections can be added to pages with a special section indicator, like this:

```
--- Bio ---
```

This would be rendered as:

```html
<div id="bio">
...
</div>
```

The contents of this `<div>` would consist of whatever comes after the section indicator, up to the end of the document or the start of another section indicator. (As such, it’s not possible to nest sections... yet.)

## Profile Items

If you have a `--- Profile Items ---` section indicator in your profile document, you’ll receive a special section that intelligently applies icons to whatever lists to include within that section. Learn more about how this works in our [Profile Items](/info/profile-items) article.

## Profile Picture

Your profile picture will be rendered wherever the `{profile-picture}` indicator is placed within your document.

## Custom Metadata

You can fill in the custom metadata fields to define a page title and description (or leave them blank and we’ll do it for you).

## Custom CSS

Specify any amount of custom CSS you’d like. You can get creative here and really transform the entire look and feel of your page!

## Custom `<head>` content

Need to put some custom elements in your page head? Go for it!

---
Description: status.lol, our Statuslog service  
Last Updated: 2022-10-09 01:07 AM EDT
---

# Statuslog

We run a “statuslog” for omg.lol members at [status.lol](https://status.lol). It’s fun!

## What’s a statuslog?

It’s like a weblog, but it’s designed for short status updates. Use it to share what’s happening at the moment: what you’re reading or watching, who you’re hanging out with, what you’re munching on, or maybe how you’re feeling. That kind of thing.

## Embedding your status elsewhere

You can embed your status anywhere you’d like with a tiny bit of Javascript. To display a plain, unstyled version of your status by itself, just add this script to any web page:

`<script src="https://status.lol/[your-address].js?"></script>`

For example, if your address was `foo`, you’d use this:

`<script src="https://status.lol/foo.js?"></script>`

You can also include some parameters that will control what and how things are displayed:

 - `time` will include the relative time of when the status was posted (e.g. 2 days ago)
 - `link` will turn the time into a hyperlink back to the status page on status.lol
 - `fluent` will include the Fluent emoji
 - `pretty` will style the status pretty closely to what’s shown on status.lol
 - `no-emoji`will show no emoji in your status output

So, if you’re looking for something that looks nice, you probably want to use this:

`<script src="https://status.lol/[your-address].js?time&link&fluent&pretty"></script>`

## Emoji

The amazing emoji used on [status.lol](https://status.lol) are from the [Fluent Emoji](https://github.com/microsoft/fluentui-emoji) project.

---
Description: Learn all about PURLs, also known as persistent uniform resource locators  
Last Updated: 2023-01-01 03:25 AM EDT
---

# PURLs

PURLs, or persistent uniform resource locators, are URLs that don’t change. omg.lol customers can make as many PURLs as they’d like.

## What’s a PURL?

A PURL is a way to refer to something that changes (or might change) in a way that doesn’t. With a PURL, you can create an unchanging URL like `you.omg.lol/joke` and point it to some other URL like <span style="word-break: break-all;">`reddit.com/r/Jokes/comments/hexrqq/what_did_yoda_say_when_he_saw_himself_in_4k/`</span>. When people visit `you.omg.lol/joke` they’ll be taken to that Reddit joke page. But at any point you can change that destination URL, and make your `/joke` PURL go to another joke! A better one, maybe.

## Why use a PURL?

There are all kinds of uses. One is as simple as the example above—a “joke of the day” where the URL never changes but the joke does. PURLs are also useful for pointing to very specific resources that don’t move often—but when they do, you’re able to update the destination URL and effectively keep the PURL accurate indefinitely.

## Accessing your PURLs

By default, all of your PURLs work on two domains: `omg.lol` and `url.lol` (which is our dedicated PURL service domain). This means that for every PURL you create, the following URLs will resolve to it:

1. `you.omg.lol/purl`
2. `omg.lol/you/purl`
3. `you.url.lol/purl`
4. `yourdomain.com/purl` (This only works if you have an external domain linked in the [Switchboard](https://home.omg.lol/info/switchboard))

The `url.lol` domain exists for your convenience, in the event that your omg.lol domain is configured in such a way that you can’t use PURLs (e.g. DNS settings that point it away from our server).

## PURL hit counter

Every time someone accesses your PURL, we’ll count a hit for you. You can view the total hits for each of your PURLs on your addresses’s PURLs page. We don’t track any data associated with PURL visits and respect everyone’s privacy.

## Preview page

You can append `/wut` to any PURL to view a URL preview page, if you’d like to avoid surprises.

## Do’s and Don’ts

**Do** make PURLs that are useful, convenient, and fun! These are harmless PURLs, and they are encouraged.

**Don’t** make PURLs that are spammy, point to malicious resources, or might make anyone have a bad day. These are harmful PURLs and they’re unwelcome here.

## Reporting abuse

You can report abuse related to PURLs (or anything else) by emailing [abuse@omg.lol](mailto:abuse@omg.lol) at any time.

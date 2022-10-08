Description: Emoji addresses are fun, but can be finicky  
Last Updated: 2022-10-08 01:52 AM EDT

# Emoji addresses

We’re happy to offer emoji addresses at omg.lol. Emoji are fun and cool, but they can pose some technical challenges in different contexts. You should understand these issues before purchasing an emoji address on omg.lol.

## Background

Emoji are part of a more complex (“multibyte”) character set than ordinary letters and numbers. Email and web technologies were built during a time when emoji didn’t exist, so support for emoji in both can be inconsistent (ranging from “quirky” to “downright busted” depending on different factors).

## Web use

First, the good news: in general, emoji work pretty well on the web. For example, the address [🍋.omg.lol](https://🍋.omg.lol) will work in just about any modern web browser. But details around the behavior will differ between browsers. Safari will show the emoji in the address bar (i.e. `🍋.omg.lol`), but Chrome shows `xn--li8h.omg.lol`. The gibberish you see in the URL is known as [Punycode](https://en.wikipedia.org/wiki/Punycode), which is a standard that converts special characters (like emoji, accented letters, or diacritics) into a plain text representation that can play nicely with older tech. Both `🍋.omg.lol` and `xn--li8h.omg.lol` are functionally identical; one is just much sexier than the other.

## Email use

Email is where things become a bit bumpier. Support for emoji and other special characters is spotty across much of the underlying tech, and different implementations of that tech handle emoji support differently.

Let’s say you send an email to `🍋@omg.lol`. It _might_ actually go through, but more than likely one of these two things will happen:

### Mail client issue

If your mail client doesn’t handle emoji correctly (and many don’t), here’s what can happen when the email hits the destination server:

<pre><code class="language-log">Jan  1 23:59:59 server postfix/srvc[1234]: ABCDEF0123: from=&lt;sender@domain&gt;, size=1234, nrcpt=1 (queue active)
Jan  1 23:59:59 server postfix/srvc[1234]: ABCDEF0123: to=<span class="base08">&lt;=?utf-8?B?8J+kqQ==?=@omg.lol&gt;</span></code></pre>

In this case, the message is received, but the address is no longer intact, and the server doesn’t know what to do with it (so it won’t be delivered).

### Mail server issue

If the email winds up going to a downstream destination server that doesn’t know how to deal with emoji, here’s what can happen:

<pre><code class="language-log">Jan  1 23:59:59 server postfix/srvc[1234]: ABCDEF0123: from=&lt;sender@domain&gt;, size=1234, nrcpt=1 (queue active)
Jan  1 23:59:59 server postfix/srvc[1234]: ABCDEF0123: to=&lt;forwarded@destination&gt;, orig_to=&lt;🍋@omg.lol&gt;, <span class="base08">status=bounced (SMTPUTF8 is required, but was not offered by host mailserver[203.0.113.42]</span>)</code></pre>

Here we can see that the emoji address survived intact when the message reached omg.lol, but the server to which the message was forwarded didn’t have support for emoji addresses and the email wasn’t delivered.

## What to do?

There’s no way to guarantee how things will behave when using emoji in email or web addresses, so this is a classic case of buyer beware. When you register an emoji address, though, you’ll also receive the corresponding Punycode namespace for both email and web (and this will appear in the address configuration for your reference). So if you’re feeling brave, go for it!

---
Description: You don’t have to prove yourself to anyone, but proving that your stuff is yours is pretty sweet  
Last Updated: 2022-11-23 11:58 AM EST
---

# Proofs

We’ll soon launch [proven.lol](https://proven.lol), a super-simple (and hopefully kind of fun) digital proof system. Until then, here’s some info about it.

## How it works

First up, the important and highly relevant stuff: proven.lol isn’t going to try to be the next Keybase, or Keyoxide, or anything that’s serious and smart in the cryptographic proof / web of trust space. It’s meant to be simple and fun, but it’s ultimately a centralized and opinionated service. Use it for fun, not for government-level identity verification. Remember, the domain ends in “dot lol”.

With that out of the way, let’s talk about the system itself. Here’s the elevator pitch:

> proven.lol lets you verify virtually every kind of digital asset or property, including email addresses or third-party platforms that haven’t historically been compatible with other proof systems (like Keybase). If it’s on the internet, accessible by our servers, and you can demonstrate that you own it, you can add a proof for it.

### Claims, Assertions, and Proofs

Everything on proofs.lol is either an _assertion_ or a _proof_. You add _assertions_, and then if they can be proven, they turn into _proofs_. Easy!

The flow looks like this:

1. You assert ownership of https://example.com/jabberwocky.
2. proven.lol tells you the claim that you need to put on https://example.com/jabberwocky in order to validate your assertion.
3. You add the claim and tell proven.lol that you’ve done so. The proven.lol system then checks for the claim (by visiting the page). If the claim is present, your assertion is validated and turned into a timestamped proof.

For things that aren’t websites, the flow may be a little different (proving an email address, for instance, would require you to email your claim to a specific validation address).

Here’s the cool part—you can delete your claim once your assertion has been proven. “But doesn’t that defeat the entire purpose of this?” you might ask. “No way,” we might answer. Because proven.lol works differently. (Keep reading below.)

### Point-In-Time Proofs

All of the proofs on proven.lol are timestamped, and the assertions are proven _as of that timestamp_. Unlike Keybase or other services that require you to make a post with your claim and keep it posted indefinitely, proven.lol isn’t going to keep checking for that stuff over and over (and hound you if it vanishes). Simply put, we’re only interested in documenting proof of something at a particular point in time.

You’re welcome to refresh your proof as often as you’d like, or to let your proofs age. Ultimately it’s up you to decide what’s “fresh” enough when it comes ot a proof, or if it even matters. Life is short and everything is temporary, so maybe don’t overthink it.

But yeah, the upside to a point-in-time proof system is that you can easily prove ownership of third-party pages where you only have limited space to post a claim (like in a “bio” field). We can check for that claim, prove the assertion, and then you can remove the weird string from your bio and go back to normal.

### Negative Assertions

Another feature of proven.lol is that we’ll allow you to post _negative assertions_, which is a way of saying, for example, “I’m not on Twitter.” You can’t ever prove a negative, though, so these assertions can never turn into proofs—but we’re happy to host them for you, as part of your proven.lol page. This way, people can get a comprehensive view about where you can and can’t be found online.

### omg.lol integration

“This all sounds nice, but I already have all of my stuff listed on my omg.lol page” is something you might be thinking. Well, cool, we’ve thought about it too! proven.lol will work in tandem with omg.lol, and the URLs you have on your omg.lol profile will automatically receive a visual designation of their proofs if you’ve proven them on proven.lol. Or, you can set up all of your stuff on proven.lol and easily bring it all into your omg.lol profile without having to duplicate anything. It’ll all be possible, and easy.

## Questions?

Ping [@adam@social.lol](https://social.lol/@adam) with any questions, thoughts, early ideas, or feedback.
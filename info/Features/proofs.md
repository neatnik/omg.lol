---
Description: You don’t have to prove yourself to anyone, but proving that your stuff is yours is pretty sweet  
Last Updated: 2023-04-05 11:44 AM EDT
---

# Proofs

Proven (dot lol) is digital asset ownership proofs for everyone. No monthly fees or crypto blockchain ape JPGs—just a simple verification process to validate ownership of stuff on the internet.

## How it works

First, it’s really important to make this point clear: proven.lol isn’t aiming to be like Keybase or Keyoxide, or anything that’s serious and smart in the cryptographic proof / web of trust space. It’s meant to be simple and fun, and is ultimately a centralized and opinionated service. Use it for fun, not for government-level identity verification. Remember, the domain ends in “dot lol”.

With that out of the way, here’s how it operates in a nutshell:

1. You claim ownership of something, like https://example.com/jabberwocky.
2. proven.lol tells you to add a verification snippet like `proven.lol/a0c1b2` to https://example.com/jabberwocky in order to prove your claim.
3. You add the snippet and tell proven.lol that you’ve done so, and then proven.lol checks the page for the snippet. If the claim is present, your claim is turned into a timestamped proof. Yay!

**Note: You should only attempt to prove ownership over things that you actually “own”—that is, things that are wholly for or about you (like a social profile page), or that you created or maintain, and that would fit any reasonable definition of something that you “own”. Don’t claim shared spaces or things that you know you do not own.**

For things that aren’t websites, the flow may be a little different (proving an email address, for instance, would require you to email your claim to a specific validation address). We’ll get to that when we build it.

Here’s the cool part—you can delete your verification snippet from your asset after your claim has been proven. “But doesn’t that defeat the entire purpose of this?” you might ask. “No way,” we’d answer. Because proven.lol works differently. (Keep reading below.)

### Point-In-Time Proofs

All of the proofs on proven.lol are timestamped, and the claims are proven _as of that timestamp_. Unlike Keybase or other services that require you to make a post with your claim and keep it live forever, proven.lol isn’t going to keep checking for that stuff over and over (or pester you if it vanishes). Simply put, we’re only interested in documenting proof of something at a particular point in time.

You’re welcome to refresh your proof as often as you’d like, or you can let your proofs age. Ultimately it’s up you to decide what’s “fresh” enough when it comes to a proof, or if it even matters. Life is short and everything is temporary, so maybe don’t overthink it. You can always leave your verification snippet in place, which is a great way to signal to visitors that you still maintain control over the asset.

The upside to a point-in-time proof system is that you can easily prove ownership of third-party pages where you only have limited space to post a claim (like in a “bio” field). We can check your claim, prove it, and then you can remove the snippet from your bio and go back to normal.

### Negative Assertions

Another feature (that’s coming soon) is that we’ll allow you to post _negative proofs_, which is a way of saying, for example, “I’m not on Twitter.” You can’t truly prove a negative, though, so these assertions can never turn into proofs—but we’re happy to host them for you, as part of your proven.lol page. This way, people can get a comprehensive view about where you can and _can’t_ be found online.

### omg.lol integration

“This all sounds nice, but I already have all of my stuff listed on my omg.lol page” is something you might be thinking. Well, cool, we’ve thought about that too! proven.lol will eventually work in tandem with omg.lol, and the URLs you have on your omg.lol profile will automatically receive a visual designation of their proofs if you’ve proven them on proven.lol. Or, you can set up all of your stuff on proven.lol and easily bring it all into your omg.lol profile without having to duplicate anything. It’ll all be possible, and easy.

## Aren’t you just a random untrusted party, though?

Yeah, we are. Also, the domain ends in .lol, so that probably should have been your first clue that you’re not getting government-level RFC3161-compliant Time Stamp Authority service here or anything even remotely close. This is for fun! If it’s not fun to you, don’t use it.

## Questions?

Ping [@adam@social.lol](https://social.lol/@adam) with any questions, thoughts, early ideas, or feedback.

---
Description: All about our awesome IRC server
Last Updated: 2025-03-07 1:00 PM EST
---

# Internet Relay Chat (IRC)

Internet Relay Chat (or IRC) is an open standard for chatting on the internet. It’s [been around forever](https://en.wikipedia.org/wiki/Internet_Relay_Chat), and it’s great! And we’re using it here as part of the [omg.lol chat network](/info/chat).

### Getting started

To kick things off, visit your address’s social.lol page and then click the "Create IRC account" button. You’ll then receive a password that you can use to connect. If you ever forget your password, you can visit the same page to generate a new one.

### Connecting & authenticating

To use IRC, you need a _client_ that can connect to the server. There are [many clients](/info/extra/irc-clients) available, all with different features.

You can point your client to `irc.social.lol`, using port `6667` for a plaintext connection or port `6697` for an encrypted connection. Once you’re connected, you’ll need to authenticate before you can join any channels or do anything. To authenticate, type `/MSG PENELOPE IDENTIFY <PASSWORD>` where `<PASSWORD>` is the password you received above. You don’t have to type it in all caps; there’s just this ancient convention of using all caps in IRC-related documentation for any user input. Anyway, that command will identify you to Penelope, our amazing IRC bot. For legacy and compatibility, you can also identify with NickServ, but it’s still Penelope under the hood.

### Joining channels

When you first connect and authenticate, you’ll be automatically joined to two channels: `#general` and `#help`. But we have [many other channels](/info/chat), too! If you’ve used IRC elsewhere in the past, you already know about the `/JOIN` command. But our server is a little different: to keep things safely limited to omg.lol members, all channels are invite-only be default, and you can join them via Penelope. Type `/PENELOPE JOIN <CHANNEL>` to join a channel, and Penelope will do two things: first, she’ll join to you the requested channel; and second, she’ll remember that channel for you in your personal channel list.

If you’d like to join all of our core channels (the ones bridged with Discord and XMPP), type `/PENELOPE JOINALL`.

### Your personal channel list

Penelope keeps track of the channels that you’re in, so if you disconnect and come back you’ll automatically join them all after you authenticate. You can view your personal channel list by typing `/PENELOPE CHANNELS`. To add a channel to the list, just join it with `/PENELOPE JOIN <CHANNEL>`. To remove a channel from the list, you can type `/PENELOPE PART <CHANNEL>`. If you ever want to leave a channel without removing it from your personal channel list, you can just use the regular `/PART <CHANNEL>` IRC command.

### Other stuff

Unlike default IRC experiences of the past, you don’t have to worry about your IP address being leaked on the irc.social.lol server. When you identify with Penelope, she’ll apply a _cloak_ to your connection, effectively hiding your IP address from everyone. (If you do a `/WHOIS` on yourself, you’ll still see your own IP address in the response, but other members won’t!)

We also have a karma system! You can award karma to people by typing their name followed by ++, e.g. `penelope++`.

And, finally, we have the IdleRPG game running on `#IdleRPG`. Feel free to join!
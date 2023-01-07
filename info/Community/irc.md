---
Description: All about our awesome IRC server
Last Updated: 2023-01-01 8:28 PM EST
---

# Internet Relay Chat (IRC)

Internet Relay Chat (or IRC) is an open standard for chatting on the internet. It’s [been around forever](https://en.wikipedia.org/wiki/Internet_Relay_Chat), and it’s great! And we’re using it here as part of our [social.lol](/help/social.lol) platform.

### Getting Started

To kick things off, visit your address's social.lol page and then click the "Create IRC account" button. You’ll then receive a password that you can use when connecting.

### Rules

Use common sense when chatting with others. Prioritize kindness. Show compassion. Remember that all omg.lol policies apply on irc.social.lol, like our [Code of Conduct](/info/code-of-conduct), [Terms of Use](/info/legal), and [Acceptable Use](/info/legal) policies. Just [don’t be an asshole](https://asshole.fyi) and you should be fine.

### Connecting

To use IRC, you need a _client_ that can connect to the _server_. There are [many clients](/info/extra/irc-clients) available, all with different features.

You can point any client at `irc.social.lol` (port `6667` for a plaintext connection, or port `6697` for a secure connection). Be sure to configure your connection with a server password (using the same password provided when you created your account) to authenticate when connecting. If you don’t include a password, Penelope will disconnect you. 😟

<div class="container yellow-2-bg gray-9-fg">

**If you keep getting disconnected when you join**, be sure to confirm that you’re connecting with the correct name (your omg.lol address), and that you’re including the correct server password in your client configuration. Also note that you won’t be able to connect from two different clients at the same time (the second connection won’t be able to authenticate because your nick is in use by the first). So if you’re experimenting with different clients, be sure to disconnect from one before trying another! 

</div>

### Discord

If you can't or simply dont want to use IRC, you can still participate! We have a Discord bridge to the IRC server.

If you’d like to hop on, just navigate over to your omg.lol address page and pull up your social.lol options. You’ll see a button to connect to Discord there.

### Hiding your IP address

If you are connecting through IRC and you’d like to hide your connection details, you can request a _vhost_ or _virtual hostname_. Just pop into #general and type this:

`!vhost omg.lol`

You could use something else, if you’d like (anything will work as long as it looks like a valid hostname). Feel free to be creative.

### Channels

Here are some of the popular channels on the server:

  * **#general**, general chatter about anything
  * **#random**, random or off-the-wall stuff
  * **#help**, customer service and support
  * **#omg.lol**, chat about omg.lol services
  * **#web**, web development stuff
  * **#email**, all about email
  * **#dns**, for the nerds
  * **#mastodon**, discuss Mastodon (social.lol or in general)
  * **#firehose**, notices, announcements, inbound webhooks, and other noisy (but interesting) stuff

You can also create your own channels or join some that other have created. To view a list of all channels in use, type `/list`.

### Commands

IRC uses “slash commands” to do things. You can [view a complete list of commands](https://en.wikipedia.org/wiki/List_of_Internet_Relay_Chat_commands), but here are a few that you’ll want to know:

  * `/join #channel` joins a channel
  * `/part #channel` leaves a channel
  * `/msg [person] [message]` sends a private message (e.g. `/msg adam wanna hear a joke?`)

### NickServ

If you somehow weren’t registered with NickServ when you first set things up (maybe you joined before we set up this slick automatic setup thing), you can register by sending a message to NickServ like this: `/msg NickServ register [password] [email]`. NickServ will let you know if that worked.

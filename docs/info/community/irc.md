Description: All about our awesome IRC server  
Last Updated: 2022-10-10 10:54 PM EDT

# Internet Relay Chat (IRC)

Internet Relay Chat (or IRC) is an open standard for live chat on the internet. It’s [been around forever](https://en.wikipedia.org/wiki/Internet_Relay_Chat), and it’s great! And we’re using it here as part of our new super-chill [social.lol](/help/social.lol) platform.

### Getting Started

To kick things off, visit your [Account Settings](https://home.omg.lol/account) page, scroll to the box that talks about IRC, select the address that you’d like to use as your username (or “nickname”/“nick” as they’re called on IRC), and then click the button. **You’ll then receive a password — don’t lose it!**

### Connecting

To use IRC, you need a _client_ that can connect to the _server_. There are [many clients](/info/extra/irc-clients) available, all with different features.

You can point any client at `irc.social.lol` (port `6667` for plaintext transfer, or port `6697` for a secure connection). Be sure to configure your connection with a server password (using the same password provided above) to authenticate when connecting. If you don’t include a password, you’ll be disconnected. 😟

<div class="container gray-7-bg gray-1-fg">

We ran a hosted instance of [The Lounge](https://thelounge.chat) through October 8, 2022. If you’re looking for a new IRC client, [there are plenty available](info/extra/irc-clients)!

</div>

<div class="container cyan-3-bg gray-9-fg">

**If you keep getting disconnected when you join**, be sure to include the correct server password in your client configuration. Also note that you won’t be able to connect from two different clients at the same time (the second connection won’t be able to authenticate because your nick is in use by the first). So if you’re experimenting with clients, be sure to disconnect from one before trying another! 

</div>

### Hiding your IP address

If you’d like to hide your connection details, you can request a _vhost_ or _virtual hostname_. Just type `/msg hostserv request [vhost]`, where `[vhost]` is whatever virtual hostname you’d like to use. You can be creative here, within reason. Once you’ve done that, let Adam know so that he can approve it (`/msg adam please approve my vhost request kthxbai`).

### Channels

Here are some of the popular channels on the server:

  * **#general**, for general chatter,  about omg.lol or other stuff too
  * **#random**, for random, off-the-wall stuff
  * **#firehose**, for notices, announcements, inbound webhooks, and other noisy but interesting stuff
  * **#web**, for web development, profile customization, or whatever other webby thing you might want to chat about
  * **#email**, for discussion of one of the best things about the internet
  * **#help**, for customer service and support

You can also create your own channels or join some that other have created. To view a list of all channels in use, type `/list`.

### Commands

IRC uses “slash commands” to do things. You can [view a complete list of commands](https://en.wikipedia.org/wiki/List_of_Internet_Relay_Chat_commands), but here are a few that you’ll want to know:

  * `/join #channel` joins a channel
  * `/part #channel` leaves a channel
  * `/msg [person] [message]` sends a private message (e.g. `/msg adam wanna hear a joke?`)

### NickServ

If you somehow weren’t registered with NickServ when you first set things up (maybe you joined before we set up this slick automatic setup thing), you can register by sending a message to NickServ like this: `/msg NickServ register [password] [email]`. NickServ will let you know if that worked.

### Rules

Use common sense when chatting with others. Prioritize kindness. Show compassion. Remember that all omg.lol policies apply on irc.social.lol, like our Terms of Use and Acceptable Use Policies. Just [don’t be an asshole](https://asshole.fyi) and you should be fine.
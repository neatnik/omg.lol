{"title": "IRC", "topic": "Community", "description": "All about our awesome IRC server"}

# Internet Relay Chat (IRC)

Internet Relay Chat (or IRC) is an open standard for live chat on the internet. It’s [been around forever](https://en.wikipedia.org/wiki/Internet_Relay_Chat), and it’s great! And we’re using it here as part of our new super-chill [social.lol](/help/social.lol) platform.

### Getting Started

To kick things off, visit your [Account Settings](https://home.omg.lol/account) page, scroll to the box that talks about IRC, select the address that you’d like to use as your username (or “nickname”/“nick” as they’re called on IRC), and then click the button. **You’ll then receive a password — don’t lose it!**

### Connecting

To use IRC, you need a _client_ that can connect to the _server_. There are [many clients](https://en.wikipedia.org/wiki/Comparison_of_Internet_Relay_Chat_clients) available, but we’re pleased to offer a simple web-based client, hosted on the social.lol server, called The Lounge.

As soon as you signed up in the previous step, we created an account for you on our instance of The Lounge (and also registered you with NickServ), and The Lounge brought your connection online a moment later. You can visit https://lounge.social.lol and log in with the username and password that you just received above, and then you’ll be good to go. If you don’t want to use The Lounge as your IRC client, that’s cool—just pop in there and disconnect so you can free up your nick when you connect with another client.

You can point any client at `irc.social.lol` (port `6667` for plaintext, or port `6697` for a secure connection). Be sure to include your password to automatically authenticate with NickServ (see below). If you don’t include a password, you’ll be disconnected.

### Authentication

If you’re using The Lounge, you don’t need to worry about any of this—we’ve taken care of it for you. If you’re using another client, be sure to add your password when setting up your connection (there’s usually a “password” or “server password” field when setting up your connection — use that, and drop in the password that you received above). This will ensure that you’re properly authenticated to the server and will prevent your connection from being dropped.

### Channels

Here are some of the popular channels on the server:

  * **#general**, for general chatter about omg.lol or anything
  * **#random**, for pretty much anything
  * **#firehose**, for notices, announcements, inbound webhooks, and other noisy but interesting stuff
  * **#web**, for web development, profile customization, or whatever other webby thing you might want to chat about
  * **#email**, for discussion of the best part of the internet
  * **#help**, for when you just need some assistance

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
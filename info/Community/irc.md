---
Description: All about our awesome IRC server
Last Updated: 2025-03-04 12:31 AM EST
---

# Internet Relay Chat (IRC)

Internet Relay Chat (or IRC) is an open standard for chatting on the internet. It’s [been around forever](https://en.wikipedia.org/wiki/Internet_Relay_Chat), and it’s great! And we’re using it here as part of our [chat services](/info/chat).

### Getting Started

To kick things off, visit your address’s social.lol page and then click the "Create IRC account" button. You’ll then receive a password that you can use to connect.

### Connecting

To use IRC, you need a _client_ that can connect to the _server_. There are [many clients](/info/extra/irc-clients) available, all with different features.

You can point any client at `irc.social.lol` (port `6667` for a plaintext connection, or port `6697` for a secure connection). Once you’re connected, you just need to identify with NickServ by typing `/msg NickServ IDENTIFY <password>` where `<password>` is the password provided when you created your IRC account.

### Hiding your IP address

If you are connecting through IRC and you’d like to hide your connection details, you can request a _vhost_ or _virtual hostname_. Just pop into #general and type this:

`!vhost omg.lol`

You could use something else, if you’d like (anything will work as long as it looks like a valid hostname). Feel free to be creative.

### Commands

IRC uses “slash commands” to do things. You can [view a complete list of commands](https://en.wikipedia.org/wiki/List_of_Internet_Relay_Chat_commands), but here are a few that you’ll want to know:

  * `/join #channel` joins a channel
  * `/part #channel` leaves a channel
  * `/msg [person] [message]` sends a private message (e.g. `/msg adam hey wanna hear a joke?`)


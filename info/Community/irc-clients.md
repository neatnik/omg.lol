---
Description: IRC clients used by the community  
Last Updated: 2022-10-11 01:03 AM EDT
---

# IRC Clients

If you want to use our IRC server, you’ll need to connect with a client. Our [IRC server article](/info/community/irc) talks all about how to get connected, but if you’re wondering what client to use, you can start here.

Since IRC has been around for a while, there are [a ton of clients](https://en.wikipedia.org/wiki/Comparison_of_Internet_Relay_Chat_clients) out there. This article will focus on ones that members of our community use.

## irssi

[irssi](https://irssi.org) is a classic terminal-friendly client. Simple but powerful (as most terminal stuff goes).

## WeeChat

[WeeChat](https://weechat.org) is another terminal-friendly client that’s extremely flexible.

### Configuring WeeChat

This will create a new server entry, configure it, and connect to it.

```
/server add omg.lol irc.social.lol/6697 -ssl
/set irc.server_default.nicks "foobar"
/set irc.server.omg.lol.password "your-password-here"
/connect omg.lol
```

## Quassel

[Quassel](https://quassel-irc.org) is a cross-platform client with a unique client/core model. In addition to the client connecting directly to the IRC server, you can also set up a “core” that will maintain a connection to the server, and then your client(s) can connect to that core. This makes it easy to maintain a persistent connection and to easily use multiple different devices.

## IRCCloud

[IRCCloud](https://www.irccloud.com/) is a service that offers a persistent cloud connection to the IRC server, a web interface, mobile apps, and a built-in bouncer (so you can also connect with any other client you’d like). It costs $50/year, but configuration is straightforward and the service is slick.

## Convos

[Convos](https://convos.chat/) is a open-source web-based IRC client that offers a persistent connection to the IRC server, video chatting via Jitsi and similar features to IRCCloud. It does require you to provide your own server to host the client, but the configuration is straightforward and should get you started with it within 5-10 minutes. Alternatively, you can join one hosted by the omg.lol community called [KAIFA](https://orc.kaifa.ch).

### How to connect via Convos
Head to connections and click on add connection, use `irc.social.lol:6697` as the server and port, check *Secure Connection* then expand *Authentication Settings* and fill out the both fields with your IRC login credentials. Optionally you can also fill out the *Nickname* field to let the Client set a nickname for you.

## The Lounge

[The Lounge](https://thelounge.chat) is a web-based IRC client that offers an open-source alternative to IRCCloud. You do need your own server to host it, but some members of the omg.lol community let other members use theirs. Contact [Bye](https://bye.omg.lol) for more details.

### Configuration

On the Connect screen in The Lounge, use `irc.social.lol` as the server, and your IRC password in the *server password* slot. See more on the [IRC help page](/help/irc)

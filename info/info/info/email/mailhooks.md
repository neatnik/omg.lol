Description: Like webhooks, but for email  
Last Updated: 2022-10-08 01:52 AM EDT

# Mailhooks

<div class="message yellow-4-bg"><div class="message-icon"><i class="fa-regular fa-flask"></i></div><div class="message-text">This is an experimental beta feature.</strong> It’s brand new and in pretty rough shape, and it will take time to improve. <a href="/info/contact">Please report any problems</a> so we can make it better!</div></div>

A **mailhook** is an email interface to external things, like APIs (think email + webhook). Email comes in on one side, and a structured API request comes out on the other. Mailhooks are a great way to integrate email into a workflow in a structured and repeatable way, moving data from a message into an external system with relative ease. In theory, anyway.

Mailhooks are brand new around here, and so we welcome your testing. **We’d strongly advise against incorporating them into any production workflows at this time**, since there will inevitably be bugs and changes to the setup as we get things rolling. Testing is encouraged, and reporting bugs is _highly_ encouraged (send those to <a href="mailto:bugs@omg.lol">bugs@omg.lol</a>).

## Why Mailhooks?

This feature isn’t for everyone, to be clear. If you can’t see a good use for it, then it probably isn’t for you. That’s OK! You can ignore the feature entirely. Forget it’s even there.

The best way to explain why you’d want a mailhook is if you need to take the data from inbound email messages and incorporate it seamlessly into other data flows and processes. While the current beta implementation of our Mailhooks feature is fairly limited, the long-term goal is to enable powerful template-based email parsing combined with rulesets formed around logical operations. So, something like “if an email contains this word, POST it to this URL; if it contains some other word, perform a GET on this other URL and reply to the sender with the response; if none of the words are present delete the message and forget about it.” That kind of stuff. It’s gonna be fun.

## Mailhooks Beta

The current beta implementation is really simple: take an incoming email, break it into smaller components (headers and body), prepare the content payload based on your template, and perform a REST action to send the content its destination.

## Variables

The data in inbound email messages can be accessed through variables using the format `{{variable}}`.

Individual header values can be accessed with their own variable using the header name (normalized to lowercase). For instance, if you wanted to access the `From` header, you’d use `{{from}}`. You can do the same with any header that you expect to be present in the message, such as `X-Originating-Client` (which you’d access via `{{x-originating-client}}`).

You can access the envelope’s ”from” address with the `{{envelope-from}}` variable.

The message body can be accessed via the `{{body}}` variable, which will contain our best guess at the actual message body. In a basic email message, it’s not hard to guess—there’s just one body right after the headers. In a MIME multipart message, we’ll try to identify the most relevant part (favoring stuff like plain text, and avoiding stuff like atatchments). Soon you’ll be able to access individual message parts directly (we just have to work out the most sane way to do that first).

## Configuration

The Mailhook configuration screen is pretty simple. It’s just a form that you use to define how your mailhook should behave.

You must specify a **Method** for your mailhook, which can be `GET`, `POST`, `PUT`, `PATCH`, or `DELETE`.

You must specify a **URL** for your mailhook, which is where the data will be sent via the method specified.

You can optionally supply **Headers** for your request. Just add one header per line. You can use the `{{content-length}}` variable in conjunction with the `Content-Length` header if you’d like (the variable’s value will match the number of bytes of the data being sent).

You can optionally supply **Content** for your request, which is what will be sent to the URL specified via the method specified. Your content can include any of the variables referenced above.

Finally, you can choose whether you want to forward the message on to your existing forwarding address(es), or discard it.

## Remember, this is experimental

Email is complicated. [Email hates the living](https://www.youtube.com/watch?v=4s9IjkMAmns). When it comes to implementing a sophisticated Mailhook system, the line between “ambitious” and “insane” is razor thin. We want to bring this feature to maturity steadily and responsibly, and your patience and bug reporting will be instrumental in making that happen. Thanks! <i class="fa-solid fa-cloud-rainbow"></i>

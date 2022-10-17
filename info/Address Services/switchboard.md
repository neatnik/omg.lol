---
Description: How to route your web traffic and do stuff with external domains  
Last Updated: 2022-10-16 09:30 AM EDT
---

# Switchboard

Your **Switchboard** is where you manage your address behavior—more specifically, what how visitors interact with your address in different ways. It’s just like an old-timey [telephone switchboard](https://en.wikipedia.org/wiki/Telephone_switchboard), but without all of the wires.

On the Switchboard, you’ll see all of the different **routes** for your address, including any external domains that you’ve added (feel free to add as many as you’d like). For each route, you can choose its **connection**—effectively determining what happens when someone visits your address in that particular way.

## Routes

Every omg.lol address comes with five standard routes. Assuming your address is `foo`:

1. `foo.omg.lol`, your subdomain
2. `omg.lol/foo`, your path
3. `omg.lol/~foo`, your [Tildeverse address](/info/tildeverse)
4. `omg.lol/@foo`, your “at” address
5. `profile.omg.lol/foo`, your dedicated profile address

You can also add as many external domains as you’d like, and they become routes as well.

## Connections

Every route has a corresponding connection. Available connections are:

1. **Profile Page**, which (unsurprisingly) displays your profile page
2. **Tildverse Profile Page**, which (also unsurprisingly, but nevertheless awesomely) displays your [Tildeverse](/info/tildeverse) profile page
3. **Redirect to a URL**, which easily directs traffic to any other web address (using a `302 Found` response and location header)
4. **Pastebin**, which displays your list of [pastes](/info/pastebin) (available only on external domain routes -- see below)
5. **PURLs**, brands your [PURLs](/info/purls) with your external domain
6. **Disabled**, for when you just want to switch things off

When a connection is disabled, a standard “resource unavailable” page will be displayed.

## External Domains

You can add as many of your own domains to your omg.lol address as you’d like. Since your external domains are treated as routes, you can easily direct them to your profile page, or to anywhere else.

To add a domain, just plop it into the field at the bottom of the Switchboard and click the Save button. Once you do that, we’ll check the DNS settings, and if everything looks good, we’ll provision a TLS certificate to keep your web traffic secure. You’ll see the status of these items on the Switchboard, just beneath your domain.

### DNS

<div class="container yellow-3-bg gray-9-fg">

<p><i class="fa-solid fa-fw fa-bone-break"></i> <strong>Heads up!</strong> Be careful when setting up your upstream DNS records to point an external domain to omg.lol. Unless you're using a provider that does CNAME flattening or support `ALIAS`, **do not** create a CNAME record that points directly to your root domain. You’ll break all of your DNS record! Only use a CNAME if you're linking a subdomain (eg: `profile.domain.com`) to omg.lol</p>

</div>

The first step in making an external domain work with omg.lol is to configure its DNS to point to our servers. This is something you’ll need to do with your domain registrar, DNS provider, or whoever is managing your domain. If you’ve never done anything like this before, it can be a little intimidating, but it’s not too bad! If you need help, [just let us know](/help/contact).

There are two ways you can configure your domain’s DNS to point to omg.lol. You only need to do _one_ of these:
	
1. Add an **A** record that points to `159.89.247.131`
2. Or, add a **CNAME** record that points to your address (e.g. `foo.omg.lol`).

Either of those will do the trick. Just refresh your Switchboard to see the latest info on what our server sees for your domain. DNS changes can take a while to _propagate_ across the internet, so occasionally you’ll have to wait a bit for our server to see the changes that you’ve made.

### Certificates

As soon as we detect that your domain’s DNS is configured properly, we’ll provision a TLS certificate for your domain. That’ll make it so that when people visit your domain, their traffic will be secure. (We wouldn’t have it any other way.)

Certificate provisioning is generally a quick process, but occasionally it can take a while. (And rarely, things can get stuck.) If you notice any issues with the certificate provisioning process on your Switchboard, don’t hesitate to [let us know](/help/contact) and we’ll take care of it for you.

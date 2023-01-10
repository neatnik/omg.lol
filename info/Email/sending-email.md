---
Description: Sending email with your omg.lol address  
Last Updated: 2022-10-21 4:31 PM EDT
---

# Sending Email

The [email](/info/email) service that omg.lol provides is focused on email forwarding, and we don’t offer any way to send email directly. We’re happy to partner with responsible and ethical email providers who are willing to allow mutual customers to send email from omg.lol addresses. Currently we have such a partnership with [Fastmail](/info/fastmail), which is great!

## Sending email from the omg.lol domain

Currently, the only way to send email from the omg.lol domain (i.e. from foobar@omg.lol) is to use [Fastmail](/info/fastmail). To prevent abuse of the omg.lol namespace, our DMARC policy is configured to reject emails from unauthorized sources. Because of this, it’s not possible to reliably fake or spoof email directly from the omg.lol domain.

## Sending email from your omg.lol domain

With our [DNS](/info/dns) service, you can configure your omg.lol domain (i.e. foobar.omg.lol) to work with any email provider that supports external domains. The process for doing this will vary across providers, but will generally look like this:

1. Add your desired email domain to your account at the email provider. This can be your omg.lol (e.g. foobar.omg.lol) or any subdomain off of that domain that you wish (e.g. mail.foobar.omg.lol).

2. Your email provider will inform you of the required DNS settings. Typically, this will take the form of setting up one or more MX records, but sometimes also includes other records (for SPF and DKIM).

For example, when setting up a domain such as `mail.foobar.omg.lol` with iCloud Mail, Apple requires the following DNS configuration in place:

 - An `MX` record with the name `mail.foobar.omg.lol` and the data `mx01.mail.icloud.com.` with a priority value of `10`.
 - An `MX` record with the name `mail.foobar.omg.lol` and the data `mx02.mail.icloud.com.` with a priority value of `20`.
 - A `TXT` record with the name `mail.foobar.omg.lol` and the data `apple-domain=FFmFXBRB0AlujVEc`.
 - A `TXT` record with the name `mail.foobar.omg.lol` and the data ` "v=spf1 include:icloud.com ~all"`.
 - A `CNAME` record with the name `sig1._domainkey.mail.foobar.omg.lol` and the data `sig1.dkim.mail.foobar.omg.lol.at.icloudmailadmin.com.`.
 
 The records above are just examples (again, just for Apple’s iCloud Mail), and your own email provider may require a different setup.
 
 Once you’ve configured the required DNS records, your email provider will likely validate that the DNS records are in place and that they’ve been set up correctly. Changes to DNS records can take some time to propagate across the internet, and you can use a tool like [dnschecker.org](https://dnschecker.org) to check on the status.
 
 Your email provider will likely inform you when they’ve confirmed that everything has been set up correctly, and then you’ll be ready to send email from the address that you’ve configured.
 
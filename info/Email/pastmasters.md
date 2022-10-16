---
Description: Postmaster information for omg.lol  
Last Updated: 2022-10-16 4:49 PM EDT
---

# Postmaster Information

This page provides information that may be useful to email operators, either in general or when troubleshooting email-related issues.

## About the omg.lol mail service

omg.lol’s mail service is first and foremost a message forwarding service. The omg.lol mail server forwards messages on behalf of omg.lol members to the destination address of their choice. The server will also send low-volume notification or service-related messages. There is no mechanism to directly support sending arbitrary outbound email.

## IP Addresses

Mail originates from the omg.lol mail server, `mail.omg.lol`, which operates at the IP address `165.227.70.9`.

## Technologies Used

The omg.lol mail server, besides being devastatingly handsome, employs the use of multiple technologies to ensure safe, compliant delivery of email messages as well as to thwart abuse and manage the transmission of unsolicited bulk emails (or ‘spam’). These technologies include:

* [SPF](https://en.wikipedia.org/wiki/Sender_Policy_Framework)
* [DKIM](https://en.wikipedia.org/wiki/DomainKeys_Identified_Mail)
* [SRS](https://en.wikipedia.org/wiki/Sender_Rewriting_Scheme)
* [DMARC](https://dmarc.org) with report analysis courtesy of [OnDMARC](https://redsift.com/products/ondmarc)
* Greylisting with [Postgrey](https://postgrey.schweikert.ch)
* Spam identification with [Spamhaus](https://www.spamhaus.org/zen/)
* Spam mitigation with [Rspamd](https://rspamd.com)

## Contact

If you would like to reach the omg.lol postmaster, please send an email to postmaster@omg.lol. (Yes, we’re RFC2142-compliant!)

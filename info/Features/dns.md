---
Description: DNS can be complex, but we try to keep it simple  
Last Updated: 2023-06-04 12:55 PM EST
---

# DNS Guide

DNS, or *domain name system*, is a system that maps domain names to IP addresses. (It does other things, too, but bear with me.)

For example, omg.lol doesn’t really “live” at the domain omg.lol. It _really_ lives at the IP address 5.78.24.5, but it’s not practical to say things like _“hey check out my web site at five dot seven eight dot two four dot five,”_ so the internet needed a way to map domain names to IP addresses. And DNS is that very system.

## DNS records

There are several types of DNS records, but the main ones that people care about (and the ones that you can configure at omg.lol) are:

* **A records**: These are the most basic types of record. They say “map example.com to 93.184.216.34.”
* **AAAA records**: Just like A records, but for IPv6 addresses.
* **CNAME records**: These are nifty records that let you map a hostname to another hostname, creating an alias.
* **MX records**: These define special rules for mail handling for a hostname.
* **NS records**: Used for directing queries to external name servers.
* **TXT records**: These contain arbitrary chunks of text data, useful for a variety of purposes.
* **SRV records**: Provides information on how to direct traffic to specific services (with specific protocols and ports) that live elsewhere.

## Managing DNS records

To manage your DNS records, just pull up your address, and then click on the **Manage DNS** button. From there, you can add new records, view your existing records, or delete unwanted records.

You can configure DNS records for your omg.lol subdomain directly (e.g. you.omg.lol), or any sub-subdomain (e.g. foo.you.omg.lol, foo.bar.you.omg.lol, etc.).

Some things to keep in mind:

### Hostnames

When adding a new record, whatever you put in the Name (hostname) field will become a sub-entry off of your root domain. For example, if your omg.lol address is @foobar and you enter `yeet`, the resulting record will be for `yeet.foobar.omg.lol`.

You can enter `@` to represent your root domain (e.g. `foobar.omg.lol`). 

### CAA records

When entering CAA records, ensure that the Data field contains your `flags` and `tag` values before the destination. For example, a valid entry might be `128 issue "letsencrypt.org"`.

### SRV records

When entering SRV records, ensure that the Data field contains the `weight` and `port` values before the destination. For example, a valid entry might be `5 25565 foobar.omg.lol`.

## DNS “Gotchas”

1. You can’t create a CNAME record on any hostname that has another type of active record.
2. Similarly, you can't create any other type of record on a hostname that already has an active CNAME record.

## DNS Caching

DNS servers across the internet cache records for periods of time (this is related to the “TTL” or “time to live” value that you define with your records). When you add new records or make changes to existing records, it can take a while before you (and everyone else on the internet) can see those changes because of the caching in place across those servers. Everything will eventually be updated, but sometimes it just takes a little patience. One way to check the status of a DNS record is to use a site like [dnschecker.org](https://dnschecker.org), which will show how various DNS servers around the world are serving your DNS records.

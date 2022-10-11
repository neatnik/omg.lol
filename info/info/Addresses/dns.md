Description: DNS is complex, but we try to keep it simple  
Last Updated: 2022-10-08 01:52 AM EDT

# DNS Guide

DNS, or *domain name system*, is a system that maps domain names to IP addresses. (It does other things, too, but bear with me.)

For example, omg.lol doesn’t really “live” at the domain omg.lol. It _really_ lives at the IP address 159.89.247.131, but it’s not practical to say things like “hey check out my web site at one five nine dot eight nine dot two four seven dot one three one,” so the internet needed a way to map domain names to IP addresses. And DNS is that very system.

## DNS records

There are several types of DNS records, but the main ones that people care about (and the ones that you can configure at omg.lol) are:

* **A records**: These are the most basic types of record. They say “map example.com to 93.184.216.34.”
* **AAAA records**: Just like A records, but for IPv6 addresses.
* **CNAME records**: These are nifty records that let you map a hostname to another hostname, creating an alias.
* **MX records**: These define special rules for mail handling for a hostname.
* **TXT records**: These contain arbitrary chunks of text data, useful for a variety of purposes.
* **NS records**: Used for directing traffic to external nameservers.
* **SRV records**: Provides information on how to direct traffic to specific services (with specific protocols and ports) that live elsewhere.

## Managing DNS records

To manage your DNS records, from your [account screen](/account), just click the **Manage** button for your address, then click the **Manage DNS** button.

You can then add new records, view your existing records, or delete existing records.

You can configure DNS records for your omg.lol subdomain directly (e.g. you.omg.lol), or any sub-subdomain (e.g. foo.you.omg.lol, foo.bar.you.omg.lol, etc.).

## DNS “Gotchas”

1. You can’t create a CNAME record on any hostname that has another type of active record.
2. Similarly, you can't create any other type of record on a hostname that already has an active CNAME record.

## DNS Propagation

It can take some time for DNS changes to be made, because of the way that DNS works. The moment you submit a change to your DNS, we make that change with our ISP—this is instantaneous. But downstream changes can take time as those changes are cloned across cached copies of the DNS database across the entire internet. In most cases, the delay is short—but in theory, it can take as long as 72 hours to fully complete. How long it takes in practice depends on multiple factors like your own ISP’s caching processes and even local device caching.

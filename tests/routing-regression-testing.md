# Routing regression testing

omg.lol page routing is the kind of thing that you’d _think_ would be simple, but turns out to be closer to ridiculously complex. Why? Because we insist on making URLs do awesome fancy stuff (all of which you can configure on your address’s Switchboard page).

In order to ensure that adjustments to one part of the routing logic don’t adversely impact other parts, this comprehensive set of regression tests have been developed. Below is a testing table which lists all of the various omg.lol URLs that have been configured for @foobar along with an explanation of each and the expected result when clicked.

| URL  | Explanation | Expected Result |
| ---- | ------------- | --------------- |
| [omg.lol/foobar](https://omg.lol/foobar) | Address path page. | Displays @foobar’s profile page. |
| [omg.lol/@foobar](https://omg.lol/@foobar) | `@` address page. | Displays @foobar’s profile page. |
| [omg.lol/~foobar](https://omg.lol/~foobar) | Tildeverse page. | Displays @foobar’s Tildeverse page. |
| [omg.lol/foobar/paste](https://omg.lol/foobar/paste) | Resource request for a Pastebin entry named `paste`. | Redirects to https://foobar.paste.lol/paste and displays the requested paste entry. |
| [omg.lol/foobar/purl](https://omg.lol/foobar/purl) | Resource request for a PURL named `purl`. | Redirects to the Wikipedia entry on knitting. |
| [omg.lol/foobar/ambiguous](https://omg.lol/foobar/ambiguous) | Resource request for `ambiguous` which is a named PURL and Pastebin entry. | Displays a disambiguation page allowing the visitor to choose their destination. Server returns an HTTP 300 response (“Multiple Choices”). |
| [profile.omg.lol/foobar](https://profile.omg.lol/foobar) | Dedicated profile page subdomain. | Displays @foobar’s profile page. |
| [foobar.omg.lol](https://foobar.omg.lol) | Subdomain page. | Displays @foobar’s profile page. |
| [foobar.omg.lol/paste](https://foobar.omg.lol/paste) | Resource request for a Pastebin entry named `paste`. | Redirects to https://foobar.paste.lol/paste and displays the requested paste entry. |
| [foobar.omg.lol/purl](https://foobar.omg.lol/purl) | Resource request for a PURL named `purl`. | Redirects to the Wikipedia entry on knitting. |
| [foobar.omg.lol/ambiguous](https://foobar.omg.lol/ambiguous) | Resource request for `ambiguous` which is a named PURL and Pastebin entry. | Displays a disambiguation page allowing the visitor to choose their destination. Server returns an HTTP 300 response (“Multiple Choices”). |
| [foobar.cool](https://foobar.cool) | Custom domain. | Displays @foobar’s profile page. |
| [foobar.cool/paste](https://foobar.cool/paste) | Resource request for a Pastebin entry named `paste`. | Redirects to https://foobar.paste.lol/paste and displays the requested paste entry. |
| [foobar.cool/purl](https://foobar.cool/purl) | Resource request for a PURL named `purl`. | Redirects to the Wikipedia entry on knitting. |
| [foobar.cool/ambiguous](https://foobar.cool/ambiguous) | Resource request for `ambiguous` which is a named PURL and Pastebin entry. | Displays a disambiguation page allowing the visitor to choose their destination. Server returns an HTTP 300 response (“Multiple Choices”). |
| [paste.foobar.cool](https://paste.foobar.cool) | Custom Pastebin domain. | Displays @foobar’s Pastebin. |
| [purls.foobar.cool](https://purls.foobar.cool) | Custom PURLs domain. | Redirected to the Wikipedia entry on Persistent uniform resource locators. |
| [disabled.foobar.cool](https://disabled.foobar.cool) | Custom domain configured to be disabled. | Displays a generic page indicating that the resource is not available. |
| [redirected.foobar.cool](https://redirected.foobar.cool) | Custom domain configured to be redirected. | Redirected to the Wikipedia entry on URL redirection. |
| [foobar.paste.lol](https://foobar.paste.lol) | Pastebin subdomain request. | Displays @foobar’s Pastebin. |
| [foobar.paste.lol/paste](https://foobar.paste.lol/paste) | Pastebin subdomain request. | Displays the requested Paste record. |
| [paste.lol/foobar/paste](https://paste.lol/foobar/paste) | Paste path request. | Displays the requested Paste record. |
| [foobar.url.lol/purl](https://foobar.url.lol/purl) | PURL subdomain request. | Redirected to the requested PURL destination. |
| [url.lol/foobar/purl](https://url.lol/foobar/purl) | PURL path request. | Redirected to the requested PURL destination. |

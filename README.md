# skjsonlylightbox

This is a TYPO3 extension that adds a pure Javascript lightbox for the "click to enlarge" option of content elements text with image and the media of tx_news.

Internally it uses the [GLightbox](https://biati-digital.github.io/glightbox/) lightbox implementation.


## Installation
Activate the extension and add it's static template to your main template record. 

**If you want to use it also for tx_news, make sure to add the static template *after* the tx_news template.**

## Configuration
The only available configuration option is to disable the lightbox for tx_news. Add the following constant 
`plugin.skjsonlylightbox.usefortxnews = 0`


# WireMailBranding

**Add email templates to wireMail**

### How it works?

Create an email template without content. On the spot where you wish to have your content place the tag {bodyHTML}. The markup you've set with ```$mail->bodyHTML('<p>Markup</p>');``` will replace that tag. 

### Setting the defaults

Go to the module settings and set the path to your email template. Make sure it is an absolute URL. Optionally you could inline all CSS with [Emogrifier](https://github.com/jjriv/emogrifier) when you add a CSS file. The CSS file needs to be placed in the same folder, have the same basename as the wrapper and should end with the .css extension.

When using the [Emogrifier](https://github.com/jjriv/emogrifier) CSS inliner applying it on the bodyHTML only is the most efficient way. We recommend you to write the inline styles for the wrapper manually.

### Overwriting the defaults

The API overwrites the settings set in the module configuration. 

````php
$mail = wireMail();
$mail->to('user@some-domain.ext')->from('you@own-domain.ext');
$mail->subject('Mail Subject');

// Overwrite the Absolute URL
$mail->template('/site/templates/template_wrapper.php');

// Overwrite the Emogrifier CSS inliner. (0, bodyHTML, wrapper)
$mail->inlineCSS('bodyHTML');

$mail->bodyHTML('<p>This paragraph will replace the {bodyHTML} tag in the mail template.</p>');
$mail->send();
````

### The added methods

````php
// Disable the wrapper template* (Just send the bodyHTML)
$mail->template('');

// Disable the Emogrifier inliner
$mail->inlineCSS(0);

// Apply only on bodyHTML. (optimal when using Emogrifier inliner)
$mail->inlineCSS('bodyHTML');

// Apply over the complete HTML.
$mail->inlineCSS('wrapper');
````


### Thanks!

* John Reeve, creator of [Emogrifier](https://github.com/jjriv/emogrifier)
* The maintainers of Emogrifier, [Pelago](http://www.pelagodesign.com/)
* Ryan Cramer, founder and lead programmer [ProcessWire](http://processwire.com)
* The whole [Calago](http://www.calago.nl/) team.

This module is written by Martijn Geerts and sponsored by [Calago.nl](http://www.calago.nl/).
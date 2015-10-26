# WireMailBranding

Branding for wireMail. 

Create an email template without content. On the spot where you wish to have your content place the tag {bodyHTML}. Go the module settings and set the path to your template. Make sure the path is absolute from your domain name. Setting the absolute url to the template wrapper in your wireMail call is also an option. (see code below).

All markup you've set with ```$mail->bodyHTML('<p>Markup</p>');``` will replace the {bodyHTML} tag.

```
$mail = wireMail();
$mail->to('user@some-domain.ext')->from('you@own-domain.ext');
$mail->subject('Mail Subject');
// Set template manually, overwriting the Absolute URL here in the settings
$mail->template('/site/templates/template_wrapper.php');
$mail->bodyHTML('This will replace the {bodyHTML} tag in the mail template.');
$mail->send();
```

Happy branding...

# WireMailBranding

Branding for wireMail. 

Create an email template without content. On the spot where you wish to have your content place the tag **{bodyHTML}**. Go the module settings and set the path to your template. Make sure the path is absolute from your domain name. Or set the path in your wireMail call. (see code below).

```
$mail = wireMail();
$mail->to('user@some-domain.ext')->from('you@own-domain.ext');
$mail->subject('Mail Subject');
// Set template manually, overwriting the Absolute URL here in the settings
$mail->template('/site/templates/template_wrapper.php');
$mail->bodyHTML('This will replace the {bodyHTML} tag in the mail template.');
$mail->send();
```

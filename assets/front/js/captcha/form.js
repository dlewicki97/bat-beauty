$('#contact-form').submit(function(event) {
	event.preventDefault();
	const xhr = new XMLHttpRequest();

	xhr.onload = function(){
		if(this.status === 200){
			var res = JSON.parse(this.responseText);

			grecaptcha.ready(() => {
				grecaptcha.execute(res.captcha, {action: 'mailer/send'}).then(token => {
					$('#contact-form').prepend(`<input type="hidden" name="secret_key" value="${res.captcha_secret}">`);
					$('#contact-form').unbind('submit').submit();
				});;
			});
		}
	}
	let baseUrl = window.location.origin;
	if(window.location.host === 'localhost') baseUrl = window.location.origin + '/duo-dent';

	xhr.open('GET',`${baseUrl}/api/settings/get` ,false);
	xhr.send();



});

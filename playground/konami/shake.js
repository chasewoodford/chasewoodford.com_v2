

konami_code = '38,38,40,40,37,39,37,39,66,65';
key_stack = new Array();

window.onkeydown = function(e) {
	key_stack.push(e.keyCode);
	if(key_stack.join().substring(key_stack.join().length - konami_code.length) == konami_code) {
		shake_js = document.createElement('script');
		shake_js.type = 'text/javascript';
		shake_js.async = true;
		shake_js.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'chasewoodford.com/playground/konami/loader.js';
		document.getElementsByTagName('head')[0].appendChild(shake_js);
	}
}


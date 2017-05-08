/* Load this script using conditional IE comments if you need to support IE 7 and IE 6. */

window.onload = function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'EnFonto\'">' + entity + '</span>' + html;
	}
	var icons = {
			'icon-enfonto-cc' : '&#xe000;',
			'icon-enfonto-cc-box' : '&#xe001;',
			'icon-enfonto-tf' : '&#xe002;',
			'icon-enfonto-tf-box' : '&#xe003;',
			'icon-enfonto-gr' : '&#xe004;',
			'icon-enfonto-gr-box' : '&#xe005;',
			'icon-enfonto-vh' : '&#xe006;',
			'icon-enfonto-vh-box' : '&#xe007;',
			'icon-enfonto-do' : '&#xe008;',
			'icon-enfonto-do-box' : '&#xe009;',
			'icon-enfonto-ad' : '&#xe010;',
			'icon-enfonto-ad-box' : '&#xe011;',
			'icon-enfonto-tp' : '&#xe012;',
			'icon-enfonto-tp-box' : '&#xe013;',
			'icon-enfonto-pd' : '&#xe014;',
			'icon-enfonto-pd-box' : '&#xe015;',
			'icon-enfonto-aj' : '&#xe016;',
			'icon-enfonto-aj-box' : '&#xe017;',
			'icon-enfonto-leaf' : '&#xe018;',
			'icon-enfonto-leaf-box' : '&#xe019;',
			'icon-enfonto-leaf-new' : '&#xe020;',
			'icon-enfonto-leaf-new-box' : '&#xe021;',
			'icon-enfonto-ml' : '&#xe022;',
			'icon-enfonto-elite' : '&#xe023;',
			'icon-enfonto-paw' : '&#xe024;',
			'icon-enfonto-superstar' : '&#xe025;',
			'icon-enfonto-competition' : '&#xe026;',
			'icon-enfonto-shield' : '&#xe027;',
			'icon-enfonto-blog' : '&#xe028;'
		},
		els = document.getElementsByTagName('*'),
		i, attr, html, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		attr = el.getAttribute('data-icon');
		if (attr) {
			addIcon(el, attr);
		}
		c = el.className;
		c = c.match(/icon-enfonto-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
};
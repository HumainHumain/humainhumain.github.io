/******************************************************
 *                    Create Element                  *
 ******************************************************/
self.create = (tag, classname=null, content=null, attrs={}) => {
    const elm = document.createElement(tag);
    if(classname) elm.className = classname;
    if(content) elm.innerHTML = content;
	Object.entries(attrs).forEach(a => elm.setAttribute(a[0], a[1]));
    return elm;
};
HTMLElement.prototype.create = function(tag, classname=null, content=null, attrs={}) {
    const elm = create(tag, classname, content, attrs);
    this.append(elm);
    return elm;
};


/******************************************************
 *             Body lock while working/busy           *
 ******************************************************/
self.busy = async (promise) => {
	document.documentElement.classList.add('is-busy');
	const results = await Promise.allSettled(promise instanceof Array ? promise : [promise]);
	document.documentElement.classList.remove('is-busy');
	return promise instanceof Array ? results : results[0];
}
self.working = async (promise) => {
	document.documentElement.classList.add('is-working');	
	const results = await Promise.allSettled(promise instanceof Array ? promise : [promise]);
	document.documentElement.classList.remove('is-working');
	return promise instanceof Array ? results : results[0];
}


/******************************************************
 *                    Preload image                   *
 ******************************************************/
self.preloadImage = url => {
	return new Promise((res, rej) => {
		const img = new Image();
		img.decoding = 'async';
		img.loading = 'eager';
		img.onload = () => res('preloaded');
		img.onerror = rej;
		img.src = url;
		if (img.complete && img.naturalWidth > 0) res('memory-cache');
	});
}


/******************************************************
 *               DOMDocument async loaded             *
 ******************************************************/
self.documentReady = function(clb = null) {
	return new Promise((res) => {
		if (document.readyState === "loading") {
			document.addEventListener("DOMContentLoaded", async () => {
				if(clb) res(clb());
				else res(true);
			}, { once: true });
		} else {
			if(clb) res(clb());
			else res(true);
		}
	});
}

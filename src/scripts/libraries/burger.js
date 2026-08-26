
({
	init: async function() {
		await documentReady();
		

		const burger = document.querySelector('.burger');
		if(!burger) return;

		burger.addEventListener('click', () => {
			burger.classList.toggle('open');
		});

		const logo = document.querySelector('.logo-humain');
		if(!logo) return;
		logo.addEventListener('click', () => {
			document.location.href = '/';
		});
		
	}
}).init();
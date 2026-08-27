
({
	init: async function() {
		await documentReady();		
		const colors = ['var(--color-green)', 'var(--color-blue)', 'var(--color-orange)', 'var(--color-yellow)', 'var(--color-grey)'];
		const footer = document.querySelector('footer');
		const anim = create('div', 'credits__anim');
		Array.from({ length: 6 }).forEach(() => {
			const line = create('div', 'credits__anim__line');
			Array.from({ length: 12 }).forEach(() => {
				const block = create('div', 'credits__anim__block');
				block.style.setProperty('--nb1', Math.round(Math.random() * 1000) / 1000);
				block.style.setProperty('--nb2', Math.round(Math.random() * 1000) / 1000);
				block.style.setProperty('--nb3', Math.round(Math.random() * 1000) / 1000);
				block.style.setProperty('--nb4', Math.round(Math.random() * 1000) / 1000);
				block.style.setProperty('--blink-color', colors[Math.floor(Math.random() * colors.length)]);
				line.append(block);
			});
			anim.append(line);

		});
		footer.append(anim);
	}
}).init();
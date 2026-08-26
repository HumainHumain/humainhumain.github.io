import Modal from "../libraries/modal";


export default class Expertise {

	modal = null;

	constructor() { this.init(); }

	async init() {
		await documentReady();
		this.modal = new Modal;
		document.querySelectorAll('.expertise-section, .expertise-section-right').forEach(section => {
			section.addEventListener('mousemove', e => {
				const rect = section.getBoundingClientRect();
				const beforeStyle = window.getComputedStyle(section, '::before');
				const width = parseFloat(beforeStyle.width);
				const radius = width / 2;
				const computedMatrix = new WebKitCSSMatrix(window.getComputedStyle(section, '::before').transform);
				const translateX = computedMatrix.m41 || 0;
				const translateY = computedMatrix.m42 || 0;
				const centerX = rect.left + parseFloat(beforeStyle.left || 0) + radius + translateX;
				const centerY = rect.top + parseFloat(beforeStyle.top || 0) + radius + translateY;
				const distance = Math.hypot(e.clientX - centerX, e.clientY - centerY);
				
				let hover = 'out';
				if (distance <= radius) hover = 'in'
				if(section.dataset.hover != hover) {
					section.dataset.hover = hover;
					if(hover == 'in') {
						section.style.setProperty('--border-color', 'var(--color-blue)');
					} else {
						section.style.setProperty('--border-color', 'var(--color-yellow)');
					}
				}
			});

			section.addEventListener('click', e => {
				if(section.dataset.hover == 'in') {
					const large = window.getComputedStyle(section, '::before').backgroundImage.match(/url\("(.*)"\)/i)[1].replace(/\.webp$/i, '-large.webp');
					working(new Promise(async res => {
						await preloadImage(large);
						await this.modal.show(create('img', 'modal-image', null, { src: large }));
						res();
					}));
				}
			});
		});


	}



}
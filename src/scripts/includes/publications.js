import Modal from '../libraries/modal';

export default class Publications {

	modal =null;

	constructor() {
		this.init();
	}

	async init() {
		await documentReady();
		this.modal = new Modal;
		document.querySelectorAll('img.publications-rapport').forEach(img => {
			img.addEventListener('click', async e => {
				const large = img.src.replace(/_tbn\.webp$/i, '.webp');
				working(new Promise(async res => {
					await preloadImage(large);
					await this.modal.show(create('img', 'modal-image', null, { src: large }));
					res();
				}));
			});
		});
	}

}
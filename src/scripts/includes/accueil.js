import Modal from '../libraries/modal';

export const Accueil = ({

	modal: null,


	init: async function() {
		await documentReady();
		this.modal = new Modal;
		document.querySelectorAll('.qui-sommes-nous-accueil > img').forEach(img => {
			img.addEventListener('click', async e => {
				const large = img.src.replace(/\.webp$/i, '-large.webp');
				working(new Promise(async res => {
					await preloadImage(large);
					await this.modal.show(create('img', 'modal-image', null, { src: large }));
					res();
				}));


			});
			// console.log(img);

		});



	}



});
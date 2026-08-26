import './libraries/helpers';
import { Accueil } from './includes/accueil';



if (window.location.search.includes('fbclid')) {
	const url = new URL(window.location);
	url.searchParams.delete('fbclid');
	window.history.replaceState({}, document.title, url.pathname + url.search);
}



switch(document.documentElement.dataset.page) {
	case 'accueil': Accueil.init(); break;

}
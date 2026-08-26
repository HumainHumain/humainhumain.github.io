import './libraries/helpers';
import './libraries/fbhandler';
import Accueil from './includes/accueil';
import Expertise from './includes/expertise';
import Publications from './includes/publications';


switch(document.documentElement.dataset.page) {
	case 'accueil': new Accueil; break;
	case 'expertise': new Expertise; break;
	case 'publications': new Publications; break;
}
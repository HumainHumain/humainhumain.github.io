import './libraries/helpers';
import './libraries/fbhandler';
import './libraries/burger';
import './libraries/credits';
import Accueil from './includes/accueil';
import Expertise from './includes/expertise';
import Services from './includes/services';
import Publications from './includes/publications';


switch(document.documentElement.dataset.page) {
	case 'accueil': new Accueil; break;
	case 'expertise': new Expertise; break;
	case 'services': new Services; break;
	case 'publications': new Publications; break;
}
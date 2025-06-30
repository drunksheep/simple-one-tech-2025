import { dom, library } from '@fortawesome/fontawesome-svg-core';
import { faFacebook, faInstagram, faLinkedinIn, faPinterest, faWhatsapp, faXTwitter, faYoutube } from '@fortawesome/free-brands-svg-icons';
import { faClock, faEnvelope, faPaperPlane, faPenToSquare, faUser } from '@fortawesome/free-regular-svg-icons';
import { faArrowLeft, faChevronDown, faChevronLeft, faChevronRight, faDatabase, faFile, faMagnifyingGlass, faMapMarkerAlt, faPhone, faRobot, faScaleUnbalanced, faShield, faShieldHalved, faSignature, faStar, faStore, faTimes } from '@fortawesome/free-solid-svg-icons';
import { faArrowRight } from '@fortawesome/free-solid-svg-icons/faArrowRight';
import { faBolt } from '@fortawesome/free-solid-svg-icons/faBolt';

export default function fontAwesomeWatch() {
    library.add(faLinkedinIn, faInstagram, faFacebook, faPinterest, faXTwitter, faYoutube, faChevronDown, faArrowRight, faArrowLeft, faFile, faRobot, faPenToSquare, faShield, faDatabase, faBolt, faShieldHalved, faScaleUnbalanced, faMagnifyingGlass, faPaperPlane, faClock, faUser, faStore, faEnvelope, faPhone, faStar, faChevronLeft, faChevronRight, faMapMarkerAlt, faWhatsapp, faSignature, faTimes);
    dom.watch();
}

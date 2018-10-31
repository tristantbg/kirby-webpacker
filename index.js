import 'nodelist-foreach-polyfill';
import './src/css/plyr/scss/plyr.scss';
import './src/css/app.styl';
import App from './src/js';
const __svg__ = { path: 'src/css/plyr/sprite/*.svg', name: 'images/player.svg' };

document.addEventListener("DOMContentLoaded", () => {
  App.init();
});

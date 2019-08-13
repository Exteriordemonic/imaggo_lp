/* eslint-disable no-undef */
/* eslint-disable no-unused-vars */
// import external dependencies
import 'jquery';
import Rellax from './util/rellax.min.js';

// Import everything from autoload
import './autoload/**/*';

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';

import smoothScroll from './components/smooth-scroll';


/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
});

// Load Events
jQuery(document).ready(() => {

  if (window.innerWidth > 776) {
    routes.loadEvents();
    var rellax = new Rellax('.rellax');
    rellax;
  }
});

// setTimeout(()=> {
//   slider.resize();
// }, 1000)


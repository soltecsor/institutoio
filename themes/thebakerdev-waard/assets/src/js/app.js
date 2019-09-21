window.$ = window.jQuery = require('jquery');
import 'popper.js';
import 'bootstrap';
import AOS from 'aos';
import navigation from './navigation.js';
import team from './team.js';

$(document).ready(function(){

    AOS.init({
        once: true
    });

    navigation.init();

    team.init();
});


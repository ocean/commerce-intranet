/* Quick front page screenshot. */

/* global require phantom */
var page = require('webpage').create();
page.open('http://127.0.0.1:8080/', function () {
  'use strict';
  page.render('front_page.png');
  phantom.exit();
});

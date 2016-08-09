/* Quick front page screenshot. */

/* global require phantom */
var page = require('webpage').create();
page.viewPortSize = {width: 1280, height: 1024};
page.clipRect = {top: 0, left: 0, width: 1280, height: 1024};
page.open('http://127.0.0.1:8080/', function () {
  'use strict';
  page.render('front_page.png');
  phantom.exit();
});

/* Quick front page screenshot. */

/* global require phantom */
var page = require('webpage').create();
page.open('http://127.0.0.1:8080/', function () {
  'use strict';
  var now = new Date();
  var Y = now.getFullYear();
  var M = now.getMonth();
  var d = now.getDate();
  var h = now.getHours();
  var m = now.getMinutes();
  var s = now.getSeconds();
  var fileName = 'front_page-' + Y + M + d + '-' + h + m + s + '.png';
  page.render(fileName);
  phantom.exit();
});

/* Quick front page screenshot. */

/* eslint-env phantomjs */
/* eslint-disable no-console */

var page = require('webpage').create();
page.settings = {
  userAgent: 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_5) AppleWebKit/601.6.17 (KHTML, like Gecko) Version/9.1.1 Safari/601.6.17',
  resourceTimeout: 4500
};
page.viewPortSize = {
  width: 1280,
  height: 1024
};

// Capture any console logging from the page itself.
page.onConsoleMessage = function (msg, lineNum, sourceId) {
  'use strict';
  console.log('CONSOLE: ' + msg + ' (from line #' + lineNum + ' in "' + sourceId + '")');
};

page.open('http://127.0.0.1:8080/', function (status) {
  'use strict';
  console.log('PhantomJS status: ' + status);
  page.render('front_page.png');
  phantom.exit();
});

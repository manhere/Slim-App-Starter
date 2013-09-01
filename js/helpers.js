/**
 * Helpers
 */
!function(win) {

  'use strict';

  var Query = (function QueryModule() {

    var Query = {};

    Query.parse = function(queryString) {

      var queryVars = {},
          patt = /[?&]([^&]+)=([^&]+)/g;

      queryString = decodeURIComponent(queryString);

      queryString.replace(patt, function(_, key, val) {
        queryVars[key] = isNaN(val) ? val : +val;
      });

      return queryVars;
    };

    Query.build = function(queryVars) {

      var queryString = Object.keys(queryVars).map(function(key) {
        return '&'+ key +'='+ encodeURIComponent(queryVars[key]);
      });

      return queryString.join('').replace(/^&/, '?').replace(/%20/g, '+');
    };

    return Query;
  }());

  win.Helpers = {
    Query: Query
  };

}(window);

(function(document) {
  'use strict';

  var app = document.querySelector('#app');

  app.verifyUser = function(e, req) {
    var data = req.response;
    if(data && data.hasOwnProperty("User_ID")) {
      app.currentUser = data;
      if(app.route == 'login')
        app.route = 'user';
    } else {
      app.currentUser = null;
      if(app.route != 'login')
        app.route = 'login';
    }
  };

  app.initializeDefaultValue = function(e) {
    this.currentUser = null;
  };

  app.addEventListener("dom-change", function() {
    // app is ready
    if(app.route != 'login' || app.currentUser) {
      var verify_user = document.querySelector('#verify-user-ajax');
      verify_user.generateRequest();
    }

    var login_form = document.querySelector('#form-login');
    app.login_error = null;
    app.login_progress = null;
    login_form.addEventListener("iron-form-submit", function() {
      app.login_progress = "Verifying credentials ...";
    });

    login_form.addEventListener("iron-form-response", function(e) {
      app.login_progress = null;
      var data = e.detail;
      if(data && data.hasOwnProperty("User_ID")) {
        app.currentUser = data;
        app.route = 'user';
      } else {
        app.currentUser = null;
        app.login_error = "Wrong username or password.";
      }
    });

    login_form.addEventListener("iron-form-error", function() {
      app.login_progress = null;
      app.login_error = "Something went wrong. Please Try again.";
    });
  });
})(document);

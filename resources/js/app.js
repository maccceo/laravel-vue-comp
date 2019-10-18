require('./bootstrap');
window.Vue = require('vue');

function init() {

  new Vue({
    el: '#app'
  });
}

$(document).ready(init);
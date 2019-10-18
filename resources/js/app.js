require('./bootstrap');
window.Vue = require('vue');

function init() {

  new Vue({
    el: '#app'
  });

  new Vue({
    el: '#posts'
  });
}

$(document).ready(init);
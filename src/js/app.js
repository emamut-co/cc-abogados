import Vue from 'vue';
import axios from 'axios';

require('bootstrap');
import $ from 'jquery';
window.$ = window.jQuery = $;

const app = new Vue({
  el: '#app',
});

$(function() {
  if ($(window).width() > 768)
    window.onscroll = function() {
      scrollFunction();
    };

  function scrollFunction() {
    var transition = 'width 200ms ease-in-out, height 200ms ease-in-out';

    if (
      document.body.scrollTop > 50 ||
      document.documentElement.scrollTop > 50
    ) {
      $('#logo').css({
        width: '70%',
        transition: transition,
      });
    } else {
      $('#logo').css({
        width: '100%',
        transition: transition,
      });
    }
  }
});

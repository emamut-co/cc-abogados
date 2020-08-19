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

  // $(document).ready(function() {
  //   // Add smooth scrolling to all links
  //   $('a').on('click', function(event) {
  //     // Make sure this.hash has a value before overriding default behavior
  //     if (this.hash !== '') {
  //       // Prevent default anchor click behavior
  //       event.preventDefault();

  //       // Store hash
  //       var hash = this.hash;

  //       // Using jQuery's animate() method to add smooth page scroll
  //       // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
  //       $('html, body').animate(
  //         {
  //           scrollTop: $(hash).offset().top - 140,
  //         },
  //         500,
  //         function() {
  //           // Add hash (#) to URL when done scrolling (default click behavior)
  //           window.location.hash = hash;
  //         }
  //       );
  //     } // End if
  //   });
  // });
});

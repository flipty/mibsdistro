//hsbaird.js

var hsbaird = {

    hamburger: function(){
      var $hamburger = $('.nav-trigger a');
      var $mobileNav = $('.menu-primary-menu-container');
      $hamburger.on('click touchend', function(e){
        $(this).toggleClass('active');
        $mobileNav.toggleClass('active');
        e.preventDefault();
      })
    },

    nav: function(){
      var $nav = $('ul.header-nav');
      var $submenus = $nav.find('ul.sub-menu');
      $submenus.each(function(){
        var $trigger = $(this).siblings('a');
        var $this = $(this);
        $trigger.on('click', function(e){
          $('ul.sub-menu').hide();
          $this.show().addClass('active');
          e.preventDefault();
        })
      });
    },

    gallery: function(){
      var $image = $('a.gallery-image');
      $image.each(function(){
        var $thisGallery = $(this).data('gallery');
        $(this).colorbox();
      });
    },

    scrollHandler: function(){
      $(window).scroll(function() {
          if ($(document).scrollTop() > 100) {
              $('body').addClass('scrolled');
          }
          else {
              $('body').removeClass('scrolled');
          }
      });
    }

}

$(document).ready(function(){
    hsbaird.scrollHandler();
    hsbaird.hamburger();
    hsbaird.nav();
    hsbaird.gallery();
});

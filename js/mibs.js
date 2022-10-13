//mibs.js

var mibs = {

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
    }

}

$(document).ready(function(){
    mibs.hamburger();
    mibs.nav();
    console.log('MIBS js');
});

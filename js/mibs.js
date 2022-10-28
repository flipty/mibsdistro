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
    },

    heroSlider: function(){
      var $slider = $('section.hero');
      var $panelContainer = $slider.find('.panels');
      var $panels = $slider.find('.panel');
      var $firstpanel = $slider.find('.panel.initial-active');
      $panels.each(function(){
        var $this = $(this);
        $this.on('mouseover', function(e){
          $panels.removeClass('active');
          $this.addClass('active');
        });
      });
      $panelContainer.on('mouseout', function(){
        $panels.removeClass('active');
        $firstpanel.addClass('active');
      });
    }

}

$(document).ready(function(){
    mibs.hamburger();
    mibs.nav();
    mibs.heroSlider();
    console.log('MIBS js');
});

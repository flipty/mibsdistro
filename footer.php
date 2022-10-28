<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-3 branding">
        <a href="/"><img src="/wp-content/themes/mibs/images/logo.png" alt="MIBS Distro"></a>
        <p class="contact">
          MIBS Distro LLC<br>
          Gig Harbor, WA<br>
          <a href="tel: +18003431225">1-800-343-1225</a>
        </p>
      </div>
      <div class="col-md-5 navigation">
        <?php wp_nav_menu( array(
          'menu' => 'Secondary',
          'menu_class' => 'footer-nav',
          'container' => 'nav'
          )); ?>
          <p class="legal">Copyright <?php echo date('Y');?> MIBS Distro, All Rights Reserved</p>
      </div>
    </div>
  </div>
</footer>

<script src="/wp-content/themes/mibs/js/vendor/jquery-3.6.1.min.js"></script>
<script src="/wp-content/themes/mibs/js/mibs.js"></script>
<?php wp_footer(); ?>

</body>
</html>

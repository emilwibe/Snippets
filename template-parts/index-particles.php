
  <script>
    /* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
particlesJS.load('particles-js', '<?php echo get_template_directory_uri() . '/assets/data/particlesjs-config.json'; ?>', function() {
  console.log('callback - particles.js config loaded');
});
  </script>
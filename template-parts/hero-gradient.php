<?php
  $hero_gradients = array(
    //array("#c6ffdd", "#fbd786", "#f7797d"),
    //array("#99f2c8", "#1f4037"),
    //array("#ffefba", "#ffffff"),
    array("#74ebd5", "#acb6e5")
  );

  shuffle($hero_gradients);
?>
<style>
  .particles-js-canvas-el, .edge-top, .main a{
    background-image:linear-gradient(to right, <?php echo $hero_gradients[0][0]; ?> , <?php echo $hero_gradients[0][1]; ?> <?php if($hero_gradients[0][2]) : echo ", " . $hero_gradients[0][2]; endif; ?>);
  }
</style>
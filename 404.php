<?php get_header(); ?>

<section class="l-wrapper l row lg-col-66-33 md-col-75-25 sm-col-100">
<main class="main">
    <p id="four-message" style="text-align:center;"></p>
</main>

    <?php get_template_part('template-parts/widgetarea', 'prim_widgets'); ?>
  </section><!--/.l-wrapper.s-->

<script>

let four_o_four = [
    '#',
    '#',
    '#',
    '#',
    '#',
    '#',
    '#',
    '#',
    '#',
    '#',
    ' ',
    '4',
    '0',
    '4',
    '_',
    'E',
    'R',
    'R',
    'O',
    'R',
    '_',
    'T',
    'H',
    'I',
    'S',
    '_',
    'P',
    'A',
    'G',
    'E',
    '_',
    'D',
    'O',
    'E',
    'S',
    '_',
    'N',
    'O',
    'T',
    '_',
    'E',
    'X',
    'I',
    'S',
    'T',
    ' ',
    '#',
    '#',
    '#',
    '#',
    '#',
    '#',
    '#',
    '#',
    '#',
    '#'
];
let fourMessage = document.getElementById("four-message");
let four_o_length = four_o_four.length;
let printed = "";
let arrayCounter = 0;

setInterval(function(){
    printed += four_o_four[arrayCounter];
    fourMessage.innerHTML = printed;
    if(arrayCounter == four_o_length - 1) {
        printed = printed + "<br>";
        arrayCounter = 0;
    } else {
        arrayCounter += 1;
    }
}, 100);

</script>

<?php get_footer(); ?>
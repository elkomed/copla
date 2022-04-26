$(document).ready(function () {
    $('.menu').click(function () {
        $('.menuresp').slideToggle(500);
    });
    anime.timeline({
            loop: true
        })
        .add({
            targets: '.ml15 .word',
            scale: [2, 1],
            opacity: [0, 1],
            translateY: [-200, 0],
            easing: "easeOutCirc",
            duration: 800,
            delay: (el, i) => 800 * i
        }).add({
            targets: '.ml15',
            opacity: 0,
            translateX: [0,-500],
            duration: 1000,
            easing: "easeOutExpo",
            delay: 1000
        });
    anime.timeline({
            loop: true
        })
        .add({
            targets: '.ml8 .circle-white',
            scale: [0, 3],
            opacity: [1, 0],
            easing: "easeInOutExpo",
            rotateZ: 360,
            duration: 1100
        }).add({
            targets: '.ml8 .circle-container',
            scale: [0, 1],
            duration: 1100,
            easing: "easeInOutExpo",
            offset: '-=1000'
        }).add({
            targets: '.ml8 .circle-dark',
            scale: [0, 1],
            duration: 1100,
            easing: "easeOutExpo",
            offset: '-=600'
        }).add({
            targets: '.ml8 .letters-left',
            scale: [0, 1],
            duration: 1200,
            offset: '-=550'
        }).add({
            targets: '.ml8 .bang',
            scale: [0, 1],
            rotateZ: [45, 15],
            duration: 1200,
            offset: '-=1000'
        }).add({
            targets: '.ml8',
            opacity: 0,
            duration: 1000,
            easing: "easeOutExpo",
            delay: 1400
        });

    anime({
        targets: '.ml8 .circle-dark-dashed',
        rotateZ: 360,
        duration: 8000,
        easing: "linear",
        loop: true
    });
    anime.timeline({loop: true})
  .add({
    targets: '.ml5 .line',
    opacity: [0.5,1],
    scaleX: [0, 1],
    easing: "easeInOutExpo",
    duration: 700
  }).add({
    targets: '.ml5 .line',
    duration: 600,
    easing: "easeOutExpo",
    translateY: (el, i) => (-0.625 + 0.625*2*i) + "em"
  }).add({
    targets: '.ml5 .letters-left',
    opacity: [0,1],
    translateX: ["0.5em", 0],
    easing: "easeOutExpo",
    duration: 600,
    offset: '-=300'
  }).add({
    targets: '.ml5 .letters-right',
    opacity: [0,1],
    translateX: ["-0.5em", 0],
    easing: "easeOutExpo",
    duration: 600,
    offset: '-=600'
  }).add({
    targets: '.ml5',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });


  $('#1').click(function () {

    $('.row1').show('slow');
    $('.row2').hide('slow');
    $('.row3').hide('slow');
    $('.row4').hide('slow');

});

$('#2').click(function () {

    $('.row1').hide('slow');
    $('.row2').show('slow');
    $('.row3').hide('slow');
    $('.row4').hide('slow');

});

$('#3').click(function () {

    $('.row1').hide('slow');
    $('.row2').hide('slow');
    $('.row3').show('slow');
    $('.row4').hide('slow');

});

$('#4').click(function () {

    $('.row1').hide('slow');
    $('.row2').hide('slow');
    $('.row3').hide('slow');
    $('.row4').show('slow');

});
})
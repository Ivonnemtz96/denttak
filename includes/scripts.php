<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/owl.carousel.js"></script>
<script src="assets/js/aos.js"></script>
<script src="assets/js/jquery.validate.js"></script>
<script src="assets/js/contact-form.js"></script>
<script src="assets/js/custom.js"></script>
<script>
$(window).on('load', function() {
    // Preloader
    $('.loader').fadeOut();
    $('.loader-mask').delay(350).fadeOut('slow');
});
</script>
<script>
AOS.init();
</script>
<script>
var btn = $('#button');

$(window).scroll(function() {
    if ($(window).scrollTop() > 300) {
        btn.addClass('show');
    } else {
        btn.removeClass('show');
    }
});
btn.on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({
        scrollTop: 0
    }, '300');
});
</script>
<script>
$('#owl-carouselone').owlCarousel({
    loop: true,
    margin: 30,
    nav: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2,
            margin: 15
        },
        1000: {
            items: 4
        }
    }
})
$('#owl-carouseltwo').owlCarousel({
    loop: true,
    margin: 29,
    nav: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2,
            margin: 15
        },
        1000: {
            items: 2
        }
    }
})
$('#owl-carouselthree').owlCarousel({
    loop: true,
    margin: 30,
    nav: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2,
            margin: 15
        },
        1000: {
            items: 3
        }
    }
})
$('#owl-carouselfour').owlCarousel({
    loop: true,
    margin: 30,
    nav: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
})
$('#owl-carouselfive').owlCarousel({
    loop: true,
    margin: 30,
    nav: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 2
        }
    }
})
</script>
<script>
$(document).ready(function() {

    var counters = $(".count");
    var countersQuantity = counters.length;
    var counter = [];

    for (i = 0; i < countersQuantity; i++) {
        counter[i] = parseInt(counters[i].innerHTML);
    }

    var count = function(start, value, id) {
        var localStart = start;
        setInterval(function() {
            if (localStart < value) {
                localStart++;
                counters[id].innerHTML = localStart;
            }
        }, 40);
    }

    for (j = 0; j < countersQuantity; j++) {
        count(0, counter[j], j);
    }
});



$('.count').each(function() {
    $(this).prop('Counter', 0).animate({
        Counter: $(this).text()
    }, {
        duration: 3300,
        easing: 'swing',
        step: function(now) {
            $(this).text(Math.ceil(now));
        }
    });
});
</script>
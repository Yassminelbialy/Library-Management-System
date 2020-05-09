//  Heart started animation and add sound effect when it is acive
$(".fa-heart").on("click", function () {
    $(this).toggleClass("heart-active");
    if ($(this).hasClass("heart-active")) {
        $(".bell").get(0).currentTime = 0;
        $(".bell").get(0).play();
        setTimeout(() => {
            $(".bell").get(0).pause();
            $(".bell").get(0).currentTime = 1;
        }, 600);
    }
});
// Search started animation when click on search icon the form will appeare
$(".fa-search").click(function () {
    $(".search").show(1000);
    $(".input[type='search']").animate(
        {
            width: "150%",
        },
        1000
    );
});

// Popup will show and form animtion when click on lease button
$(".lease_btn").on("click", function () {
    $(".lease_form").css({
        top: "20%",
        transform:
            "rotateY(360deg) rotateY(360deg) rotateY(360deg) rotateY(360deg) rotateY(360deg) rotateY(360deg) rotateY(360deg)",
        transition: "all 1s",
    });
    $(".popup").show();
});

// close form when i click on it popup will disappear and form
$(".close_form").on("click", function () {
    $(".lease_form").css({
        top: "-50%",
        transform:
            "rotateY(360deg) rotateY(360deg) rotateY(360deg) rotateY(360deg)  ",
        transition: "all .2s",
    });
    $(".popup").hide();
});

// tabs acivation when i click on it will background change by adding class active
$(".tabs_book > li > a").on("click", function (e) {
    e.preventDefault();
    $(this).css("color", "white");
    $(this).parent().addClass("active_tab_book");
    $(this).parent().siblings().removeClass("active_tab_book");
});

let nCount = (selector) => {
    $(selector).each(function () {
        $(this).animate(
            {
                Counter: $(this).text(),
            },
            {
                // A string or number determining how long the animation will run.
                duration: 4000,
                // A string indicating which easing function to use for the transition.
                easing: "swing",
                /**
         A function to be called for each animated property of each animated element.
          This function provides an opportunity to
           modify the Tween object to change the value of the property before it is set.
         */
                step: function (value) {
                    $(this).text(Math.ceil(value));
                },
            }
        );
    });
};

let a = 0;
$(window).scroll(function () {
    // The .offset() method allows us to retrieve the current position of an element  relative to the document
    let oTop = $(".numbers").offset().top - window.innerHeight;
    if (a == 0 && $(window).scrollTop() >= oTop) {
        a++;
        nCount(".rect > h1");
    }
});

// sticky navigation

let navbar = $(".navbar");

$(window).scroll(function () {
    // get the complete hight of window
    let oTop = $(".section-2").offset().top - window.innerHeight;
    if ($(window).scrollTop() > oTop) {
        navbar.addClass("sticky");
    } else {
        navbar.removeClass("sticky");
    }
});

// Aos Started

AOS.init();

// Slider animation it


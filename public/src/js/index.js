(function ($) {
  //Scroll  landing page
  $(document).ready(function () {
    // Toggle Menu

    let isMenuMobile = false;
    $("#vt_landing_menu_toggle").on("click", function () {
      if ($("#vt_header_nav_wrapper").css("display") == "block") {
        $("#vt_header_nav_wrapper").css("display", "none");
      } else {
        $("#vt_header_nav_wrapper").addClass("drawer");
        $("#vt_header_nav_wrapper").css("display", "block");

        $(".nav-menu").each(function () {
          $(this).on("click", function () {
            $("#vt_header_nav_wrapper").css("display", "none");
            $("#vt_header_nav_wrapper").removeClass("drawer");
          });
        });
        isMenuMobile = true;
        // add drawer-overlay
        // let overlay = $("<div class='drawer-overlay'></div>").text("");

        // $("body").append(overlay);
      }
    });

    // $("div").remove(".drawer-overlay");

    //variable default
    let isCounting = true;

    $(window).scroll(function () {
      // counting number media
      $(document.body).addClass("header-minimize");

      if ($(window).scrollTop() == 0) {
        $(document.body).removeClass("header-minimize");
      }

      // let oTop = $("#services").offset().top - window.innerHeight;
      let oTop = $("#services").offsetTop - window.innerHeight;

      if (isCounting && $(window).scrollTop() > oTop) {
        $(".counted").each(function () {
          $(this)
            .prop("Counter", 0)
            .animate(
              {
                Counter: $(this).text(),
              },
              {
                duration: 2000,
                easing: "swing",
                step: function (now) {
                  $(this).text(Math.ceil(now));
                },
              }
            );
        });
        isCounting = false;
      }

      if ($(window).scrollTop() > 200) {
        // landing-header
        $("#landing-page").addClass("header--fixed");

        //menu logo
        $(".logo-default").css("display", "none");
        $(".logo-sticky").css("display", "block");
      } else {
        $("#landing-page").removeClass("header--fixed");

        //menu logo
        $(".logo-default").css("display", "block");
        $(".logo-sticky").css("display", "none");
      }

      if ($(window).scrollTop() > 300) {
        // scroll to top

        $("#vt_scroll_top").addClass("flex");
        $("#vt_scroll_top").removeClass("hidden");
      } else {
        $("#vt_scroll_top").addClass("hidden");
        $("#vt_scroll_top").removeClass("flex");
      }
      return false;
    });

    $("#vt_scroll_top").click(function () {
      $("html, body").animate(
        {
          scrollTop: 0,
        },
        "fast"
      );
      return false;
    });

    const sections = document.querySelectorAll("section[id]");

    $(window).scroll(function () {
      const scrollY = window.pageYOffset;
      sections.forEach((current) => {
        const height = current.offsetHeight;
        const top = current.offsetTop - 170;
        sectionId = current.getAttribute("id");
        if (scrollY > top && scrollY <= top + height) {
          $(".nav-menu a[href*=" + sectionId + "]").addClass("active_link");
        } else {
          $(".nav-menu a[href*=" + sectionId + "]").removeClass("active_link");
        }
      });
    });

    return false;
  });
})(jQuery);

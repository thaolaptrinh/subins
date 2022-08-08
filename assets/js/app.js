$(document).ready(function () {
  /** Preloader */
  // setTimeout(function () {
  //   $("#preloader").style.display = "none";
  // }, 1000);

  const $$ = document.querySelectorAll.bind(document);

  $$(".menu-item").forEach((e) => {
    e.addEventListener("click", () => {
      $(".sub-menu").classList.toggle("d-none");
    });
  });

  $(".hide-text-input").click(function () {
    $(".hide-text-input i").toggleClass("bx-hide bx-show");
    var type = $(".hide-text-input i").hasClass("bx bx-show")
      ? "text"
      : "password";
    $("input[name=password]").attr("type", type);
    console.log(type);
  });

  //*Remember

  let username = localStorage.getItem("username"),
    remember = localStorage.getItem("remember");
  password = localStorage.getItem("password");
  $(window).on("load", () => {
    document.getElementById("remember").checked.curre;
    document.getElementById("remember").checked =
      remember == "true" ? true : false;
    document.getElementById("username").value = username;
    document.getElementById("password").value = password;
  });
});


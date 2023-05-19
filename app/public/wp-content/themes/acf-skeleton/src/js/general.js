const $ = require("jquery");
import "jquery-inview/jquery.inview";
import Headroom from "headroom.js";

let vh = window.innerHeight * 0.01;
document.documentElement.style.setProperty("--vh", `${vh}px`);
let orange = "#f16e30";

window.addEventListener("resize load", () => {
  vh = window.innerHeight * 0.01;
  document.documentElement.style.setProperty("--vh", `${vh}px`);
});

$(function () {
  initInviewAnimate();
  initHeadroom();
  initMobileDrawer();

  displaySubmenu();
  displayBackLink();
  displayLanguageBar();

  $(".menu-languages-menu-container a").on("click", function () {
    $(".menu-languages-menu-container a").removeClass("lang-clicked");
    if ($("header").hasClass("headroom--top")) {
      $(this).addClass("lang-clicked");
    } else {
      $(this).addClass("lang-clicked--not-top");
    }
  });

  if ($("body").hasClass(".admin-bar")) {
    $(".hero").css("margin-top", "32px");
  } else {
    $(".hero").css("margin-top", "0");
  }
});

function initHeadroom() {
  const headerElements = document.getElementsByClassName("site-header"),
    headerElementsNo = headerElements.length;

  if (headerElementsNo > 0) {
    for (let i = 0; i < headerElementsNo; i++) {
      const headroom = new Headroom(headerElements[i]);
      headroom.init();
    }
  }
}

function initInviewAnimate() {
  const inviewElements = $(".inview-animate--fade")
    .add(".inview-animate--move-up")
    .add(".inview-animate--move-down")
    .add(".inview-animate--move-left")
    .add(".inview-animate--move-right")
    .add(".inview-animate")
    .add(".inview-animate--scale");

  inviewElements.each(function () {
    const thisInviewElement = $(this);

    thisInviewElement.bind("inview", function (event, visible) {
      if (visible === true) {
        thisInviewElement.addClass("inview-active");
      }
    });
  });
}

function initMobileDrawer() {
  $(".header-actions").on("click", function () {
    $(".site-header__nav").toggleClass("active");

    if ($(".site-header__nav").hasClass("active")) {
      $("html").css("overflow", "hidden");
      $(".site-header__logo").css("display", "none");
      $(".menu").css("display", "flex");
      $(".site-header__inner").css(
        "border-bottom",
        "1px solid rgba(202, 202, 202, 0.4)"
      );

      if ($(".menu-item-has-children .sub-menu").css("display") == "block") {
        $(".mobile-footer-menu-container").css("display", "none");
      } else {
        $(".mobile-footer-menu-container").css("display", "block");
      }
    } else {
      $("html").css("overflow", "");
      $(".site-header__logo").css("display", "block");
      $(".menu").css("display", "");
      $(".site-header__inner").css("border", "none");
      $(".mobile-footer-menu-container").css("display", "none");
      $(".back-link").css("display", "none");
      $(".menu-languages-menu-container").css("display", "flex");
    }
  });
}

function displaySubmenu() {
  $(".menu-item-has-children>a").each(function () {
    $(this).append("<span class='arrow'></span>");
  });
  $(".arrow").on("click", function (e) {
    e.preventDefault();
    //alert("clicked");
  });
}

function displayBackLink() {
  if (window.matchMedia("(max-width: 992px)").matches) {
    $(".menu-navigation-menu-container>.menu .menu-item-has-children").hover(
      function () {
        $(".menu-languages-menu-container").css("display", "none");
        $(".back-link").css("display", "block");
        $(".mobile-footer-menu-container").css("display", "none");
      }
    );
  }
}

function displayLanguageBar() {
  $(".back-link").hover(function () {
    $(".menu-languages-menu-container").css("display", "flex");
    $(".back-link").css("display", "none");
    $(".mobile-footer-menu-container").css("display", "block");
  });
}

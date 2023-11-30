/**
 * Mobile nav toggle
 */

const mobileNavShow = document.querySelector(".mobile-nav-show");
const mobileNavHide = document.querySelector(".mobile-nav-hide");

document.querySelectorAll(".mobile-nav-toggle").forEach((el) => {
  el.addEventListener("click", function (event) {
    event.preventDefault();
    mobileNavToogle();
  });
});

function mobileNavToogle() {
  document.querySelector("body").classList.toggle("mobile-nav-active");
  mobileNavShow.classList.toggle("d-none");
  mobileNavHide.classList.toggle("d-none");
}

/**
 * Hide mobile nav on same-page/hash links
 */
document.querySelectorAll("#navbar a").forEach((navbarlink) => {
  if (!navbarlink.hash) return;

  let section = document.querySelector(navbarlink.hash);
  if (!section) return;

  navbarlink.addEventListener("click", () => {
    if (document.querySelector(".mobile-nav-active")) {
      mobileNavToogle();
    }
  });
});

/**
 * Navbar Active
 */

var home = document.getElementById("home");
var about = document.getElementById("about");
var produk = document.getElementById("product");
var kontak = document.getElementById("contact");

about.addEventListener("click", function () {
  if (home.classList.contains("active")) {
    home.classList.toggle("active");
  } else if (produk.classList.contains("active")) {
    produk.classList.toggle("active");
  } else if (kontak.classList.contains("active")) {
    kontak.classList.toggle("active");
  } else if (about.classList.contains("active")) {
    about.classList.toggle("active");
  }
  about.classList.toggle("active");
});

home.addEventListener("click", function () {
  if (about.classList.contains("active")) {
    about.classList.toggle("active");
  } else if (produk.classList.contains("active")) {
    produk.classList.toggle("active");
  } else if (kontak.classList.contains("active")) {
    kontak.classList.toggle("active");
  } else if (home.classList.contains("active")) {
    home.classList.toggle("active");
  }
  home.classList.toggle("active");
});

produk.addEventListener("click", function () {
  if (about.classList.contains("active")) {
    about.classList.toggle("active");
  } else if (home.classList.contains("active")) {
    home.classList.toggle("active");
  } else if (kontak.classList.contains("active")) {
    kontak.classList.toggle("active");
  } else if (produk.classList.contains("active")) {
    produk.classList.toggle("active");
  }
  produk.classList.toggle("active");
});
kontak.addEventListener("click", function () {
  if (about.classList.contains("active")) {
    about.classList.toggle("active");
  } else if (home.classList.contains("active")) {
    home.classList.toggle("active");
  } else if (produk.classList.contains("active")) {
    produk.classList.toggle("active");
  } else if (kontak.classList.contains("active")) {
    kontak.classList.toggle("active");
  }
  kontak.classList.toggle("active");
});

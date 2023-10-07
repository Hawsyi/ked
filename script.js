// Toogle class active

const navbarNav = document.querySelector(".navbar-nav");

// ketika hamburger menu di klik
document.querySelector("#hamburger-menu").onclick = () => {
  navbarNav.classList.toggle("active");
};

// klik diluar side bar untuk menghilangkan nav
const hamburger = document.querySelector("#hamburger-menu");

document.addEventListener("click", function (e) {
  if (!hamburger.contains(e.target) && !navbarNav.contains(e.target)) {
    navbarNav.classList.remove("active");
  }
});

//navbar item
// const bg = document.querySelector(".rrr");
// window.onscroll = function () {
//   const bottom = window.scrollY;
//   // console.log(top);
//   if (bottom >= 370) {
//     bg.classList.replace(".", "about,mow");
//     console.log(bg.classList);
//     bg.classList.replace("about,mow", ".");
//   } else {
//     bg.classList.replace("about,mow", ".");
//     bg.classList.replace(".", "about,mow");
//   }
// };

//penghitung angka

let valueDisplays = document.querySelectorAll(".num");
let interval = "2000";

valueDisplays.forEach((valueDisplays) => {
  let startValue = 0;
  let endValue = parseInt(valueDisplays.getAttribute("data-val"));
  let duration = Math.floor(interval / endValue);
  let counter = setInterval(function () {
    startValue += 1;
    valueDisplays.textContent = startValue;
    if (startValue == endValue) {
      clearInterval(counter);
    }
  }, duration);
});

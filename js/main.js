let btn = document.querySelector("#bars");
let sidebar = document.querySelector(".sidebar");
let container = document.querySelector(".container-x");
let aside = document.querySelector(".myDIV");
let product = document.querySelector("#details");
let side_menu = document.querySelector(".sub-menu");
let themeToggler = document.querySelector(".theme-toggler");
let tbl = document.querySelector("#example1");

btn.onclick = function () {
  if (side_menu.classList.contains("active")) {
    side_menu.classList.toggle("active");
    sidebar.classList.toggle("active");
    container.classList.toggle("active");
    aside.classList.toggle("active");
  } else {
    sidebar.classList.toggle("active");
    container.classList.toggle("active");
    aside.classList.toggle("active");
  }
};

/******************* sub-menu ofproducts-details **********************/

product.onclick = function () {
  if (sidebar.classList.contains("active")) {
    sidebar.classList.toggle("active");
    container.classList.toggle("active");
    side_menu.classList.toggle("active");
  } else {
    side_menu.classList.toggle("active");
  }
};

/******************* active class on sidebar **********************/

// themeToggler.addEventListener("click", () => {
//   document.body.classList.toggle("dark-theme-variable");
//   tbl.classList.toggle("dark");

//   themeToggler.querySelector("span:nth-child(1)").classList.toggle("active");
//   themeToggler.querySelector("span:nth-child(2)").classList.toggle("active");
// });

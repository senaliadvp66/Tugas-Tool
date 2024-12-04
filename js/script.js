// toggle class active
const navbarNav = document.querySelector(".navbar-nav");
//ketika menu diklik
document.querySelector("#menu").onclick = () => {
  navbarNav.classList.toggle("active");
};

//klik dimana aja for ngilangin menu
const menu = document.querySelector("#menu");

document.addEventListener("click", function (e) {
  if (!menu.contains(e.target) && !navbarNav.contains(e.target)) {
    navbarNav.classList.remove("active");
  }
});

//toggle class active search form
const searchForm = document.querySelector(".search-form");
const searchBox = document.querySelector("#search-box");

document.querySelector("#search-button").onclick = () => {
  searchForm.classList.toggle("active");
  searchBox.focus();
};

const search = document.querySelector("#search-button");

document.addEventListener("click", function (e) {
  if (!search.contains(e.target) && !searchForm.contains(e.target)) {
    searchForm.classList.remove("active");
  }
});

//user
const navbarUser = document.querySelector(".navbar-user");

document.querySelector("#user").onclick = () => {
  navbarUser.classList.toggle("active");
};

const user = document.querySelector("#user");

document.addEventListener("click", function (e) {
  if (!user.contains(e.target) && !navbarUser.contains(e.target)) {
    navbarUser.classList.remove("active");
  }
});

// faq
let li = document.querySelectorAll(".faq-text li");
for (var i = 0; i < li.length; i++) {
  li[i].addEventListener("click", (e) => {
    let clickedLi;
    if (e.target.classList.contains("question-arrow")) {
      clickedLi = e.target.parentElement;
    } else {
      clickedLi = e.target.parentElement.parentElement;
      // console.log(clickedLi);
    }
    clickedLi.classList.toggle("showAnswer");
  });
}

// showWomanCategory
function showWomanCategory() {
    // Menampilkan kategori wanita
    const womanCategory = document.getElementById('womanCategory');
    womanCategory.style.display = 'block';
  
    // Scroll otomatis ke bagian kategori wanita (opsional)
    womanCategory.scrollIntoView({ behavior: 'smooth' });
  }

// showManCategory
function showManCategory() {
  // Menampilkan kategori pria
  const manCategory = document.getElementById('manCategory');
  manCategory.style.display = 'block';

  // Scroll otomatis ke bagian kategori man (opsional)
  manCategory.scrollIntoView({ behavior: 'smooth' });
}
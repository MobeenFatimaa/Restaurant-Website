window.addEventListener("scroll", () => {
  const navbar = document.getElementById("navbar");
  const topBtn = document.getElementById("topBtn");

  if (window.scrollY > 50) {
    navbar.classList.add("scrolled");
    topBtn.style.display = "block";
  } else {
    navbar.classList.remove("scrolled");
    topBtn.style.display = "none";
  }

  document.querySelectorAll(".reveal").forEach(el => {
    if (el.getBoundingClientRect().top < window.innerHeight - 100) {
      el.classList.add("active");
    }
  });
});

document.getElementById("topBtn").onclick = () => window.scrollTo({top:0, behavior:'smooth'});

const filterButtons = document.querySelectorAll(".filters button");

function filterMenu(category) {
  const items = document.querySelectorAll(".item");

  filterButtons.forEach(btn => btn.classList.remove("active"));
  event.target.classList.add("active");

  items.forEach(item => {
    if (category === "all" || item.classList.contains(category)) {
      item.style.display = "block";
    } else {
      item.style.display = "none";
    }
  });
}

document.querySelectorAll(".form").forEach(form => {
  form.addEventListener("submit", e => {
    e.preventDefault();
    alert("Thank you! Your request has been received.");
    form.reset();
  });
});

let reviews = document.querySelectorAll(".review");
let index = 0;
setInterval(() => {
  reviews[index].classList.remove("active");
  index = (index + 1) % reviews.length;
  reviews[index].classList.add("active");
}, 3000);
const sections = document.querySelectorAll("section");
const navLinks = document.querySelectorAll("nav ul li a");

window.addEventListener("scroll", () => {
  let current = "";

  sections.forEach(section => {
    const sectionTop = section.offsetTop - 100;
    if (scrollY >= sectionTop) {
      current = section.getAttribute("id");
    }
  });

  navLinks.forEach(link => {
    link.classList.remove("active");
    if (link.getAttribute("href") === "#" + current) {
      link.classList.add("active");
    }
  });
});
window.addEventListener("scroll", () => {
  if (window.scrollY > 50) {
    navbar.classList.add("scrolled");
  } else {
    navbar.classList.remove("scrolled");
  }
});
const navbar = document.getElementById("navbar");

window.addEventListener("scroll", () => {
  if (window.scrollY > 50) {
    navbar.classList.add("scrolled");
  } else {
    navbar.classList.remove("scrolled");
  }
});
// LOGIN MODAL

const loginBtn = document.getElementById("loginBtn");
const loginModal = document.getElementById("loginModal");
const closeLogin = document.getElementById("closeLogin");

loginBtn.addEventListener("click", () => {
  loginModal.style.display = "flex";
});

closeLogin.addEventListener("click", () => {
  loginModal.style.display = "none";
});

window.addEventListener("click", (e) => {
  if (e.target === loginModal) {
    loginModal.style.display = "none";
  }
});

// LOGIN FORM SUBMIT

document.getElementById("loginForm").addEventListener("submit", function(e) {
  
  e.preventDefault();

  alert("Login Successful!");

  loginModal.style.display = "none";
});
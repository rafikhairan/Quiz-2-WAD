const navbar = document.querySelector(".navbar");

document.addEventListener("scroll", () => {
  if (window.scrollY >= 200) {
    navbar.classList.add("bg-light", "shadow-sm");
  } else {
    navbar.classList.remove("bg-light", "shadow-sm");
  }
});

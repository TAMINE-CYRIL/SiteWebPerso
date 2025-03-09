document.addEventListener("DOMContentLoaded", function () {
  const aboutSection = document.querySelector(".about");
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          aboutSection.classList.add("show");
        }
      });
    },
    { threshold: 0.2 }
  );

  observer.observe(aboutSection);
});


function welcome(){
  let title = document.getElementsByClassName("nom")[0];
  let title2 = document.getElementsByClassName("student")[0];
  title.textContent = "Welcome !";
  title2.style.display = "none";
}

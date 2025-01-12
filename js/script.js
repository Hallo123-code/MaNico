document.addEventListener("DOMContentLoaded", () => {
  const buttons = document.querySelectorAll(".showAnswerBtn");

  buttons.forEach(button => {
    button.addEventListener("click", () => {
      const answer = button.nextElementSibling;
      if (answer.style.display === "none") {
        answer.style.display = "block";
        button.textContent = "Hide Answer";
      } else {
        answer.style.display = "none";
        button.textContent = "Show Answer";
      }
    });
  });
});

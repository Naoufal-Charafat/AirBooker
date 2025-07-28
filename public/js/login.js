// Animación de botón al hacer submit
document.addEventListener("DOMContentLoaded", function () {
  const form = document.querySelector("form");
  const button = form.querySelector('button[type="submit"]');
  const emailInput = document.getElementById("email");
  if (emailInput) emailInput.focus();

  form.addEventListener("submit", function (e) {
    button.classList.add("animate-bounce");
    setTimeout(() => {
      button.classList.remove("animate-bounce");
    }, 600);
  });
});

// Efecto bounce
const style = document.createElement("style");
style.innerHTML = `
@keyframes bounce {
  0%, 100% { transform: translateY(0); }
  30% { transform: translateY(-10px); }
  50% { transform: translateY(2px); }
  70% { transform: translateY(-4px); }
}
.animate-bounce {
  animation: bounce 0.6s;
}
`;
document.head.appendChild(style);

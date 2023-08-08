// Optional: add client-side validation using JavaScript

// Example code for validating the email field
const emailInput = document.getElementById("email");

emailInput.addEventListener("input", function(event) {
  const email = event.target.value;

  if (!email.includes("@")) {
    emailInput.setCustomValidity("Invalid email address");
  } else {
    emailInput.setCustomValidity("");
  }
});

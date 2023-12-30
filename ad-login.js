const loginForm = document.getElementById("login-form");
const errorMessage = document.getElementById("error-message");

loginForm.addEventListener("submit", (event) => {
  event.preventDefault();

  const username = document.getElementById("username").value;
  const password = document.getElementById("password").value;

  // Simulate a login request to a server
  setTimeout(() => {
    if (username === "admin" && password === "password123") {
      window.location.href = "admin.php"; // Redirect to admin dashboard
    } else {
      errorMessage.textContent = "Invalid username or password";
    }
  }, 1000); // Delay for demonstration
});

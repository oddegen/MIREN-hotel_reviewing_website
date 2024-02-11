function register() {
  document.getElementById("login-form").style.left = "-400px";
  document.getElementById("register-form").style.left = "50px";
  document.getElementById("btn").style.left = "110px";

  clearForm('login-form');
  
}

function login() {
  document.getElementById("login-form").style.left = "50px";
  document.getElementById("register-form").style.left = "450px";
  document.getElementById("btn").style.left = "0";
}

function clearForm(formId) {
  document.getElementById(formId).reset();
}

// Validation function for login form
function validateLoginForm(event) {
  event.preventDefault(); // Prevent default form submission

  // Your validation logic for login form
  let username = document.getElementById("login-username").value;
  let password = document.getElementById("login-password").value;

  // Example validation: Check if username and password are not empty
  if (!username || !password) {
    alert("Please enter both username and password.");
    return false; // Prevent form submission
  }

  // If validation passes, allow form submission
  clearForm('login-form');
}

// Validation function for registration form
function validateRegistrationForm(event) {
  event.preventDefault(); // Prevent default form submission

  // Your validation logic for registration form
  let username = document.getElementById("register-username").value;
  let email = document.getElementById("register-email").value;
  let password = document.getElementById("register-password").value;
  let confirmPassword = document.getElementById("confirm-password").value;
  let agreeCheckbox = document.getElementById("agree-checkbox");

  // Example validation: Check if all fields are filled and passwords match
  if (!username || !email || !password || !confirmPassword) {
    alert("Please fill in all fields.");
    return false; // Prevent form submission
  }

  if (password !== confirmPassword) {
    alert("Passwords do not match.");
    return false; // Prevent form submission
  }

  if (!agreeCheckbox.checked) {
    alert("Please agree to the terms and conditions.");
    return false; // Prevent form submission
  }

   // Display success message
   document.getElementById("success-message").style.display = "block";

   // Hide registration form
   document.getElementById("register-form").style.display = "none";
 
   // Show login form
   document.getElementById("login-form").style.display = "block";

  // If validation passes, allow form submission
  if (event.submitter.classList.contains('submit-btn')) {
    setTimeout(function() {
      login(); // Switch to login form
    }, 1000); // Adjust the delay time as needed (2 seconds in this example)
  }

  // If validation passes, allow form submission
  clearForm('register-form');
}

// Add event listeners to the forms for validation
document.getElementById("login-form").addEventListener("submit", validateLoginForm);
document.getElementById("register-form").addEventListener("submit", validateRegistrationForm);





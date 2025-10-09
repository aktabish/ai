// Placeholder for future JavaScript features
console.log("Welcome to AI Learner");

function validatePassword() {
	const password = document.getElementById("password").value;
	const error = document.getElementById("password-error");

	if (password.length < 8) 
	{
		error.style.display = 'block';
		error.textContent = "Password must be at least 8 characters long.";
		return false; // Prevent form submission
	}
	else
	{
		error.style.display = 'none';
		error.textContent = ""; // Clear error
		return true; // Allow form submission
	}
}

document.getElementById("signupForm").addEventListener("submit", function (event) {
    event.preventDefault(); // Prevent the form from submitting normally

    // Additional form validation logic can be added here

    // Submit the form
    this.submit();
});

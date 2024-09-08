// script.js
document.addEventListener("DOMContentLoaded", function() {
    var successParam = new URLSearchParams(window.location.search).get('success');
    if (successParam === '1') {
        alert("Login successful!"); // Display an alert if success parameter is set to 1
    }
});
// script.js

function showAlert() {
    alert("Login successful! Welcome to Makefit.");
}

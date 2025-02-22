function validateForm() {
    var password = document.getElementById('pwd').value;
    var reEnteredPassword = document.getElementById('Rpwd').value;
    var phoneNumber = document.getElementById('Phone').value;

    if (password !== reEnteredPassword) {
        alert('Passwords do not match. Please re-enter your password.');
        return false; // Prevent form submission
    }

    if (phoneNumber.length !== 10) {
        alert('Phone number must have exactly 10 characters.');
        return false; // Prevent form submission
    }


    return true; // Allow form submission
}

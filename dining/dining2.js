// Function to display a message when the "NEXT>>" button is clicked
/*function book() {
  var textField = document.getElementById("textField");
  textField.style.display = "block";
  textField.innerHTML = "This is the text that appears when you click the button.";
}*/
// Function to display an alert when the "NEXT>>" button is clicked
/*function book() {
  alert("This is an alert message that appears when you click the button.");
}*/
// Function to ask the user if they want to stay
function book() {
  var userResponse = confirm("please complete your inquiry");

  if (userResponse) {
    alert("You chose to stay.");
  } else {
    alert("You chose not to stay.");
  }
}

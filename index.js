function validate(){
  var fNameField = document.getElementById('fname');
  var lNameField = document.getElementById('lname');
  var emailField = document.getElementById('email');
  var titleField = document.getElementById('mestitle');
  var textField = document.getElementById('textarea');
  var emailFormat = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  if (fNameField.value ==="" && lNameField.value ==="" && emailField.value ==="" && titleField.value === "" && textField.value === "") {
   alert("Please fill all fields")
   }
  else if (fNameField.value === "") {
    alert("Please fill the First Name field");
    return false
  }
  else if (lNameField.value === ""){
   alert("Please fill the Last Name field")
  }
  else if (emailField.value ==="") {
   alert("Please fill the Email field")
  }
  else if (titleField.value ==="") {
   alert("Please fill the Title field")
  }
  else if (textField.value ==="") {
   alert("Please fill the Message field")
  }
  else if (fNameField.value.length < 4){
   alert("Please your First Name should have at least 4 characters")
  }
  else if (lNameField.value.length < 4){
   alert("Please your Last Name should have at least 4 characters")
  }
  else if (textField.value.length < 20){
   alert("Please your Message should have at least 20 characters")
  }
  if (emailFormat.test(emailField.value)=== true){
      console.log("Valid Email Address")
   }
   else{
       alert("Invalid Email Address")
   }
   
}
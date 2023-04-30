//alert("Hello JavaScript!");
//document.write("JavaScript Portion:::");
//console.log("This is the Second line inside script.");

function validateForm() {
  let nameInput = document.getElementById("input1");
  let passwordInput = document.getElementById("input2");

  // validate name field
  let nameValue = nameInput.value;
  if (nameValue == "") {
    document.getElementById("nameErr1").innerHTML = "Name can't be blank!";
    nameInput.style.borderColor = "red";
  } else {
    document.getElementById("nameErr1").innerHTML = "";
    nameInput.style.borderColor = "black";
  }

  // validate password field
  let passwordValue = passwordInput.value;
  if (passwordValue == "") {
    document.getElementById("nameErr2").innerHTML = "Password can't be blank!";
    passwordInput.style.borderColor = "red";
  } else {
    document.getElementById("nameErr2").innerHTML = "";
    passwordInput.style.borderColor = "black";
  }

  // return false if either of the fields is blank
  if (nameValue == "" || passwordValue == "") {
    return false; //if false, form will not be submitted
  }

  return true; //if true, form will be submitted
}

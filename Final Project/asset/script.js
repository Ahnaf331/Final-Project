function register() {
    let username = document.getElementById("username").value;
    let full_name = document.getElementById("full_name").value;
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;
    let password2 = document.getElementById("c_password").value;
    let gender = document.getElementById("gender").value;
    let date_of_birth = document.getElementById("date_of_birth").value;
  
    if (
      (username.value === "") |(full_name.value === "")| (email === "") | (password === "") | (c_password === "") | (gender === "") | (date_of_birth === "")
    ) {
      let msg = document.getElementById("msg");
  
      msg.innerHTML = "Please fill up all the fields!";
    } else {
      let xhttp = new XMLHttpRequest();
      xhttp.open("POST", "../Controller/regController.php");
      xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  
      xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("msg").innerHTML = this.responseText;
        }
      };
  
      xhttp.send(
        "username=" + username + "&fullname="+ full_name + "&email=" + email + "&password=" + password + "&gender="+ gender + "&date_of_birth=" + date_of_birth
      );
    }
  }
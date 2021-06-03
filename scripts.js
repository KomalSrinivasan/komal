        function verifyImage(e) {

          var image = document.getElementById('sign').value;
          // alert(image);
          var type = image.split(".");
          // alert(type[1]);
          if (type[1] == 'png' || type[1] == 'jpg' || type[1] == 'jpeg' || type[1] == 'PNG' || type[1] == 'JPEG' || type[1] == 'JPG') {
            // alert("hii");
            document.getElementById("sign_error").innerHTML = "";
            return true;
          } else {
            // alert("not hii");
            document.getElementById("sign_error").innerHTML = "Please choose png or jpg or jpeg file.";
            return false;
          }
        }

        function verifyjntu() {
          var format = document.getElementById('jntu').value;
          if (format == "") {
            document.getElementById("sign_error1").innerHTML = "Please choose Correct JNTU Number.";
            return false;
          }
          if (format.length < 10) {
            document.getElementById("sign_error1").innerHTML = "Please choose Correct JNTU Number.";
            return false;
          }
          if (format.length > 10) {
            document.getElementById("sign_error1").innerHTML = "sPlease choose Correct JNTU Number.";
            return false;
          } 
          else {
            // alert("not hii");
            document.getElementById("sign_error1").innerHTML = "Please choose Correct JNTU Number Format.";
            return false;
          }
        }

        function verifynumber() {
          var num = document.getElementById('phone').value;

          if (num == "") {
            document.getElementById("sign_error3").innerHTML = "Please enter a correct Mobile number.";
            return false;
          }
          if (isNaN(num)) {
            document.getElementById("sign_error3").innerHTML = "Please enter only numbers.";
            return false;
          }
          if (num.length < 10) {
            document.getElementById("sign_error3").innerHTML = "Please enter 10 digits Mobile number.";
            return false;
          }
          if (num.length > 10) {
            document.getElementById("sign_error3").innerHTML = "Please enter 10 digits Mobile number.";
            return false;
          }
        }

        function verifyyog() {
          var yoa = document.getElementById('yog').value;

          if (yoa == "") {
            document.getElementById("sign_error2").innerHTML = "Please enter a correct phone number.";
            return false;
          }
          if (yoa.length < 4) {
            document.getElementById("sign_error2").innerHTML = "Please enter 4 digits YEAR.";
            return false;
          }
          if (yoa.length > 4) {
            document.getElementById("sign_error2").innerHTML = "Please enter 4 digits YEAR.";
            return false;
          }
        }
        function verifymail(){
        	var mail = document.getElementById('email').value;
        	var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        	if(mail == ""){
            document.getElementById("sign_error4").innerHTML = "Please enter an Email Id.";
            return false;
          }
          if(mail.match(mailformat)){
          	document.getElementById("sign_error4").innerHTML = "";
            return true;
          }
          else{
          	document.getElementById("sign_error4").innerHTML = "Enter a valid Email Id";
          	return false;
          }
        }
        function verifyfname(){
        	var fname = document.getElementById('fname').value;
        	if(fname == ""){
        		document.getElementById("sign_error7").innerHTML = "Please Enter your First Name";
        		return false;
        	}
        	if(!isNaN(fname)){
        		document.getElementById("sign_error7").innerHTML = "Please Enter only Alphabets";
        		return false;
        	}
        }


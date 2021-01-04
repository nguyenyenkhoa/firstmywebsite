function validateForm() {
    var textSignupName, textSignupEmail, textSignupPass;

    var Expression = /^([a-zA-z0-9_\.\-])+\@(([a-zA-z0-9\-])+\.)+([a-zA-z0-9]{2,4})+$/;

    var SignupName = document.forms["myForm"]["fname"].value;
    var SignupEmail = document.forms["myForm"]["femail"].value;
    var SignupPass = document.forms["myForm"]["fpassword"].value;

    if (SignupName == "" || SignupName <= 5){
        textSignupName = "Không được để trống hoặc điền nhỏ hơn 5 ký tự!";
        document.getElementById("nameError").innerHTML = textSignupName;
        return false;
    }

    else if(SignupEmail == "" || (SignupEmail=!Expression)){
        textSignupEmail = "Không được để trống hoặc nhập email không hợp lệ!";
        document.getElementById("emailError").innerHTML = textSignupEmail;
        return false;
    }
    else if(SignupPass == "" || SignupPass <=5){
        textSignupPass = "Không được để trống hoặc điền nhỏ hơn 5 ký tự!";
        document.getElementById("pswError").innerHTML = textSignupPass;
        return false;
    }

   else {
       alert("Bạn đã đăng ký thành công!");
       return true;
   }
}
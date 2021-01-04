function validateFormLogin() {
    var textSigninName, textSigninEmail, textSigninPass;

    var Expression1 = /^([a-zA-z0-9_\.\-])+\@(([a-zA-z0-9\-])+\.)+([a-zA-z0-9]{2,4})+$/;

    var SigninName = document.forms["myLogin"]["fnameLogin"].value;
    var SigninEmail = document.forms["myLogin"]["fpswLogin"].value;
    var SigninPass = document.forms["myLogin"]["femailLogin"].value;

    if (SigninName == ""){
        textSigninName = "Vui lòng nhập tên!";
        document.getElementById("ErrorName_Login").innerHTML = textSigninName;
        return false;
    }

    
    else if(SigninPass == ""){
        textSigninPass = "Vui lòng nhập mật khẩu!";
        document.getElementById("ErrorPsw_Login").innerHTML = textSigninPass;
        return false;
    }
    else if(SigninEmail == "" || (SigninEmail=!Expression1)){
        textSigninEmail = "Vui lòng nhập Email và phải hợp lệ!";
        document.getElementById("ErrorEmail_Login").innerHTML =textSigninEmail;
        return false;
    }

   else {
       alert("Bạn đã đăng nhập thành công!");
       return true;
   }
}

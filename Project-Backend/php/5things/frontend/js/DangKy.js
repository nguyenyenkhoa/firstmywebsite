function validateform() {
    // var name = document.myform.name.value;
    //     var password = document.myform.password.value;
 
    //     if (name == null || name == "") {
    //         // alert("Name can't be blank");
    //         document.getElementById("loiName").innerHTML="Name can't be blank";
    //         return false;
    //     } else if (password.length < 6) {
    //         // alert("Password must be at least 6 characters long.");
    //         document.getElementById("loiPass").innerHTML="Password must be at least 6 characters long.";
    //         return false;
    //     }
    var user = document.frmdangky.kh_tendangnhap.value;
    var password = document.frmdangky.password.value;
    var name = document.frmdangky.kh_ten.value;
    var gender = document.frmdangky.kh_gioitinh.value;
    var address = document.frmdangky.kh_diachi.value;
    var phone = document.frmdangky.kh_dienthoa.value;
    var mail = document.frmdangky.kh_email.value;
    var Expression = /^([a-zA-z0-9_\.\-])+\@(([a-zA-z0-9\-])+\.)+([a-zA-z0-9]{2,4})+$/;
    var date = document.frmdangky.kh_ngaysinh.value;
    var month = document.frmdangky.kh_thangsinh.value;
    var year = document.frmdangky.kh_namsinh.value;
    var Id = document.frmdangky.kh_cmnd.value;

    if (user == null || user == "") {
        document.getElementById("loiUser").innerHTML="Bạn chưa tạo tên đăng nhập."
        // alert("BẠn chưa tạo tên đăng nhập");
        return false;
    }
    else if (password.length < 8) {
        document.getElementById("loiPassword").innerHTML="Mật khẩu phải dài hơn 8 ký tự.";
        // alert("Mật khẩu phải dài hơn 8 ký tự.");
        return false;
    }
    // else if(name == null || name == ""){
    //     document.getElementById("loiName").innerHTML="Bạn chưa nhập họ tên.";
    //     return false
    // }
    // else if(gender == null || gender == ""){
    //     document.getElementById("loiGender").innerHTML="Bạn chưa nhập giới tính.";
    //     return false;
    // }
    // else if(address == null || address == ""){
    //     document.getElementById("loiAddress").innerHTML="Bạn chưa nhập địa chỉ.";
    //     return false;
    // }
    // else if(phone == null || phone == ""){
    //     document.getElementById("loiPhone").innerHTML="Bạn chưa nhập số điện thoại.";
    //     return false;
    // }
    // else if(mail==null || mail=="" || mail!=Expression){
    //     document.getElementById("loiMail").innerHTML="Bạn chưa nhập email hoặc email không hợp lệ.";
    //     return false;
    // }
    // else if(date==null || date == ""){
    //     document.getElementById("loiDate").innerHTML="Bạn chưa nhập ngày sinh.";
    //     return false;
    // }
    // else if(month==null || month==""){
    //     document.getElementById("loiMonth").innerHTML="Bạn chưa nhập tháng sinh.";
    //     return false;
    // }
    // else if(year==null || year==""){
    //     document.getElementById("loiYear").innerHTML="Bạn chưa nhập năm sinh.";
    //     return false;
    // }
    // else if(Id==null || Id==""){
    //     document.getElementById("loiID"),innerHTML="Bạn chưa nhập CMND.";
    //     return false;
    // }
}
function no_such_user() {
    document.getElementById("verification-check").innerHTML = "Tên người dùng không tồn tại";
}

function verification_check(success) {
    if (success) {
        window.location.href = "../set_new_password.php";
    } else {
        document.getElementById("verification-check").innerHTML = "Sai câu trả lời";
    }
}
function register(){
fetch("../backend/auth/register.php",{
method:"POST",
body:JSON.stringify({
name:name.value,
email:email.value,
password:password.value
})
});
alert("Registration Successful");
window.location="login.html";
}

function login(){
fetch("../backend/auth/login.php",{
method:"POST",
body:JSON.stringify({
email:email.value,
password:password.value
})
});
window.location="dashboard.html";
}

function logout(){
window.location="login.html";
}

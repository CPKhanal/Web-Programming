function validation(){
    let username = document.getElementById('name').value;
    let password = document.getElementById('password').value;
    let email = document.getElementById("email").value;
    
   if(username==="" || email==="" || password===""){
        alert("Please fill all fields");
        return false;
    }
    else if (!email.includes("@") || !email.includes(".")) {
        alert("Please enter a valid email address");
        return false;
    }
    else {
        return true;
    }
}
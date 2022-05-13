function clearerror() {
    error = document.getElementsByClassName('formerror');

    for (let item of error) {
        item.innerHTML = "";
        
    }
    
}
function seterror(id, error) {

    element = document.getElementById(id);
    element.getElementsByClassName('formerror')[0].innerHTML = error;
}
function validateform(){

    clearerror();

    var fname = document.forms['myform']["fname"].value;

    if (fname.length == 0) {
        seterror('fname1',"**name cannot be blank");
        return false;

    }

    if (fname.length<3) {
        seterror('fname1',"**name should be of atleast two digits");
        return false;

    }
  

    var lname = document.forms['myform']["lname"].value;

    if (lname.length == 0) {
        seterror("lname1","**last name cannot be blank");
        return false;
        
    }else if(lname.length<3) {
        seterror("lname1","**last name should be of atleast two digits");
        return false;
        
    }

    var mobile = document.forms['myform']["mobile"].value;

    if (mobile.length == 0) {
        seterror("mobile1","**please enter your mobile number ");
        return false;
        
    }else if((isNaN(mobile))) {
        seterror("mobile1", "**mobile number cannot be a character ");
        return false;
        
    }
    else if((mobile.charAt(0)!=9) && (mobile.charAt(0)!=8) && (mobile.charAt(0)!=7)){
        seterror("mobile1","**please enter valid mobile number which starts with 9,8 or 7 ");
        return false;

    }else if(mobile.length!=10) {
        seterror("mobile1","**mobile no. should be of 10 digits ");
        return false;
        
    }

  

    var email = document.forms['myform']["email"].value;

    if (email.length == 0) {
        seterror("email1","**please enter your email id ");
        return false;
        
    }else if(email.length<7 || email.length>=50) {
        seterror("email1","**email should be between 7 to 50 charcters ");
        return false;
        
    }

    var username = document.forms['myform']["username"].value;

    if (username.length == 0) {
        seterror("username1","**please enter your username ");
        return false;
        
    }else if(username.length<5 || username.length>=50) {
        seterror("username1","**username should be between 5 to 50 charcters ");
        return false;
        
    }

    var password = document.forms['myform']["password"].value;

    if (password.length == 0) {
        seterror("password1","**please enter your password ");
        return false;
        
    }else if(password.length<5 || password.length>=50) {
        seterror("password1","**password should be between 5 to 50 charcters ");
        return false;
        
    }else if(password == username){
        seterror("password1","**password and username should not be same");
        return false;
    }

    var repassword = document.forms['myform']["repassword"].value;

    if (repassword.length == 0) {
        seterror("repassword1","**please enter your re-password ");
        return false;
        
    }else if(repassword != password) {
        seterror("repassword1","**password doesn't matches ");
        return false;
        
    }

    var address = document.forms['myform']["address"].value;

    if (address.length == 0) {
        seterror("address1","**please enter your address ");
        return false;
        
    }else if(( address.length <= 10 ) || (address.length >=100)) {
        seterror("address1","** invalid address");
        return false;
        
    }

    var landmark = document.forms['myform']["landmark"].value;

    if (landmark.length == 0) {
        seterror("landmark1","**please enter landmark ");
        return false;
        
    }else if(( landmark.length <= 3 ) || (landmark.length >=20)) {
        seterror("landmark1","** invalid landmark");
        return false;
        
    }

    var room = document.forms['myform']["room"].value;

    if (room.length == 0) {
        seterror("room1","**please enter your room/building no. ");
        return false;
        
    }else if(isNaN(room)) {
        seterror("room1","**invalid room number");
        return false;
        
    }

    var gender = document.myform.gender;

    if ((gender[0].checked != true) && (gender[1].checked != true)) {
        seterror("gender1","**please select your gender ");
        return false;
        
    }




   













































































    // var fname = document.getElementById('fname').value;
    // var lname = document.getElementById('lname').value;
    // var mobile = document.getElementById('mobile').value;
    // var email = document.getElementById('email').value;
    // var username = document.getElementById('username').value;
    // var password = document.getElementById('password').value;
    // var repassword = document.getElementById('re-password').value;

    // if (fname == "") {
    //     document.getElementById('fname1').innerHTML=" **please fill the first name";
    //     return false;
        
    // }
    // if (lname == "") {
    //     document.getElementById('lname1').innerHTML=" **please fill the last name ";
    //     return false;
        
    // }
    // if (mobile == "") {
    //     document.getElementById('mobile1').innerHTML=" **please fill the mobile number ";
    //     return false;
        
    // }
    // if (email == "") {
    //     document.getElementById('email1').innerHTML=" **please fill the email ";
    //     return false;
        
    // }
    // if (username == "") {
    //     document.getElementById('username1').innerHTML=" **please fill the username ";
    //     return false;
        
    // }
    // if (password == "") {
    //     document.getElementById('password1').innerHTML=" **please fill the password ";
    //     return false;
        
    // }
    // if (repassword == "") {
    //     document.getElementById('re-password1').innerHTML=" **again write password ";
    //     return false;
        
    // }
    // if ((myform.gender[0].checked == false) && ((myform.gender[1].checked == false)) {
    //     alert ( "Please choose your Gender: Male or Female" );
    //     return false;
        
    // }
    

    

    
}
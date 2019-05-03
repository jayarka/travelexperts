
//=====================regvalidchk.js==============================
//-------------------Author: Wei Guang Yan-------------------------

// --------Define functions that used in "register.php":-----------
// 1. Check whether all inputs are "OK": "isAllInputOk()";
// 2. Clean all input when click "Cancel" button: resetForm()";
// 3. Count the amount of character "n" in a string: "findStr(str,n)";
// 4. Define "onfocus" and "onblur" event of each input cell.
//=================================================================

function isAllInputOk(){
// when click "Register", 
// check whether all input show message are "OK!"? 
// if yes, submit form to "regconvert.php";
// if no, pop up error message
    var flag=true;
    var aP=document.getElementsByClassName('msg');
    var aPLen=aP.length;
/*
    //------For testing, print testing title-------
    document.getElementById("demo").innerHTML=
            "Message feedback of each input: <br>";
    //---------------need continue-----------------
*/
    for(var i=0; i<aPLen; i++){
/*
    //-------For testing: show each massage--------
        document.getElementById("demo").innerHTML=
            document.getElementById("demo").innerHTML+i+": "+
            aP[i].innerHTML+"<br>";
    //-----------------Test end-----------------
*/
        if(aP[i].innerHTML!='OK!'){
            flag=false;
        }
    }
    if(flag==true){
        document.getElementById("fm1").submit();
    }
    else{
        alert("Oops! Some information were not filled correctly! \n"+
        "Please correct error(s) before submitting.");
    }
}

function resetForm(){
// When click button "cancel" in "register" page (register form), redirect to privious page.
    document.getElementById("fm1").reset();
    document.getElementById("fm2").action="index.php";
    document.getElementById("fm2").submit();
}

function findStr(str,n){
// count how many same characters "n" in the string "str"
    var tmp=0;
    for(var i=0; i<str.length; i++){
        if(str.charAt(i)==n){
            tmp++;
        }
    }
    return tmp;
}

window.onload=function(){
// Import input and message from form "fm1", 
// Define validation functions and event functions of 
// "onfocus" and "onblur" for each input and show related message.

    var aInput=document.getElementsByClassName('text');
    var uid=aInput[0];
    var pwd=aInput[1];
    var pwd2=aInput[2];
    var fname=aInput[3];
    var lname=aInput[4];
    var adrs=aInput[5];
    var city=aInput[6];
    var prov=aInput[7];
    var postc=aInput[8];
    var country=aInput[9];
    var homeph=aInput[10];
    var busph=aInput[11]
    var email=aInput[12];
    var aP=document.getElementsByClassName('msg');
    var uid_msg=aP[0];
    var pwd_msg=aP[1];
    var pwd2_msg=aP[2];
    var fname_msg=aP[3];
    var lname_msg=aP[4];
    var adrs_msg=aP[5];
    var city_msg=aP[6];
    var prov_msg=aP[7];
    var postc_msg=aP[8];
    var country_msg=aP[9];
    var homeph_msg=aP[10];
    var busph_msg=aP[11];
    var email_msg=aP[12];
    var count=document.getElementById('count');
    var name_length=0;

/*------------ User ID -----------*/
    //Onfocus: show requirement of customer ID format.
    uid.onfocus=function(){
        uid_msg.style.display="block";
        uid_msg.innerHTML='5-25 letters or numbers, no space, start with a letter.';
        uid_msg.style.color="black";
    }

    // check: invalid character, not empty, length less than 5 or more than 25 characters.
    uid.onblur=function(){  
        var reg=/[^\w]/g;
        var regFirst=/^[^a-zA-Z]/g;
        if(this.value==""){
            uid_msg.innerHTML='It cannot be empty!';
            uid_msg.style.color="red";
        }
        else if(this.value.length<5){
            uid_msg.innerHTML='Length is less than 5 letters!';
            uid_msg.style.color="red";
        }
        else if(this.value.length>25){
            uid_msg.innerHTML='Length is more than 25 letters!';
            uid_msg.style.color="red";
        }
        else if(reg.test(this.value)){
            uid_msg.innerHTML='Special character(s) and space(s) are not allowed!';
            uid_msg.style.color="red";
        }
        else if(regFirst.test(this.value)){
            uid_msg.innerHTML='First letter should be a letter!';
            uid_msg.style.color="red";
        }
        else{
            uid_msg.innerHTML='OK!';
            uid_msg.style.color="green";
        }
    }

/*------------ Password -----------*/
    //Onfocus: show requirement of Password format.
    pwd.onfocus=function(){
        pwd_msg.style.display="block";
        pwd_msg.innerHTML='<i class="ati"></i>8-20 characters, AT LEAST one uppercase, one lowercase letter and one numerical character, NO space.';
        pwd_msg.style.color="black";
    }
/*  // Disibled confirm password if less than 6 letters
    pwd.onkeyup=function(){

        if(this.value.length>5){
            pwd2.disabled=true;
            pwd2_msg.style.display="block";
        }
        else{
            pwd2.setAttribute("disabled");
            pwd2_msg.style.display="none";
        }
    }
*/
    pwd.onblur=function(){
        var m=findStr(pwd.value, pwd.value[0]);
        var regNum=/[\d]/g;
        var regLow=/[a-z]/g;
        var regUpp=/[A-Z]/g;
        var regSp=/\s/g;
        pwd2_msg.innerHTML='';
        //Cannot be empty
        if(this.value==""){
            pwd_msg.innerHTML='Password cannot be empty!';
            pwd_msg.style.color="red";
        }
        //Length should from 8 to 20 characters
        else if(this.value.length<8){
            pwd_msg.innerHTML='Length is less than 8 characters!';
            pwd_msg.style.color="red";
        }
        else if(this.value.length>20){
            pwd_msg.innerHTML='Length is more than 20 characters!';
        }
        //Space is not allowed 
        else if(regSp.test(this.value)){
            pwd_msg.innerHTML='There is space(s) in password!';
            pwd_msg.style.color="red";
        }
        //All characters cannot be the same character
        else if(m==this.value.length){
            pwd_msg.innerHTML='All characters cannot be same!';
            pwd_msg.style.color="red";
        }
        //Should have numerical characters
        else if(!regNum.test(this.value)){
            pwd_msg.innerHTML='It should have numerical character(s)!';
            pwd_msg.style.color="red";
        }
        //should have lower case letters
        else if(!regLow.test(this.value)){
            pwd_msg.innerHTML='It should have lower case letter(s)!';
            pwd_msg.style.color="red";
        }
        //should have upper case letters
        else if(!regUpp.test(this.value)){
            pwd_msg.innerHTML='It should have upper case letter(s)!';
            pwd_msg.style.color="red";
        }
        //OK
        else{
            pwd_msg.innerHTML='OK!';
            pwd_msg.style.color="green";
        }
    }

/*------ Confrim Password ------*/
    pwd2.onfocus=function(){
        pwd2_msg.style.display="block";
        pwd2_msg.innerHTML='Please type your password again.';
        pwd2_msg.style.color="black";
    }

    pwd2.onblur=function(){
        if(this.value!=pwd.value){
            pwd2_msg.innerHTML='Two passwords are different!';
            pwd2_msg.style.color="red";
        }
        else if(this.value.length<1){
            pwd2_msg.innerHTML='Password cannot be empty!';
            pwd2_msg.style.color="red";
        }
        else{
            pwd2_msg.innerHTML='OK!';
            pwd2_msg.style.color="green";
        }
    }

/*------------ First Name -----------*/
    //Onfocus: show requirement of first name format.
    fname.onfocus=function(){
        fname_msg.style.display="block";
        fname_msg.innerHTML='2-25 letters, can be several words, capitalized first letter each word.';
        fname_msg.style.color="black";
    }

    // check: invalid character,  length less than 5 or more than 25 characters.
    fname.onblur=function(){
    //    var reg=/^[A-Z][\sa-zA-Z]+$/;
        var regSpecial=/[^\w\s]/g;
        var regNum=/[\d]/g;
        var regSp=/\s/g;
        var regFirst=/^[^A-Z]/g;
        var regSpLow=/\s[a-z]/g;
        var regLowUp=/[a-zA-Z][A-Z]/g;
        if(this.value==""){
            fname_msg.innerHTML='Name cannot be empty!';
            fname_msg.style.color="red";
        }
        else if(this.value.length<2){
            fname_msg.innerHTML='Length is less than 2 letters!';
            fname_msg.style.color="red";
        }
        else if(this.value.length>25){
            fname_msg.innerHTML='Length is mor than 25 letters!';
            fname_msg.style.color="red";
        }
        else if(regSpecial.test(this.value)){
            fname_msg.innerHTML='No special character(s) permit in name!';
            fname_msg.style.color="red";
        }
        else if(regNum.test(this.value)){
            fname_msg.innerHTML='No numerical character(s) permit in name!';
            fname_msg.style.color="red";
        }
        else if(regFirst.test(this.value)){
            fname_msg.innerHTML='First letter should be capitalized!';
            fname_msg.style.color="red";
        }
        else if(regLowUp.test(this.value)){
            fname_msg.innerHTML='All letters except for first one should be lowercase!';
            fname_msg.style.color="red";
        }
        else if(regSp.test(this.value)){
            //Name is more than one word
            if(regSpLow.test(this.value)){
                fname_msg.innerHTML='First letter of each word should be capitalized!';
                fname_msg.style.color="red";
            }
            else{
                fname_msg.innerHTML='OK!';    
                fname_msg.style.color="green";
            }
        }
        else{
            fname_msg.innerHTML='OK!';
            fname_msg.style.color="green";
        }
    }

/*------------ Last Name -----------*/
    //Onfocus: show requirement of first name format.
    lname.onfocus=function(){
        lname_msg.style.display="block";
        lname_msg.innerHTML='2-25 letters, one word only, capitalized first letter.';
        lname_msg.style.color="balck";
    }

    // check: invalid character,  length less than 5 or more than 20 characters.
    lname.onblur=function(){
        var regSpecial=/[^\w]/g;
        var regNum=/[\d]/g;
        var regFirst=/^[^A-Z]/g;
        if(this.value==""){
            lname_msg.innerHTML='Name cannot be empty!';
            lname_msg.style.color="red";
        }
        else if(this.value.length<2){
            lname_msg.innerHTML='Length is less than 2 letter!';
            lname_msg.style.color="red";
        }
        else if(this.value.length>25){
            lname_msg.innerHTML='Length is more than 25 letters!';
            lname_msg.style.color="red";
        }
        else if(regSpecial.test(this.value)){
            lname_msg.innerHTML='Name cannot use special character(s) and space(s)!';
            lname_msg.style.color="red";
        }
        else if(regNum.test(this.value)){
            lname_msg.innerHTML='Name cannot use numerical character(s)!';
            lname_msg.style.color="red";
        }
        else if(regFirst.test(this.value)){
            lname_msg.innerHTML='First letter should be capitalized!';
            lname_msg.style.color="red";
        } 
        else{
            lname_msg.innerHTML='OK!';
            lname_msg.style.color="green";
        }
    }

/*------------ Address -----------*/
    //Onfocus: show format requirement.
    adrs.onfocus=function(){
        adrs_msg.style.display="block";
        adrs_msg.innerHTML='3-75 characters, including letters, numbers, space, "-" "." "," and "#".';
        adrs_msg.style.color="black";
    }

    // check: invalid character,  length less than 5 or more than 25 characters.
    adrs.onblur=function(){
        var regSpecial=/[^\w\s\.\-#,]/g;
        if(this.value==""){
            adrs_msg.innerHTML='It cannot be empty!';
            adrs_msg.style.color="red";
        }
        else if(this.value.length<3){
            adrs_msg.innerHTML='Length is less than 3 letters!';
            adrs_msg.style.color="red";
        }
        else if(this.value.length>75){
            adrs_msg.innerHTML='Length is more than 75 letters!';
            adrs_msg.style.color="red";
        }
        else if(regSpecial.test(this.value)){
            adrs_msg.innerHTML='Address cannot use special character(s)!';
            adrs_msg.style.color="red";
        }
        else{
            adrs_msg.innerHTML='OK!';
            adrs_msg.style.color="green";
        }
    }

/*------------ City -----------*/
    //Onfocus: show format requirement.
    city.onfocus=function(){
        city_msg.style.display="block";
        city_msg.innerHTML='3-50 letters, capitalized first letter.';
        city_msg.style.color="black";
    }

    // check: invalid character,  length less than 3 or more than 50 characters.
    city.onblur=function(){
        var regSpecial=/[^\w\s\.]/g;
        var regNum=/[\d]/g;
        var regSp=/\s/g;
        var regFirst=/^[^A-Z]/g;
        var regSpLow=/\s[a-z]/g;
        if(this.value==""){
            city_msg.innerHTML='It cannot be empty!';
            city_msg.style.color="red";
        }
        else if(this.value.length<3){
            city_msg.innerHTML='Length is less than 3 letters!';
            city_msg.style.color="red";
        }
        else if(this.value.length>50){
            city_msg.innerHTML='Length is mor than 50 letters!';
            city_msg.style.color="red";
        }
        else if(regSpecial.test(this.value)){
            city_msg.innerHTML='No special character(s) permit in the city name!';
            city_msg.style.color="red";
        }
        else if(regNum.test(this.value)){
            city_msg.innerHTML='No numerical character(s) permit in the city name!';
            city_msg.style.color="red";
        }
        else if(regFirst.test(this.value)){
            city_msg.innerHTML='First letter should be capitalized!';
            city_msg.style.color="red";
        }
        else if(regSp.test(this.value)){
            // Name more than one word
            if(regSpLow.test(this.value)){
                city_msg.innerHTML='First letter of each word should be capitalized!';
                city_msg.style.color="red";
            }
            else{
                city_msg.innerHTML='OK!';    
                city_msg.style.color="green";
            }
        }
        else{
            // Single-word name
            city_msg.innerHTML='OK!';
            city_msg.style.color="green";
        }
    }

/*------ Province -------*/
    prov.onfocus=function(){
        prov_msg.style.display="block";
        prov_msg.innerHTML='Please select province you live.';
        prov_msg.style.color="black";
    }

    prov.onblur=function(){ 
        if(this.value==""){
           prov_msg.innerHTML='Please select province you live!';
           prov_msg.style.color="red";
        }
        else{
            prov_msg.innerHTML='OK!';
            prov_msg.style.color="green";
        }
    }

/*------ Postcode -------*/
    //Onfocus: show requirement of postcode format.
    postc.onfocus=function(){
        postc_msg.style.display="block";
        postc_msg.innerHTML='Please enter postcode in format "X#X #X#"';
        postc_msg.style.color="black";
    }

    // check: valid format.
    postc.onblur=function(){ 
        var reg = /[A-Za-z]\d[A-Za-z] ?\d[A-Za-z]\d/;
        if(this.value==""){
           postc_msg.innerHTML='Please fill in postcode!';
           postc_msg.style.color="red";
        }
        else if(!reg.test(this.value)){
            postc_msg.innerHTML='It is not the format of Canadian postal code!';
            postc_msg.style.color="red";
        }
        else{
            postc_msg.innerHTML='OK!';
            postc_msg.style.color="green";
        }
    }

/*------ Country -------*/
    country.onfocus=function(){
        country_msg.style.display="block";
        country_msg.innerHTML='Please select country you live.';
        country_msg.style.color="black";
    }

    country.onblur=function(){ 
        if(this.value==""){
           country_msg.innerHTML='Please select country you live!';
           country_msg.style.color="red";
        }
        else{
            country_msg.innerHTML='OK!';
            country_msg.style.color="green";
        }
    }
    
/*------ Home Phone ------*/
    //Onfocus: show requirement of phone number format.
    homeph.onfocus=function(){
        homeph_msg.style.display="block";
        homeph_msg.innerHTML='Phone number in format "(###) ###-####" (10 digital number)';
        homeph_msg.style.color="black";
    }

    // check: valid format.
    homeph.onblur=function(){ 
        var reg =/\(\d{3}\)\s?[0-9]{3}-[0-9]{4}$/;
        if(this.value==""){
           homeph_msg.innerHTML='It cannot be empty!';
           homeph_msg.style.color="red";
        }
        else if(!reg.test(this.value)){
            homeph_msg.innerHTML='There should be only 10 numerical characters in format "(###) ###-####"!';
            homeph_msg.style.color="red";
        }
        else{
            homeph_msg.innerHTML='OK!';
            homeph_msg.style.color="green";
        }
    }

/*------ Business Phone ------*/
//Onfocus: show requirement of phone number format.
busph.onfocus=function(){
    busph_msg.style.display="block";
    busph_msg.innerHTML='Phone number in format "(###) ###-####" (10 digital number)';
}

// check: valid format.
busph.onblur=function(){ 
    var reg =/\(\d{3}\)\s?[0-9]{3}-[0-9]{4}$/;
    if(this.value==""){
       busph_msg.innerHTML='It cannot be empty!';
    }
    else if(!reg.test(this.value)){
        busph_msg.innerHTML='There should be only 10 numerical characters in format "(###) ###-####"!';
        busph_msg.style.color="red";
    }
else{
        busph_msg.innerHTML='OK!';
        busph_msg.style.color="green";
    }
}

/*------ Email -------*/
    //Onfocus: show requirement of postcode format.
    email.onfocus=function(){
        email_msg.style.display="block";
        email_msg.innerHTML='Please enter your email "xxx.xxx@xxx.xxx"';
        email_msg.style.color="black";
    }

    // check: valid format.
    email.onblur=function(){ 
        var reg = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/;
        if(this.value==""){
           email_msg.innerHTML='Email cannnot be empty';
           email_msg.style.color="red";
        }
        else if(!reg.test(this.value)){
            email_msg.innerHTML='It is not a valid email!';
            email_msg.style.color="red";
        }
        else{
            email_msg.innerHTML='OK!';
            email_msg.style.color="green";
        }
    }
}

/*---postcode format-------    
<p>Please enter your phone number in format (XXX) XXX-XXXX</p>
        $reg = "/\(\d{3}\)\s?[0-9]{3}-[0-9]{4}$/";
        
        if(!preg_match($reg,trim($_POST['phone']))) {
            print("<script> document.forms[0].phone.focus(); </script>");
            die("Please check your phone number format");
            
        }
        echo "Thanks for entering your phone number!";

/*------ Email tegex-email.php ------
    $reg = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";

    if(preg_match($reg,"amw124@gmail.com")) 
    {
        echo "pattern matched";
    }
    else 
    {
        echo "pattern did not match";
    }
*/



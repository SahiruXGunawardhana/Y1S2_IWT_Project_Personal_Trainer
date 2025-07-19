function checkPassword(){
    var password = document.getElementById("pwd").value;
    var repeatPassword = document.getElementById("pwd1").value;

    if(password !== repeatPassword)
        {
            alert("Passwords are missmatching!");
            return false;
        }
        else{
            alert("Congratulations!You successfully updated your profile");
            return true;
        }
}


/*function alertCheckbox(){
    const termsConditions = document.getElementById("checkbox1");
    const privacyPolicy = document.getElementById("checkbox2");

    if(termsConditions.checked || privacyPolicy.checked)
        {
            alert("You must agree to our terms and conditions and privacy policy");
            return false;//prevent form submission
        }
        else{
            return true;//Allow form submission
        }
}
*/







function enableSignupButton(){
    const termsConditions = document.getElementById("checkbox1");
    const privacyPolicy = document.getElementById("checkbox2");
    const signupButton = document.getElementById("btn-signup");

    signupButton.disabled = !(termsConditions.checked && privacyPolicy.checked);

    if(termsConditions.checked && privacyPolicy.checked)
        {
            signupButton.disabled = false;
            
        }
        else{
            signupButton.disabled = true;
            
        }

        
}
window.onload = function() {
    enableSignupButton(); // Set initial state of the signup button

    document.getElementById("checkbox1").addEventListener('change', enableSignupButton);
    document.getElementById("checkbox2").addEventListener('change', enableSignupButton);
};
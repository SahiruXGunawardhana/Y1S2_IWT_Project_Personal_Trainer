function enableButton() {
    var emailInput = document.getElementById("email");
    var submitBtn = document.getElementById("submitBtn");
    
    // Enable the submit button if the email input is filled
    if (emailInput.value.trim() !== "") {
        submitBtn.disabled = false; // Enable button
    } else {
        submitBtn.disabled = true; // Disable button
    }
}
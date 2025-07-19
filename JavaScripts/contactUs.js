/*enable submit when check box is checked*/
function enableButton() {
    if (document.getElementById("checkBox").checked) {
        document.getElementById("submitBtn").disabled = false;
    } else {
        document.getElementById("submitBtn").disabled = true;
    }
}

/*give alert after when clicking submit button if required fields are filled*/
function handleSubmit() {
    // Checking if all required fields are filled
    const form = document.getElementById("contactForm");
    if (form.checkValidity()) {
        alert("Form submitted successfully!");
        return true; // allow form to be submitted
    } else {
        alert("Please fill all the required fields.");
        return false; // prevent form submission
    }
}


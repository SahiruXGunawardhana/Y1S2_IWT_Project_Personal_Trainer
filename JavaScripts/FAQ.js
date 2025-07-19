// Function to toggle the visibility of the answer
function toggleAnswer(answerId,button) {
    // Select the answer element using its ID
    const answer = document.getElementById(answerId);
    
    // Check if the answer is currently hidden or not displayed
    if (answer.style.display === "none" || answer.style.display === "") {
        // If the answer is hidden, show it by setting display to 'block'
        answer.style.display = "block";
        button.textContent = "Hide Answer";
    } else {
        // If the answer is already visible, hide it by setting display to 'none'
        answer.style.display = "none";
        button.textContent = "Show Answer";

}
}
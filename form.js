document.addEventListener("DOMContentLoaded", function () {
    // Assuming your form has an ID "studentForm"
    var form = document.getElementById("studentForm");

    form.addEventListener("submit", function (event) {
        event.preventDefault(); // Prevent the form from submitting normally

        // Your AJAX or form submission logic goes here
        // For simplicity, let's assume the data is successfully added
        // Replace the following line with your actual success logic
        var isSuccess = true;

        if (isSuccess) {
            // Display a success message using alert
            alert("Student added successfully!");
        } else {
            // Display an error message if something goes wrong
            alert("Failed to add student. Please try again.");
        }
    });
});

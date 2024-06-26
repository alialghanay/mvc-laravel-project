import axios from "axios";

function deleteAllStudents() {
    axios
        .post("/api/deleteAll")
        .then((response) => {
            if (response.data.success) {
                // Optionally show a success message
                alert(response.data.message);
                // Reload the page or update UI as needed
                location.reload();
            } else {
                alert("Failed to delete students: " + response.data.message);
            }
        })
        .catch((error) => {
            console.error("Error:", error);
            alert("An error occurred while deleting students.");
        });
}

window.deleteAllStudents = deleteAllStudents;

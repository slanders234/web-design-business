function toggleDarkMode() {
    document.body.classList.toggle("dark");
}

function validateForm() {
    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;

    if (name === "" || email === "") {
        alert("Please fill all fields");
        return false;
    }

    if (!email.includes("@")) {
        alert("Enter a valid email");
        return false;
    }

    return true;
}

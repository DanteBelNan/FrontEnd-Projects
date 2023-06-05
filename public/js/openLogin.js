document.addEventListener("DOMContentLoaded", function() {
    const profileData = document.getElementById("profile-data");
    const login = document.querySelector(".login");

    profileData.addEventListener("click", function() {
        login.classList.toggle("hdn");
        login.classList.toggle("shwn");
    });
});
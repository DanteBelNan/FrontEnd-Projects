document.addEventListener("DOMContentLoaded", function() {
    const profileData = document.querySelector(".openLogin");
    const login = document.querySelector(".login");

    profileData.addEventListener("click", function() {
        login.classList.toggle("hdn");
        login.classList.toggle("shwn");
    });
});
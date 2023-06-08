document.addEventListener("DOMContentLoaded", function() {
    const loginLock1 = document.querySelector(".loginLock1");
    const loginLock2 = document.querySelector(".loginLock2");
    const login = document.querySelector(".login");

    firstLock = false;
    secondLock = false;

    loginLock1.addEventListener("click", function() {
        firstLock = true;
        console.log("First lock passed");
        if(firstLock && secondLock){
            login.classList.toggle("hdn");
            login.classList.toggle("shwn");
        }
    });

    loginLock2.addEventListener("click", function() {
        secondLock = true;
        console.log("Second lock passed");
        if(firstLock && secondLock){
            login.classList.toggle("hdn");
            login.classList.toggle("shwn");
        }
    });
});
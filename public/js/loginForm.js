document.addEventListener("DOMContentLoaded", function() {
    const loginLock1 = document.querySelector(".loginLock1");
    const loginLock2 = document.querySelector(".loginLock2");
    const closeButton = document.querySelector(".closeButton");
    const login = document.querySelector(".login");

    firstLock = false;
    secondLock = false;

    loginLock1.addEventListener("click", function() {
        firstLock = true;
    });

    loginLock2.addEventListener("click", function() {
        secondLock = true;
        if(firstLock && secondLock){
            if(login.classList.contains('hdn')){
                login.classList.remove('hdn');
                login.classList.add('shwn');
            }
        }
    });

    closeButton.addEventListener("click",function(){
        secondLock= false;
        firstLock = false;

        login.classList.remove('shwn');
        login.classList.add('hdn');
    })
});
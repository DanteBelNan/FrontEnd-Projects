function toggleDropdown(dropdownToggle) {
    var dropdownMenu = dropdownToggle.nextElementSibling;
    var dropdownImg = dropdownToggle.querySelector('img');
  
    //dropdownMenu.style.display = (dropdownMenu.style.display === "block") ? "none" : "block";
    //dropdownMenu.style.maxHeight = (dropdownMenu.style.display === "0vh") ? "fit-content" : "0vh";

    dropdownMenu.classList.toggle('hidden');
    dropdownMenu.classList.toggle('shown');

    dropdownImg.classList.toggle('rotated');
    dropdownImg.classList.toggle('unrotated');


  }
  
  function selectOption(dropdownItem, option) {
    var dropdownToggle = dropdownItem.parentElement.previousElementSibling;
    //dropdownToggle.innerHTML = "Opción " + option; //Esto reasigna el valor del texto a la variable dropdown
    //toggleDropdown(dropdownToggle);
  }
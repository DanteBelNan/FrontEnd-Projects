function toggleDropdown(dropdownToggle) {
    var dropdownMenu = dropdownToggle.nextElementSibling;
    dropdownMenu.style.display = (dropdownMenu.style.display === "block") ? "none" : "block";
  }
  
  function selectOption(dropdownItem, option) {
    var dropdownToggle = dropdownItem.parentElement.previousElementSibling;
    //dropdownToggle.innerHTML = "Opción " + option; //Esto reasigna el valor del texto a la variable dropdown
    //toggleDropdown(dropdownToggle);
  }
function toggleDropdown(dropdownToggle) {
    var dropdownMenu = dropdownToggle.nextElementSibling;
    dropdownMenu.style.display = (dropdownMenu.style.display === "block") ? "none" : "block";
  }
  
  function selectOption(dropdownItem, option) {
    var dropdownToggle = dropdownItem.parentElement.previousElementSibling;
    dropdownToggle.innerHTML = "Opción " + option;
    toggleDropdown(dropdownToggle);
  }
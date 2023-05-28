function toggleDropdown(dropdownToggle) {
    var dropdownMenu = dropdownToggle.nextElementSibling;
    var dropdownImg = dropdownToggle.querySelector('img');
  
    dropdownMenu.style.display = (dropdownMenu.style.display === "block") ? "none" : "block";
    dropdownImg.classList.toggle('rotated');

    if (!dropdownImg.classList.contains('rotated')) {
        dropdownImg.classList.add('unrotated');
    }
    if(dropdownImg.classList.contains('rotated')){
        dropdownImg.classList.remove('unrotated');
    }

  }
  
  function selectOption(dropdownItem, option) {
    var dropdownToggle = dropdownItem.parentElement.previousElementSibling;
    //dropdownToggle.innerHTML = "Opción " + option; //Esto reasigna el valor del texto a la variable dropdown
    //toggleDropdown(dropdownToggle);
  }
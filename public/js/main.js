// _______________________________pop-up_______________________

// desctop
function showModal() {
    var modal = document.getElementById("myModal");
    modal.style.display = "block";
}

function closeModal() {
    var modal = document.getElementById("myModal");
    modal.style.display = "none";
}

// mobile
function showModal2() {
    var modal2 = document.getElementById("myModal2");
    modal2.style.display = "block";
}

function closeModal2() {
    var modal2 = document.getElementById("myModal2");
    modal2.style.display = "none";
}



// _____________________________plus options________________________

    // for descktop
function toggleDropdown() {
    var dropdown = document.getElementById("optionsDropdown");
    dropdown.classList.toggle("hidden");
  }
  

  document.addEventListener("click", function(event) {
    var dropdown = document.getElementById("optionsDropdown");
    var menuButton = document.getElementById("optionsMenu");
    if (!menuButton.contains(event.target) && !dropdown.contains(event.target)) {
      dropdown.classList.add("hidden");
    }
  });

    //  for mobile

  function toggleDropdown2() {
    var dropdown = document.getElementById("optionsDropdown2");
    dropdown.classList.toggle("hidden");
  }
  

  document.addEventListener("click", function(event) {
    var dropdown = document.getElementById("optionsDropdown2");
    var menuButton = document.getElementById("optionsMenu2");
    if (!menuButton.contains(event.target) && !dropdown.contains(event.target)) {
      dropdown.classList.add("hidden");
    }
  });

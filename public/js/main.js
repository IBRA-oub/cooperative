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

  // _________________________pop up add periode____________________

 
function showModal3() {
  var modal3 = document.getElementById("myModal3");
  modal3.style.display = "block";
}

function closeModal3() {
  var modal3 = document.getElementById("myModal3");
  modal3.style.display = "none";
}

// _________________________pop up add produitplanter____________________

 
function showModal4() {
  var modal4 = document.getElementById("myModal4");
  modal4.style.display = "block";
}

function closeModal4() {
  var modal4 = document.getElementById("myModal4");
  modal4.style.display = "none";
}

// _________________________pop up add materiaux/outils____________________

 
function showModal5() {
  var modal5 = document.getElementById("myModal5");
  modal5.style.display = "block";
}

function closeModal5() {
  var modal5 = document.getElementById("myModal5");
  modal5.style.display = "none";
}

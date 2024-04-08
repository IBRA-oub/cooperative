// _______________________________pop-up_______________________

// desctop
function showModal(userId , type) {
    var modal = document.getElementById("myModal");
    modal.style.display = "block";

    document.getElementById("userIdInput").value = userId;
    document.getElementById("userType").value = type;
}

function closeModal() {
    var modal = document.getElementById("myModal");
    modal.style.display = "none";
}

// mobile
function showModal2(userId , type) {
    var modal2 = document.getElementById("myModal2");
    modal2.style.display = "block";

    document.getElementById("userIdInput1").value = userId;
    document.getElementById("userType1").value = type;
}

function closeModal2() {
    var modal2 = document.getElementById("myModal2");
    modal2.style.display = "none";
}



// _____________________________plus options________________________

    // for mobil

    document.addEventListener("DOMContentLoaded", function() {
      let optionsMenu2Buttons = document.querySelectorAll('.optionsMenuButton');
      optionsMenu2Buttons.forEach(function(button) {
          button.addEventListener('click', function() {
              // Sélectionnez l'élément du menu déroulant suivant
              var dropdown = button.nextElementSibling;
  
              
              dropdown.classList.toggle("hidden");
          });
      });
  });
  
  document.addEventListener("click", function(event) {
    var dropdowns = document.querySelectorAll(".optionsDropdown");
    var menuButtons = document.querySelectorAll(".optionsMenuButton");

    dropdowns.forEach(function(dropdown, index) {
        var menuButton = menuButtons[index];
        if (!menuButton.contains(event.target) && !dropdown.contains(event.target)) {
            dropdown.classList.add("hidden");
        }
    });
});

    //  for desktop

    document.addEventListener("DOMContentLoaded", function() {
      let optionsMenu2Buttons = document.querySelectorAll('.optionsMenu2Button');
      optionsMenu2Buttons.forEach(function(button) {
          button.addEventListener('click', function() {
              // Sélectionnez l'élément du menu déroulant suivant
              var dropdown = button.nextElementSibling;
  
              
              dropdown.classList.toggle("hidden");
          });
      });
  });
  
  document.addEventListener("click", function(event) {
    var dropdowns = document.querySelectorAll(".optionsDropdown2");
    var menuButtons = document.querySelectorAll(".optionsMenu2Button");

    dropdowns.forEach(function(dropdown, index) {
        var menuButton = menuButtons[index];
        if (!menuButton.contains(event.target) && !dropdown.contains(event.target)) {
            dropdown.classList.add("hidden");
        }
    });
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

// _________________________pop up add publiciter____________________

 
function showModal6() {
  var modal6 = document.getElementById("myModal6");
  modal6.style.display = "block";
}

function closeModal6() {
  var modal6 = document.getElementById("myModal6");
  modal6.style.display = "none";
}

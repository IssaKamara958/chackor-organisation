let navigate = document.querySelectorAll(".container ul li");
navigate.forEach(function (element) {
  element.addEventListener(
    "mouseenter",
    function (event) {
      element.style.backgroundColor = "#d8980e";
    },
    false
  );
  element.addEventListener(
    "mouseleave",
    function (event) {
      element.style.backgroundColor = "#dac50e";
    },
    false
  );
});

const subscript = document.getElementById("email").addEventListener("click", function() {
   let nom = prompt("Veuillez indiquer votre adresse mail !!!",alert('Bienvenu dans CHACKOR ORGANISATION !'))
  }
  );

  const button = document.getElementById("btn").addEventListener("click", function(){
     alert('Les données du formulaire seront soumises au serveur!')});
     
  

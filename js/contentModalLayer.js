const cModal = document.getElementById("contentModal");
const cBtn = document.getElementById("contentBtn");
const cSpan = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
cBtn.onclick = function() {
  cModal.style.display = "flex";
}

// When the user clicks on <span> (x), close the modal
cSpan.onclick = function() {
  cModal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
// window.onclick = function(event) {
//   if (event.target == cModal) {
//     cModal.style.display = "none";
//   }
// }
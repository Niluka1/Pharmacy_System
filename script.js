const supportBtn = document.getElementById('support');
const popup = document.getElementById('popup');
const closeBtn = document.getElementById('close-btn');

supportBtn.addEventListener('click', function() {
  popup.classList.remove('hidden');
});

closeBtn.addEventListener('click', function() {
  popup.classList.add('hidden');
});


// login form css
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }

}
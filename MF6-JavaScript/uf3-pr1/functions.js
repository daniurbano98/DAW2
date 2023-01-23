// Get the buttons by their id
const setBgColorRedButton = document.getElementById('set-bg-color-red');
const setColorLinksButton = document.getElementById('set-color-links');
const deleteImagesButton = document.getElementById('delete-images');
const showHidePasswordsButton = document.getElementById('show-hide-passwords');

// Add an event listener to the set background color red button
setBgColorRedButton.addEventListener('click', function() {
  document.body.style.backgroundColor = 'red';
});

// Add an event listener to the set color links button
setColorLinksButton.addEventListener('click', function() {
  const links = document.getElementsByTagName('a');
  for (let i = 0; i < links.length; i++) {
    links[i].style.color = 'blue';
  }
});

// Add an event listener to the delete images button
deleteImagesButton.addEventListener('click', function() {
  const images = document.getElementsByTagName('img');
  while (images.length > 0) {
    images[0].parentNode.removeChild(images[0]);
  }
});

// Add an event listener to the show/hide passwords button
let showPasswords = false;
showHidePasswordsButton.addEventListener('click', function() {
  const inputs = document.getElementsByTagName('input');
  for (let i = 0; i < inputs.length; i++) {
    if (inputs[i].type === 'password') {
      if (showPasswords) {
        inputs[i].type = 'password';
      } else {
        inputs[i].type = 'text';
      }
    }
  }
  showPasswords = !showPasswords;
});
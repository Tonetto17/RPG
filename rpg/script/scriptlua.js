// scriptconteudo.js or script.js

// Function to toggle dark mode
function toggleDarkMode() {
    document.body.classList.add('dark-mode');
  }
  
  // Function to toggle light mode
  function toggleLightMode() {
    document.body.classList.remove('dark-mode');
  }
  
  // Toggle dark mode when moon icon is clicked
  document.getElementById('darkmode-toggle').addEventListener('click', toggleDarkMode);
  
  // Toggle light mode when sun icon is clicked
  document.getElementById('lightmode-toggle').addEventListener('click', toggleLightMode);
  
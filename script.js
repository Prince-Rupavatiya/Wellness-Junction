document.addEventListener("DOMContentLoaded", function() {
    let progress = 0;
    const loaderText = document.querySelector('.loader-text');
    
    function updateLoader() {
      progress += 1;
      loaderText.textContent = `Loading... ${progress}%`;
      
      if (progress < 100) {
        setTimeout(updateLoader, 20); 
      } else {
        document.getElementById('content').style.display = 'block';
        document.body.classList.add('loaded');
      }
    }
    
    updateLoader();
  });
  
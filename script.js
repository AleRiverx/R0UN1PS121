document.addEventListener('DOMContentLoaded', function () {
    const urlForm = document.getElementById('urlForm');
    const canvasContainer = document.getElementById('canvasContainer');
  
    urlForm.addEventListener('submit', function (event) {
      event.preventDefault();
      const formData = new FormData(urlForm);
      const url = formData.get('url');
  
      fetch('generate_canvas.php', {
        method: 'POST',
        body: formData
      })
      .then(response => response.json())
      .then(data => {
        const canvas = document.createElement('div');
        canvas.id = 'modeloNegocioCanvas';
  
        Object.entries(data).forEach(([key, value]) => {
          const bloque = document.createElement('div');
          bloque.classList.add('bloque');
          bloque.innerText = `${key}: ${value}`;
          canvas.appendChild(bloque);
        });
  
        canvasContainer.innerHTML = '';
        canvasContainer.appendChild(canvas);
      })
      .catch(error => console.error('Error:', error));
    });
  });
  
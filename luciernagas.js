var luciernagasContainer = document.getElementById('luciernagas-js');
var luciernagas = [];

function crearLuciernaga() {
  var luciernaga = document.createElement('div');
  luciernaga.className = 'luciernaga';
  luciernaga.style.left = Math.random() * window.innerWidth + 'px';
  luciernaga.style.top = Math.random() * window.innerHeight + 'px';
  luciernagasContainer.appendChild(luciernaga);
  luciernagas.push(luciernaga);
}

function animarLuciernagas() {
  luciernagas.forEach(function (luciernaga) {
    var x = parseFloat(luciernaga.style.left);
    var y = parseFloat(luciernaga.style.top);
    var offsetX = (Math.random() - 0.5) * 2;
    var offsetY = (Math.random() - 0.5) * 2;
    x += offsetX;
    y += offsetY;
    luciernaga.style.left = x + 'px';
    luciernaga.style.top = y + 'px';
  });

  requestAnimationFrame(animarLuciernagas);
}

// Generar las luciérnagas al cargar la página
window.addEventListener('load', function () {
  for (var i = 0; i < 40; i++) {
    crearLuciernaga();
  }
  animarLuciernagas();
});
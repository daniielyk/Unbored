function jugar(eleccionUsuario) {
  const opciones = ['piedra', 'papel', 'tijeras'];
  const eleccionComputadora = opciones[Math.floor(Math.random() * opciones.length)];

  let resultado = '';

  if (eleccionUsuario === eleccionComputadora) {
    resultado = 'Empate, bruh';
  } else if (
    (eleccionUsuario === 'piedra' && eleccionComputadora === 'tijeras') ||
    (eleccionUsuario === 'papel' && eleccionComputadora === 'piedra') ||
    (eleccionUsuario === 'tijeras' && eleccionComputadora === 'papel')
  ) {
    resultado = 'Ganaste, Nah increible';
  } else {
    resultado = 'Jaja, loser';
  }

  const mensajeResultado = `Elegiste ${eleccionUsuario}. La computadora eligió ${eleccionComputadora}. ${resultado}`;

  document.getElementById('resultado').innerText = mensajeResultado;
}
  
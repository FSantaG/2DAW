let libros = [
  {
    ISBN: "978-84-204-3571-8",
    TITULO: "Tiempos recios",
    AUTOR: "Mario Vargas Llosa",
    EDITORIAL: "Alfaguara",
    IMG: "tiemposRecios.jfif",
  },
  {
    ISBN: "978-84-204-3547-3",
    TITULO: "Sidi",
    AUTOR: "Arturo Pérez-Reverte",
    EDITORIAL: "Alfaguara",
    IMG: "sidi.jfif",
  },
  {
    ISBN: "978-84-17624-27-9",
    TITULO: "El último barco",
    AUTOR: "Domingo Villar",
    EDITORIAL: "Siruela",
    IMG: "barco.jfif",
  },
  {
    ISBN: "978-84-9199-137-3",
    TITULO: "Churchill",
    AUTOR: "Andrew Roberts",
    EDITORIAL: "Critica",
    IMG: "churchill.jfif",
  },
  {
    ISBN: "978-84-670-5701-0",
    TITULO: "Fracasologia",
    AUTOR: "María Elvira Roca Barea",
    EDITORIAL: "Espasa",
    IMG: "fracasologia.jfif",
  },
];

//Parte 1. Creación de la tabla mediante
//un bucle que recorre el array
let cuerpoTabla = document.querySelector("tbody");
for (let libro of libros) {
  let titulo = document.createElement("td");
  let autor = document.createElement("td");
  let ISBN = document.createElement("td");
  let nuevoLibro = document.createElement("tr");
  titulo.innerHTML = libro.TITULO;
  autor.innerHTML = libro.AUTOR;
  ISBN.innerHTML = libro.ISBN;
  nuevoLibro.append(titulo);
  nuevoLibro.append(autor);
  nuevoLibro.append(ISBN);
  cuerpoTabla.append(nuevoLibro);
}

//Parte 2. Selección de la fila donde se realiza
//el click.
let tabla = document.querySelector("table");
tabla.addEventListener("click", resaltar);

function resaltar(evento) {
  let portada = document.getElementById("portada"); //No implementado
  let filasTabla = tabla.querySelectorAll("tr");
  for (let fila of filasTabla) {
    fila.classList.remove("seleccionar");
  }
  evento.target.closest("tr").classList.add("seleccionar");
}

//Parte 3. Eliminado de la fila seleccionada si el usuario lo desea
//al hacer click sobre el botón de eliminar, y mostrado
//de alerta de error en caso que no se haya seleccionado nada.
let botonEliminar = document.getElementById("eliminarLibro");
botonEliminar.addEventListener("click", eliminarLibro);

function eliminarLibro() {
  let filas = document.querySelectorAll("tr");
  for (let fila of filas) {
    if (fila.className == "seleccionar") {
      fila.remove();
      return true;
    }
  }
  return alert("No hay ninguna fila seleccionada");
}

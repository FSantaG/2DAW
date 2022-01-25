//Parte 1. Creación del título de la página
let primerArbol = document.createElement("h3");
primerArbol.innerHTML = "Primer árbol";
document.body.prepend(primerArbol);
primerArbol.style.backgroundColor = "green";
primerArbol.style.fontSize = "2em";
primerArbol.style.textAlign = "center";

//Parte 2. Aplicación de funcionalidad en el botón
//de borrado, permitiendo la itneracción del usuario mediante mensajes
//de selección de hoja
let borradoHojas = document.getElementById("botonBorrar");
borradoHojas.addEventListener("click", borrarHojas);

function borrarHojas() {
  let nombreHoja = prompt("¿Qué hoja deseas borrar? \n(Formato: Hoja X_n)");
  let hojas = document.getElementsByClassName("hoja");
  nombreHoja = nombreHoja.toLowerCase();
  for (let hoja of hojas) {
    let hojaMinus = hoja.innerHTML.toLowerCase();
    if (hojaMinus == nombreHoja) {
      hoja.remove();
      alert("Hoja borrada con éxito");
      return;
    }
  }
  return alert("No existe la hoja, o no se ha especificado una hoja válida.");
}

//Parte 3. Aplicación de funcionalidad en el botón de insertar
//nuevas hojas, facilitando al usuario la itneracción mediante mensajes con validación.
let acopladoHojas = document.getElementById("botonInsertar");
acopladoHojas.addEventListener("click", insertarHojas);

function insertarHojas() {
  let textoRama = prompt(
    "¿En qué rama quiere introducir la nueva hoja? \n Formato: Rama X"
  );
  let ramas = document.getElementsByClassName("rama");
  textoRama = textoRama.toLowerCase();
  for (let rama of ramas) {
    let ramaMinus = rama.firstChild.data.trim().toLowerCase();
    if (ramaMinus == textoRama) {
      let nuevaHoja = document.createElement("li");
      nuevaHoja.classList.add("hoja");
      nuevaHoja.innerHTML = prompt("Introduzca el texto de la nueva hoja");
      let lugarNuevaHoja = prompt(
        "¿Quiere introducir la hoja al principio o al final? \nTecla 1 para `Principio`\nTecla 2 para 'Final'"
      );
      let ulRama = rama.children[0];
      switch (lugarNuevaHoja) {
        case "1":
          ulRama.insertAdjacentElement("afterbegin", nuevaHoja);
          break;
        case "2":
          ulRama.insertAdjacentElement("beforeend", nuevaHoja);
          break;
        default:
          break;
      }
      alert("Hoja creada con éxito");
      return;
    }
  }
  alert(Error("Formato no válido o rama no existente"));
}

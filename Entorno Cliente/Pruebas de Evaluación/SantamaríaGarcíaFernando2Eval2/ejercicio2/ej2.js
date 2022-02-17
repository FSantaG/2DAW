let arrayAlumnos = [];
let select = document.getElementById("modulos");
let tablaAlumnos = document.getElementById("alumnos");

document.addEventListener("DOMContentLoaded", cargarPágina);
select.addEventListener("change", mostrarAlumnos);

/*FUNCIONES */

function mostrarAlumnos() {
  tablaAlumnos.innerHTML = "";
  for (let alumno of arrayAlumnos) {
    if (select.value == alumno.modulo) {
      let nuevoAlumno = document.createElement("tr");
      let nombre = document.createElement("td");
      let nif = document.createElement("td");
      let modulo = document.createElement("td");
      let anular = document.createElement("td");
      let ver = document.createElement("td");
      let botonAnular = document.createElement("button");
      let botonVerDatos = document.createElement("button");

      nombre.textContent = alumno.nombre;
      nif.textContent = alumno.NIF;
      modulo.textContent = alumno.modulo;
      botonAnular.classList.add("anular");
      botonAnular.textContent = "Anular Matricula";
      botonVerDatos.classList.add("ver");
      botonVerDatos.textContent = "Ver datos";

      anular.append(botonAnular);
      ver.append(botonVerDatos);
      nuevoAlumno.append(nif, nombre, modulo, anular, ver);
      tablaAlumnos.append(nuevoAlumno);
    }
  }
}

function cargarPágina() {
  /*Primera petición: Obtención de valores del Select */
  let xhr1 = new XMLHttpRequest();
  xhr1.open("GET", "./modulos.json");
  xhr1.send();

  xhr1.onload = function () {
    if (xhr1.status != 200) {
      alert(`Error ${xhr1.status}: ${xhr1.statusText}`);
    } else {
      modulos = JSON.parse(xhr1.response);
      for (let modulo of modulos) {
        let nuevoModulo = document.createElement("option");
        nuevoModulo.value = modulo;
        nuevoModulo.textContent = modulo;
        select.append(nuevoModulo);
      }
    }
  };

  /*Segunda petición: obtención de alumnos */
  let xhr2 = new XMLHttpRequest();
  xhr2.open("GET", "./alumnos.json");
  xhr2.send();

  xhr2.onload = function () {
    if (xhr2.status != 200) {
      alert(`Error ${xhr2.status}: ${xhr2.statusText}`);
    } else {
      alumnos = JSON.parse(xhr2.response);
      for (let alumno of alumnos) {
        arrayAlumnos.push(alumno);
      }
      for (let alumno of arrayAlumnos) {
        if (select.value == alumno.modulo) {
          let nuevoAlumno = document.createElement("tr");
          let nombre = document.createElement("td");
          let nif = document.createElement("td");
          let modulo = document.createElement("td");
          let anular = document.createElement("td");
          let ver = document.createElement("td");
          let botonAnular = document.createElement("button");
          let botonVerDatos = document.createElement("button");

          nombre.textContent = alumno.nombre;
          nif.textContent = alumno.NIF;
          modulo.textContent = alumno.modulo;
          botonAnular.classList.add("anular");
          botonAnular.textContent = "Anular Matricula";
          botonVerDatos.classList.add("ver");
          botonVerDatos.textContent = "Ver datos";

          anular.append(botonAnular);
          ver.append(botonVerDatos);
          nuevoAlumno.append(nif, nombre, modulo, anular, ver);
          tablaAlumnos.append(nuevoAlumno);
        }
      }
      botonesAnular = document.getElementsByClassName("anular");
    }
  };
}

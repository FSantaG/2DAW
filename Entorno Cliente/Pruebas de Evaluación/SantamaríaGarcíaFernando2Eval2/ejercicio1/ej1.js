let modulos;
let tablaDatos = document.getElementById("datos");
document.addEventListener("DOMContentLoaded", cargarPrograma);

function cargarPrograma() {
  if (localStorage.getItem("modulos")) {
    let tablaDatos = document.getElementById("datos");
    modulos = JSON.parse(localStorage.getItem("modulos"));
    for (let modulo of modulos) {
      let nuevaFila = document.createElement("tr");
      for (let valor of Object.values(modulo)) {
        let nuevaCelda = document.createElement("td");
        nuevaCelda.textContent = valor;
        nuevaFila.append(nuevaCelda);
      }
      tablaDatos.append(nuevaFila);
    }
  } else {
    modulos = [];
  }
  let codigoCorrecto,
    descrCorrecta,
    cursoCorrecto,
    cicloCorrecto,
    horasCorrectas;
  let formulario = document.forms[0];
  let botonGrabar = document.getElementById("grabarModulo");
  botonGrabar.addEventListener("click", grabarModulo);

  let botonGuardar = document.getElementById("guardarDatos");
  botonGuardar.addEventListener("click", guardarModulos);

  /*FUNCIONES */
  function guardarModulos(evento) {
    evento.preventDefault();
    let datos = JSON.stringify(modulos);
    localStorage.setItem("modulos", datos);
  }
  function grabarModulo(evento) {
    /*Validación del código del módulo */
    let campoCodigo = formulario.codigo;
    codigoCorrecto = validarDato(
      evento,
      campoCodigo.value,
      /^[(A-Z)|(\d)]{4}$/gi,
      "codigoErr",
      "Formato no válido. 4 números o letras. Puede ser mixtos."
    );
    /*Validación del código de Ciclo */
    let campoCodCiclo = formulario.codigoCiclo;
    cicloCorrecto = validarDato(
      evento,
      campoCodCiclo.value,
      /^[(A-Z)|(\d)]{4}$/gi,
      "codigoCicloErr",
      "Formato no válido. 4 números o letras. Puede ser mixtos."
    );
    /*Validación de la descripción */
    let campoDescripcion = formulario.descripcion;
    descrCorrecta = validarDato(
      evento,
      campoDescripcion.value,
      /^\D+$/gi,
      "descripcionErr",
      "Formato no válido. Sólo letras y espacios aceptados."
    );
    /*Validación del curso*/
    let campoCurso = formulario.curso;
    cursoCorrecto = validarDato(
      evento,
      campoCurso.value,
      /^[1-2]{1}$/,
      "cursoErr",
      "Formato no válido. Valores admitidos: 1 / 2"
    );
    /*Validación de las horas */
    let campoHoras = formulario.horas;
    if (campoHoras.value) {
      ocultarError("horasErr");
      if (!Number(campoHoras.value)) {
        evento.preventDefault();
        crearError("horasErr", "Formato no válido. Ha de ser un número");
      } else {
        if (campoHoras.value < 0) {
          evento.preventDefault();
          crearError("horasErr", "Formato no válido. Horas negativas");
        } else {
          ocultarError("horasErr");
          horasCorrectas = "si";
          /*TODO: Comprobar que sea entero */
        }
      }
    } else {
      evento.preventDefault();
      crearError("horasErr", "Campo obligatorio");
    }
    /*Comprobar que todo esté correcto */
    if (
      codigoCorrecto == "si" &&
      descrCorrecta == "si" &&
      horasCorrectas == "si" &&
      cicloCorrecto == "si" &&
      cursoCorrecto == "si"
    ) {
      evento.preventDefault();
      let nuevoModulo = new Modulo(
        campoCodigo.value,
        campoDescripcion.value,
        campoCurso.value,
        campoCodCiclo.value,
        campoHoras.value
      );
      modulos.push(nuevoModulo);
      let nuevaFila = document.createElement("tr");
      for (let valor of Object.values(nuevoModulo)) {
        let nuevaCelda = document.createElement("td");
        nuevaCelda.textContent = valor;
        nuevaFila.append(nuevaCelda);
      }
      tablaDatos.append(nuevaFila);
    }
  }

  function validarDato(evento, valor, expReg, campoError, msgErrorFormato) {
    if (valor) {
      ocultarError(campoError);
      if (!expReg.test(valor)) {
        evento.preventDefault();
        crearError(campoError, msgErrorFormato);
      } else {
        ocultarError(campoError);
        return "si";
      }
    } else {
      evento.preventDefault();
      crearError(campoError, "Campo obligatorio");
    }
  }
  function crearError(campoError, mensaje) {
    let errorLog = document.getElementById(campoError);
    errorLog.style.color = "red";
    errorLog.textContent = "⚠ " + mensaje;
  }
  function ocultarError(campoError) {
    let errorLog = document.getElementById(campoError);
    errorLog.style.color = "black";
    errorLog.textContent = "";
  }
  /*CLASE */
  class Modulo {
    constructor(codigo, descr, curso, ciclo, horas) {
      this.codigo = codigo;
      this.descr = descr;
      this.curso = curso;
      this.ciclo = ciclo;
      this.horas = horas;
    }
  }
}

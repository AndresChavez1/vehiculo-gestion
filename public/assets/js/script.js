/**
 * Búsqueda por nombre [índice 0], etc
 */
function search() {
    let input, filter, table, tr, td, i;
    input = document.getElementById("input");
    filter = input.value.toUpperCase();
    table = document.getElementById("table");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[0];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }
    }
  }

function mostrarModal() {
  document.getElementById('modal').style.display='block';
}

function cerrarModal() {
  document.getElementById('modal').style.display='none';
}

/*Cerrar el modal si clickea fuera de la ventana*/

/*Obtenemos el modal*/
let modal = document.getElementById('modal');

/*Cerramos el modal con un click fuera de la ventana*/
window.onclick = (event) => {
  if(event.target == modal){
    modal.style.display ='none';
  }
} 

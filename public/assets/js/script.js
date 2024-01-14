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
  
  function mostrarSegundoModal() {
    document.getElementById('modal-2').style.display='block';
  }
  
  function cerrarSegundoModal() {
    document.getElementById('modal-3').style.display='none';
  }
  
  function mostrarTercerModal() {
    document.getElementById('modal-3').style.display='block';
  }
  
  function cerrarTercerModal() {
    document.getElementById('modal-3').style.display='none';
  }
  
  function mostrarCuartoModal() {
    document.getElementById('modal-4').style.display='block';
  }
  
  function cerrarCuartoModal() {
    document.getElementById('modal-4').style.display='none';
  }
  
  /*Cerrar el modal si clickea fuera de la ventana*/
  
  /*Obtenemos el modal*/
  let modal = document.getElementById('modal');
  let modal_2 = document.getElementById('modal-2');
  let modal_3 = document.getElementById('modal-3');
  let modal_4 = document.getElementById('modal-4');
  
  /*Cerramos el modal con un click fuera de la ventana*/
  window.onclick = (event) => {
    if(event.target == modal || event.target == modal_2 || event.target == modal_3 || event.target == modal_4){
      modal.style.display ='none';
      modal_2.style.display ='none';
      modal_3.style.display ='none';
      modal_4.style.display ='none';
    }
} 

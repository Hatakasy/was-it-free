$(document).ready(function () {
  $("#games-table").DataTable({
    aaSorting: [],
    ordering: false,
  });
  $(".dataTables_length").addClass("bs-select");
});

function fecharDescricao() {
  document.getElementsByClassName("sidebar")[0].style.display = "none";
  document.getElementById("background-descricao").style.display = "none";
}

function mostrarDescricao(e) {
  document.getElementById("background-descricao").style.display = "block";
  document.getElementsByClassName("sidebar")[0].style.display = "flex";
}

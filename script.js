var mydata = JSON.parse(data);

const tabela = document.getElementById("tableBody");

const trElement = document.createElement("tr");
const tdElement = document.createElement("td");
const tdElementData = document.createElement("td");

tdElementData.setAttribute("data-sort", "YYYYMMDD");

let id = 0;
mydata.forEach((e) => {
  trElement.setAttribute("id", "line" + id);

  let nome = document.createTextNode(e.name);
  let data = document.createTextNode(e.date);
  let site = document.createTextNode(e.site);

  tabela.appendChild(trElement.cloneNode(true));

  let line = document.getElementById("line" + id);

  line.appendChild(tdElement.cloneNode(true)).appendChild(nome);
  line.appendChild(tdElementData.cloneNode(true)).appendChild(data);
  line.appendChild(tdElementData.cloneNode(true)).appendChild(site);

  id++;
});

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

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

  tabela.appendChild(trElement.cloneNode(true));

  let line = document.getElementById("line" + id);

  line.appendChild(tdElement.cloneNode(true)).appendChild(nome);
  line.appendChild(tdElementData.cloneNode(true)).appendChild(data);

  id++;
});

$(document).ready(function () {
  $("#games-table").DataTable();
  $(".dataTables_length").addClass("bs-select");
});

<html>

<head>
  <script type="text/javascript" src="data.json"></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

  <link rel="stylesheet" href="./style.css" />
</head>

<body>
  <h1>WAS IT FREE?</h1>

  <table id="games-table" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%" style="border: none">
    <thead>
      <tr>
        <th class="th-sm">Name</th>
        <th class="th-sm">Date</th>
        <th class="th-sm">Where?</th>
      </tr>
    </thead>
    <tbody id="tableBody">

      <?php include_once("./script.php") ?>

    </tbody>
  </table>
</body>

</html>

<script type="text/javascript" src="script.js"></script>
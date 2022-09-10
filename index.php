<html>

<head>
  <link rel="icon" href="https://i.imgur.com/3no3kKB.png" />
  <title>Was it Free?</title>
  <meta property="og:title" content="Was it Free?" />
  <meta property="og:description" content="Free games list. Discover if your game went free at any time ago." />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://was-it-free.hatakasy.repl.co/" />
  <meta property="og:image" content="https://i.imgur.com/WduAZ5Y.png" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" />
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
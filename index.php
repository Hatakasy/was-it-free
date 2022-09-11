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
  <div id="tittle-bar">
    <h1 id="page-tittle">WAS IT FREE?</h1>
    <h1 id="menu-button" onClick="mostrarDescricao()">☰</h1>
  </div>
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

<span id="background-descricao"></span>

<div class="sidebar">
  <div class="sidebar-info">
    <div class="inside-bar">
      <div onclick="fecharDescricao()" id="fechar-btn">
        <h1>X</h1>
      </div>
      <h1>Notes</h1>
      <br>
      <p>This project was created at 09/sept/2022.</p>
      <br>
      <p>I'm trying my best to get old free games but it's hard to find a reliable source, so old giveaways from past years (before 2022) may not be listed correctly.</p>
      <p>Also I'm trying to focus on relevant games and giveaway websites, so removed games giveaways or doubtful giveaway websites will be avoided.</p>
      <p>I will try to update everytime I see new Free Giveaways</p>
      <br><br><br><br>
      <p>Created by Hatakasy</p>
    </div>
  </div>
</div>

<script type="text/javascript" src="script.js"></script>
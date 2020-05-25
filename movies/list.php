<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Upload Form">
  <meta name="author" content="Dieter Meiller">

  <title>Bisherige Einreichungen zur OTH-Filmnacht</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
</head>
<body class="bg-light">
  <div class="container" id="container">
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="../images/oth-logo.png" alt="" >
      <h2>Bisherige Einreichungen zur OTH-Filmnacht</h2>
            
    </div>
    <table class = "table-striped table-bordered" style="width:100%">
	<thead><tr><th>Nachname</th><th>Vorname</th><th>Email</th><th>Titel</th><th>Laenge</th><th>Jahr</th><th>Beschreibung</th></tr></thead>
	<tbody>
<?php
require_once('../db/DataBase.php');

$einreichungen = DataBase::query("select nachname, vorname, email, titel, laenge, jahr, beschreibung, file from oth_movies order by nachname ASC");
	foreach ($einreichungen as $einreichung) {
				echo "<tr><td>$einreichung[0]</td><td>$einreichung[1]</td><td>$einreichung[2]</td><td><a href='$einreichung[7]' title='Abspielen'>$einreichung[3]</a></td><td>$einreichung[4]</td><td>$einreichung[5]</td><td>$einreichung[6]</td></td></tr>";
	}

?>
</tbody>
</table>
</div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2019 OTH Amberg-Weiden</p>
  </footer>
</div>

<script src="../bootstrap/bootstrap.min.js"></script>
  </body>
  </html>

 <?php
require_once('db/conf.php');
$conf=conf();
$hashv = hash('sha256', $_POST['email'].$conf['secret']) ; // Gen Hash
$addr = $conf['domain'].'/form.php?mail='.urlencode($_POST['email']).'&hash='.$hashv;

$empfaenger  = $_POST['email']; // beachte das Komma

// Betreff
$betreff = 'Upload-Formular für OTH-Filmnacht';

// Nachricht
$nachricht = '
<html>
<head>
  <title>Upload-Formular für OTH-Filmnacht</title>
</head>
<body>
	<h3>Upload-Formular für OTH-Filmnacht</h3>
  <p><a href="'.$addr.'">Bitte öffnen Sie das Upload-Formular</a></p>
</body>
</html>
';

// für HTML-E-Mails muss der 'Content-type'-Header gesetzt werden
$header[] = 'MIME-Version: 1.0';
$header[] = 'Content-type: text/html; charset=utf-8';

// zusätzliche Header
$header[] = 'To: '.$empfaenger;
$header[] = 'From: OTH-Upload <noreply@oth-aw.de>';
$header[] = 'Bcc: d.name@oth-aw.de';

// verschicke die E-Mail
mail($empfaenger, $betreff, $nachricht, implode("\r\n", $header));


?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Upload Form">
  <meta name="author" content="Dieter Meiller">
  <title>Film-Upload zur OTH-Filmnacht</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
</head>
<body class="bg-light">

  <div class="py-5 text-center">
  <div class="container" id="container">

    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="images/oth-logo.png" alt="" width="200" height="101">
      <h2>Die Mail wurde versendet.</h2>
      <p class="lead">Bitte geben überprüfen Sie Ihre Mails und klicken Sie auf den Link in der Mail mit dem Betreff: <strong><?php echo $betreff; ?></strong>.</p>
    </div>

  </div>
  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2019 OTH Amberg-Weiden</p>
  </footer>
</div>
<script src="bootstrap/bootstrap.min.js"></script>
  </body>
  </html>

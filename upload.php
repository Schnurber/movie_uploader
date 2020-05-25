
<?php 
/*
*/
require_once('db/DataBase.php');
require_once('db/conf.php');

$conf=conf();
$noHacker = hash('sha256', $_POST['email'].$conf['secret']) == $_POST['hash']; // Test, of correct address
$uploaddir = 'movies/';
$fname = basename($_FILES['file']['name']);
$uploadfile = $uploaddir . $fname;


if ($noHacker && move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {

    $qstr = "insert into oth_movies values (NULL, :vorname, :nachname, :email, :titel, :laenge, :jahr, :beschreibung, :file, :einverstaendnis)";	
	DataBase::query($qstr, array(':vorname'=>$_POST['vorname'], ':nachname'=>$_POST['nachname'], ':email'=>$_POST['email'], ':titel'=>$_POST['titel'], ':laenge'=>$_POST['laenge'], ':jahr'=>$_POST['jahr'], ':beschreibung'=>$_POST['beschreibung'], ':file'=>$fname, ':einverstaendnis'=>($_POST['einverstaendnis'] == 'on')));

	echo '
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="images/oth-logo.png" alt="" width="200" height="101">
      <h2>Vielen Dank!</h2>
      <p class="lead">Wir haben Ihre Einsendung erhalten.</p>
    </div>
	';


} else {
   echo'
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="images/oth-logo.png" alt="" width="200" height="101">
      <h2>Fehler beim Upload!</h2>
      <p class="lead">Bitte versuchen Sie es erneut.</p>
    </div>
    ';
}

?>

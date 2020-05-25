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
  <div class="container" id="container">
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="images/oth-logo.png" alt="" width="200" height="101">
      <h2>Film-Upload zur OTH-Filmnacht</h2>
      <p class="lead">Bitte füllen Sie die unten aufgeführten Felder aus.</p>
    </div>
    <form class="needs-validation"  enctype="multipart/form-data" novalidate>
      <input id="hash" name="hash" type="hidden" value="<?php echo $_GET['hash']; ?>">
      <div class="col-md-12 order-md-1">
        <h4 class="mb-3">Einreichende(r)</h4>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="vorname">Vorname</label>
            <input type="text" class="form-control" id="vorname" name="vorname" placeholder="" value="" required>
            <div class="invalid-feedback">
              Bitte einen Vornamen eingeben!
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="nachname">Nachname</label>
            <input type="text" class="form-control" id="nachname" name="nachname" placeholder="" value="" required>
            <div class="invalid-feedback">
              Bitte einen Nachnamen eingeben!
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" name="email" value="<?php echo $_GET['mail']; ?>" readonly required>
          <div class="invalid-feedback">
              Bitte eine E-Mail Adresse eingeben!
          </div>
        </div>
        <hr class="mb-4">
        <h4 class="mb-3">Einreichung</h4>
        <div class="row">
          <div class="col-md-12 mb-3">
            <label for="titel">Titel des Films</label>
            <input type="text" class="form-control" id="titel" name="titel" placeholder="" value="" required>
            <div class="invalid-feedback">
              Bitte geben Sie den Titel des Filmes ein!
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="laenge">Länge in Sekunden</label>
            <input type="number" class="form-control" id="laenge" name="laenge" placeholder="" value="" required>
            <div class="invalid-feedback">
              Geben Sie die Länge des Fimes ein!
            </div>
          </div>
                 <div class="col-md-6 mb-3">
            <label for="jahr">Entstehungsjahr</label>
            <input type="number" class="form-control" id="jahr" name="jahr" placeholder="" value="2019" required>
            <div class="invalid-feedback">
              Geben Sie das Entstehungsjahr des Filmes an!
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12 mb-3">
             <label for="beschreibung">Beschreibung <span class="text-muted">(Inhalt und Projekt)</span></label>
              <textarea class="form-control rounded-0" id="beschreibung" name="beschreibung" rows="4" required></textarea>
            <div class="invalid-feedback">
              Bitte geben Sie eine Beschreibung des Filmes an.
            </div>
          </div>
        </div>

        <div class="mb-4">
         <label>Film-Upload <span class="text-muted">(Full HD oder besser, max. 2GB)</span></label>
         <div class="input-group" id="uplgr">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
          </div>
          <div class="custom-file">
            <input name="file" type="file" accept=".mp4,.mov,mv4" class="custom-file-input" id="file" onchange="document.querySelector('#myfilelabel').innerHTML=this.value.replace('C:\\fakepath\\', '')" required>
            <label class="custom-file-label" id="myfilelabel" for="file"> Wähle File: *.mp4 *.mov *.mv4</label>
          </div>
        </div>
      </div>
      <div class="progress" class="mb-4">
          <div class="progress-bar" id="myprogress" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
      <hr class="mb-4">
      <div class="custom-control custom-checkbox" class="mb-4">
        <input type="checkbox" class="custom-control-input" id="einverstaendnis" name="einverstaendnis" required>
        <label class="custom-control-label" for="einverstaendnis">Hiermit bestätige ich, dass ich der Urheber des oben genannten Werkes bin. Mit einer unentgeltlichen Aufführung des Werkes im Rahmen der OTH-Filmnacht bin ich einverstanden. Ich erkläre mich dazu einverstanden, dass der Beitrag zudem gegebenenfalls zur Öffentlichkeitsarbeit außerhalb der offiziellen Veranstaltung gezeigt werden kann (z.B. bei weiteren Filmvorführungen der OTH und in Ausschnitten bei der Berichterstattung im Lokalfernsehen). Für das eingereichte Material wird keine Haftung übernommen. Ich erkläre mich einverstanden, dass die OTH Amberg-Weiden die übermittelten Daten zum Zwecke der Kommunikation speichert (z.B. zur Einladung zum Filmabend und zur Ankündigung der Filme). Die Daten werden nicht an Dritte weitergegeben. </label>
        <div class="invalid-feedback">
              Sie müssen die Eiverständniserklärung abgeben!
            </div>
      </div>
      <hr class="mb-4">
      <button class="btn btn-primary btn-lg btn-block" id="submitbtt" type="submit">Absenden und hochladen</button>
    </form>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2019 OTH Amberg-Weiden</p>
  </footer>
</div>

<script src="bootstrap/bootstrap.min.js"></script>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/script.js"></script>
  </body>
  </html>

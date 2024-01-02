<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

  <link rel="stylesheet" href="stylesheet/styles.css">
  <link rel="stylesheet" href="stylesheet/impressum.css">

  <title>Startseite</title>
</head>

<body>
  <?php include "include/navbar.php"; ?>
  <div class="ContentFlexHeight">
    <div class="ContentFlexWidth">
      <div style="flex: 2">
      </div>
      <div style="flex: 8">
        <div class="textfieldContent">
          <div class="textfield">
            <h2 style="padding-bottom: 20px;">Bis wann kann kostenlos storniert werden?</h2>
            <p style="padding-left: 40px; padding-bottom: 30px;">Buchungen können bis max. eine Woche im
              Voraus kostenlos storniert werden. Danach Fallen Stornogebühren an.</p>
          </div>
          <div class="textfield">
            <h2 style="padding-bottom: 20px;">Wie hoch sind die Stornogebühren?</h2>
            <p style="padding-left: 40px; padding-bottom: 30px;">
              Die Stornogebühren belaufen sich bis 72h vor Anreise auf 50% danach auf 75%.</p>
          </div>
          <div class="textfield">
            <h2 style="padding-bottom: 20px;">Kann ich mir bei der Buchung ein bestimmtes Zimmer aussuchen?
            </h2>
            <p style="padding-left: 40px; padding-bottom: 30px;">Sofern das gewünschte Zimmer für den von
              Ihnen gebuchten Zeitraum verfügbar ist, kommt unser Team Ihren wünschen gerne nach.</p>
          </div>
          <div class="textfield">
            <h2 style="padding-bottom: 20px;">Welche Verpflegungen bieten Sie an?</h2>
            <p style="padding-left: 40px; padding-bottom: 30px;">Im Garden Hotel können sie zwischen Zimmern
              mit Frühstück und Halbpension mit 5-Gänge Abendmenü wählen.</p>
          </div>
          <div class="textfield">
            <h2 style="padding-bottom: 20px;">Kann der Wald-Spa auch ohne Übernachtung gebucht werden?</h2>
            <p style="padding-left: 40px; padding-bottom: 30px;">Unsere Spa-Treatments können auch von
              externen Gästen in Anspruch genommen werden. Der Wald-Spa bereich steht allerdings exclusiv
              für Hotelgäste zur Verfügung.</p>
          </div>
        </div>
      </div>
      <div style="flex: 2">
      </div>
    </div>
  </div>
  <div class="seperation">
  </div>
  <?php include "include/footer.php"; ?>
</body>

</html>
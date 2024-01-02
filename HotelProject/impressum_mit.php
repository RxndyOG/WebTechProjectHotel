<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>

    <link rel="stylesheet" href="stylesheet/styles.css">
    <link rel="stylesheet" href="stylesheet/impressum.css">

    <title>Startseite</title>
</head>

<body>
    <?php include "include/navbar.php"; ?>
    <div class="ContentFlexHeight" style="height: 100%">
        <div class="ContentFlexWidth" style="flex-wrap:wrap; justify-content: center; padding-top: 20px">
            <div style="flex: 2">

            </div>
            <div style="flex: 3; justify-content: center">
                <img class="image" src="img/Stefan.jpeg" alt="">
                <p class="caption">Geschaeftsführer: Stefan Werner</p>
            </div>
            
            <div style="flex: 3; justify-content: center">
                <img class="image" src="img/Isa.jpeg" alt="">
                <p class="caption">Geschaeftsführerin: Isabella Unger</p>
            </div>
            <div style="flex: 2">

            </div>
        </div>
        <div class="ContentFlexWidth">
            <div style="flex: 2">
            </div>
            <div style="flex: 8">
                <h1>Impressum</h1>
                <p class="subtitle">Allgemeine Informationen nach § 5 ECG </p><br>
                <div class="impressum-content">
                    <header>
                        <h2>Dienstanbieter </h2>
                    </header>
                    <div class="row">
                        <div class="col-12 col-sm-6 company"><strong>Garden Hotels GmbH</strong><br>

                            Inhaber Stefan Werner, Isabella Unger<br>
                            Wiesenblumenstraße 5 <br>
                            4862 Wald<br>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="row">
                                <div class="col-12 col-sm-3 infos"><strong>
                                        E-Mail:
                                    </strong></div>
                                <div class="col-12 col-sm-9 infos values"><a
                                        href="mailto:info@gardenhotel.net">info@gardenhotel.net</a>
                                </div>
                                <div class="col-12 col-sm-3 infos"><strong>
                                        Telefon:
                                    </strong></div>
                                <div class="col-12 col-sm-9 infos values"><a href="tel:+43-6228-1234">+43-6228-1234</a>
                                </div>
                                <div class="col-12 col-sm-3 infos"><strong>
                                        Fax:
                                    </strong></div>
                                <div class="col-12 col-sm-9 infos values">
                                    +43-6228-1234-55 </br>
                                    <br>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6 infos"><strong>
                                Firmenbuchnummer:
                            </strong></div>
                        <div class="col-8 col-sm-6 infos values">
                            027070k
                        </div>
                        <div class="col-12 col-sm-6 infos"><strong>
                                Gerichtsstand:
                            </strong></div>
                        <div class="col-8 col-sm-6 infos values">
                            Landesgericht Salzburg
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6 infos"><strong>
                                Behörde:
                            </strong></div>
                        <div class="col-8 col-sm-6 infos values">
                            Bezirkshauptmannschaft Salzburg-Umgebung
                        </div>

                        <div class="col-12 col-sm-6 infos"><strong>
                                UID:
                            </strong></div>
                        <div class="col-8 col-sm-6 infos values">
                            ATU74701904
                        </div>
                    </div>
                    <div class="row"></div>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-lg-6 bank">
                            <div class="row">
                                <div class="col-12 col-sm-6 col-lg-4 infos"><strong>
                                        Bankverbindung:
                                    </strong></div>
                                <div class="col-12 col-sm-6 col-lg-8 infos values">
                                    Raiffeisenbank Salzburg Land
                                </div>
                                <div class="col-12 col-sm-6 col-lg-4 infos"><strong>
                                        IBAN:
                                    </strong></div>
                                <div class="col-12 col-sm-6 col-lg-8 infos values">
                                    AT84 35016 000 000 58736
                                </div>
                                <div class="col-12 col-sm-6 col-lg-4 infos"><strong>
                                        BIC:
                                    </strong></div>
                                <div class="col-12 col-sm-6 col-lg-8 infos values">
                                    RVSAAT2S016
                                    <br />
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="consumers-link">
                        Die Europäische Kommission stellt unter <a
                            href="https://ec.europa.eu/consumers/odr/main/index.cfm?event=main.home.show&amp;lng=DE">http://ec.europa.eu/consumers/odr</a>
                        eine Plattform zur außergerichtlichen Streitschlichtung bereit.
                        <div style="flex: 2">
                        </div>
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
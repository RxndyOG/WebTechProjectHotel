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

    <title>Startseite</title>
</head>

<body>
    <?php include "include/navbar.php"; ?>
    <div class="ContentFlexHeight">
        <div class="ContentFlexWidth">
            <div style="flex: 2">
            </div>
            <div style="flex: 8">
                <div class="carouselTest">
                    <div id="carouselExampleCaptions" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img\Bild_1.jpg" class="d-block w-100" alt="Das Hotel">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Gemütliche Wald.Lodges</h5>
                                    <p>Jede Loge ganz Exclusiv</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="img\Bild_2.jpg" class="d-block w-100" alt="Ausblick aus den Zimmern">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Einatmen. Ausatmen. Entspannen</h5>
                                    <p>Traumhafter Ausblick aus jeder Lodge.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="img\Bild_3.jpg" class="d-block w-100" alt="Kamin in der Lounge">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>kuscheliger Loungebereich mit wärmendem Kamin</h5>
                                    <p>Energie Tanken. Entspannen. Aufwärmen.</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
            <div style="flex: 2">
            </div>
        </div>
        <div class="ContentFlexWidth">
            <div style="flex: 0">
            </div>
            <div style="flex: 12">
                <div class="textfield">
                    <h1 style="text-align: center; padding-top: 20px">Garden Hotel - Natur. Waldspa. <br> Ihr Hotel in
                        Wald
                        im Salzkammergut</h1>
                </div>
                <div>
                    <p
                        style="text-align: center; padding-left: 40px; padding-right: 40px; padding-bottom: 40px; padding-top: 20px; font-size: 20px">
                        Wir
                        wissen
                        schon sehr lange, dass
                        der Wald ein
                        unglaublicher Wohlfühlraum ist.
                        Ein willkommener Rückzugsort für Mensch wie Tier. Die Bäume breiten schützend ihre Wipfel und
                        Äste
                        zu
                        einem hochfunktionellem Dach aus. Nirgends schmeckt die Luft so gut. Das
                        Garden Hotel im schönen Salzkammergut bietet herrliche Walderlebnisse angenehm
                        gekühlt im heißen Sommer und erfrischend klar im Winter.</p>
                </div>
            </div>
            <div style="flex: 0">
            </div>
        </div>
        <div class="ContentFlexWidth">
            <div style="flex: 0">
            </div>
            <div style="flex: 12">
                <div>
                    <div class="textfield">
                        <h1 style="text-align: center;">Der Wald zeigt Wirkung <br> Im WaldSPA. Ganz nah dran</h1 </div>
                    </div>
                    <div>
                        <p
                            style="text-align: center; padding-left: 40px; padding-right: 40px; padding-bottom: 30px; padding-top: 20px; font-size: 20px">
                            Der Wald
                            – die Natur ist die wertvollste Kraftquelle. Der neue und einzigartige WaldSPA im Garden
                            Hotel
                            bringt
                            uns das zurück, was wir schon fast verlernt haben: Die direkte Verbindung zur Natur, die uns
                            nicht
                            nur zur Ruhe kommen lässt, sondern uns gleichzeitig neue Energie schenkt. Unter den
                            Baumriesen
                            finden wir einen Ort, an dem unsere Seele nicht nur baumelt, sondern mit den Bäumen im
                            Einklang
                            schwingt. Im neuen WaldSPA warten neben den herrlich entspannenden Naturkraftplätzen im
                            Mischwald
                            eine Finnische Sauna, eine Kräuter Bio-Soft-Sauna. Zwei Ruhechalets bringen die Sinne zum
                            Entspannen
                            und holen eine neue Sinnlichkeit hervor.

                            Nur wenige Schritte vom Hotel entfernt, mitten im Kraftparadies Wald, tauchen Sie ein in die
                            Harmonie aus modernem, naturnahem Design und der Urenergie der Natur. Die Natur spüren,
                            diese Idee
                            steckt hinter unserem WaldSPA und wir laden Sie ein, sich der Natur auf sanfte Art zu nähern
                            und
                            ganz auf Ihre natürliche Wirkung zu vertrauen. Eine Evolution des Wohlfühlens mit dem Ziel,
                            die
                            Natur zu erkunden und den Genuss von purer Erholung zu spüren. Einfach Waldmodus on – Welt
                            aus!

                            Die luftigen Strukturen unserer Naturmaterialien wie Holz und Glas verschmelzen scheinbar
                            nahtlos
                            mit der Ursprünglichkeit der Umgebung. Im WaldSPA kann man der Harmonie von Natur ganz nahe
                            sein. So
                            ist dieser Rückzugsort entstanden, der ganz und gar Ihrem Wohlbefinden und ihrer Auszeit
                            gewidmet
                            ist.</p>
                    </div>
                </div>
            </div>
            <div style="flex: 0">
            </div>
        </div>
        <div class="ContentFlexWidth">
            <div style="flex: 0">
            </div>
            <div style="flex: 12">
                <div>
                    <div class="flexpictures">
                        <img src="img\Bild_4.jpg" class="img-fluid img-thumbnail" alt="Spa1" width="500" height="400">
                        <img src="img\Bild_5.jpg" class="img-fluid img-thumbnail" alt="Spa2" width="500" height="400">
                        <img src="img\Bild_6.jpg" class="img-fluid img-thumbnail" alt="Spa3" width="500" height="400">
                    </div>
                </div>
            </div>
            <div style="flex: 0">
            </div>
        </div>
    </div>
    <div class="seperation">
    </div>
    <?php include "include/footer.php"; ?>
</body>

</html>
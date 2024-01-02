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
    <link rel="stylesheet" href="stylesheet/zimmerStyles.css">

    <title>Zimmerreservierung</title>
</head>

<body>
    <?php include "include/navbar.php"; ?>
    <div class="ContentFlexHeight">
        <div class="ContentFlexWidth">
            <div style="flex: 0">
            </div>
            <div style="flex: 12">
                <div class="ContentFlexHeight">
                    <div class="ContentFlexWidth" style="padding: 0px">
                        <div style="flex: 6">
                            <div class="zimmerReservierungsbox">
                                <div id="booking" class="section">
                                    <div class="section-center">
                                        <div class="container">
                                            <div class="row">
                                                <div class="booking-form">
                                                    <div class="form-header">
                                                        <h1>Make your reservation</h1>
                                                    </div>
                                                    <form>
                                                        <div class="form-group"> <input class="form-control" type="text"
                                                                placeholder="Country, ZIP, city...">
                                                            <span class="form-label">Destination</span>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group"> <input class="form-control"
                                                                        type="date" required>
                                                                    <span class="form-label">Check In</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group"> <input class="form-control"
                                                                        type="date" required>
                                                                    <span class="form-label">Check out</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <select class="form-control" required>
                                                                        <option value="" selected hidden>no of rooms
                                                                        </option>
                                                                        <option>1</option>
                                                                        <option>2</option>
                                                                        <option>3</option>
                                                                    </select>
                                                                    <span class="select-arrow"></span> <span
                                                                        class="form-label">Rooms</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <select class="form-control" required>
                                                                        <option value="" selected hidden>no of adults
                                                                        </option>
                                                                        <option>1</option>
                                                                        <option>2</option>
                                                                        <option>3</option>
                                                                    </select>
                                                                    <span class="select-arrow"></span> <span
                                                                        class="form-label">Adults</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <select class="form-control" required>
                                                                        <option value="" selected hidden>no of children
                                                                        </option>
                                                                        <option>0</option>
                                                                        <option>1</option>
                                                                        <option>2</option>
                                                                    </select>
                                                                    <span class="select-arrow"></span> <span
                                                                        class="form-label">Children</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group"> <input class="form-control"
                                                                        type="email" placeholder="Enter your Email">
                                                                    <span class="form-label">Email</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group"> <input class="form-control"
                                                                        type="tel" placeholder="Enter you Phone">
                                                                    <span class="form-label">Phone</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-btn"> <button class="submit-btn">Book
                                                                Now</button> </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="flex: 6">

                        </div>
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
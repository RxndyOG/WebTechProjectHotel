

<?php



function uploadAndDisplayImage() {
    $zielverzeichnis = "uploads/";

    function deleteImage($bildpfad) {
        if (file_exists($bildpfad)) {
            unlink($bildpfad);

        } else {
        
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_FILES["bild"])) {
            $ziel = $zielverzeichnis . basename($_FILES["bild"]["name"]);

            if (move_uploaded_file($_FILES["bild"]["tmp_name"], $ziel)) {

            } else {
                echo "Es gab ein Problem beim Hochladen des Bildes.";
            }
        } elseif (isset($_POST["delete"]) && isset($_POST["bildpfad"])) {
            $bildpfad = $_POST["bildpfad"];
            deleteImage($bildpfad);
        }
    }
    


    if (isset($_FILES["bild"])) {
        $bildpfad = $zielverzeichnis . basename($_FILES["bild"]["name"]);
        echo '<div style="text-align: center;">';
        echo '<img src="' . $bildpfad . '" alt="Hochgeladenes Bild" style="width:300px">';
        echo '</div>';
    
        echo '<form action="" method="post">';
        echo '<input type="hidden" name="bildpfad" value="' . $bildpfad . '">';
        echo '<input type="submit" name="delete" value="Bild löschen">';
        echo '</form>';
    }else{

        echo '<form style="text-align: center;" action="" method="post" enctype="multipart/form-data">';
        echo '<input type="file" name="bild" id="bild">';
        echo '<input type="submit" value="Hochladen">';
        echo '</form>';
    }
}

?>

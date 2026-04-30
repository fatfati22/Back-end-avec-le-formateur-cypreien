<?php

$extentionsAllowed = ["pdf", "txt"];



if (isset($_POST["submit"])) {


    // echo "requette poste ";


    // var_dump($_FILES["cv"]);

    $file = $_FILES["cv"];

    $fileName = $file["name"];
    $fileType = $file["type"];
    $fileTmpName = $file["tmp_name"];
    $fileError = $file["error"];
    $fileSize = $file["size"];


    if ($fileError) {


        echo "Erreur lors de l'upload du fichier";
    } else {
        if ($fileSize > 1000000) {
            echo "Le fichier est trop Volumineux";
        } else {
            $nameAndExtention = explode(".", $fileName);
            // var_dump($nameAndExtention);
            $extention = end($nameAndExtention);
            // var_dump($extention);
            // echo $extention;
            // echo $fileTmpName;


            if (!in_array($extention, $extentionsAllowed)) {
                echo "Formats non acceptés";
            } else {

                $fileNewName = uniqid("", true) . "." . $extention;

                $filenewPath = "uploads/" . $fileNewName;
                echo $filenewPath;


                move_uploaded_file($fileTmpName, $filenewPath);
                header("location:ex1.php?uploadsSuccess");
            }
        }
    }
}









?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload cv </title>
    <!--  upload  C'est  envoyer client a serveur   -->
</head>

<body>
    <h1>Upload your CV</h1>
    <h2><?php if (isset($_GET["uploadsSuccess"])) {
            echo "Fichier envoyé avec succès";
        } ?></h2>
    <form method="post" enctype="multipart/form-data">

        <input type="file" name="cv">
        <button name="submit" type="submit">envoyer</button>

    </form>

</body>

</html>
<?php
session_start(); // récupérer la session
session_destroy(); // supprimer la session

header("Location: compteur.php");
exit();

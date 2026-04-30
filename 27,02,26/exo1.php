<!-- Exercice 11 : Générateur de liste de courses (GET, tableaux, boucles)

Créez un fichier liste_courses.php.

Créez un tableau PHP $liste_courses contenant des articles (par exemple : [“Pain”, “Lait”, “Œufs”]).
Affichez cette liste dans une balise <ul> HTML à l’aide d’une boucle.
Ajoutez un formulaire simple avec un champ de texte (name="article") et un bouton “Ajouter”. Ce formulaire doit utiliser la méthode GET et s’envoyer à la même page.
Lorsque le formulaire est soumis, récupérez le nom de l’article depuis l’URL ($_GET), ajoutez-le au tableau $liste_courses (avec $liste_courses[] = ...), puis réaffichez la liste mise à jour.
Si le champ du formulaire est vide, n’ajoutez rien et affichez un message d’erreur simple.
Pour l’instant on ne peut ajouter qu’un article. Pour conserver toute la liste existante d’un ajout à l’autre, envoyez toute la liste actuelle via un champ caché du formulaire. Les fonctions explode() et implode() pourront vous être utiles. -->

<?php

//*****1 liste de course
$liste_courses=array("pain","lait","oeufs");
$message= "";

//*****2 si on a deja une liste de course dans l'url
if (isset($_GET["liste"])){

$liste_courses = explode (",", $_GET["liste"]);

}


//*****3 si on clique sur "ajouter"
if (isset($_GET["article"])){
    $article = trim($_GET["article"]);
    if ($article!=""){
      
        $liste_courses[] = $article ; // Ajouter à la liste 
        //  var_dump($_GET["liste"]);
        
    }else{
        $message = "veuillez écrire un article.";
    }
}

$list_url= implode(",", $liste_courses);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h2>Liste de course </h2>
<ul>

<?php 

foreach($liste_courses as $element){
    echo"<li>$element</li>";
      
}
?>
</ul>
<p style="color: red;">
    
<?php  echo "$message"; ?>

</p>

<form action="" method="GET">

<input type="text" name="article">

 <!-- On garde la liste existante -->
<input type="hidden" name="liste" value="<?php  echo $list_url; ?>">

<button type="submit">ajouter un article</button>

   


</form>



</body>
</html>
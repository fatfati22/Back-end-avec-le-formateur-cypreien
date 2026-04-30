<?php
$fichier = "compteur.txt";

// Si le fichier n'existe pas, on le crée avec 0
if (!file_exists($fichier)) {
    file_put_contents($fichier, 0);
}

// Lire le compteur
$compteur = file_get_contents($fichier);

// Incrémenter
$compteur++;

// Enregistrer la nouvelle valeur
file_put_contents($fichier, $compteur);

// Afficher
echo "Cette page a été visitée " . $compteur . " fois.";
?>

</body>

</html>
💡 Explications simples
file_exists() → vérifie si le fichier existe
file_get_contents() → lit le fichier
file_put_contents() → écrit dans le fichier
$compteur++ → ajoute 1
⚠️ Astuce (important pour débutant)

Mets tes fichiers dans le même dossier :

/mon_projet/
lecteur_poeme.php
compteur_fichier.php
poeme.txt
compteur.txt (sera créé automatiquement)

Si tu veux, je peux te faire une version encore plus simple ou avec fgets() pour bien comprendre ligne par ligne 👍
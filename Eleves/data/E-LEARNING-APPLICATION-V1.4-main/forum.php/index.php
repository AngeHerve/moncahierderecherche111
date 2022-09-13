<html>
<head>
<title>acceuil forum</title>
</head>
<body>

<!-- on place un lien permettant d'accéder à la page contenant le formulaire d'insertion d'un nouveau sujet -->
<a href="./post.php">Insérer un sujet</a>

<br /><br />

<?php
// on se connecte à notre base de données
include "connet.php";

// préparation de la requete
$sql = 'SELECT auteur_pub	titre	date_comment FROM sujet_ forum ORDER BY date_comment DESC';

// on lance la requête (mysqli_query) et on impose un message d'erreur si la requête ne se passe pas bien (or die)
$result= mysqli_query($conn,$sql);
// on compte le nombre de sujets du foru

if (mysqli_num_rows($result) == 0) {
	echo 'Aucun sujet';
}
else {
	?>
	<table width="500"><tr>
	<td>
	Auteur
	</td><td>
	Titre du sujet
	</td><td>
	Date dernière réponse
	</td></tr>
	<?php
	// on va scanner tous les tuples un par un
	while ($data = mysql_fetch_array($req)) {

	// on décompose la date
	sscanf($data['date_comment'], "%4s-%2s-%2s %2s:%2s:%2s", $annee, $mois, $jour, $heure, $minute, $seconde);

	// on affiche les résultats
	echo '<tr>';
	echo '<td>';

	// on affiche le nom de l'auteur de sujet
	echo htmlentities(trim($data['auteur']));
	echo '</td><td>';

	// on affiche le titre du sujet, et sur ce sujet, on insère le lien qui nous permettra de lire les différentes réponses de ce sujet
	echo '<a href="./affiche.php?id_sujet=' , $data['id'] , '">' , htmlentities(trim($data['titre'])) , '</a>';

	echo '</td><td>';

	// on affiche la date de la dernière réponse de ce sujet
	echo $jour , '-' , $mois , '-' , $annee , ' ' , $heure , ':' , $minute;
	}
	?>
	</td></tr></table>
	<?php
}

// on libère l'espace mémoire alloué pour cette requête
mysql_free_result ($req);
// on ferme la connexion à la base de données.
mysql_close ();
?>
</body>
</html>
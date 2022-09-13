<html>
<head>
<title>Lecture d'un sujet</title>
</head>
<body>

<?php
if (!isset($_GET['id_sujet'])) {
	echo 'Sujet non défini.';
}
else {
?>
	<table width="500"><tr>
	<td>
	Auteur
	</td><td>
	Messages
	</td></tr>
	<?php

	// on se connecte à notre base de données
	include "../conixion.php";
$id=$_GET['id_sujet'];
	// on prépare notre requête
	$sql = 'SELECT auteur_reponse, commentaire, date_commentaire FROM forum_reponses WHERE id_sujet="$id" ORDER BY date_commentaire ASC';
// on lance la requête (mysqli_query) et on impose un message d'erreur si la requête ne se passe pas bien (or die)
$req = mysqli_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
	// on va scanner tous les tuples un par un
	while ($data = mysql_fetch_array($req)) {

	// on décompose la date
	sscanf($data['date_reponse'], "%4s-%2s-%2s %2s:%2s:%2s", $annee, $mois, $jour, $heure, $minute, $seconde);

	// on affiche les résultats
	echo '<tr>';
	echo '<td>';

	// on affiche le nom de l'auteur de sujet ainsi que la date de la réponse
	echo htmlentities(trim($data['auteur']));
	echo '<br />';
	echo $jour , '-' , $mois , '-' , $annee , ' ' , $heure , ':' , $minute;

	echo '</td><td>';

	// on affiche le message
	echo nl2br(htmlentities(trim($data['message'])));
	echo '</td></tr>';
	}

	// on libère l'espace mémoire alloué pour cette reqête
	mysql_free_result ($req);
	// on ferme la connection à la base de données.
	mysql_close ();
	?>

	<!-- on ferme notre table html -->
	</table>
	<br /><br />
	<!-- on insère un lien qui nous permettra de rajouter des réponses à ce sujet -->
	<a href="./reponse.php?num_sujet=<?php echo $_GET['id_sujet']; ?>">Répondre</a>
	<?php
}
?>
<br /><br />
<!-- on insère un lien qui nous permettra de retourner à l'accueil du forum -->
<a href="./index.php">Retour à l'accueil</a>

</body>
</html>

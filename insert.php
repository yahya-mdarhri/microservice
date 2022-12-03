<?php
$link1 = mysqli_connect("localhost","root","","microservice") or die
("Error " . mysqli_error($link1));
?>

<?php
// isset — Détermine si une variable est définie et est différente de NULL
if (isset ($_POST['enregistrer'])){
//On récupère les valeurs entrées par l'utilisateur :
$prenom=$_POST['prenom'];
$nom=$_POST['nom'];
$profession=$_POST['profession'];


//On prépare la commande sql d'insertion
$sql = "INSERT INTO user (prenom,nom,profession) VALUES('$prenom','$nom','$profession')";
mysqli_query ($link1,$sql);}
/*echo "message enregistré avec succé - Merci- pour votre visite";*/

/*echo '<meta http-equiv="refresh" content="5;URL=index.html">';*/
?>
<script>
alert("Message enregistré avec succès")
</script>

<meta http-equiv="refresh" content="2;url=index.php">
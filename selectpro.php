<?php
$link1 = mysqli_connect("localhost","root","","microservice") or die
("Error " . mysqli_error($link1));
?>

<?php
// isset — Détermine si une variable est définie et est différente de NULL
if (isset ($_POST['chercher'])){
// // //On récupère les valeurs entrées par l'utilisateur :
$id=$_POST['id'];


//On prépare la commande sql d'insertion
$sql = " SELECT id ,profession  from user where id = $id";
$result = mysqli_query($link1, $sql);}

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - Name: " . $row["profession"].  "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($link1);

/*echo "message enregistré avec succé - Merci- pour votre visite";*/

/*echo '<meta http-equiv="refresh" content="5;URL=index.html">';*/
?>



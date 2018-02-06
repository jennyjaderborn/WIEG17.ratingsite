<?php
$pageName = "Film";
$sidansNamn = "Film.nu";

include './header.php';
include './funktioner.php';

$selectedMovie = $_GET['selected'];
//echo $selectedMovie;
//print_r($_GET);

createMovie($minLista, $selectedMovie);

?>



<?php
include './footer.php';
?>
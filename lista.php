<?php
$pageName = "Lista";
$sidansNamn = "Film.nu";

include './header.php';

include './funktioner.php';

listItems($minLista);
?>

<form method="GET" action="./merinfo.php">
<select name="selected">
<?php
listOptions($minLista);
?>
</select>

<button type="submit">Visa mer</button>
</form>

</div> <!--wrapper>

<?php

include './footer.php';
?>
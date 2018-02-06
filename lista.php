<?php
$pageName = "Lista";

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
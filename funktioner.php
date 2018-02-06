

<?php
$minLista = array("12. Titanic" => "Info om titanic", "9. Jurassic Park" => "Info om jurassic park", "1. Shutter Island" => "info om shutter island", "3. Harry Pooter" => "info om harry potter", "10. The Post" => "info om the post", "5. En man som heter Ove" => "info om en man som heter ove", "6. Vaiana" => "info om vaiana", );
ksort($minLista, SORT_NUMERIC); //finns olika typer av sort, kolla upp vid sortering


function listItems($array){
foreach($array as $key => $item) {
    echo "<li>$key</li>";
}
}


function listOptions($array){
    foreach($array as $key => $item) {
        echo "<option>$key</option>";
    }
    }

function createMovie($array, $selected){

    echo "<h1>$selected</h1>";
    foreach($array as $key => $item) {
        if($key == $selected)
        echo "<p class='movieDescription'>$item</p>";
    }
}






//testar arrayer 

/*$minLista2 = array("hej" => "hhh", "namn" => "jenny", "efternamn" => "jäderborn");
    print_r($minLista2);
    unset($minLista2["namn"]);
    print_r($minLista2);*/

?><p>
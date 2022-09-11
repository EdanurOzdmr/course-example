<?php

function ucgen($value){

    for($i=1; $i<=$value; $i++){
        $j=1;
        while($j<=$i){
            echo '0';
            $j++;

        }
        echo '<br>';
    }
}

echo ucgen(15);
?>

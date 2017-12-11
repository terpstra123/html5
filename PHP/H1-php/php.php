<?php
    $apen = array(
        array("naam" => "Harry","leeftijd" => 14),
        array("naam" => "Joost","leeftijd" => 16),
    );

    foreach ($apen as $aap){
        echo $aap["naam"];
        echo $aap["leeftijd"];
    }
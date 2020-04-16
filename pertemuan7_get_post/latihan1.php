<?php
    //variable scope / lingkup variable
    $s=10;

    function getx () {
        global $s;
        echo $s;
    }

    getx();

?>
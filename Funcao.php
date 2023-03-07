<?php

    function calcularIdade($data){
        $now = new DateTime();
        $diff = $now->diff(new DateTime($data));

        return $diff->y;
    }




?>
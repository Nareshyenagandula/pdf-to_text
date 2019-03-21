<?php

        header('Content-type: application/json');

         // make your required checks

        $fp  = 'out.txt';

        // get the contents of file in array
        $conents_arr   = file($fp);
        $arr = [];
        for($i=0; $i<3; $i++)
        {
            echo readline("commande: ");
        }




        foreach($conents_arr as $key=>$value)
        {
            $conents_arr[$key]  = rtrim($value, "\r");
        }

        var_dump($conents_arr);
        $json_contents = json_encode($conents_arr);

        echo $json_contents;
?>
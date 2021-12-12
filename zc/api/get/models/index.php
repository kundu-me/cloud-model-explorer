<?php
        header("Access-Control-Allow-Origin: *");
        header("Content-Type: application/json; charset=UTF-8");

        $command = escapeshellcmd("python3 ../../../db/getModels.py");
        $result = shell_exec($command);
        echo $result;
?>

<?php 
    function generatePassword($lenght) {
        $chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOQPRSTUVWXYZ!@#$%^&*()_-+=";
        $password = "";

        for($i = 0; $i < $lenght; $i++) {
            $password .= $chars[rand(0, strlen($chars) - 1)];
        }

        return $password;
    };
?>
<?php 
    function generatePassword($lenght) {
        $chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOQPRSTUVWXYZ!@#$%^&*()_-+=";
        $password = "";

        if ($lenght < 8) {
            echo '<script>alert("Password must be longer than 8 characters.");</script>';
        } elseif($lenght > 128) {
            echo '<script>alert("The maximum password length is 128 characters.");</script>';
        } else {
            for($i = 0; $i < $lenght; $i++) {
                $password .= $chars[rand(0, strlen($chars) - 1)];
            }
        }

        return $password;
    };
?>
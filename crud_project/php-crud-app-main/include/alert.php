<?php
    if(isset($_SESSION['sucess'])){
        echo $_SESSION['sucess'];
        unset($_SESSION['sucess']);
    }
    if(isset($_SESSION['error'])){
        echo $_SESSION['error'];
        unset($_SESSION['error']);
    }
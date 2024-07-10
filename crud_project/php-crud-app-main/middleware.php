<?php

// check if the user logged in
if (isset($_SESSION['is_user_logged_in'])) {
    return true;
} else {
    header("LOCATION: index.php");
}

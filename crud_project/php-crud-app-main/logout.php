<?php
include('./config/config.php');
session_destroy();
header("LOCATION:index.php");
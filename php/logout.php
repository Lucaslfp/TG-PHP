<?php
include_once 'banco.php';
session_destroy();
header('Location: ../login.php');
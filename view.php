<?php
$theme = $_GET['theme'];
$step = $_GET['step'];
include('steps/step_' . $step . '.php');
?>
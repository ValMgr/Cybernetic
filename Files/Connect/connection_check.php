<?php 

if (isset($_SESSION['Connected']) && !empty($_SESSION['Connected'])) {
    $Connected = $_SESSION['Connected'];
}
else {
    $Connected = false;
}

?>
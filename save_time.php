<?php
session_start();

// Menyimpan waktu pemutaran audio ke dalam session
if (isset($_POST['currentTime'])) {
    $_SESSION['currentTime'] = $_POST['currentTime'];
}
?>

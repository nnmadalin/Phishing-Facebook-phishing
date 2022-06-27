<?php  
    $conectare = mysqli_connect('localhost', '', '', '');
    if (!$conectare)
    {
        die('Nu s-a reusit conectearea la baza de date');
    }
?>
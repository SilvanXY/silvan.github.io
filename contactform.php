<?php
    echo '<u> Deine Angaben: </u> <br>';
    echo 'Dein Name: ' .$_POST['vorname'] .'<br>';
    echo 'Dein Nachname: ' .$_POST['name'] .'<br>';
    echo 'Deine E-Mail: ' .$_POST['email'];
    echo 'Deine Adresse: ' .$_POST['adresse'];
    echo 'Deine Postleitzahl: ' .$_POST['plz'];
    echo 'Dein Land: ' .$_POST['land'];
    echo 'Deine Nachricht: ' .$_POST['message'];
    ?>
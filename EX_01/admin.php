<?php
    $name = $_FILES;
    if (strlen(explode('.', $name)[0]) <5)
    {
       echo "Le fichier n'est pas valide.'";
    }
    else 
    {
        echo "<p>Nom du fichier :" .$_FILES['userfile']['name']. "</p>";
        echo "<p>Type du fichier :" .$_FILES['userfile']['type']. "</p>";
        echo "<p>Taille du fichier :" .$_FILES['userfile']['size']. "</p>";
        echo "<p>Description :" .$_FILES['Description']. "</p>";
    }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Mini site routing</title>
</head>

<body>

        <a href="http://localhost/ISCC/J12/EX_01/mini-site-routing.php?page=1">Accueil</a>
        <a href="http://localhost/ISCC/J12/EX_01/mini-site-routing.php?page=2">Page 1</a>
        <a href="http://localhost/ISCC/J12/EX_01/mini-site-routing.php?page=3">Page 2</a>
        <a href="http://localhost/ISCC/J12/EX_01/mini-site-routing.php?page=connexion">Page Connexion</a>


    <?php
    if($_COOKIE['id'])
    {
        echo '<a href="http://localhost/ISCC/J12/EX_01/mini-site-routing.php?page=admin">Admin</a>';
    }
    ?>

<?php
    if($_GET)
    {
    if($_GET["page"]== "1")
    {
        echo "<h1>Accueil !</h1>";
    }
    if($_GET["page"]== "2")
    {
        echo "<h1>Page 2 !</h1>";
    }
    if($_GET["page"]== "3")
    {
        echo "<h1>Page 3 !</h1>";
    }
    if($_GET["page"]== "connexion")
    {
        echo "<h1>Connexion</h1>";
        include 'connexion.php';
    }
    }
    ?>

    <form enctype="multipart/form-data" action="admin.php" method="post">
        <input type="hidden" name="MAX_FILE_SIZE" value="2097152" />
        <input name="userfile" type="file" accept="image/x-png,image/jpg,image/jpeg" /><br><br>
        <input name="description" type="text" placeholder="Description"/><br><br>
        <input name="titre" type="text" placeholder="Titre" />
        <input type="submit" value="Envoyer le fichier" />
    </form>

    <?php
        echo $_FILES;
    ?>

</body>
<footer>
<?php

session_start();


if(isset($_SESSION["id"]))
{
    echo '<p>Login : ' .$_SESSION["id"]. '</p>';
    echo '<p> Description : ' .$_SESSION["description"]. '</p>';
}
else
{
    header('http://localhost/ISCC/J12/EX_01/mini-site-routing.php?page=connexion');
}
?>

</footer>


</html>
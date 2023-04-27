<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>Profil</title>
        <link rel="stylesheet" href='Style/Profil.css'/>
    </head>
    <body>
        <ul id=Navbar>
            <li id=Menu><a href=accueil.html>Accueil</a></li>
            <li id=Menu><a href=nos_produits.html>Nos produits</a></li>
            <li id=Menu><a href=connexion.html>Connexion</a></li>
            <li id=Nom>I̸n̶s̷o̷m̸n̶i̵a̸</li>
        </ul>
        <?php
        $EID="Exkyaz";
        $EMDP="Kingdom23";
        $EAGE=15;
        $ENAME="Eyci";
        $ENAME2="Bilquez-Cyrille";
        $ELAST="apex.html";
        $EMAIL="acebil2005@gmail.com";
        $EPSEUDO="Exkyaz";

        $STAT="Admin";
        $CONNECT="";

        $DID="Dav's";
        $DMDP="Dav!d95";
        $DAGE=17;
        $DNAME="David";
        $DNAME2="Taylan";
        $DPSEUDO="Dav's";
        $DLAST="rtx3090.html";
        $DMAIL="taydav951@gmail.com";
        $ID=$_POST['identifiant'];
        $MDP=$_POST['motdepasse'];
        if ($ID==$EID and $MDP==$EMDP) {
            echo "<img id='pp' src='Images/ppeyci.png'>";
            echo "<p>Ravi de vous revoir ".$EID." !</p>";
            echo "<p>Nom : ".$ENAME2."</p>";
            echo "<p>Prénom : ".$ENAME."</p>";
            echo "<p>Pseudo : ".$EPSEUDO."</p>";
            echo "<p>Âge : ".$EAGE."</p>";
            echo "<p>Email : ".$EMAIL."</p>";
            echo "<p>Statut : ".$STAT."</p>";
            echo "<p>Dernier achat : <a href=".$ELAST.">Pathfinder's Quest</a></p>";
            echo "</br></br></br></br>";
            echo "<fieldset><legend>Galerie</legend><img src='Images/BannerWraith.png'><img id='octane' src='Images/BannerOctane.png'><img src='Images/BannerCrypto.png'></fieldset>";
        } elseif ($ID==$DID and $MDP==$DMDP) {
            echo "<img id='pp' src='Images/ppdavid.png'>";
            echo "<p>Ravi de vous revoir ".$DID." !</p>";
            echo "<p>Nom : ".$DNAME2."</p>";
            echo "<p>Prénom : ".$DNAME."</p>";
            echo "<p>Pseudo : ".$DPSEUDO."</p>";
            echo "<p>Âge : ".$DAGE."</p>";
            echo "<p>Email : ".$DMAIL."</p>";
            echo "<p>Statut : ".$STAT."</p>";
            echo "<p>Dernier achat : <a href=".$DLAST.">RTX</a></p>";
            echo "</br></br></br></br>";
            echo "<fieldset><legend>Galerie</legend><center><img src='Images/Rl.jpg'></br><img src='Images/lis4.jpg'></br><img src='Images/warzone.jpg'></center></fieldset>";
        } elseif (($ID==$EID or $DID) and ($MDP!==$EMDP or $DMDP)) {
            echo "<p>Echec d'authentification : Mot de passe erroné</p>";
        } else {
            echo "<p>Echec d'authentification : Profil non existant</p>";
        }
        ?>

    </body>
</html>

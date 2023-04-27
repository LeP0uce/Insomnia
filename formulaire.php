<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Paiement</title>
    <link rel="stylesheet" href="Style/formulaire.css"/>
    <script>
      function Verification() {
        var Nom = document.getElementById("idNom").value;
        var Prenom = document.getElementById("idPrenom").value;
        var Email = document.getElementById("idEmail").value;
        var Ville = document.getElementById("idVille").value;
        var Telephone = document.getElementById("idTelephone").value;
        var Rue = document.getElementById("idRue").value;
        var CodePostal = document.getElementById("idCodePostal").value;
        var NumCarteBleu = document.getElementById("idNumCarteBleu").value;
        var Expiration = document.getElementById("idExpiration").value;
        var Cryptogramme = document.getElementById("idCryptogramme").value;

        if(Nom==""){
        alert("Vous devez compléter votre nom !");
        document.getElementById("idNom").style.backgroundColor="red";
        document.getElementById("idNom").style.color="#FFF";
        return false;
        }

        else{
        document.getElementById("idNom").style.backgroundColor="#9C6";
        }


        if(Prenom==""){
        alert("Vous devez compléter votre prénom !");
        document.getElementById("idPrenom").style.backgroundColor="red";
        document.getElementById("idPrenom").style.color="#FFF";
        return false;
        }

        else{
        document.getElementById("idPrenom").style.backgroundColor="#9C6";
        }

        if(Email=="") {
        alert("Vous devez compléter votre adresse email");
        document.getElementById("idEmail").style.backgroundColor="red";
        document.getElementById("idEmail").style.color="#FFF";
        return false;
        }

        else{
        document.getElementById('idEmail').style.backgroundColor="#9C6";
        }

        if(Telephone==""){
        alert("Vous devez compléter votre numéro de téléphone !");
        document.getElementById("idTelephone").style.backgroundColor="red";
        document.getElementById("idTelephone").style.color="#FFF";
        return false;
        }

        else{
        document.getElementById("idTelephone").style.backgroundColor="#9C6";
        }
        

        if (Ville==""){
        alert("Vous devez compléter votre ville");
        document.getElementById("idVille").style.backgroundColor="red";
        document.getElementById("idVille").style.color="#FFF";
        return false;
        }

        else{
        document.getElementById("idVille").style.backgroundColor="#9C6"
        }

        if(Rue==""){
        alert("Vous devez compléter le nom de votre rue !");
        document.getElementById("idRue").style.backgroundColor="red";
        document.getElementById("idRue").style.color="#FFF";
        return false;
        }

        else{
        document.getElementById("idRue").style.backgroundColor="#9C6";
        }
        
        if(CodePostal==""){
        alert("Vous devez compléter votre code postal !");
        document.getElementById("idCodePostal").style.backgroundColor="red";
        document.getElementById("idCodePostal").style.color="#FFF";
        return false;
        }

        else{
        document.getElementById("idCodePostal").style.backgroundColor="#9C6";
        }

        if(NumCarteBleu==""){
        alert("Vous devez compléter le numéro de votre carte bleu !");
        document.getElementById("idNumCarteBleu").style.backgroundColor="red";
        document.getElementById("idNumCarteBleu").style.color="#FFF";
        return false;
        }

        else{
        document.getElementById("idNumCarteBleu").style.backgroundColor="#9C6";
        }

        if(Expiration==""){
        alert("Vous devez compléter la date d'expiration de votre carte bleu !");
        document.getElementById("idExpiration").style.backgroundColor="red";
        document.getElementById("idExpiration").style.color="#FFF";
        return false;
        }

        else{
        document.getElementById("idExpiration").style.backgroundColor="#9C6";
        }

        if(Cryptogramme==""){
        alert("Vous devez compléter le cryptogramme de votre carte bleu !");
        document.getElementById("idCryptogramme").style.backgroundColor="red";
        document.getElementById("idCryptogramme").style.color="#FFF";
        return false;
        }

        else{
        document.getElementById("idCryptogramme").style.backgroundColor="#9C6";
        }

        alert("Votre commande à bien étée prise en compte.");
      }
    </script>
  </head>
  <body>
    <ul class=Navbar>
      <li class=Menu><a href=Accueil.html>Accueil</a></li>
      <li class=Menu><a href=nos_produits.html>Nos produits</a></li>
      <li class=Menu><a href=connexion.html>Connexion</a></li>
      <li class=Nom>I̸n̶s̷o̷m̸n̶i̵a̸</li>
    </ul>
    <div id="ficheprix">
        <form action="formulaire.php" method="POST">
            <select name="produit">
                <option value=""></option>
                <option value="19.99 €">Pathfinder's Quest</option>
                <option value="Produit momentanément indisponible">RTX 3090</option>
                <option value="199.99 €">Razer Raiju</option>
                <option value="59.99 €">Life is Strange : True Colors</option>
            </select>
            <input type="submit" value="Valider">
        </form>
        <?php 
        function prix ()
        {
          echo '<p id="prix">'.$_POST['produit'].'</p>';
        }
        @prix()
        ?>
      <p id="livraison"><strong>Livraison gratuite : </strong></p>
      <?PHP
      $quatre = mktime(0,0,0,date("m"),date("d")+4,date("Y"));
      $sept = mktime(0,0,0,date("m"),date("d")+7,date("Y"));
      echo "<p>Entre le : " .date ("d", $quatre). " et le " .date ("d/m/Y", $sept). "</p>";
      ?>
      <p id="livraison"><strong>Livraison acceleré : </strong></p>
      <?PHP
      $demain = mktime(0,0,0,date("m"),date("d")+1,date("Y"));
      echo "<p>Livré le : " .date ("d/m/Y", $demain). "</p>";
      ?>
  </div>
    
    <div class=paiement>
    <form class=formulaire name="formulaire"onSubmit="return Verification()">
      <label for="idNom">Nom:<span class="text-danger">*</span></label> <br>
      <input type="text" name="nom" id="idNom">
      <br/><br/>
      <label for="idPrenom">Prénom:<span class="text-danger">*</span></label> <br>
      <input type="text" name="prenom" id="idPrenom">
      <br/><br/>
      <label for="idEmail">Email:<span class="text-danger">*</span></label> <br>
      <input type="text" name="email" id="idEmail">
      <br/><br/>
      <label for="idTelephine">Téléphone:<span class="text-danger">*</span></label> <br>
      <input type="text" name="telephone" id="idTelephone">
      <br/><br/>
      <label for="idVille">Ville:<span class="text-danger">*</span></label> <br>
      <input type="text" name='ville' id="idVille">
      <br/><br/>
      <label for="idRue">Rue de la ville:<span class="text-danger">*</span></label> <br>
      <input type="text" name="rue" id="idRue">
      <br/><br/>
      <label for="idCodePostal">Code Postal:<span class="text-danger">*</span></label> <br>
      <input type="text" name="codepostal" id="idCodePostal">
      <br> <br>
      <label for="idNumCarteBleu">Numéro de votre carte bleu:<span class="text-danger">*</span></label> <br>
      <input type="text" name="numcartebleu" id="idNumCarteBleu">
      <br><br>
      <label for="idExpiration">Date d'expiration:<span class="text-danger">*</span></label> <br>
      <input type="text" name="expiration" id="idExpiration">
      <br><br>
      <label for="idCryptogramme">Cryptogramme:<span class="text-danger">*</span></label> <br>
      <input type="password" name="cryptogramme" id="idCryptogramme">
      <br><br>
      <input type="submit" name="valider" value="Valider">
      <p></p>
    </form>
  </div>
  </body>
</html>
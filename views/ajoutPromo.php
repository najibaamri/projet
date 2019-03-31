<HTML>
<head>
  
<script type="text/javascript">
	function notifyMe() {
  if (!("Notification" in window)) {
    alert("This browser does not support system notifications");
  }
  else if (Notification.permission === "granted") {
    notify();
  }
  else if (Notification.permission !== 'denied') {
    Notification.requestPermission(function (permission) {
      if (permission === "granted") {
        notify();
      }
    });
  }
  
  function notify() {
    var notification = new Notification('PROMOTION', {
      icon: '../notifier.png',
      body: "Hey! Promotion ajoutée avec succés!",
    });

    notification.onclick = function () {
      window.location.replace("afficherPromo.php");      
    };
    setTimeout(notification.close.bind(notification), 7000); 
  }

}
</script>
</head>
<body>
<form method="POST" action="ajoutPromo1.php"  >
<table>
<caption>Ajouter Promotion</caption>
<tr>
<td>CIN</td>
<td><input type="number" name="id" id="ID"></td>
</tr>
<tr>
<td>Nom</td>
<td><input type="text" id="nom" name="nom">
<div id="div"></div>

</td>
</tr>
<tr>
<td>date de debut</td>
<td><input type="date" name="dateD"></td>
</tr>
<tr>
<td>date de fin</td>
<td><input type="date" name="dateF"></td>
</tr>
<tr>
<td>Pourcentage</td>
<td><input type="text" id="pourcentage" name="pourcentage"></td>
</tr>
<tr>
<td>prix ancien</td>
<td>
<select name="prixAncien">
  
    <?php
    include "../config.php";
    $res="select prix from produit";
    $db = config::getConnexion();
        $liste=$db->query($res);

        foreach($liste as $row){
          $option="<option>" . $row['prix'];

            echo $option;


  }
    ?>

  
</select>
  
</td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="ajouter" id="ajouter" value="ajouter"></td>
</tr>
</table>
</form>


		<script type="text/javascript" src="saisie.js"></script>



</body>
</html>




<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title >Transfert ILLICO</title>
</head>

<body background="../../assets/img/BG.jpg">
  <div id="container">
<div style="margin-top:5px"><center> <h2 style="color : white"> SERVEZ-VOUS...  NAMCREDIT</h2> </center> </div>

       <div id="imga">
          <div id="slider">

              <div id="image-1">
                <a href=""><?php echo img('1.jpg','S1') ; ?></a>
                <a class="slider-nav" href="#image-1"></a>
              </div>
              <div id="image-2">
                <a href=""><?php echo img('2.jpg','S2') ; ?></a>
                <a class="slider-nav" href="#image-2"></a>
              </div>
              <div id="image-3">
                <a href=""><?php echo img('3.JPG','S3') ; ?></a>
                <a class="slider-nav" href="#image-3"></a>
              </div>
              <div id="image-4">
                <a href=""><?php echo img('4.jpg','S4') ; ?></a>
                <a class="slider-nav" href="#image-4"></a>
              </div>
  
          </div>
           <a href="<?php echo site_url('../welcome') ?> "><?php echo img('accueil.jpg','Accueil') ; ?></a>

       </div><!-- inclusion du fichier css  
       <div id="imga">
          <?php echo img('bantpro.jpg','Recharger crédit Togocel') ; ?>
          <a href="<?php echo site_url('..//') ?> "><?php echo img('accueil.jpg','Accueil') ; ?></a>
       </div>--> 

       <div id="imgb" >
          <!-- Start Formoid form-->
          <form action="traiter_illico" id="formoid" style="background-color:#FFFFFF;" title="Formulaire d'envoie de crédit" method="post">
            <a href="<?php echo site_url('..\achat\illico') ?> "><?php echo img('illico.jpg','Recharger crédit illico') ; ?></a></br> </br> 

          <div><h2 class="title">Envoi de Crédit</h2></div>
          <div>
            <label class="title">Votre nom</label>
            <input type="text" name="nom" id="nom" value=""  placeholder="Un message sera envoyé avec ce nom" required>
          </div>
          <div>
            <label class="title">Numéro bénéficiaire</label>
            <input type="text" name="numero" id="num" value="<?php echo set_value('numero') ; ?>" required placeholder="Le numéro sans le 00228">
          </div>
          <div><label class="title">Montant du tranfert</label>
                  <select name="montant" id="montant">
                    <option value="1000">1000 FCFA (€ 2.6)</option>
                    <option value="2000">2000 FCFA (€ 4.4)</option>
                    <option value="5000">5000 FCFA (€ 9.6)</option>
                    <option value="10000">10 000 FCFA (€ 19)</option>
                  </select>
          </div>
          <div>
            <input type="submit" name="valider" value="Commander" onClick="numvalid();">
          </div>
          </form>
      </div>

      <div id="imgc">
            <footer>
              @copyright labosoft contact:<a href="mailto:contact@namcredit.com">contact@namcredit.com</a> Tel:(0033) 6 88 91 92 15

            </footer>
      </div>
  </div>

     <link rel="stylesheet" type="text/css" media="screen" href="<?php echo css_url('style');?>" /> <!-- inclusion du fichier css --> 
     <link rel="stylesheet" type="text/css" media="screen" href="<?php echo css_url('des');?>" /> <!-- inclusion du fichier css --> 
     <link rel="stylesheet" type="text/css" media="screen" href="<?php echo css_url('css-slider');?>" /> <!-- inclusion du fichier css --> 
           
</body>
<script type="text/javascript">
function numvalid(){
var expression = /^2[2-3]([-. ]?[0-9]{2}){3}$/; 
if(expression.test(document.getElementById('num').value)==false)

alert('Numéro invalide (Enlevé le 228 ou vérifier que c\'est un numéro ILLICO)') ;}

}
</script>
<script type="text/javascript">window.location.hash = '#image-2'</script>
</html>
<div id="contenu">
      <h2>Suivi des cumuls de tous les frais par mois </h2>
      <h3>Periode: </h3>
      <form action="index.php?uc=suiviFrais&action=voirsuiviFrais" method="post">
      <div class="corpsForm">
         
      <p>
   
        <label for="lstMois/Année" accesskey="n">Mois/Année : </label>
        <select id="lstMois/Année" name="lstMois/Année">
            <?php

      foreach ($lesMois as $unMois)
      {
      $mois = $unMois['mois'];
   
        ?>
        <option value="<?php echo $unMois['mois'] ?>"><?php echo  $unMois['mois'] ?> </option> 
          <?php } ?>  
          
        </select>
      </p>
      </div>
      <div class="piedForm">
      <p>
        <input id="ok" type="submit" value="Valider" size="20" />
        <input id="annuler" type="reset" value="Effacer" size="20" />
      </p> 
      </div>
        
      </form>
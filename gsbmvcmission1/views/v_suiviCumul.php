<h3>Suivi des cumuls de tous les frais par mois : <?php echo $leMois?>
    </h3>
    <div class="encadre">


    <table class="listeLegere">
    <h3>Cumul pour tous les visiteurs des Frais au forfait par poste</h3>
  
             <tr>
                <th class="Repas midi">Repas midi</th>
                <th class="Nuitee">Nuitee</th>
                <th class='Etape'>Etape</th>      
                <th class='Km'>Km</th>              
             
             </tr><tr>
        <?php      
          foreach ($frais as $unfrais) 
      {

                   if ($unfrais['idFraisForfait']=='REP')
                  { $rep= $unfrais['totqte'];
                  }
                  if ($unfrais['idFraisForfait']=='NUI')
                  { $nui=$unfrais['totqte'];
                  }
                  if ($unfrais['idFraisForfait']=='ETP')
                  { $etp=$unfrais['totqte'];
                  }                  
                  if ($unfrais['idFraisForfait']=='KM')
                  { $km=$unfrais['totqte'];
                  }
          }
    ?>
                <td>
                 <?php echo $rep;
                  ?>
                </td>
                <td>
                 <?php echo $nui;
                  ?>
                </td>
                <td>
                 <?php echo $etp;
                  ?>
                </td>
                <td>
                 <?php echo $km;
                  ?>
                </td>
           
             

 </tr>
          
     
    </table>
  </div>
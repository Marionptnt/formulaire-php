<?php


  echo 'Merci '.$_POST['user_name'].' de nous avoir contacté à propos de '. $_POST['object'].'.'.

  " Un de nos conseiller vous contactera soit à l’adresse ".$_POST['user_mail'].' ou par téléphone au '.$_POST['phone_number'].' dans les plus brefs délais pour traiter votre demande : ' 
  
  .$_POST['user_message'] ;
?>
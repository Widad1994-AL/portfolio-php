<?php

switch ($_SERVER['REQUEST_URI']) {

    case '/':

        echo "Page d'accueil";
         break;
    
   
        case '/about':

         echo "Page de présentation";
         break;
    
    
        case '/skills':
    
         echo "Page de compétences";
         break;
    
   
        case '/projects':
    
          echo "Page de projets";
          break;
  
        case '/contact':
    
          echo "Page de contact";
          break;
    
}
 
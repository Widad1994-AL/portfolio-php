<?php



$path = $_SERVER['REQUEST_URI'];

$cleanPath = preg_replace('/\?.*/', '', $path);
 
 switch ($cleanPath) {

    case '/':

      include './templates/home.php';
         break;
    
   
        case '/about':

          include './templates/about.php';
         break;
    
    
        case '/skills':
    
         include './templates/skills.php';
         break;
    
   
        case '/projects':
    
      
          include'./templates/projects.php';
          break;
  
        case '/contact':
          include'./templates/contact.php';
          break;
      
          default:
          echo 'Page introuvable - 404 ';;
          break;
}
 
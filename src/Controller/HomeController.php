<?php 



namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;



class HomeController extends AbstractController{


    
    /**
     * @Route ("/acceuil", name="acceuil")
     */
    public function home(){  

    
        return $this->render('pages/acceuil.html.twig');
        
    }



}
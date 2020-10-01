<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;





class TestController extends AbstractController
{


    /**
     * @Route ("/Homepage", name="homepage")
     */
    public function homePage(){

    
        return $this->render('pages/home.html.twig');
        
    }

      /**
     * @Route ("/page-1", name="page_1")
     */
    public function pageOne(){

    
        return $this->render("pages/pageone.html.twig");
        
    }


     /**
     * @Route ("/page-2",  name="page_2")
     */
    public function pageTwo(){

    
        return $this->render("pages/pagetwo.html.twig");
        
    }


         /**
     * @Route ("/page-3",  name="page_3")
     */
    public function pageThree(){

    
        return $this->render("pages/pagethree.html.twig");
        
    }

 
 

         /**
     * @Route ("/page-4" ,name="page_4")
     */
    public function pageFour(){

    
        return $this->render("pages/pageFour.html.twig");
        
    }

    
         /**
     * @Route ("/hero/{name}/{age}",
     *  name="hero",
     * defaults={
     *  "name": "vide",
     *  "age" :18
     * }
     * )
     */
    public function hero(string $name, int $age){


        return $this->render("pages/hero.html.twig", [
            'name' => $name,
            'age' => $age
        ]); 
        
    }

     
         /**
     * @Route ("/heroes",name="heroes" )
     */
    public function heroes(){


        $ListOfHeroes =["Denis_brogniart", "michel_drucker", "Zinedinne_Zidane", "Gerard_pardieux", "Jamel_Debbouze"];
        $HeroDescribe = [
            
                "name"=> " Denis_brogniart ",
                "age" => 52,
                "size" => 1.98

        ];

        return $this->render("pages/heroes.html.twig",
        
         ["names" => $ListOfHeroes, "describe" => $HeroDescribe

         ]);
        
       
        
    }


    

    /**
     * @Route ("/variable", name="variables")
     */
    public function variable(){

    
        return $this->render('pages/variable.html.twig');
        
        
    }



    
    /**
     * @Route ("/req", name="req")
     */
    public function req(Request $request){


            $number = $request->get("number");
            
            $letter = $request->get("letter");




        return $this->render('pages/req.html.twig', [
            "request" => $request,
            "number"=> $number,
            "letter" => $letter

        ]);
        
        
    }

 
 

 
 
 
 

 
 

 

}
<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Entity\Article;
use App\Entity\Client;
use App\Entity\Facture;
use App\Entity\Categorie;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Controller extends AbstractController
{


    /**
     * @Route("/Accueil",name="page Accueil")
     */
    public function Accueil(){



        $repositoryProduits = $this->getDoctrine()->getRepository(Produit::class);
        $Produits = $repositoryProduits->findAll();

        $repositoryArticles = $this->getDoctrine()->getRepository(Article::class);
        $Articles = $repositoryArticles->findAll();       

        $repositoryClients = $this->getDoctrine()->getRepository(Client::class);
        $Clients = $repositoryClients->findAll();   

        $repositoryFactures = $this->getDoctrine()->getRepository(Facture::class);
        $Factures = $repositoryFactures->findAll();

        $repositoryCategories = $this->getDoctrine()->getRepository(Categorie::class);
        $Categories = $repositoryCategories->findAll();


        return $this->render('Pages/AccueilAdmin.html.twig',[
                'Factures'=>$Factures,
                'Clients'=>$Clients,
                'Articles'=>$Articles,
                'Produits'=>$Produits,
                'Categories'=>$Categories,
                
        ]

    );
    }
    
    

    /**
     * @Route("/Commandes",name="Agregations des commandes")
     */
    public function CommandesAgregation(){



        $repositoryProduits = $this->getDoctrine()->getRepository(Produit::class);
        $Produits = $repositoryProduits->findAll();

        $repositoryArticles = $this->getDoctrine()->getRepository(Article::class);
        $Articles = $repositoryArticles->findAll();       

        $repositoryClients = $this->getDoctrine()->getRepository(Client::class);
        $Clients = $repositoryClients->findAll();   

        $repositoryFactures = $this->getDoctrine()->getRepository(Facture::class);
        $Factures = $repositoryFactures->findAll();

        $repositoryCategories = $this->getDoctrine()->getRepository(Categorie::class);
        $Categories = $repositoryCategories->findAll();


        return $this->render('Pages/CommandesAgregation.html.twig',[
                'Factures'=>$Factures,
                'Clients'=>$Clients,
                'Articles'=>$Articles,
                'Produits'=>$Produits,
                'Categories'=>$Categories,
                
        ]

    );
    }


    

 

}

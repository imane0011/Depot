<?php
namespace App\Controller\Estimation;

use App\Controller\Forms\MaisonType;
use App\Entity\Appartement;
use App\Entity\Maison;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EstimationControlleur extends AbstractController {
    /**
     * @Route("/" , name="pages.personne.index")
     * @return Response
     */
     public function index():Response{

        return $this->render('pages/index.html.twig');
        
    }


    /**
     * @Route("/estimation" , name="estimation.type")
     * @return Response
     */
        public function type():Response{
          
            return $this->render('pages/estimation/type.html.twig');
        }

        
    /**
     * @Route("/approximite" , name="estimation.approximite")
     * @return Response
     */
        public function show():Response{
            $repository1 = $this->getDoctrine()->getRepository(Maison::class);
             $maisons = $repository1->findAll();
            $repository2 = $this->getDoctrine()->getRepository(Appartement::class);
             $apparts = $repository2->findAll();

            return $this->render('pages/estimation/preview.html.twig', ['maisons'=>$maisons,'apparts'=>$apparts]);
        }
    
        
     /**
     * @Route("/approximite/{type}/{postal}" , name="estimation.approximite.estimer")
     * @return Response
     */
    public function showPosType( $type,$postal){
        if($type=='Maison'){
        $repository = $this->getDoctrine()->getRepository(Maison::class);
        $maisons = $repository->findAll([
            'postal' => $postal,
        ]);
        return $this->render('pages/estimation/view.html.twig', ['maisons'=>$maisons]);
    }
        elseif ($type=='Appartement') {
            $repository = $this->getDoctrine()->getRepository(Appartement::class);
            $apparts = $repository->findAll([
                'code' => $postal,
            ]);
            return $this->render('pages/estimation/view.html.twig', ['apparts'=>$apparts]);

        }

    }
   
    }
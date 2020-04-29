<?php
namespace App\Controller\Estimation\Maison;

use App\Controller\Forms\MaisonType;
use App\Entity\Maison;
use App\Repository\MaisonRepository;
use App\Repository\PersonneRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MaisonControlleur extends AbstractController {
    
    public function __construct(MaisonRepository $rep,EntityManagerInterface $em )
    {
        $this->rep=$rep;
        $this->em =$em;
    }


    /**
     * @Route("/estimation/maison/resultat/{id}"  , name="pages.maison.estimation")
     * @return Response
     */
        public function result($id):Response{

            $repository = $this->getDoctrine()->getRepository(Maison::class);
            $maison = $repository->findOneBy([
                'id' => $id,
            ]);
            return $this->render('pages/estimation/maison/result.html.twig',['maison'=>$maison]);
        }
        
            
     /**
     * @Route("/estimation/maison/estimer" , name="estimation.maison.estimer")
     * @return Response
     */
    
    public function maisonestimation(Request $request){
            
        $maison= new Maison ();
        $form= $this->createForm(MaisonType::class, $maison );
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $this->em->persist($maison);
            $this->em->flush();
            /*Appeler la fonction de l'estimation */
            $prix=$this->estimer($maison);
            /*enregistrer le prix dans la base  */
            $maison->setPrix($prix);
            $this->em->flush();
            /*Retourner la page qui affiche le prix */
           $id= $maison->getId();

            return $this->redirectToRoute('pages.maison.estimation', array('id'=> $id));
        }
        return $this->render('pages/estimation/maison/estimemaison.html.twig',['maison'=> $maison, 'form'=>$form->createView()]);
    }

/**
 * @param Maison $maison
 */
    public function estimer ($maison){
        $s =0;
            $maisonbase=new Maison;
            $region= $maison->getRegion();
            $maisonbase= $this->base($region);
            $prixbase= $maisonbase->getPrix();
            $prix=$prixbase;


            /* extraire les informations utils de la maison */
            $surface = $maison->getSurface();
            $surfaceh = $maison->getSurfaceh();
            
            $nbchambre = $maison->getNbchambre();
			$nbpiece = $maison->getNbpiece();
            $nbsalleb = $maison->getNbsalleb();
            $niveau = $maison->getNiveau();

            $etat= $maison->getEtat();
            $qualite=$maison->getQualite();
            $toiture=$maison->getToiture();

            $piscine = $maison->getPiscine();
            $sous = $maison->getSous();
			$sousur = $maison->getSousur();
            $parking = $maison->getPark();
            $nbparking =$maison->getNbpark();
            $vue=$maison->getVue();
            
            $annee= $maison->getAnnee();
            $calme =$maison->getCalme();
			$transport = $maison->getTransport();
            $energie =$maison->getEnergie();
            $luminosite = $maison->getLuminosite();
            			
            /*fin de l'extraction */
/*-------------------------------------------------------------------- */
            /* Calculer l'estimation */
                 /* le prix par m² be3da */
                    if($region== 'occitanie')
                    {   $prixmetre=1871;
                    }elseif($region=='ile-de-france'){
                        $prixmetre=3397;
                    }elseif($region=="provence-alpes-cote d'azure"){
                        $prixmetre=3377;
                    }
                /*end*/


            /*la surface habittable*/
				$s=$maisonbase->getSurfaceh();
				$prix= $s*($prixbase/$surfaceh);
                $s=$maisonbase->getSurface();
                $prix=$prix+($surface-$s)*100;
            /* le nombre de pieces */
            if($nbpiece !=$maisonbase->getNbpiece()){
				$p= $nbpiece-$maisonbase->getNbpiece();
				$prix= $prix+1000*$p;
            }            
            /* le nombre de salles de bain */
			if($nbsalleb !=$maisonbase->getNbsalleb()){
				$p= $nbsalleb-$maisonbase->getNbsalleb();
				$prix= $prix+1000*$p;
            }
            
            if($etat !=0 ){
				$prix= $prix+100*$etat;
			}

			if($calme !=$maisonbase->getCalme()){
                    $prix= $prix+50*$calme;
			}
			if($piscine == 1){
				$prix= $prix+500;
			}
			if($sous == 1){
				$s=$sousur;
				$prix= $prix+($sousur)*10;
			}
			if($parking ==1){
				$prix= $prix+20*$nbparking;
			}
			if($vue == 1){
				$prix= $prix+200;
			}
			if($transport !=0 ){
				$prix= $prix+20*$transport;
			}
			if($luminosite !=0 ){
				$prix= $prix+20*$luminosite;
			}
			if($energie !=0 ){
				$prix= $prix+30*$energie;
			}
            if($qualite !=0 ){
				$prix= $prix+50*$qualite;
			}
            /*Fin de calculs ====> retourner le prix estimé */
        return (int) $prix;
    }

    /* Retourne la maison de reference */

    public function base( $region){
        $repository = $this->getDoctrine()->getRepository(Maison::class);
        $maisonbase = $repository->findOneBy([
            'ref' => 1,
            'region' => $region,
        ]);
        return $maisonbase;

    }
    }
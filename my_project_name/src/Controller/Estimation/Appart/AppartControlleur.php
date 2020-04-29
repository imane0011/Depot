<?php
namespace App\Controller\Estimation\Appart;

use App\Controller\Forms\AppartementType;
use App\Entity\Appartement;
use App\Entity\Personne;
use App\Repository\AppartementRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AppartControlleur extends AbstractController {

    public function __construct(AppartementRepository $rep,EntityManagerInterface $em )
    {
        $this->rep=$rep;
        $this->em =$em;
    }


    /**
     * @Route("/estimation/appartement/resultat/{id}"  , name="pages.appart.estimation")
     * @return Response
     */
        public function result($id):Response{

            $repository = $this->getDoctrine()->getRepository(Appartement::class);
            $appartement = $repository->findOneBy([
                'id' => $id,
            ]);
            return $this->render('pages/estimation/appartement/result.html.twig',['appartement'=>$appartement]);
        }
    
    /**
     * @Route("/estimation/appart/estimer" , name="estimation.appart.estimer")
     * @return Response
     */


        public function appaetementestimation(Request $request){

        $appartement= new Appartement ();
        $form= $this->createForm(AppartementType::class, $appartement );
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            
            $this->em->persist($appartement);
            $this->em->flush();
            /*Appeler la fonction de l'estimation */
            $prix=$this->estimer($appartement);
            /*enregistrer le prix dans la base  */
            $appartement->setPrix($prix);
            $this->em->flush();
            /*Retourner la page qui affiche le prix */
           $id= $appartement->getId();

            return $this->redirectToRoute('pages.appart.estimation', array('id'=> $id));
        }
        return $this->render('pages/estimation/appartement/estimeappart.html.twig',['appartement'=> $appartement, 'form'=>$form->createView()]);
    }

/**
 * @param Appartement $appartement
 */
    public function estimer ($appartement){
            $appartementbase=new Appartement;
            $region= $appartement->getRegion();
            $appartementbase= $this->base($region);
            $prixbase= $appartementbase->getPrix();
            $prix=$prixbase;


            /* extraire les informations utils de la appartement */
            $surface = $appartement->getSurface();            
            $nbchambres = $appartement->getNbchambres();
			$nbpieces = $appartement->getNbpieces();
            $nbsalleb = $appartement->getNbsalleb();
            $etage = $appartement->getEtage();
            $nbetages = $appartement->getNbetages();

            $etat= $appartement->getEtat();
            $vue= $appartement->getVue();
            $qualite=$appartement->getQualite();
            $ascenceur=$appartement->getAscenceur();
            $cave=$appartement->getCave();
            $balcon=$appartement->getBalcon();
            $nbcave=$appartement->getNbcave();
            $surfacebalcon=$appartement->getSurfaccebalcon();
            $terrasse=$appartement->getTerrasse();
            $surfaceterrasse=$appartement->getSurfaceterrasse();
            
            $parking = $appartement->getParking();
            $nbparking =$appartement->getNbparking();
            
            $annee= $appartement->getAnnee();
            $calme =$appartement->getCalme();
			$transport = $appartement->getTransport();
            $luminosite = $appartement->getLuminosite();
            			
            /*fin de l'extraction */
/*-------------------------------------------------------------------- */
            /* Calculer l'estimation */
                 /* le prix par m² be3da */
                    if($region== 'occitanie')
                    {
                        $prixmetre=1871;
                    }elseif($region=='ile-de-france'){
                        $prixmetre=3397;
                    }elseif($region=="provence-alpes-cote d'azure"){
                        $prixmetre=3377;
                    }


                    $s=$appartementbase->getSurface();
                    $prix=$prix+($surface-$s)*100;
    
                
                /* le nombre de pieces */
                if($nbpieces !=$appartementbase->getNbpieces()){
                    $p= $nbpieces-$appartementbase->getNbpieces();
                    $prix= $prix+1000*$p;
                }

                if($nbsalleb !=$appartementbase->getNbsalleb()){
                    $p= $nbsalleb-$appartementbase->getNbsalleb();
                    $prix= $prix+1000*$p;
                }
                
                
                if($etat !=0 ){
                    $prix= $prix+100*$etat;
                }
    
                if($calme !=$appartementbase->getCalme()){
                        $prix= $prix+50*$calme;
                }
                if($balcon == 1){
                    $prix= $prix+10*$surfacebalcon;
                }
                if($terrasse ==1){
                    $prix= $prix+10*$surfaceterrasse;
                }
                if($cave == 1){
                    $s=$nbcave;
                    $prix= $prix+($nbcave)*10;
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
                
                if($qualite !=0 ){
                    $prix= $prix+50*$qualite;
                }
                if($ascenceur == 1){
                    $prix= $prix+100;
                }

            /*Fin de calculs ====> retourner le prix estimé */

        return (int) $prix;
    }

    /* Retourne la appartement de reference */

        public function base( $region){
            $repository = $this->getDoctrine()->getRepository(appartement::class);
            $appartementbase = $repository->findOneBy([
                'ref' => 1,
                'region' => $region,
            ]);
            return $appartementbase;

        }
}
    
<?php
namespace App\Controller\Personne;

use App\Controller\Forms\UserType;
use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserControlleur extends AbstractController {

     /**
     * @var UserRepository
     * @var ObjectManager
     */

    private  $rep;
    private $em;
    private $passwordEncoder;
    public function __construct(UserRepository $rep,EntityManagerInterface $em,UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
        $this->rep=$rep;
        $this->em =$em;
        ;
    }

    
        /**
     * @Route("/home" , name="pages.index")
     * @return Response
     */
        public function try(){
             // usually you'll want to make sure the user is authenticated first
    $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

    // returns your User object, or null if the user is not authenticated
    // use inline documentation to tell your editor your exact User class
    /** @var \App\Entity\User $user */
    $user = $this->getUser();

    // Call whatever methods you've added to your User class
    // For example, if you added a getFirstName() method, you can use that.
    return  $this->render('pages/index.html.twig');
        }

    // /**
    //  * @Route("/personne/modifier")
    //  * @param User $personne
    //  * @param Request $request
    //  * @return Response
    //  */
    //     public function modifier(User $personne, Request $request){

    //         $form= $this->createForm(UserType::class,$personne );
    //         $form->handleRequest($request);
    //         if($form->isSubmitted() && $form->isValid()){
    //             $this->em->flush();
    //             return $this->redirectToRoute('pages.index');
    //         }
    //        // $con= $this->createForm(ConnexionType::class,$personne );
    //         $con->handleRequest($request);
    //         if($con->isSubmitted() && $con->isValid()){
    //            //authentification
    //             return $this->redirectToRoute('pages.index');
    //         }
     
    //         return $this->render('pages/connexion/connexion.html.twig',['personne'=> $personne, 'form'=>$form->createView(), 'con'=>$con->createView()]);
    //      }
        
     /**
     * @Route("/register" , name="pages.connexion.creer")
     * @param User $personne
     * @param Request $request
     * @return Response
     */
    
    
        public function creer(Request $request){
            
            $personne= new User ();
            $form= $this->createForm(UserType::class, $personne );
            $form->handleRequest($request);
            if($form->isSubmitted()){
                $password = $form->get('password')->getData();
               $passwordEncoder = $this->passwordEncoder->encodePassword($personne,$password);
               $personne->setPassword($passwordEncoder);
                $this->em->persist($personne);
                $this->em->flush();
                return $this->redirectToRoute('app_login');
            }
            return $this->render('pages/connexion/connexion.html.twig',['personne'=> $personne, 'form'=>$form->createView()]);
        }
    }
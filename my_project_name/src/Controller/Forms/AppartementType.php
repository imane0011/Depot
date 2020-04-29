<?php
// src/Form/Personne/MaisonType.php
namespace App\Controller\Forms;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

use function Symfony\Component\DependencyInjection\Loader\Configurator\inline;

class AppartementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        
        ->add('adresse', TextType::class,['label'=>'Adresse'])
        ->add('ville', TextType::class,['label'=>'Ville'])
        ->add('code', TextType::class,['label'=>'Code Postal'])
        ->add('region', TextType::class,['label'=>'Région'])
        ->add('surface', TextType::class,['label'=>'Surface'])
       
        ->add('etage', NumberType::class,['label'=>"Etage de l'appartement",])
         ->add('nbetages', NumberType::class,['label'=>"Nombre total d'etages",])
       ->add('nbchambres', NumberType::class,['label'=>'Nombre de chambres',])
        ->add('nbpieces', NumberType::class,['label'=>'Nombre de pièces'])
       /* ->add('civilite',ChoiceType::class,array(
            'choices'  => array(
                'Madame' => "mme",
                'Monsieur' => 'mr',
            ),
            'expanded' => true,
            'multiple' => false
        ))*/
        ->add('nbsalleb', NumberType::class,['label'=>'Nombre de salles de bain'])
       

        /*La partie dial ah la atbda hna */
        ->add('ascenceur', CheckBoxType::class,['label'=>'Ascenceur', 'required' => false,'attr' => array('checked'   => false),])

        ->add('terrasse', CheckBoxType::class,['label'=>'Terrase', 'required' => false,'attr' => array('checked'   => false),])

        ->add('surfaceterrasse', NumberType::class ,['required' => false,])
        
        ->add('balcon', CheckBoxType::class,['label'=>'Balcon', 'required' => false ])
        
        ->add('surfaccebalcon', NumberType::class ,['required' => false,])

        ->add('parking', CheckBoxType::class,['label'=>'Places de Parking', 'required' => false,'attr' => array('checked'   => false),])
        
        ->add('nbparking', NumberType::class ,['required' => false,])

        ->add('vue', CheckBoxType::class,['label'=>'Vue exceptionnelle', 'required' => false,'attr' => array('checked'   => false),]) 

        ->add('cave', CheckBoxType::class,['label'=>'Cave', 'required' => false,'attr' => array('checked'   => false),]) 

        ->add('nbcave', NumberType::class ,['required' => false,])

        ->add('facade', CheckBoxType::class,['label'=>'Ravalement de façade récent', 'required' => false,'attr' => array('checked'   => false),])
         

        ->add('pareno', CheckBoxType::class,['label'=>'Parties communes rénovées', 'required' => false,'attr' => array('checked'   => false),])

    /*partie details hna tba*/


        ->add('annee', IntegerType::class,
            array('label'=>'Année de construction',
                
                'attr' => [
                    'min' => 1920,
                    'max' => 2020
                ]
                
                
              ))
        ->add('etat',ChoiceType::class,[ 'label'=>'Etat du bien',
                'choices'  => [
                    'Refait à neuf' => 1,
                    'Standard' => 0,
                    'Rafraichissements nécessaires' => -1,
                    'Travaux importants nécessaires' => -2,
                ],
        ])
         ->add('qualite',ChoiceType::class,[ 'label'=>'Qualité de la maison',
                'choices'  => [
                    'inférieur' => -1,
                    'Comparable' => 0,
                    'Supérieur' => 1,
                    
                ],
        ])
         ->add('luminosite',ChoiceType::class,[ 'label'=>'Luminosité',
                'choices'  => [
                    'Sombre' =>-2,
                    'Peu clair'=>-1,
                    'Standard' => 0,
                    'Peu clair'=>1,
                    'Très clair'=>2,
                    
                ],
        ])
         ->add('calme',ChoiceType::class,[ 'label'=>'Calme',
                'choices'  => [
                    'Très bruyant' => -2,
                    'Bruyant'=>-1,
                    'Standard' => 0,
                    'Calme'=>1,
                    'Très calme'=>2,
                    
                ],
        ])
         ->add('transport',ChoiceType::class,[ 'label'=>'Proximité du transport',
                'choices'  => [
                    'Très éloigné' => -2,
                    'Eloigné'=>-1,
                    'Standard' => 0,
                    'Proche'=>1,
                    'Très proche'=>2,
                    
                ],
        ])
        //  ->add('energie',ChoiceType::class,[ 'label'=>'Diagnostic de performance enérgitique',
        //         'choices'  => [
        //             'Je ne sais pas' => 0,
        //             'A' => 1,
        //             'B'=>2,
        //             'C'=>3,
        //             'D'=>4,
        //             'E'=>2,
        //             'F'=>3,
        //             'G'=>4,
                    
        //         ],
        // ])
       
        ->add('estim', SubmitType::class, ['label' => 'Estimer']);

    }
}

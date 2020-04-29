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

class MaisonType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        
        ->add('adresse', TextType::class,['label'=>'Adresse'])
        ->add('ville', TextType::class,['label'=>'Ville'])
        ->add('postal', TextType::class,['label'=>'Code Postal'])
        ->add('region', TextType::class,['label'=>'Région'])
        ->add('surface', TextType::class,['label'=>'Surface'])
        ->add('surfaceh',  TextType::class,['label'=>'Surface Habittable'])
        ->add('nbchambre', NumberType::class,['label'=>'Nombre de chambres',])
        ->add('nbpiece', NumberType::class,['label'=>'Nombre de pièces'])
       /* ->add('civilite',ChoiceType::class,array(
            'choices'  => array(
                'Madame' => "mme",
                'Monsieur' => 'mr',
            ),
            'expanded' => true,
            'multiple' => false
        ))*/
        ->add('nbsalleb', NumberType::class,['label'=>'Nombre de salles de bain'])
        ->add('niveau', NumberType::class,['label'=>'Nombre des étages'])

        /*La partie dial ah la atbda hna */

        ->add('piscine', CheckBoxType::class,['label'=>'Piscine', 'required' => false,'attr' => array('checked'   => false),])

        ->add('sous', CheckBoxType::class,['label'=>'Sous-sol', 'required' => false ])
        
        ->add('sousur', NumberType::class ,['required' => false,])

        ->add('park', CheckBoxType::class,['label'=>'Places de Parking', 'required' => false,'attr' => array('checked'   => false),])
        
        ->add('nbpark', NumberType::class ,['required' => false,])

        ->add('mur', CheckBoxType::class,['label'=>'Murs mitoyens', 'required' => false,'attr' => array('checked'   => false),]) 

        ->add('nbmur', NumberType::class ,['required' => false,])

        ->add('bat', CheckBoxType::class,['label'=>'Batiments Annexes', 'required' => false,'attr' => array('checked'   => false),])
         
        ->add('nbbat', NumberType::class,['required' => false,])

        ->add('vue', CheckBoxType::class,['label'=>'Vue Exceptionnelle', 'required' => false,'attr' => array('checked'   => false),])
        ->add('eaux', CheckBoxType::class,['label'=>'Raccordement au réseau d’évacuation des eaux usées', 'required' => false,'attr' => array('checked'   => false),])

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
         ->add('energie',ChoiceType::class,[ 'label'=>'Diagnostic de performance enérgitique',
                'choices'  => [
                    'Je ne sais pas' => 0,
                    'A' => 1,
                    'B'=>2,
                    'C'=>3,
                    'D'=>4,
                    'E'=>2,
                    'F'=>3,
                    'G'=>4,
                    
                ],
        ])
        ->add('toiture',ChoiceType::class,[ 'label'=>'Qualité de la toiture',
        'choices'  => [
            'A refaire' => -1,
            'Standard' => 0,
            'Refaite à neuf' => 1,
            
        ],
])
        ->add('estim', SubmitType::class, ['label' => 'Estimer']);

    }
}

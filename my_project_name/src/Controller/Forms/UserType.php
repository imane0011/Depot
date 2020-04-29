<?php
// src/Form/Personne/PersonneType.php
namespace App\Controller\Forms;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

use function Symfony\Component\DependencyInjection\Loader\Configurator\inline;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('email', EmailType::class,['label'=>'Email'])
        ->add('password', PasswordType::class,['label'=>'Mot de passe'])
        ->add('tel', TextType::class,['label'=>'Téléphone'])
        ->add('civilite',ChoiceType::class,array(
            'choices'  => array(
                'Madame' => "mme",
                'Monsieur' => 'mr',
            ),
            'expanded' => true,
            'multiple' => false,
            'attr'=>['class'=>'radio-inline '],
            'label_attr'=>[
                
                'class'=>'radio-inline '
            ]
        ))
        ->add('nom', TextType::class,['label'=>'Nom'])
        ->add('prenom', TextType::class,['label'=>'Prénom'])

        ->add('save', SubmitType::class, ['label' => 'Inscrivez-vous']);

    }
}

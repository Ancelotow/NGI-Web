<?php

namespace NG\GestionnaireBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ProprietaireType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom', TextType::class, array('label'=>"Nom", 'required'=>true))
                ->add('sexe', ChoiceType::class, array('label'=>"Sexe", 'choices'=>array(
                    'Homme'=>1,
                    'Femme'=>0,
                )))
                ->add('prenom', TextType::class, array('label'=>"Prénom", 'required'=>true))
                ->add('tel', TextType::class, array('label'=>"Téléphone", 'required'=>true))
                ->add('email', EmailType::class, array('label'=>"Adresse mail", 'required'=>true))
                ->add('adresse', TextType::class, array('label'=>"Adresse (N°, rue)", 'required'=>true))
                ->add('ville', EntityType::class, array('label'=>"Ville", 'class'=>'NGGestionnaireBundle:Ville', 'choice_label'=>'nom'))
                ->add('valid', SubmitType::class, array('label'=>"AJOUTER"));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'NG\GestionnaireBundle\Entity\Proprietaire'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ng_gestionnairebundle_proprietaire';
    }


}

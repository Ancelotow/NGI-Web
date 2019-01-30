<?php

namespace NG\AdministrateurBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class EntrepriseType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom', TextType::class, array('label'=>"Nom de l'entreprise", 'required'=>true))
                ->add('type', TextType::class, array('label'=>"Type de l'activité", 'required'=>true))
                ->add('tel', TextType::class, array('label'=>"Téléphone", 'required'=>true))
                ->add('email', EmailType::class, array('label'=>"Adresse mail", 'required'=>true))
                ->add('adresse', TextType::class, array('label'=>"Adresse (N°, rue)", 'required'=>true))
                ->add('ville', EntityType::class, array('label'=>"Ville", 'class'=>'NGGestionnaireBundle:Ville', 'choice_label'=>'nom'))
                ->add('logo', FileType::class, array('label'=>"Logo de l'entreprise", 'required'=>true))
                ->add('valid', SubmitType::class, array('label'=>"AJOUTER"));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'NG\AdministrateurBundle\Entity\Entreprise'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ng_administrateurbundle_entreprise';
    }


}

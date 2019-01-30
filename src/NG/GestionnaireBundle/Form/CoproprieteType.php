<?php

namespace NG\GestionnaireBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class CoproprieteType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('code', TextType::class, array('label'=>'Code immeuble', 'required'=>true))
                ->add('adresse', TextType::class, array('label'=>'Adresse (N°, rue)', 'required'=>true))
                ->add('lattitude', TextType::class, array('label'=>'Latitude', 'required'=>true))
                ->add('longitude', TextType::class, array('label'=>'Longitude', 'required'=>true))
                ->add('ville', EntityType::class, array('label'=>'Ville', 'class'=>'NGGestionnaireBundle:Ville', 'choice_label'=>'nom'))
                ->add('image', FileType::class, array('label'=>"Image de l'extérieur", 'required'=>true))
                ->add('valid', SubmitType::class, array('label'=>'AJOUTER'));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'NG\GestionnaireBundle\Entity\Copropriete'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ng_gestionnairebundle_copropriete';
    }


}

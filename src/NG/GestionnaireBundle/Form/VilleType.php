<?php

namespace NG\GestionnaireBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class VilleType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('code', TextType::class, array('label'=>'Code ville', 'required'=>true))
            ->add('nom', TextType::class, array('label'=>'Nom de la ville', 'required'=>true))
            ->add('departement', EntityType::class, array('label'=>'Département', 'required'=>true, 'class'=>'NGGestionnaireBundle:Departement', 'choice_label'=>'dept'))
            ->add('valid', SubmitType::class, array('label'=>'AJOUTER'));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'NG\GestionnaireBundle\Entity\Ville'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ng_gestionnairebundle_ville';
    }


}

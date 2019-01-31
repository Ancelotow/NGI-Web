<?php

namespace NG\GestionnaireBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class LotType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('num', NumberType::class, array('label'=>'Numéro du lot', 'required'=>true))
            ->add('etage', TextType::class, array('label'=>"Étage", 'required'=>true))
            ->add('surface', NumberType::class, array('label'=>'Surface (en m²)', 'required'=>true))
            ->add('carezze', NumberType::class, array('label'=>'Surface carezze (en m²)', 'required'=>true))
            ->add('prix', NumberType::class, array('label'=>'Prix (en €)', 'required'=>true))
            ->add('proprietaire', EntityType::class, array('label'=>'Propriétaire', 'class'=>'NGGestionnaireBundle:Proprietaire', 'choice_label'=>'identite'))
            ->add('typeLot', EntityType::class, array('label'=>'Propriétaire', 'class'=>'NGAdministrateurBundle:TypeLot', 'choice_label'=>'nom'))
            ->add('valid', SubmitType::class, array('label'=>'AJOUTER'));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'NG\GestionnaireBundle\Entity\Lot'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ng_gestionnairebundle_lot';
    }


}

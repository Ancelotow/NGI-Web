<?php

namespace NG\GestionnaireBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class AGType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('ref', TextType::class, array('label'=>"Référence de l'AG", 'required'=>true))
            ->add('nbDecision', NumberType::class, array('label'=>"Nombre de décision", 'required'=>true))
            ->add('pdf', FileType::class, array('label'=>"Document de l'AG", 'required'=>true))
            ->add('valid', SubmitType::class, array('label'=>'AJOUTER'));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'NG\GestionnaireBundle\Entity\AG'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ng_gestionnairebundle_ag';
    }


}

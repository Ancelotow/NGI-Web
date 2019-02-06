<?php

namespace NG\GestionnaireBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use NG\GestionnaireBundle\Repository\LotRepository;

class SinistreType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $idCopro = $options['id_copro'];
        $builder->add('code', TextType::class, array('label'=>"Code sinistre", 'required'=>true))
                ->add('type', TextType::class, array('label'=>"Type de sinstre", 'required'=>true))
                ->add('lot', EntityType::class, array('label'=>'Lot', 'class'=>'NGGestionnaireBundle:Lot', 'choice_label'=>'num', 'query_builder' => function(LotRepository $er) use($idCopro)
                {
                    return $er->createQueryBuilder('l')
                        ->where('l.copro = :copro')
                        ->orderBy('l.num')
                        ->setParameter('copro', $idCopro);
                }))
                ->add('valid', SubmitType::class, array('label'=>"AJOUTER"));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'NG\GestionnaireBundle\Entity\Sinistre',
            'id_copro' => null,
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ng_gestionnairebundle_sinistre';
    }


}

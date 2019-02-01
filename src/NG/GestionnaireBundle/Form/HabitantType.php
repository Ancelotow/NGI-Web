<?php

namespace NG\GestionnaireBundle\Form;

use Doctrine\Bundle\DoctrineBundle\Tests\TestCase;
use NG\GestionnaireBundle\Repository\LotRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class HabitantType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $idCopro = $options['idCopro'];
        $builder->add('nom', TextType::class, array('label'=>'Nom', 'required'=>true))
                ->add('prenom', TextType::class, array('label'=>'Prénom', 'required'=>true))
                ->add('tel', TextType::class, array('label'=>'Téléphone', 'required'=>true))
                ->add('email', TextType::class, array('label'=>'Adresse mail', 'required'=>true))
                ->add('sexe', ChoiceType::class, array('label'=>"Sexe", 'choices'=>array(
                    'Homme'=>1,
                    'Femme'=>0,
                )))
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
            'data_class' => 'NG\GestionnaireBundle\Entity\Habitant',
            'idCopro' => null
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ng_gestionnairebundle_habitant';
    }


}

<?php

namespace App\Form;

use App\Entity\Commandes;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommandesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('datecreation')
            ->add('dateenvoi')
            ->add('statut', ChoiceType::class , array('choices'=> array(
        'livrée'=>'livrée',
        'non livrée'=>'non livrée',
        'en cours'=>'en cours',

    )))
            ->add('numeroproduit')
            ->add('numeroutilisateur')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Commandes::class,
        ]);
    }
}

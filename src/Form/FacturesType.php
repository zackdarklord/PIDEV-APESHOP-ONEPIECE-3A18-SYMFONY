<?php

namespace App\Form;

use App\Entity\Factures;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FacturesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('typelivraison')
            ->add('prixlivraison')
            ->add('numeroregiondestinataire')
            ->add('numeroutilisateur')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Factures::class,
        ]);
    }
}

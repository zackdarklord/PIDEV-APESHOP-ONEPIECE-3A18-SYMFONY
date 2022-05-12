<?php

namespace App\Form;

use App\Entity\Paniers;
use App\Entity\Produits;
use App\Entity\Utilisateurs;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PaniersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('quantite')
            //->add('dateajout')
            ->add('numeroproduit',EntityType::class,
                ['class'=>Produits::class,
                    'choice_label'=>'numeroProduit',
                    'multiple'=>false,
                    'expanded'=>false])
           // ->add('nomproduit',EntityType::class,
             //   ['class'=>Produits::class,
               //     'choice_label'=>'nomProduit',
                 //   'multiple'=>false,
                   // 'expanded'=>false])
            ->add('numeroutilisateur',EntityType::class,
                ['class'=>Utilisateurs::class,
                    'choice_label'=>'numeroUtilisateurs',
                    'multiple'=>false,
                    'expanded'=>false])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Paniers::class,
        ]);
    }
}

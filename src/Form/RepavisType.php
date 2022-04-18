<?php

namespace App\Form;

use App\Entity\Repavis;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RepavisType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('etat',ChoiceType::class, [
        'choices'  => [
            'Traité' => "Traité",
            'en cours de traitement' => "en cours de traitement",

        ],])
            ->add('reponse')
            ->add('dateajout',DateType::class, [
                'attr' => [
                    'hidden' => 'hidden',
                    'disabled' => 'disabled',
                ],])
            ->add('idavis')

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Repavis::class,
        ]);
    }
}

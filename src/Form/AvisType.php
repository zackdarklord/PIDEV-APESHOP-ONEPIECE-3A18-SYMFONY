<?php

namespace App\Form;

use App\Entity\Avis;
use App\Entity\Categoriea;
use phpDocumentor\Reflection\Type;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class AvisType extends AbstractType
{


    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('contenuavis',TextareaType::class)
            ->add('idcategorie')
            //->add('numeroutilisateur')

            ->add('dateajout',DateType::class, [
                'attr' => [
                    'hidden' => 'hidden',
                    'disabled' => 'disabled',
                ],])

        ;
    }
    public function buildForm2(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('contenuavis',TextareaType::class)
            ->add('idcategorie')
            ->add('numeroutilisateur',ChoiceType::class,[
                'attr' => [
                    'hidden' => 'hidden',
                    'disabled' => 'disabled',
                ],])
            ->add('Sauvegarder',SubmitType::class)
            ->add('dateajout',DateType::class, [
                'attr' => [
                    'hidden' => 'hidden',
                    'disabled' => 'disabled',
                ],])

        ;
    }


    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Avis::class,
        ]);
    }
}

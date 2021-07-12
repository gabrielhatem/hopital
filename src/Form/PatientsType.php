<?php

namespace App\Form;

use App\Entity\Patients;
use DateTime;
use Doctrine\DBAL\Types\DateType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class PatientsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('lastName', TextType::class,[
                'label' => 'Nom : ',])
            ->add('firstName', TextType::class,[
                'label' => 'Prénom : ',])
            ->add('birthDate', BirthdayType::class,[
            'placeholder' => ['year' => 'Année', 'month' => 'Mois', 'day' => 'Jour'] ,
            'label' => 'Date de Naissance : ',
            ])
            ->add('email', TextType::class,[
                'label' => 'Email : ',])
            ->add('vitalcardNumber', TextType::class,[
                'label' => 'Numéro de Carte Vitale : ',])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Patients::class,
            
        ]);
    }
}

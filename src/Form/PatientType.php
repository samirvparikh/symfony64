<?php

namespace App\Form;

use App\Entity\Patient;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PatientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstName')
            ->add('middleName')
            ->add('lastName')
            ->add('dob')
            ->add('gender')
            ->add('email')
            ->add('cellPhone')
            ->add('responsibleParty')
            ->add('primaryDentist')
            ->add('feeSchedule')
            ->add('preferredClinic')
            ->add('createdBy')
            ->add('updatedBy')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Patient::class,
        ]);
    }
}

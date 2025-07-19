<?php

namespace App\Form\Extension;

use Symfony\Component\Form\AbstractTypeExtension;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FormTypeExtension extends AbstractTypeExtension
{
    public static function getExtendedTypes(): iterable
    {
        return [FormType::class];
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'attr' => ['class' => 'form-control'],
            'label_attr' => ['class' => 'form-label'],
            'row_attr' => ['class' => 'mb-3'],
        ]);
    }

    public function buildView(FormView $view, FormInterface $form, array $options): void
    {
        // Prevent overwriting user-defined attributes
        $view->vars['attr'] = array_merge(['class' => 'form-control'], $view->vars['attr']);
        $view->vars['label_attr'] = array_merge(['class' => 'form-label'], $view->vars['label_attr']);
        $view->vars['row_attr'] = array_merge(['class' => 'mb-3'], $view->vars['row_attr']);
    }
}

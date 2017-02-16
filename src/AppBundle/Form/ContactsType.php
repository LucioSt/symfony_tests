<?php

/**
 * Created by PhpStorm.
 * User: lucio
 * Date: 16/02/17
 * Time: 17:27
 */

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class ContactsType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('address')
            ->add('country')
            ->add('city')
            ->add('category', ChoiceType::class, array(
                'choices'  => array(
                    'Female' => 'Female',
                    'Male' => 'Male',
                )))
            ->add('datetime', DateType::class, array(
                'widget' => 'single_text',
                'format' => 'yyyy-MM-dd',))

        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Contacts'
        ));
    }

}
<?php


namespace AppBundle\Form;


use libphonenumber\PhoneNumberFormat;
use Misd\PhoneNumberBundle\Form\Type\PhoneNumberType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);
        $builder->add('phone', PhoneNumberType::class, [
            'required' => false,
            'widget' => PhoneNumberType::WIDGET_COUNTRY_CHOICE,
            'format' => PhoneNumberFormat::INTERNATIONAL,
            'default_region' => 'FR'
        ]);

    }
    
}
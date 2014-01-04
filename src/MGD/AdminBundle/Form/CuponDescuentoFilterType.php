<?php

namespace MGD\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormError;

class CuponDescuentoFilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $opciones = array('valor','porcentaje');

        $builder
            ->add('id', 'filter_text')
            ->add('valor', 'filter_number_range')
            ->add('porcentajeBoo', 'filter_choice',array('choices' => $opciones))
            ->add('nUsos', 'filter_number_range')
            ->add('nUsados', 'filter_number_range')
            ->add('expiracionDate', 'filter_date_range')
            ->add('creadoDate', 'filter_date_range')
        ;

        $listener = function(FormEvent $event)
        {
            // Is data empty?
            foreach ($event->getData() as $data) {
                if(is_array($data)) {
                    foreach ($data as $subData) {
                        if(!empty($subData)) return;
                    }
                }
                else {
                    if(!empty($data)) return;
                }
            }

            $event->getForm()->addError(new FormError('Filter empty'));
        };
        $builder->addEventListener(FormEvents::POST_BIND, $listener);
    }

    public function getName()
    {
        return 'mgd_adminbundle_cupondescuentofiltertype';
    }
}
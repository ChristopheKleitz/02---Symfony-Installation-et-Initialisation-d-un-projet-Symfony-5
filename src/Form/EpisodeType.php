<?php

namespace App\Form;

use App\Entity\Episode;
use App\Entity\Program;
use App\Entity\Season;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EpisodeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('number')
            ->add('synopsis', null,
                ['attr' =>
                    [
                    'rows' => 8,
                    ]
                ])
            ->add('season', EntityType::class,
                [
                    'class' => Season::class,
                    'choice_label' => 'number',

                    /*'class' => Program::class,
                    'choice_label' => 'title',
                    'label' => 'Program',
                    'placeholder' => 'Choose a program',*/
                ])
        ;

        /*$builder->addEventListener(
            FormEvents::PRE_SET_DATA,
            function (FormEvent $event) {
                $form = $event->getForm();
                $data = $event->getData();
                $season = $data->getSeason();
                $positions = null === $season ? array() : $season->getNumber();

                $form->add('season', EntityType::class, array(
                    'class' => Season::class,
                    'placeholder' => 'Which season ?',
                    'choice_label' => 'number',
                ));
            }
        );*/
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Episode::class,
        ]);
    }
}

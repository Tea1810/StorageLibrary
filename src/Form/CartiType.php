<?php

namespace App\Form;

use App\Entity\Carti;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class CartiType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Nume_Carte')
            ->add('Autor')
            ->add('Locatie', ChoiceType::class,[
                'choices'=>[
                    'Sufragerie'=>'Sufragerie',
                    'Dormitor Parinti'=>'Dormitor Parinti',
                    'Dormitor Teo'=>'Dormitor Teo',
                    'Etaj'=> 'Etaj',
                    ],
                'multiple'=>false,
                'expanded'=>false,
            ])
            ->add('Nationalitate',ChoiceType::class,[
                'choices'=>[
                    'Românească'=>'Românească',
                    'Străină'=>'Străină',
                ],
         'multiple'=>false,
                'expanded'=>false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Carti::class,
        ]);
    }
}

<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('lastname',TextType::class, [
                'attr' => [
                    'placeholder' => 'Saisir votre nom',
                ] 
            ])
            ->add('firstname',TextType::class,[
                'attr' => [
                    'placeholder' => 'Saisir votre prénom',
                ] 
            ])
            ->add('email',EmailType::class,[
                'attr' => [
                    'placeholder' => 'Saisir votre e-mail',
                ] 
            ])
            ->add('request',ChoiceType::class, [
                'choices' => [
                    'Saisir votre motif' => 1,
                    'Demande de test particulier' => 2,
                    'Autre' => 3,
                ] ])

            ->add('message',TextareaType::class,[
                'attr' => ['rows' => 6,'placeholder' => 'Saisir votre message'],          
            ])
            ->add('agreeTerms', CheckboxType::class, ['mapped' => false])

            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}

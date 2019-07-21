<?php
namespace AppBundle\Forms;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class ClienteType extends AbstractType
{
        public function buildForm(FormBuilderInterface $builder, array $options)
        {
            $builder
                ->add ('nombre', TextType::class)
                ->add ('apellido', TextType::class)
                ->add ('nombre', TextType::class)
                ->add ('telf', IntegerType::class)
                ->add ('direccion', TextareaType::class)
                ->add ('dni', TextType::class)
                ->add ('guardar', SubmitType::class, array ('label' => 'Guardar'));
        }
}
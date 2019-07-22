<?php
namespace AppBundle\Forms;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class FacturaType extends AbstractType
{
        public function buildForm(FormBuilderInterface $builder, array $options)
        {
            $builder
                ->add ('fecha', TextType::class)
                ->add ('importe', TextType::class)
                ->add ('id_cliente', TextType::class);
        }
}
<?php

namespace Vivait\InspectorBundle\Form\Condition;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Vivait\InspectorBundle\Form\ConditionType;

class ExpressionType extends ConditionType
{
    protected $dataClass = 'Vivait\InspectorBundle\Entity\Condition\Expression';
    protected $label     = 'Expression';

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        $builder->add('expression');
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'vivait_inspectorbundle_condition_expression';
    }
}

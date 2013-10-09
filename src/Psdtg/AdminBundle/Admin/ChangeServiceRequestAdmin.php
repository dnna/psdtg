<?php
namespace Psdtg\AdminBundle\Admin;

use Sonata\AdminBundle\Form\FormMapper;

class ChangeServiceRequestAdmin extends ActivateServiceRequestAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        parent::configureFormFieldsWithFilters($formMapper, array('isService' => true));
    }
}
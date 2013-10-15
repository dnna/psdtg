<?php
namespace Psdtg\AdminBundle\Admin\Helpdesk;

use Psdtg\AdminBundle\Admin\ChangeServiceRequestAdmin as BaseChangeServiceRequestAdmin;
use Sonata\AdminBundle\Form\FormMapper;

class ChangeServiceRequestAdmin extends BaseChangeServiceRequestAdmin
{
    protected $baseRouteName = 'admin_lms_changeservicerequest_user';
    protected $baseRoutePattern = 'changeservicerequest_user';

    protected function configureFormFields(FormMapper $formMapper)
    {
        parent::configureFormFields($formMapper);
        $formMapper
            ->add('newConnectivityType', null, array('required' => true, 'query_builder' => $this->getServiceConnectivityTypes()))
        ;
    }
}
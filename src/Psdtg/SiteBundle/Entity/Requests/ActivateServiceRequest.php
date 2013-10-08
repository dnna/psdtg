<?php

namespace Psdtg\SiteBundle\Entity\Requests;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 */
class ActivateServiceRequest extends ExistingCircuitRequest
{
    /**
     * @ORM\ManyToOne(targetEntity="Psdtg\SiteBundle\Entity\Circuits\ConnectivityType")
     * @ORM\JoinColumn(name="connectivity_type_id", referencedColumnName="id")
     */
    protected $newConnectivityType;

    public function getNewConnectivityType() {
        return $this->newConnectivityType;
    }

    public function setNewConnectivityType($newConnectivityType) {
        $this->newConnectivityType = $newConnectivityType;
    }
}
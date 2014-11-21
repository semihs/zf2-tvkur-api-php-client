<?php
/**
 * 
 * User: semihs
 * Date: 21.11.14
 * Time: 17:56
 * 
 */

namespace TvkurApiClient\Mvc\Controller\Plugin;

use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\View\Helper\AbstractHelper;

class TvkurApiClient extends AbstractHelper implements ServiceLocatorAwareInterface {

    protected $serviceLocator;

    /**
     * @param ServiceLocatorInterface $serviceLocator
     */
    public function setServiceLocator(ServiceLocatorInterface $serviceLocator) {
        $this->serviceLocator = $serviceLocator;
    }

    /**
     * @return ServiceLocatorInterface
     */
    public function getServiceLocator() {
        return $this->serviceLocator;
    }

    public function __invoke() {
        return $this->getServiceLocator()
            ->getServiceLocator()->get('TvkurApiClient');
    }
} 
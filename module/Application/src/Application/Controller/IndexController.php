<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $users = $this->getServiceLocator()->get('Application\Paginator\User');

        return new ViewModel(
            array(
                'users' => $users
            )
        );

    }
}

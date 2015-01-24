<?php

namespace Green\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * The default controller
 */
class DefaultController extends Controller
{
    /**
     * [indexAction description]
     * @return [type] [description]
     */
    public function indexAction()
    {
        return $this->render('GreenCoreBundle:Default:index.html.twig');
    }
}

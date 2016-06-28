<?php
/**
 * User: bostaf
 * Date: 28.06.16
 * Time: 11:14
 */

namespace AppBundle\Controller;

use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class MightMouseController extends ContainerAware
{
    /**
     * @Route("/")
     */
    public function rescueAction()
    {
        $html = $this->container->get('twig')
            ->render(
                'mighty_mouse/rescue.html.twig',
                array('quote' => 'Here I come to save the day!')
            );
        return new Response($html);
    }
}
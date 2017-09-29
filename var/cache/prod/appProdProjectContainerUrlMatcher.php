<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/museedulouvre.fr')) {
            // oc_booking_homepage
            if ('/museedulouvre.fr' === $pathinfo) {
                return array (  '_controller' => 'OC\\BookingBundle\\Controller\\WelcomeController::indexAction',  '_route' => 'oc_booking_homepage',);
            }

            // oc_booking_homepageEn
            if ('/museedulouvre.fr/en' === $pathinfo) {
                return array (  '_controller' => 'OC\\BookingBundle\\Controller\\WelcomeController::indexEnAction',  '_route' => 'oc_booking_homepageEn',);
            }

            // oc_booking_form
            if ('/museedulouvre.fr/billeterie' === $pathinfo) {
                return array (  '_controller' => 'OC\\BookingBundle\\Controller\\FormulaireController::ticketingAction',  '_route' => 'oc_booking_form',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}

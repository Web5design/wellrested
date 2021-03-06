<?php

/**
 * pjdietz\WellRESTed\Interfaces\RouteTargetInterface
 *
 * @author PJ Dietz <pj@pjdietz.com>
 * @copyright Copyright 2013 by PJ Dietz
 * @license MIT
 */

namespace pjdietz\WellRESTed\Interfaces;

/**
 * The RouteTargetInterface provides a mechanism for obtaining a response given a request.
 * @package pjdietz\WellRESTed
 */
interface RouteTargetInterface
{
    /** @return array  Associative array used to obtain a response */
    public function getArguments();

    /** @param array $args  Associative array used to obtain a response */
    public function setArguments(array $args);

    /** @return RoutableInterface  Request used to obtain a response */
    public function getRequest();

    /** @param RoutableInterface $request  Request used to obtain a response */
    public function setRequest(RoutableInterface $request);

    /** @return RouterInterface  Reference to the router used to dispatch this handler */
    public function getRouter();

    /** @param RouterInterface $router  Request used to obtain a response */
    public function setRouter(RouterInterface $router);

    /**
     * Return the response for the given request.
     *
     * @param RoutableInterface $request
     * @return ResponseInterface
     */
    public function getResponse(RoutableInterface $request = null);
}

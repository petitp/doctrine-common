<?php

namespace Doctrine\Common\Persistence;

/**
 * Temporarily moved constant from Doctrine\Common\Persistence\Proxy because of phpfpm/apc bug:
 *  PHP fatal Error: Cannot inherit previously-inherited or override constant MARKER from interface Doctrine\Common\Persistence\Proxy in /www/restauracie2-staging.sme.sk/htdocs/vendor/doctrine/orm/lib/Doctrine/ORM/Proxy/Proxy.php on line 30
 *
 * Remove this fork after new version of php/apc will be released and will not throw this fatal error.
 *
 * @author Andrej Hudec
 */
class ProxyConstant
{
    /**
     * Marker for Proxy class names.
     *
     * @var string
     */
    const MARKER = '__CG__';

    /**
     * Length of the proxy marker.
     *
     * @var integer
     */
    const MARKER_LENGTH = 6;
}

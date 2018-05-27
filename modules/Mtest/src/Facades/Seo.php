<?php

/**
 * Facades class for Seo.
 *
 * @name       Seo
 * @category   Facades
 * @package    Mtest
 * @author     Vinod Pawar <vpawar9091@gmail.com> 
 * @version    GIT: $Id$
 * @link       None
 * @filesource
 */

namespace Modules\Mtest\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Facades class for Seo.
 *
 * @name     Seo
 * @category Facades
 * @package  Mtest
 * @author   Vinod Pawar <vpawar9091@gmail.com>
 * @version  Release:<v.1>
 * @link     None
 */
class Seo extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'seo';
    }

}

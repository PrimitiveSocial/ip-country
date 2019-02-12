<?php
/**
 * IP Country plugin for Craft CMS 3.x
 *
 * Get's location information based on user's IP
 *
 * @link      primitivesocial.com
 * @copyright Copyright (c) 2019 Primitive Social
 */

namespace primitivesocial\ipcountry\variables;

use primitivesocial\ipcountry\IpCountry;
use primitivesocial\ipcountry\services\IpCountryService;

use Craft;

/**
 * IP Country Variable
 *
 * Craft allows plugins to provide their own template variables, accessible from
 * the {{ craft }} global variable (e.g. {{ craft.ipCountry }}).
 *
 * https://craftcms.com/docs/plugins/variables
 *
 * @author    Primitive Social
 * @package   IpCountry
 * @since     1.0.0
 */
class IpCountryVariable
{

    public function get()
    {

        $service = new IpCountryService;

        return $service->get();

    }

}

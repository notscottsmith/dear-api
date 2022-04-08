<?php

/**
 * Part of Dear package.
 *
 * @package Dear
 * @version 1.0
 * @author Scott Smith
 * @license MIT
 * @copyright Copyright (c) 2022 Scott Smith
 *
 */

namespace UmiMood\Dear;

use UmiMood\Dear\Api\BaseApi;

class Helper
{
    /**
     * @param $parameters
     * @return mixed
     */
    public static function prepareParameters($parameters)
    {
        // set limit & page
        if (!isset($parameters['page'])) {
            $parameters['page'] = BaseApi::PAGE;
        }

        if (!isset($parameters['limit'])) {
            $parameters['limit'] = BaseApi::LIMIT;
        }

        return $parameters;
    }
}
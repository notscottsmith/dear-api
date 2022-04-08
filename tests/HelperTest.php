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

namespace UmiMood\Dear\Test;

use PHPUnit\Framework\TestCase;
use UmiMood\Dear\Helper;

class HelperTest extends TestCase
{
    public function testPrepareParameters()
    {
        $parameters = [];
        $parameters = Helper::prepareParameters($parameters);

        $this->assertEquals(1, $parameters['page']);
        $this->assertEquals(100, $parameters['limit']);

        $parameters['page'] = 10;
        $parameters['limit'] = 999;
        $parameters = Helper::prepareParameters($parameters);

        $this->assertEquals(10, $parameters['page']);
        $this->assertEquals(999, $parameters['limit']);
    }
}
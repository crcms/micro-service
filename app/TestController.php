<?php

namespace CrCms\App;

/**
 * Class TestController
 * @package CrCms\App
 */
class TestController
{

    public function getIndex(Test $test) {
        return $test->x();
    }

}
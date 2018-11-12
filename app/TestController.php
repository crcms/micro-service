<?php

namespace CrCms\App;
use Illuminate\Http\JsonResponse;

/**
 * Class TestController
 * @package CrCms\App
 */
class TestController
{

    public function getIndex(Test $test) {
        //return $test->x();
        return new JsonResponse(['z'=>1]);
    }

}
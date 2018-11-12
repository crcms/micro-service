<?php

namespace CrCms\App;

use Illuminate\Http\JsonResponse;

/**
 * Class Test2Controller
 * @package CrCms\App
 */
class Test2Controller
{
    public function a()
    {
        return ['x'=>'a'];
    }

    public function b()
    {
        return ['x'=>'b'];
    }

    public function c()
    {
        return new JsonResponse(['x'=>'z']);
    }
}
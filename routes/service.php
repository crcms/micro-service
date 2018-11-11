<?php
/**
 * @author simon <simon@crcms.cn>
 * @datetime 2018-10-09 20:31
 * @link http://crcms.cn/
 * @copyright Copyright &copy; 2018 Rights Reserved CRCMS
 */

//$router = new \CrCms\Foundation\MicroService\Routing\Router(app('events'),app());
//dd($router);
//$router->register('abc',function(){
//    return 123;
//});
$router = app('router');
$router->middleware([\CrCms\Foundation\MicroService\Middleware\HashMiddleware::class])->namespace('\CrCms\App')->group(function() use ($router){
    $router->register('def','TestController@getIndex');
});

//$router->middleware([])->namespace('\CrCms\App2')->group(function() use ($router){
//    $router->register('abc',function(){
//        return 'xyz';
//    });
//});
//
//use Illuminate\Support\Facades\Route;
//
////Route::get('/test',function(){
////   return 'abc2345656';
////});
//
////Route::namespace('App\Modules\Test\Http\Controllers')->group(function(){
////    Route::get('test','TestController@getTest');
////});
////Route::any('rand',function (\Illuminate\Http\Request $request){
////    logger('a',$request->headers->all());
////    logger('b',$request->all());
////    logger($request->getMethod());
////    return mt_rand();
////});
//
//Route::get('service',function(\CrCms\Foundation\MicroService\Client\Service $service){
//    $result = $service->call('test','/');
////    $result = $service->call('test','/');
////    $result = $service->call('test','/');
//    dump($result);
//    return $result;
//});
//
//Route::get('test',function(\CrCms\Foundation\Client\Manager $manager){
////    $cli = new Swoole\Coroutine\Http\Client('blog.crcms.cn', 80);
//////    $cli->setHeaders([
//////        'Host' => "localhost",
//////        "User-Agent" => 'Chrome/49.0.2587.3',
//////        'Accept' => 'text/html,application/xhtml+xml,application/xml',
//////        'Accept-Encoding' => 'gzip',
//////    ]);
////    $cli->set([ 'timeout' => 10]);
////    $cli->get('/');
////    $x = $cli->body;
////
////    $cli->close();
////    $x2 = $cli->body;
////    return $x2;
//    $manager = $manager->connection([
//        'name' => 'swoole_http',
//        'driver' => 'swoole_http',
//        'host' => 'blog.crcms.cn',
//        'port' => 80,
//        'settings' => [
//            'timeout' => 10,
//        ],
//    ])->request('/rand');
//    $content = $manager->getContent();
//    $content2 = $manager->getContent();
//    $manager->close();
//    return $manager->getContent();
//
////    go(function () {
//////        $result = \Swlib\SaberGM::get('http://baidu.com');
//////        file_put_contents('./c',$result);
////        return 'abc';
////    });
////    $cli = new Swoole\Coroutine\Http\Client('http://baidu.com', 80);
//////    $cli->setHeaders([
//////        'Host' => "localhost",
//////        "User-Agent" => 'Chrome/49.0.2587.3',
//////        'Accept' => 'text/html,application/xhtml+xml,application/xml',
//////        'Accept-Encoding' => 'gzip',
//////    ]);
////    $cli->set([ 'timeout' => 1]);
////    $cli->get('/');
////    $x = $cli->body;
////    $cli->close();
////    return $x;
//});

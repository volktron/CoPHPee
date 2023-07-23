<?php

return [
    ['type' => 'get',  'uri' => '', 'method' => 'IndexController@default'],
    ['type' => 'get',  'uri' => 'api/test', 'method' => 'TestController@default'],
    ['type' => 'get',  'uri' => 'api/test/{thing}', 'method' => 'TestController@test'],
    ['type' => 'get',  'uri' => 'api/test/{thing}/subtest/{subthing}', 'method' => 'TestController@subtest'],
    ['type' => 'post', 'uri' => '', 'method' => 'IndexController@default'],
];

<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => true,
    1 => 
    array (
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vLAylENgQCZJ91fU',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uaHkdw7D3OfgAdxf',
          ),
          1 => '127.0.0.1',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aniEHlfBQ2caJCbM',
          ),
          1 => 'localhost',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/cms' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yd1v8aus3YxPMQH5',
          ),
          1 => '127.0.0.1',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cXJUa2b7yrWR4XI7',
          ),
          1 => 'localhost',
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/tenants' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IRBojH9jYYObA9YJ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|(?:(?:[^./]*+\\.)++)(?|/tenancy/assets(?:/((?:.*)))?(*:58)))/?$}sDu',
    ),
    3 => 
    array (
      58 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stancl.tenancy.asset',
            'path' => NULL,
          ),
          1 => 
          array (
            0 => 'path',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'generated::vLAylENgQCZJ91fU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'generated::vLAylENgQCZJ91fU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'stancl.tenancy.asset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'tenancy/assets/{path?}',
      'action' => 
      array (
        'uses' => 'Stancl\\Tenancy\\Controllers\\TenantAssetsController@asset',
        'controller' => 'Stancl\\Tenancy\\Controllers\\TenantAssetsController@asset',
        'as' => 'stancl.tenancy.asset',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'path' => '(.*)',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uaHkdw7D3OfgAdxf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'domain' => '127.0.0.1',
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":256:{@GjZwgsWhCV71103K6rRYFL2z4ON2f6m/2BHCVSiKpFU=.a:5:{s:3:"use";a:0:{}s:8:"function";s:44:"function () {
    return \\view(\'welcome\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000234f45ab0000000021574353";}}',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::uaHkdw7D3OfgAdxf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aniEHlfBQ2caJCbM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'domain' => 'localhost',
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":256:{@tr/EajLBi8IjI11pLaDxC1k7vw19t+HuiKyQsFe6P58=.a:5:{s:3:"use";a:0:{}s:8:"function";s:44:"function () {
    return \\view(\'welcome\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000234f45a60000000021574353";}}',
        'namespace' => NULL,
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::aniEHlfBQ2caJCbM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yd1v8aus3YxPMQH5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/cms',
      'action' => 
      array (
        'domain' => '127.0.0.1',
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":325:{@1fR1sbY6DSDyIprh/jTeHzi/G1ipUd7setAboId/W3k=.a:5:{s:3:"use";a:0:{}s:8:"function";s:112:"function () {
    // return Tenant::create();
    // return \'api_central\';
    return \\App\\Models\\User::all();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000234f45a10000000021574353";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::yd1v8aus3YxPMQH5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cXJUa2b7yrWR4XI7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/cms',
      'action' => 
      array (
        'domain' => 'localhost',
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":325:{@jmotu/vt+5ajF0NyRWRnNC9LIe/koXefRNwZGvvQwwg=.a:5:{s:3:"use";a:0:{}s:8:"function";s:112:"function () {
    // return Tenant::create();
    // return \'api_central\';
    return \\App\\Models\\User::all();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000234f45bc0000000021574353";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::cXJUa2b7yrWR4XI7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IRBojH9jYYObA9YJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'tenants',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Stancl\\Tenancy\\Middleware\\InitializeTenancyByRequestData',
        ),
        'uses' => 'C:32:"Opis\\Closure\\SerializableClosure":412:{@BIWBTts4ycfZoe9xewHPPAz4PaEP5c1DM7n+LX6GDyM=.a:5:{s:3:"use";a:0:{}s:8:"function";s:199:"function () {
        // return \'api tenant\';
        // return \'This is your multi-tenant application. The id of the current tenant is \' . tenant(\'id\');
        return \\App\\Models\\User::all();
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000234f464d0000000021574353";}}',
        'namespace' => '',
        'prefix' => NULL,
        'where' => 
        array (
        ),
        'as' => 'generated::IRBojH9jYYObA9YJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);

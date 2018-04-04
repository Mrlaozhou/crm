<?php

namespace App\Http\Controllers;

use App\Models\RBAC\Admin;
use Illuminate\Http\Request;
use Namshi\JOSE\Signer\OpenSSL\HMAC;
use Tymon\JWTAuth\Facades\JWTAuth;

class TestController extends Controller
{
    //
    public function index (Request $request)
    {
//        $header             =   'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9';
//        $payload            =   'eyJpc3MiOiJodHRwOlwvXC93d3cuZGVwb3Quc2VsZlwvaG9tZSIsImlhdCI6MTUyMjgyODc2NCwiZXhwIjoxNTIyODMyMzY0LCJuYmYiOjE1MjI4Mjg3NjQsImp0aSI6ImlCUFp4WUxpNXNBVDdNVk8iLCJzdWIiOjEsInBydiI6IjM4ZTRiY2U4MTVjZjI4YzJhM2FmNTQxNDljY2JlMTMzMmEzZTZjNmMifQ';
//        $sign               =   'Lk5uIBbuEYUVv1jXYsPMb1KRivPAqwflgj6GkDlOcWM';
//        $sceret             =   'F0jv2qtx0kSbPgM3P3IWd2InXoPjPbgo';
//        dump( base64_decode( $header ) );
//        dump( base64_decode( $payload ) );
//        dump( $header.'.'.$payload );
//        dump( hash_hmac( 'hash256', $header.'.'.$payload, $sceret ) );

        dump( Admin::getUUID() );

    }
}

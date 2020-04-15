<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class LoginController extends Controller
{
    /**
     * 注册
     */
    public function reg(Request $request)
    {
        $post = $request->input();
        // print_r($post);

        $url = 'http://' . env('PASSPORT_HOST') .'/api/reg';
        $client = new Client();
        $res = $client->request('POST', $url, [
            'form_params' => [
                'username' => $post['username'],
                'email' => $post['email'],
                'mobile' => $post['mobile'],
                'password' => $post['password']
            ]
        ]);
        return $res->getBody();
    }

    /**
     * 登陆
     */
    public function login(Request $request)
    {
        $post = $request->input();
        // print_r($post);

        $url = 'http://' . env('PASSPORT_HOST') .'/api/login';
        $client = new Client();
        $res = $client->request('POST', $url, [
            'form_params' => [
                'username' => $post['username'],
                'password' => $post['password'],
            ]
        ]);
        echo $res->getBody();
    }
}

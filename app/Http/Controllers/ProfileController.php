<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    function Index(int $id){

        $name = "Donal Trump";
        $age = "75";
        

        $data = [
            "id" => $id,
            "name" => $name,
            "age" => $age,
        ];

        
        //Set your cookie variables stated in the question
        $name = "access_token";
        $value = "123-XYZ";
        $minutes = 1;
        $domain = $_SERVER["SERVER_NAME"];
        $path = "/";
        $secure = false;
        $httpOnly = true;



        return response($data, 200)->cookie(
            $name, $value, $minutes, $path, $domain, $secure, $httpOnly
        );

    }

}

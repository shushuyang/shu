<?php
namespace App\Http\Controllers\Front;

use Illuminate\http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function about()
    {
        return 'app';
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function login()
    {
        return 'tttt';
    }

    public function register()
    {
        return 'zzzz';
    }
}

?>
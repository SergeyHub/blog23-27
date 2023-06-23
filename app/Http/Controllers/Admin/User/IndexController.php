<?php

namespace App\Http\Controllers\Admin\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user;

class IndexController extends Controller
{
    public  function __invoke()
    {
        $users = user::all();
        return view('admin.user.index',compact('users'));
    }
}

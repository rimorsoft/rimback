<?php

namespace Rimorsoft\Rimback\Http\Controllers;

use Rimorsoft\Rimback\Entities\Post;
use Illuminate\Http\Request;


class PageController 
{
    
    public function dashboard(Request $request)
    {
        return view('rimback::page.dashboard');
    }

}

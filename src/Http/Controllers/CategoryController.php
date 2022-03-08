<?php

namespace Cpuche\Blog\Frontend\Http\Controllers;

use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;


class CategoryController extends Controller
{
    public function index()
    {
	    try {
	        $res = Http::get('/api/blog/v1/categories');
			return $res->body();
	    } catch(Exception $e){
	        return $e->getMessage();
	    }
	    
    }
}

<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\MenuController;
class ServicesController extends Controller
{
 public function index($alias){



     $service = Service::where('link', $alias)->first();
     if(!$service){
         return redirect(route('error'));
     }
     $allServise = Service::get(['name','link']);
     $page['menu'] = MenuController::getMenu();
     $page['allServise'] = $allServise;
     $page['title'] = $service->name;
     $page['content'] = $service->content;
     $page['price'] = $service->price;
     return view('uslugi.index', compact('page'));

 }
}

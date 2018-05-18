<?php

namespace App\Http\Controllers;

use App\SubCategory;
use Illuminate\Http\Request;
use App\Category;
use App\Service;
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index(){
        $allServise = Service::get(['name','link']);
        $page['allServise'] = $allServise;
        $page['menu'] = MenuController::getMenu();
        $page['title'] = "Главная";
        return view('home1', compact('page'));

    }
    public function contact(){
        $allServise = Service::get(['name','link']);
        $page['menu'] = MenuController::getMenu();
        $page['allServise'] = $allServise;
        $page['title'] = "» Контакты";
        return view('contact', compact('page'));
    }
    public function priceList(){
        $allServise = Service::get(['name','link']);
        $page['menu'] = MenuController::getMenu();
        $page['allServise'] = $allServise;
        $page['title'] = " » Прайс лист";
        return view('lists', compact('page'));
    }
    public function error(){
        $allServise = Service::get(['name','link']);
        $page['menu'] = MenuController::getMenu();
        $page['allServise'] = $allServise;
        $page['title'] = "Error";
        return view('error', compact('page'));
    }
    public function sendMail(Request $request){
        $input = $request->except('_token');
        $to = "aram30041992@gmail.com";
        $subject = "Заказ";
        $txt = "Имя:".$input['name']." Номер:".$input['phone'];
        $headers = "From: webmaster@example.com" . "\r\n" .
            "CC: somebodyelse@example.com";

        if(mail($to,$subject,$txt,$headers)){
            return redirect(route('home'));
        }


    }

    public function mail(){
        $to = "aram30041992@gmail.com";
        $subject = "Zakaz";
        $txt = "Test";
        $headers = "From: webmaster@example.com" . "\r\n" .
            "CC: somebodyelse@example.com";

        if(mail($to,$subject,$txt,$headers)){
            return redirect(route('home'));
        }

        else{
            echo 'No';exit;
        }

    }

    public function rules(){
        $allServise = Service::get(['name','link']);
        $page['menu'] = MenuController::getMenu();
        $page['allServise'] = $allServise;
        $page['title'] = " » Соглашение об использовании веб-сайта";
        return view('rules', compact('page'));
    }
}

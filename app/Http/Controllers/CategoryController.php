<?php

namespace App\Http\Controllers;

use App\SubCategory;
use Illuminate\Http\Request;
use App\Category;
use App\Service;
use App\Http\Controllers\MenuController;

class CategoryController extends Controller
{
    public function index($category, $subCategory){
//        $cat = Category::where('link',$category)->first();

        if(!$category || !$subCategory){
            return redirect(route('error'));
        }

        $cat = Category::where('link',$category)->first();
        if(!$cat){
            return redirect(route('error'));
        };
        $subCat = SubCategory::where('link',$subCategory)->where('category_id',$cat->id)->first();
        if(!$subCat){
            return redirect(route('error'));
        }
        $allServise = Service::get(['name','link']);
        $page['menu'] = MenuController::getMenu();
        $page['allServise'] = $allServise;
        $page['title'] = $subCat->name;
        $page['price'] = $subCat->price;
        $page['content'] = $subCat->content;
        return view('category.index', compact('page'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use Validator;

class PricesEditController extends Controller
{

    public function execute($id, Request $request)
    {
        $price = price::find($id);


        if($request->isMethod('delete')){
            $price->delete();
            return redirect('admin')->with('status','Price removed');
        }

        if($request->isMethod('post')){
            $input = $request->except('_token');
            $validator = Validator:: make($input,[
                'name'=>'required|max:255',
                'service_id'=>'required|max:11',
            ]);

//            $price->fill($input);

            $price->name = $input['name'];
            $price->service_id = $input['service_id'];
            $price->price = $request->price;
            $price->unit = $request->unit;

            if($price->update()){
                return redirect('admin')->with('status','Price edited');
            }
        }

        $old = $price->toArray();
        if(view()->exists('admin.prices_edit')){
            $services = Service::all();
            $data = [
                'title'=>'Edit price | '.$old['name'],
                'data'=>$old,
                'services'=>$services,

            ];
            return view('admin.prices_edit',$data);
        }
    }
}
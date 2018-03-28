<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Books;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getIndex(){
        return view('welcome');
    }

    public function saveOrUpdate(Request $request){

        $book = new Books;

        $book->book_id = $request->book_id;
        $book->book_name = $request->name;
        $book->book_price = $request->price;

        $result = $book->saveOrFail();

        if($result){
            return response()->json(array('message'=>'Record successfully saved or updated'));
        }
        else{
            return response()->json(array('message'=>'Record didn\'t saved or updated'));
        }
//        return 'It is called'.$request->name;
    }
}

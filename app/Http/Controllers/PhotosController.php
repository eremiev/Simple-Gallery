<?php


namespace App\Http\Controllers;

use App\Http\Requests;
use App\Queries\Photo\Store;
use App\Http\Requests\PhotoRequest;
use Illuminate\Support\Facades\Redirect;


class PhotosController extends Controller
{

    public function index()
    {

        dd('hi');
    }


    public function create()
    {
        return view('photos.create');
    }


    public function store(PhotoRequest $request)
    {
        $inputs = $request->except('_token');
        (new Store($inputs))->run();

//        return Redirect::route('photos.index');
    }


    public function show()
    {
    }


    public function destroy()
    {
    }
}

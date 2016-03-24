<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

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


    public function store()
    {
        dd('ka4i');
    }


    public function show()
    {
    }


    public function destroy()
    {
    }
}

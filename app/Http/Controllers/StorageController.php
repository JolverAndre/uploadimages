<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class StorageController extends Controller
{
    public function index(){
      return view::make('save');
    }
    public function save(Request $request)
    {
        $file = $request->file('file');
        $nombre = $request->input('lugar').'.'.$file->getClientOriginalExtension();
        Storage::disk('local')->put($nombre,  \File::get($file));
        return "archivo guardado";
    }
}

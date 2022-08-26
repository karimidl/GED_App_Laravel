<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;

class DocumentController extends Controller
{

    public function index()
    {
        return view('document.index');
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {

        // $request->validate([
        //     'name'=>'required',
        //     'content'=>'required'

        // ]);

        //     $addNewDoc  = new Document();
        //     $file=$request->name;
        //     $filename=$file->getClientOriginalName();
        //     // $request->name->move('assets',$filename);
        //     $addNewDoc->name=$filename;
        //     $addNewDoc->content=$request->content;

        //     $addNewDoc->save();
        // return redirect()->back();

        // $response = Http::withToken($request->session()->get('user'))->acceptJson()->attach('pdf', file_get_contents($request->file('name')->getRealPath()))->post("http://127.0.0.1:5000/upload", [

        // ]);
        $names = [];

        if($request->hasFile('name')) {

                $file=$request->name;
                // echo(file_get_contents($file));
                if(file_exists($file)){

                    // $names[] = [
                    //     'name' => $file->getClientOriginalName(),
                    //     'contents' => $file, // or $file->get();
                    // ];
                    // $result = Http::attach($names, file_get_contents($file))->post('http://127.0.0.1:5000/upload');
                     $result = Http::attach('name', $file,'testPdf.pdf')->post('http://127.0.0.1:5000/upload');
                }

        }

  return $result;
            //    $file=$request->name;
            // $filename=$file->getClientOriginalName();
            // $request->name->move('assets',$filename);

            //     $photo = fopen('C:\Users\karim\OneDrive - OFPPT\Bureau\ged_app_pg\public\assets\testPdf.pdf', 'r');

            //     $response = Http::attach(
            //         'attachment', $photo, 'testPdf.pdf'
            //     )->post('http://127.0.0.1:5000/upload');


    }


    public function show(Document $document)
    {
        //
    }

    public function edit(Document $document)
    {
        //
    }


    public function update(Request $request, Document $document)
    {
        //
    }


    public function destroy(Document $document)
    {
        //
    }
}

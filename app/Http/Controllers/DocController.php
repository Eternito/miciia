<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doc;
use Illuminate\Support\Facades\file;

class Doccontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reg = Doc::orderBy('created_at', 'DESC')->get();
        return view('ndoc.index', compact('reg'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ndoc.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->hasFile("curp")){
            $curp=$request->file("curp");
            $pdfcurp=time().'_'.$curp->getClientOriginalName();
            $curp->move(\public_path("Documentos/"),$pdfcurp);

            if ($request->hasFile("ct")) {
                $ct=$request->file("ct");
                $pdfct=time().'_'.$ct->getClientOriginalName();
                $ct->move(\public_path("Documentos/"),$pdfct);
            }
            if ($request->hasFile("cm")) {
                $cm=$request->file("cm");
                $pdfcm=time().'_'.$cm->getClientOriginalName();
                $cm->move(\public_path("Documentos/"),$pdfcm);
            }
    
            if ($request->hasFile("si")) {
                $si=$request->file("si");
                $pdfsi=time().'_'.$si->getClientOriginalName();
                $si->move(\public_path("Documentos/"),$pdfsi);
            }
           
            if ($request->hasFile("es")) {
                $es=$request->file("es");
                $pdfes=time().'_'.$es->getClientOriginalName();
                $es->move(\public_path("Documentos/"),$pdfes);
            }
            $reg=new Doc(
                [  
                "curp"=>$pdfcurp,
                "ct"=>$pdfct,
                "cm"=>$pdfcm,
                "si"=>$pdfsi,
                "es"=>$pdfes,
                ]
                );
        }
         
        
        
   
       
       
    
        $reg->save();
       
    
       return redirect()->route('ndoc.index')->with('success', 'Tus documentos se agregaron correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
     return view('ndoc.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

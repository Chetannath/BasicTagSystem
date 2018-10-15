<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Companies;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $company = Companies::all();
        //dd($company);
        return view('create', compact('company'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //dd($request);
        $rules = [
            'name' => 'required',
            'Email' => 'required',
            'web' => 'required',
        ];

        $message = [

        ];

        $vl = Validator::make($request->all(), $rules, $message);

        if ($vl->passes()) {
            //upload banner image
//            $imagepath = "competition/". $slug ."/".$slug."_cover.jpg";
//            Storage::disk("public")->put($imagepath, File::get($request->cover_image));

            $company = Companies::create([
                //'logo' => 'storage/' . $imagepath,
                'name' => $request->name,
                'email' => $request->Email,
                'website' => $request->web,
            ]);
            return ("Record Inserted Successfully");
          }
        else{
            $response["return"] = false;
            $response["message"] = "Validation errors";
            $response["error_keys"] = array_keys($vl->getMessageBag()->toArray());
            $response['error'] = $vl->getMessageBag()->toArray();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return view('CreateCompany');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //dd($id);
        $company = Companies::where('id', '=', $id)->first();
        dd($company);
        return view('UpdateCompany', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Resources\InternResource;
use Illuminate\Http\Request;
use App\Models\Intern;
use App\Models\Group;

class InternController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $interns = Intern::paginate(10);
        return InternResource::collection($interns);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $intern = new Intern();
        $intern->firstName = $request->firstName;
        $intern->lastName = $request->lastName;
        $intern->city = $request->city;
        $intern->address = $request->address;
        $intern->phoneNumber = $request->phoneNumber;
        $intern->email = $request->email;
        $intern->cv = $request->cv;
        $intern->gitHub = $request->gitHub;
        if($intern->save())
        {
            return new InternResource($intern);
        }
            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $intern = Intern::findOrFail($id);
        return new InternResource($intern);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $intern = Intern::findOrFail($id);
        $intern = new Intern();
        $intern->firstName = $request->firstName;
        $intern->lastName = $request->lastName;
        $intern->city = $request->city;
        $intern->address = $request->address;
        $intern->phoneNumber = $request->phoneNumber;
        $intern->email = $request->email;
        $intern->cv = $request->cv;
        $intern->gitHub = $request->gitHub;
        if($intern->save())
        {
            return new InternResource($intern);
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $intern = Intern::findOrFail($id);
        if($intern->delete())
        {
            return new InternResource($intern);
        }
    }
}

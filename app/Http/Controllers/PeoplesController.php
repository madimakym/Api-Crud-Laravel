<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peoples;
use App\Http\Resources\PeoplesResource;

class PeoplesController extends Controller
{
    public function index()
    {
        return PeoplesResource::collection(Peoples::all());
    }
 
    public function create()
    {

    }

  
    public function store(Request $request)
    {
        $people = Peoples::create($request->all());
        return (new PeoplesResource($people))
                ->response()
                ->setStatusCode(201);
    }

   
    public function show($id)
    {
        $people = Peoples::find($id);
        return response()->json($people);
    }

   
    public function edit($id)
    {
        $people = Peoples::find($id);
        return response()->json($people);
    }

    public function update(Request $request, $id)
    {
        $order = Peoples::find($id);
        $order->firstname = $request->input('firstname');
        $order->lastname = $request->input('lastname');
        $order->mail = $request->input('mail');
        $order->phone = $request->input('phone');
        $order->adress = $request->input('adress');
        $order->save();

        return response()->json('People Updated Successfully');
    }

    public function destroy($id)
    {
        $people = Peoples::find($id);
        $people->delete();

        return response()->json('People Deleted Successfully');
    }
}

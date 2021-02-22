<?php

namespace App\Http\Controllers;

use App\Models\People;
use Database\Seeders\PeopleSeeder;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $DBPeople= People::all();
        return view ("welcome", compact ('DBPeople'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ("pages.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newEntry = new People;
        $newEntry->name = $request->name;
        $newEntry->age = $request->age;
        $newEntry->email = $request->email;
        $newEntry->phone = $request->phone;
        $newEntry->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\People  $people
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = People::find($id);
        return view ('pages.show', compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\People  $people
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit =People::find($id);
        return view ("pages.edit", compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\People  $people
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = People::find($id);
        $update->name = $request->name;
        $update->age = $request->age;
        $update->phone = $request->phone;
        $update->email = $request->email;

        $update->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\People  $people
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = People::find($id);
        $destroy->delete();
        return redirect()-> back();
    }
    public function destroyAll()
    {
        $destroyAll = People::all();

        foreach($destroyAll as $item){
            $item->delete();
        }

        return redirect('/');
    }
}

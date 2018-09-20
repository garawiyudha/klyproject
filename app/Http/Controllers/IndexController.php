<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return View('index');
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
        $rules = [
            'name' => 'required|string',
            'date' => 'required|date',
            'email' => 'required|email',
            'address' => 'required'
        ];
        $request->validate($rules);
        $input = [
            'name' => $request->input('name'), 
            'date' => $request->input('date'), 
            'email' => $request->input('email'), 
            'address' => $request->input('address'),
            ];

        $datenow = date("dmYHis");
        $this->write($input['name'], $input['date'], $input['email'], $input['address'], $datenow);
        return View('saved',[
            'name' => $input['name'],
            'date' => $input['date'],
            'email' => $input['email'],
            'address' => $input['address'],
            'datenow' => $datenow,
            'data' => $input
        ]);
    }

    private function write($name, $date, $email, $address,$datenow)
    {
        $filename = $name.'-'.$datenow.'.txt';
        $isi = $name.",".$email.",".$date.",".$address."\n";
        file_put_contents("detail/$filename", $isi);
        
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($filename)
    {
        readfile("detail/$filename.txt");

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

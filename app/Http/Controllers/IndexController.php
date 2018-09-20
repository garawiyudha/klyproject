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
            'nama' => 'required|string',
            'date' => 'required|date',
            'email' => 'required|email',
            'alamat' => 'required'
        ];
        $request->validate($rules);
        $input = [
            'nama' => $request->input('nama'), 
            'date' => $request->input('date'), 
            'email' => $request->input('email'), 
            'alamat' => $request->input('alamat'),
            ];

        $datenow = date("dmYHis");
        $this->write($input['nama'], $input['date'], $input['email'], $input['alamat'], $datenow);
        return View('saved',[
            'nama' => $input['nama'],
            'date' => $input['date'],
            'email' => $input['email'],
            'alamat' => $input['alamat'],
            'datenow' => $datenow,
            'data' => $input
        ]);
    }

    private function write($nama, $date, $email, $alamat,$datenow)
    {
        $filename = $nama.'-'.$datenow.'.txt';
        $isi = $nama.",".$email.",".$date.",".$alamat."\n";
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

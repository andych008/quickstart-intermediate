<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class BSDemoController extends Controller
{
    public function demo($tag)
    {
//        dd($tag);

//        if ($tag == 't1') {
//            return view('bs.t1');
//        } else {
//            return "aaaa";
//        }

        return view('bs.'.$tag);
    }

    public function up(Request $request)
    {
        $this->validate($request, [
            'inputEmail' => 'required',
            'inputPassword' => 'required',
        ]);

        return view('bs.up', [
            'request' => $request,
        ]);
    }

    public function up2(Request $request)
    {
        $this->validate($request, [
            'inputEmail' => 'required',
            'inputPassword' => 'required',
        ]);

        return view('bs.up2', [
            'request' => $request,
        ]);
    }

    public function up3(Request $request)
    {
        $this->validate($request, [
            'inputEmail' => 'required',
            'inputPassword' => 'required',
        ]);

        return view('bs.up3', [
            'request' => $request,
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

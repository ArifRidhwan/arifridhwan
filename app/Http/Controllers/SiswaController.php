<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::all();
        $response =[
        'success' => true,
        'data' => $siswa,
        'message' => 'berhasil'
        ];
        return response()->json($response,200);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tangga()
    {
       //data = [
       //   "nama"=>"Arif",
       //   "Kelas"=> 13,
       //   "hobby"=> ['Gaming','Tidur'],
       //   "guru"=> [
       //       "nama"=>"Pa Ute"
       //   ]
       //   ,
       //   [
       //    "nama"=>"Arif",
       //    "Kelas"=> 13,
       //    "hobby"=> ['Gaming','Tidur'],
       //    "guru"=> [
       //        "nama"=>"Pa Ute"
       //        ]
       //   ]
       //];
       //return $data;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $siswa = new Siswa();
        $siswa->nama=$request->nama;
        $siswa->sekolah=$request->sekolah;
        $siswa->kelas=$request->kelas;
        $siswa->alamat=$request->alamat;
        $siswa->guru=$request->guru;
        $siswa->save();
        $response=[
            'success'=>true,
            'data'=>$siswa,
            'message'=>'berhasil'
        ];
        return response()->json($response,200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = Siswa::findOrFail($id);
        $response= [
            'success' => true,
            'data' => $siswa,
            'message' => 'berhasil'
        ];
        return response()->json($response,200);
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
        $siswa = Siswa::findOrFail($id);
        $siswa->nama=$request->nama;
        $siswa->nama=$request->sekolah;
        $siswa->nama=$request->kelas;
        $siswa->nama=$request->alamat;
        $siswa->nama=$request->guru;
        $response=[
            'success'=>true,
            'data'=>$siswa,
            'message'=>'berhasil'
        ];
        return response()->json($response,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id)->delete();
        $response=[
            'success'=>true,
            'data'=>$siswa,
            'message'=>'berhasil'
        ];
        return response()->json($response,200);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;

class SiswaController extends Controller
{

    public function index(){
      return siswa::all();
    }
    public function create(request $request){
      $siswa=new siswa;
      $siswa->nama=$request->nama;
      $siswa->alamat=$request->alamat;
      $siswa->save();
      return "data masuk";
    }
    public function update(request $request,$id){
      $nama=$request->nama;
      $alamat=$request->alamat;
      $siswa=siswa::find($id);
      $siswa->nama=$nama;
      $siswa->alamat=$alamat;
      $siswa->save();
      return "data updated";
    }
    public function delete($id){
      $siswa=siswa::find($id);
      $siswa->delete();
      return "data deleted";
    }
}

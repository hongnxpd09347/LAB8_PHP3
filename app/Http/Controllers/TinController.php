<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TinController extends Controller
{
    public function index(){
        return view('home');
    }

    // function chitiet ($id=0){
    //     $data = ['id'=>$id];
    //     return view("chitiet", $data);
    // }   

    // function tintrongloai($idLT=0){
    //     $data = ['idLT'=>$idLT];
    //     return view("tintrongloai", $data);
    // }

    function chitiet ($id=0){
        $tin = DB::table('tin')->where('id', $id)->first();
        $data = ['id'=>$id, 'tin'=>$tin];
        return view("chitiet", $data);
    }

    function tintrongloai($idLT=0){
        $loaitin_arr = DB::table('loaitin')->where('id', $idLT)->first();
        $listtin = DB::table('tin')->where('idLT', $idLT)->get();
        $data = ['idLT'=>$idLT, 'listtin'=>$listtin, 'loaitin_arr'=>$loaitin_arr];
        return view("tintrongloai", $data);
    }

    public function lienhe(){
        return view('lienhe');
    }

    public function lay1tin($id){
        $data = ['id'=>$id];
        return view('chitiet', $data);
    }

}

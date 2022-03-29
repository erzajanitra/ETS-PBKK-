<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Record;

class RecordController extends Controller
{
    public function index(){
        return view('records', [
            "name" => "Rumah Sakit Sembuh",
            "address" => "Jalan Rungkut, Surabaya",
            "record" =>  Record::all(),
            "title" => "Rekam Medis Pasien"
        ]);
    }
   
    public function content(Record $record){
        return view('record', [
            "record" => $record
        ]);
    }



}

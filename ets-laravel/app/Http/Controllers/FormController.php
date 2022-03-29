<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
class FormController extends Controller
{
    public function input()
    {
        return view('input');
    }
 
    public function proses(Request $request)
    {
        $messagesError = [
            'required' => 'This field is required',
            'min' => 'The minimum length of :attribute is :min characters',
            'max' => ' The maximum length of :attribute is :max characters',
            'image' => 'The file must be in jpeg,png,jpg'
        ];
        // Ada validasi
        $this->validate($request,[
           'nama' => 'required|min:5|max:20',
           'nrp' => 'required',
           'usia' => 'required|numeric',
        //    'angkatan' => 'required',
           'alamat' => 'required',
           'kontak' => 'required|numeric',
        //File yang diunggah harus berekstensi .png/ .jpg/ .jpeg dan berukuran maksimal 2 MB
            'bukti' => 'required|image|mimes:jpeg,png,jpg|max:2048', 
           'durasi' => 'required|numeric',
        //Ada 1 field yang bisa menginputkan nilai double antara 2.50 s.d. 99.99
           'jarak' => 'required|numeric|between:2.50,99.99',

        ],$messagesError);
      
        //save picture then move 
        //ganti nama gambar sesuai waktu penyimpanan
        $imageName = time().'.'.$request->bukti->extension();
        //pindah file gambar ke folder images
        $request->bukti->move(public_path('images'),$imageName);
        $request->bukti = $imageName;

        // Memberikan flash message success jika form berhasil diinputkan sesuai ketentuan
        session()->flash('success','Data Berhasil Disimpan');
 		// echo $request->bukti;
        return view('proses',['data' => $request]);
    }
    
}

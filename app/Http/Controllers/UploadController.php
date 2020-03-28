<?php
/**
 * Created by PhpStorm.
 * User: dzaki
 * Date: 28/03/20
 * Time: 6:31
 */

namespace App\Http\Controllers;


use App\Models\Upload;
use Illuminate\Http\Request;

class UploadController extends Controller
{

    public function index()
    {
        return view('upload');
    }

    public function store(Request $request)
    {
        $upload = new Upload();
        $file1 = $request->file('upload1');
        if($request->hasFile('upload1'))
        {
            $filename1 = $file1->getClientOriginalName() . '-' . time() . '.' . $file1->getClientOriginalExtension();
            $file1->store('/app/public');
            $upload->upload1 = $filename1;
        }

        $file2 = $request->file('upload2');
        if($request->hasFile('upload2'))
        {
            $filename2 = $file2->getClientOriginalName() . '-' . time() . '.' . $file2->getClientOriginalExtension();
            $file2->store('/app/public');
            $upload->upload2 = $filename2;
        }

        $file3 = $request->file('upload3');
        if($request->hasFile('upload3'))
        {
            $filename3 = $file3->getClientOriginalName() . '-' . time() . '.' . $file3->getClientOriginalExtension();
            $file3->store('/app/public');
            $upload->upload3 = $filename3;
        }

        $upload->save();

        return redirect()->back();
    }

}
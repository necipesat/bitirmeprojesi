<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class UploadController extends Controller {
    
    public function uploadContentImg(Request $request){
        if ($request->file('upload')) {
            $unique = date("dmy").uniqid();
            $path = '/'.$unique.'.png';
            Storage::disk('uploads')->put($path, file_get_contents($request->upload));
            return response()->json([
                "uploaded" => 1,
                "fileName" => $unique.".png",
                "url" => asset('uploads')."/".$unique.".png"
            ]);
        }
    }

    public function uploadThumbnail(Request $request){
        $path = public_path('uploads');
        $file = $request->file('file');
        $name = uniqid() . '_' . trim($file->getClientOriginalName());
        $file->move($path, $name);
        return response()->json([
            'name'          => $name,
            'original_name' => $file->getClientOriginalName(),
        ]);
    }
}

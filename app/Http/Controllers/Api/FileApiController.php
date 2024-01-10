<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\File;
use Exception;

class FileApiController extends Controller
{
    public function upload(Request $request){
        //http://localhost:8000/storage/api_docs/QxLZGR5Po49tul7n6BKffflkamKyV0g6WVPKRn5r.jpg
        $fileReq = $request->file('file');
        $path = $fileReq->store('public/api_docs');
        $name = $fileReq->getClientOriginalName();
        $type = $fileReq->getClientOriginalExtension();

        $file       = new File();
        $file->name = $name;
        $file->type = $type;
        $file->path = "storage/".$path;

        $result = $file->save();
        if ($result) {
            return [
                'result' => 'Successfully saved '
            ];
        }

        return [
            "result" => "Oops! Failed to save."
        ];
    }

    public function getAll(){
        $files = File::all();
        return [
            'result' => $files
        ];
    }

    public function getById($id){
        $isSuccess = false;
        $file = null;

        try{
            $file = File::find($id);
            if($file != null){
                $isSuccess = true;
            }
        }catch(Exception $e){
            $isSuccess = false;
        }
        
        if($isSuccess){
            return [
                'result' => $file
            ];
        }
        return [
            'result' => 'Oops! Faild to get by id '.$id
        ];
    }
}

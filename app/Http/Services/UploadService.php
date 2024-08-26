<?php

namespace App\Http\Services;

class UploadService 
{
    public function store($request){
        if($request->hasFile('file')) {
            try {

                $file = $request->file('file');
 
                $name = $file->getClientOriginalName();
            // $name = $request->file('file')->getClientOriginalName();

            $pathFull = 'upload/' .date("Y/m/d");

            $request->file('file')->storeAs(
                'public/'.$pathFull, $name
            );

            return '/storage/'.$pathFull . '/'. $name;
            } catch (\Exception $error) {
                return false;
            }
        }
    }
}
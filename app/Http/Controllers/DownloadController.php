<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    /**
     * download the curriculum file  
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function downloadCurriculum($file){
         
        $pathToFile = public_path('curriculums/'.$file);
        $headers = ['Content-Type : application/pdf'];

         return response()->download($pathToFile, $file, $headers); 

        

     }

      /**
     * download the curriculum file  
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function downloadRecentNews($file){
         
        $pathToFile = public_path('recentNews/'.$file);
        $headers = ['Content-Type : application/pdf'];

         return response()->download($pathToFile, $file, $headers); 

        

     }

}

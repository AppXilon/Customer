<?php

namespace App\Http\Controllers;
ini_set('max_execution_time', 180); //3 minutes

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class ExecutePython extends Controller
{
    public function executePython(){
       if (Auth::check()){
           $user_id = Auth::id();
       } else
       $user_id = 13;

       $reco = shell_exec("python  $user_id");
        #$pieces = explode(" ", $reco);
    return $reco; 
    }

    public function re_train(){
        $pieces = shell_exec("python ");
    return $pieces;

    // $process = new Process(['...'], null, ['ENV_VAR_NAME' => 'value']);


    // $process = new Process(['python', 'top_movies.py'],null,['ENV_VAR_NAME' => 'C:\Users\hrish\AppData\Local\Programs\Python\Python39']);        $process->run();
    // if (!$process->isSuccessful()) {
    //      throw new ProcessFailedException($process);
    // }
            
    // $ar = $process->getOutput();


    // use Symfony\Component\Process\Process;
    // use Symfony\Component\Process\Exception\ProcessFailedException;
    
    // $process = new Process(['python', '/path/to/script.py']);
    // $process->run();
    
    // // error handling
    // if (!$process->isSuccessful()) {
    //     throw new ProcessFailedException($process);
    // }
    
    // $output_data = $process->getOutput();



    }
}

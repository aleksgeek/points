<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayingFieldController extends Controller
{
    /**
     * @param Illuminate\Http\Request $request
     * @return string
     */
    public function init(Request $request)
    {
        $data = [1, 2, 3];

        return response()->json($data); 
    }
}
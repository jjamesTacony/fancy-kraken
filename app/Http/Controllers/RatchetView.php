<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RatchetView extends Controller
{
     /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function showInitView()
    {
        return view('ratchet-init');
    }
}

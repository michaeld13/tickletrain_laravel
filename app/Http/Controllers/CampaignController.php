<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CampaignController extends Controller
{
    //

    public function index()
    {
    	# code...
 		return view('user.campaigns');
    }
}

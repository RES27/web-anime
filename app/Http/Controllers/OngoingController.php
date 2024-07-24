<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;


class OngoingController extends Controller
{

        public function index()
        {
            $data = Http::withOptions(['verify' => false])->get('https://otakudesu-anime-api.vercel.app/api/v1/ongoing/1');
            return view('ongoing.index', [
                'ongoing' => $data
            ]);
        }
}








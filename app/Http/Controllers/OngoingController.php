<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class OngoingController extends Controller
{

        public function index()
        {
            $response = Http::withOptions(['verify' => false])->get('https://otakudesu-anime-api.vercel.app/api/v1/ongoing/1');

                if ($response->successful()) {
                    $datas = $response->json();
                } else {
                    $datas = [];
                    // Tangani kesalahan jika diperlukan
                    $status = $response->status();
                    $error = $response->body();
                }

                // dd($datas);

                return view('ongoing.index', compact('datas'));
            // return Http::withOptions(['verify' => false])->get('https://otakudesu-anime-api.vercel.app/api/v1/ongoing/1');
        }
}








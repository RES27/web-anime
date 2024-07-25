<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DetailController extends Controller
{
    public function index($title)
    {
        $decodedTitle = urldecode($title);

        $response = Http::withOptions(['verify' => false])
                        ->get('https://otakudesu-anime-api.vercel.app/api/v1/detail/' . $decodedTitle);

        if ($response->successful()) {
            $film = $response->json();
        } else {
            // Tangani kesalahan jika diperlukan
            $status = $response->status();
            $error = $response->body();
            return view('ongoing.detail')->withErrors(['error' => 'Gagal mengambil data dari API.']);
        }

        return view('ongoing.detail', compact('film'));
    }
}

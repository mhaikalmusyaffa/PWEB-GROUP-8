<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Facades\Http;
class HeroesController extends Controller
{
    public function fetchHeroList(Request $request)
{
    $response = Http::get('https://api.dazelpro.com/mobile-legends/hero');

    if ($response->successful()) {
        $data = $response->json();

        if ($request->has('search')) {
            $find = $request->search;
            $filteredData = [];

            foreach ($data['hero'] as $row) {
                if (stripos($row['hero_name'], $find) !== false) {
                    $filteredData[] = $row;
                }
            }

            if($find===null){
                $data = $response->json();
            } else {
                $data['hero'] = $filteredData;
            }


        } else {
            $data = $response->json();
        }
        return view('herolist', compact('data'));
    } else {
        return response()->json(['error' => 'Mobile Legends API request failed'], $response->status());
    }
}



    public function heroes() {
        $data = member::all();
        return view('herolist',compact('data'));
    }

    public function hero(Request $request, $hero_id) {
        $response = Http::get(sprintf('https://api.dazelpro.com/mobile-legends/hero/%d', $hero_id));
        if ($response->successful()) {
            $data = $response->json();
            return view('hero',compact('data'));
        } else {
            return response()->json(['error' => 'Mobile Legends API request failed'], $response->status());
        }
    }








}

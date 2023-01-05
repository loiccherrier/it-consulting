<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
  
class PostController extends Controller
{
    public function search(Request $request)
    {
        $title = trim($request->get('title_film'));
        //dd("http://www.omdbapi.com/?apikey=270237ab&t=$title");
        $response = Http::get("http://www.omdbapi.com/?apikey=270237ab&t=$title");
        $jsonData = $response->json();
        
        return view('test', [
            'film' => $jsonData
        ]);
    }

    public function searchbyid(Request $request)
    {
        $id = trim($request->get('id_film'));
        $response = Http::get("http://www.omdbapi.com/?apikey=270237ab&i=$id");
        $jsonData = $response->json();

        return view('test', [
            'film' => $jsonData
        ]);
    }

    public function store()
    {
        $response = Http::post('https://jsonplaceholder.typicode.com/posts', [
                    'title' => 'This is test from ItSolutionStuff.com',
                    'body' => 'This is test from ItSolutionStuff.com as body',
                ]);
  
        $jsonData = $response->json();
      
        dd($jsonData);
    }
}
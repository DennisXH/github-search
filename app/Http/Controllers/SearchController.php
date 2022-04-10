<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Http;

class SearchController extends Controller
{
    public function index(): JsonResponse
    {
        $searchKey = request()->input('search_key');
        $result = Http::get('https://api.github.com/search/users?q=mike+in%3Aname+type%3Auser');
        return response()->json($result->json());
    }


}

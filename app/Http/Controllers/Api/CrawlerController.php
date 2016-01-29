<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CrawlerController extends Controller
{
    public function getTitle(Request $request)
    {
        // $client = new Client($request->input('url'));

        // $request = $client->get('');
        // $response = $request->send();
        // $body = $response->getBody();

        // preg_match('/<title>(.*?)<\/title>/s', $body, $matches);
        // if ($matches) {
        //     return response($matches[1], 200);
        // }

        // return response('Something happened.', 500);

        $info = \Embed\Embed::create($request->input('url'));

        return response()->json([
            'title' => $info->title,
            'image_url' => $info->image,
        ], 200);

    }
}

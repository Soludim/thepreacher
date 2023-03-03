<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Crypt;

class SermonController extends Controller
{
    public function dindex($page = 1)
    {

        try {
            $client = new Client(['base_uri' => config('app.api_base')]);

            if ($page == 1)
                $response = json_decode($client->get('api/sermon?page=' . $page)->getBody());
            else
                $response = json_decode($client->get('api/sermon?page=' . Crypt::decrypt($page))->getBody());

            return view('pages.dashboard.sermons', ['data' => $response->sermons]);
        } catch (ClientException $th) {
            return back();
        }
    }

    public function index($page = 1)
    {
        try {
            $client = new Client(['base_uri' => config('app.api_base')]);

            if ($page == 1)
                $response = json_decode($client->get('api/sermon?page=' . $page . '&topic='. request('topic'))->getBody());
            else
                $response = json_decode($client->get('api/sermon?page=' . Crypt::decrypt($page) . '&topic='. request('topic'))->getBody());



            return view('pages.sermons', ['data' => $response]);
        } catch (ClientException $th) {
            return back();
        }
    }


    public function create()
    {
        try {
            $client = new Client(['base_uri' => config('app.api_base')]);
            $category = json_decode($client->get('api/category/sermon')->getBody());

            return view(
                'pages.dashboard.create_edit_sermon',
                ['sermon' => null, 'categories' => $category->data]
            );
        } catch (ClientException $th) {
            return back();
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'topic' => ['required', 'string', 'max:255', 'unique:sermons'],
            'audio_id' => ['required', 'string'],
            'speaker' => ['required', 'string'],
            'category' => ['required', 'integer']
        ]);

        $data = [
            'topic' => $request->input('topic'),
            'audio_id' => $request->input('audio_id'),
            'speaker' => $request->input('speaker'),
            'category_id' => $request->input('category')
        ];

        try {
            $client = new Client(['base_uri' => config('app.api_base')]);
            $res = json_decode($client->post('api/sermon?api_token=' . Auth::user()->api_token, ['json' => $data])->getBody());

            return  redirect()->route('dsermons');
        } catch (ClientException $th) {
            echo ($th);
            return back();
        }
    }

    public function show($id)
    {
        try {
            $endpoint = 'api/sermon_single/' . Crypt::decrypt($id);
            $client = new Client(['base_uri' => config('app.api_base')]);

            //check_auth and add token
            if (Auth::id() != null)
                $endpoint = 'api/sermon_single/' . Crypt::decrypt($id) . '?api_token=' . Auth::user()->api_token;

            $response = json_decode($client->get($endpoint)->getBody());

            return view(
                'pages.sermon-single',
                ['data' => $response]
            );
        } catch (ClientException $th) {
            return back();
        }
    }


    public function edit($id)
    {
        try {
            $client = new Client(['base_uri' => config('app.api_base')]);
            $category = json_decode($client->get('api/category/sermon')->getBody());
            $response = json_decode($client->get('api/sermon/' . $id)->getBody());

            return view(
                'pages.dashboard.create_edit_sermon',
                ['sermon' => $response->data, 'categories' => $category->data]
            );
        } catch (ClientException $th) {
            return back();
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'topic' => ['required', 'string', 'max:255'],
            'audio_id' => ['required', 'string'],
            'speaker' => ['required', 'string'],
            'category' => ['required', 'integer']
        ]);

        $data = [
            'topic' => $request->input('topic'),
            'audio_id' => $request->input('audio_id'),
            'speaker' => $request->input('speaker'),
            'category_id' => $request->input('category')
        ];

        $client = new Client(['base_uri' => config('app.api_base')]);
        try {
            $res = json_decode($client->post(
                'api/sermon/' . Crypt::decrypt($id) . '?api_token=' . Auth::user()->api_token,
                ['json' => $data]
            )->getBody());

            return redirect()->route('dsermons');
        } catch (ClientException $th) {
            return back();
        }
    }


    public function details($id)
    {
        try {
            $client = new Client(['base_uri' => config('app.api_base')]);

            $response = json_decode($client->get('api/sermon/' . $id)->getBody());

            return view('pages.dashboard.sermon_details', ['sermon' => $response->data]);
        } catch (ClientException $th) {
            return back();
        }
    }



    public function destroy($id)
    {
        $client = new Client(['base_uri' => config('app.api_base')]);
        try {
            $client->delete('api/sermon/' . Crypt::decrypt($id) . '?api_token=' . Auth::user()->api_token);
            return  redirect()->route('dsermons');
        } catch (ClientException $th) {
            return back();
        }
    }
}

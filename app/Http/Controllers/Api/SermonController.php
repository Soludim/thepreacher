<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Sermon;
use App\Event;
use App\SermonCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class SermonController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api')->only(['store', 'destroy']);
    }

    // Display a listing of the resource.
    public function index(Request $request)
    {
        $sermons = Sermon::with('category')->where('topic', 'LIKE', '%' . $request->input('topic') . '%')->latest()->paginate(5);
        $category_sermons = SermonCategory::withCount('sermons')->get();
        $earliestEvent = Event::all()->sortBy(function ($event) {
            if (!$event->date || !$event->time)
                return '40000-01-01-00:00:00';
            return $event->date . '-' . $event->time;
        })->where('standing', true)->first();
        return response()->json([
            "sermons" => $sermons,
            "topic" =>  $request->input('topic'),
            "category_sermons" => $category_sermons,
            "earliestEvent" => $earliestEvent
        ]);
    }

    //get all categories
    public function categories()
    {
        $categories = SermonCategory::all();
        $subset = $categories->map(function ($category) {
            return $category->only(['id', 'name']);
        });
        return response()->json(["data" => $subset]);
    }


    // Store a newly created sermon in storage.
    public function store(Request $request)
    {
        $val = Validator::make($request->all(), [
            'topic' => ['required', 'string', 'max:255', 'unique:sermons'],
            'audio_id' => ['required', 'string'],
            'speaker' => ['required', 'string'],
            'category_id' => ['required', 'integer'],
        ]);

        if ($val->fails()) {
            return response()->json(["error" => $val->errors()]);
        }


        $sermon = new Sermon();
        $sermon->topic = strtoupper($request->input('topic'));
        $sermon->audio_id = $request->input('audio_id');
        $sermon->speaker = $request->input('speaker');
        $sermon->category_id = $request->input('category_id');

        $sermon->save();
        return response()->json(["data" => $sermon, "message" => "Sermon creation was successful"]);
    }

    public function sermon_single($id)
    {
        $sermon = Sermon::with([
            'comments.user', 'comments.replies.user'
        ])->find($id);
        if ($sermon == null) {
            return response()->json(["message" => "Sermon does not exist"]);
        }
        $earliestEvent = Event::all()->sortBy(function ($event) {
            if (!$event->date || !$event->time)
                return '40000-01-01-00:00:00';
            return $event->date . '-' . $event->time;
        })->where('standing', true)->first();        ///get the earliest event and send it to the page

        return response()->json(['sermon' => $sermon, 'earliestEvent' => $earliestEvent]);
    }


    // Display the specified sermon.
    public function show($id)
    {
        $sermon = Sermon::find($id);
        if ($sermon == null) {
            return response()->json(["message" => "sermon does not exist"]);
        }
        return response()->json(["data" => $sermon]);
    }

    // Update the specified resource in storage. //a post method
    public function update_sermon(Request $request, $id)
    {
        $sermon = Sermon::find($id);
        if ($sermon == null)
            return response()->json(["message" => "sermon does not exist"]);


        $val = Validator::make($request->all(), [
            'topic' => ['required', 'string', 'max:255'],
            'audio_id' => ['required', 'string'],
            'speaker' => ['required', 'string'],
            'category_id' => ['required', 'integer']
        ]);

        if ($val->fails()) {
            return response()->json(["error" => $val->errors()]);
        }

        $sermon->topic = strtoupper($request->input('topic'));
        $sermon->speaker = $request->input('speaker');
        $sermon->audio_id = $request->input('audio_id');
        $sermon->category_id = $request->input('category_id');

        $sermon->save();
        return response()->json(["data" => $sermon, "message" => "Sermon updated successfully"]);
    }


    // Remove the specified sermon from storage.
    public function destroy(Request $request, $id)
    {
        $sermon = Sermon::find($id);
        if ($sermon == null) {
            return response()->json(["message" => "sermon does not exist"]);
        }

        if ($request->user()->role_id != 1 &&  $request->user()->id != $sermon->user_id) {
            return response()->json(["message" => "Unauthaurized to delete this sermon"]);
        }

        foreach ($sermon->comments as $comment) {
            foreach ($comment->replies as $reply)
                $reply->likes()->delete();
        }
        foreach ($sermon->comments as $comment) {
            $comment->replies()->delete(); // delete all replies relating to the comments of this sermon
        }
        foreach ($sermon->comments as $comment) {
            $comment->likes()->delete(); // delete all likes relating to the comments of this sermon
        }

        $sermon->comments()->delete();   //delete all comments relating to this sermon


        $sermon->delete();
        return response()->json(["data" => $sermon]);
    }
}

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Post;
use App\Sermon;
use App\Event;
use App\User;
use App\NewData;
use App\PrayerRequest;
use Illuminate\Support\Carbon;

class IndexController extends Controller
{
    public function index()
    {
        $posts = Post::with(['user'])->withCount(['comments'])->latest()->limit(3)->get();
        $sermons = Sermon::with('category')->latest()->limit(3)->get();
        $earliestEvent = Event::all()->sortBy(function ($event) {
            if (!$event->date || !$event->time)
                return '40000-01-01-00:00:00';
            return $event->date . '-' . $event->time;
        })->where('standing', true)->first();
        $all = ['posts' => $posts, 'sermons' => $sermons, 'earliestEvent' => $earliestEvent];
        return response()->json(['data' => $all]);
    }

    //about page
    public function about()
    {
        $earliestEvent = Event::all()->sortBy(function ($event) {
            if (!$event->date || !$event->time)
                return '40000-01-01-00:00:00';
            return $event->date . '-' . $event->time;
        })->where('standing', true)->first();         //get earliest event
        return response()->json(['earliestEvent' => $earliestEvent]);
    }


    //index page on dashboard
    public function dashboard()
    {
        $earliestEvent = Event::all()->sortBy(function ($event) {
            if (!$event->date || !$event->time)
                return '40000-01-01-00:00:00';
            return $event->date . '-' . $event->time;
        })->where('standing', true)->first();        //get the earliest event

        $totalUsersCount = count(User::all());
        $totalPostCount = count(Post::all());
        $totalSermonCount = count(Sermon::all());
        $prayedRequests = count(PrayerRequest::where('status', 'prayed')->get());  //prayed prayer request count
        $standingRequests = count(PrayerRequest::where('status', 'standing')->get());  //standing prayer request count
        $today_data = NewData::find(1);

        if (!$today_data) {
            $today_data = NewData::create([
                'date' => Carbon::now(),
                'prayer_requests' => 0,
                'mail_received' => 0,
                'users' => 0,
            ]);
        } else if (Carbon::now()->format('Y-m-d') <> $today_data->date)  //getting rid of previous day data
        {
            $today_data->date = Carbon::now();
            $today_data->prayer_requests = 0;
            $today_data->mail_received = 0;
            $today_data->users = 0;
            $today_data->save();
            //set date to today and reset all counts
        }

        return response()->json([
            'todayStat' => $today_data,
            'registeredUsers' => $totalUsersCount,
            'postCount' => $totalPostCount,
            'sermonCount' => $totalSermonCount,
            'earliestEvent' => $earliestEvent,
            'prayedRequests' => $prayedRequests,
            'standingRequests' => $standingRequests,
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class FrontEndController extends Controller
{
    public function index(){
        $data['title'] = 'Home';
        return view('frontend.home.index')->with($data);
    }

    public function about(){
        $data['title'] = 'About';
        return view('frontend.about.index')->with($data);
    }

    public function lifetime_member_list(){
        $data['title'] = 'LifeTime Member List';
        return view('frontend.members.lifetime_member')->with($data);
    }

    public function associate_member_list(){
        $data['title'] = 'Associate Member List';
        return view('frontend.members.associate_member_list')->with($data);
    }

    public function general_member_list(){
        $data['title'] = 'General Member List';
        return view('frontend.members.general_member_list')->with($data);
    }

    public function news(){
        $data['title'] = 'News';
        return view('frontend.news.index')->with($data);
    }

    public function photos(){
        $data['title'] = 'Gallery';
        return view('frontend.gallery.photo.index')->with($data);
    }

    public function videos(){
        $data['title'] = 'Gallery';

        $client = new Client();
        $API_key = 'AIzaSyDZdsMh7sU6vYXS08ORDdWD8SaJhHynbVs';
        $channelID = 'UCNU0Vv6U1xZS82cIQrgDeqw';
        // $channelID = 'UCWuUQyUHpS9N_WRDX426EMw';
        $maxResult = 9;
        $list = $client->request('GET', 'https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.$channelID.'&maxResults='.$maxResult.'&key='.$API_key.'');
        $data['videoList'] = \GuzzleHttp\json_decode((string) $list->getBody());
        
        return view('frontend.gallery.video.index')->with($data);
    }

    public function events(){
        $data['title'] = 'Event';
        return view('frontend.event.index')->with($data);
    }

    public function member_login(){
        $data['title'] = 'Member Login';
        return view('frontend.members.login')->with($data);
    }

    public function member_register(){
        $data['title'] = 'Member Register';
        return view('frontend.members.register')->with($data);
    }

    public function president_message(){
        $data['title'] = 'President Message';
        return view('frontend.about.president_message')->with($data);
    }

    public function mission_vision(){
        $data['title'] = 'Mission & Vision';
        return view('frontend.about.mission_vision')->with($data);
    }
}

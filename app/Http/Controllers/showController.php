<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Episodes;
use App\Series;
use App\User;


class showController extends Controller
{
    public function viewIndex(){
        $episodes = Episodes::orderBy('id' ,'DESC')->get();
        return view('index' , ['episodes'=>$episodes]);
    }

    public function viewEpisode($id){
        $episodes = Episodes::where('id' , $id)->first();
        return view('episode', ['episodes'=>$episodes]);
    }

    public function viewListEpisodes($id){
        $episodes = Episodes::where('series_id' , $id)->orderBy('id' ,'ASC')->get();
        return view('list_episodes' , ['episodes'=>$episodes]);
    }

    public function viewSeriesRandomly(){
        $series = Series::inRandomOrder()->limit(5)->get();
        return view('series_randomly' ,['series'=>$series]);
    }

    public function addLike($id){
        $episodes = Episodes::find($id)->first();

        $like_number = $episodes->likes;
        $episodes->likes = $like_number +1;
        $episodes->save();

        return  $like_number +1 ;



    }

    public function addDislike($id){
        $episodes = Episodes::find($id)->first();

        $dislikes_number = $episodes->dislikes;
        $episodes->dislikes = $dislikes_number +1;
        $episodes->save();

        return  $dislikes_number +1 ;



    }

}

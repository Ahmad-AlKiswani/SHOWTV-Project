<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Episodes;
use App\Series;
use App\User;

class adminController extends Controller
{
    public function viewUserList(){
        $user = User::where('rule' , 3)->get();
        return view('Admin.userList' , ['user'=>$user]);
    }
    public function viewSeriesList(){
        $series = Series::get();
        return view('Admin.seriesList', ['series'=>$series]);
    }
    public function viewEpisodesList(){
        $episode = Episodes::get();
        return view('Admin.episodesList' , ['episode'=>$episode]);
    }
    public function viewAddUser(){
        return view('Admin.addUser');
    }

    public function AddUser(Request $request){

        $validator = Validator::make($request->all(),[
            'fname' => 'required|min:3|max:125',
            'lname' => 'required|min:3|max:125',
            'access' => 'required',
            'email'=>'required|unique:users,email,'.$request->id,
//            'password'=>'required',
        ]);

        if ($validator->fails()){
            $error_messages = implode(',',$validator->messages()->all());
            return back()->with('error', $error_messages);
        }else{

            if($request->id){
                $User = User::find($request->id);
                $password = bcrypt($request->password);

                $User->name = $request->fname. " " .$request->lname;
                $User->email = $request->email;
                $User->password = $password;
                $User->access = $request->access;
                $User->save();

                return redirect('userList')->with('success' , 'Edited User Successfully ');

            }else{

                $password = bcrypt($request->password);
                $arr = [

                    'name' => $request->fname. " " .$request->lname,
                    'email' => $request->email,
                    'password'=>$password,
                    'access' => $request->access,
                    'rule'=> '3',
                ];

                User::create($arr);
                return redirect('userList')->with('success' , 'Added User  Successfully ');
            }

        }

    }

    public function viewEditUser($id){
        $data = User::where('id' , $id)->first();
        return view('Admin.addUser' , ['data'=>$data]);
    }
    public function deleteUser($id){
        User::where('id' , $id)->delete();
        return redirect('userList')->with('success' , 'Deleted User Successfully ');
    }






    public function viewAddSeries(){
        return view('Admin.addSeries');
    }

    public function AddSeries(Request $request){

        $validator = Validator::make($request->all(),[
            'title' => 'required|min:3|max:125',
//            'thumbnail' => 'required',
            'show_time'=>'required',
            'show_day'=>'required',
            'description'=>'required'
        ]);

        if ($validator->fails()){
            $error_messages = implode(',',$validator->messages()->all());
            return back()->with('error', $error_messages);
        }else{

            if($request->id){
                $Series = Series::find($request->id);

                if ($request->hasFile('thumbnail')){
                    $uploadedImage = $request->file('thumbnail');
                    $imageName = self::generate_random_string(). '.' . $uploadedImage->getClientOriginalExtension();
                    $destinationPath = public_path('/Thumbnails_series_file');
                    $uploadedImage->move($destinationPath, $imageName);
                    $uploadedImage->imagePath = $destinationPath . $imageName;

                    $Series->thumbnail = $imageName;
                }

                $Series->title = $request->title;
                $Series->show_time = $request->show_time;
                $Series->show_day = $request->show_day;
                $Series->description = $request->description;
                $Series->save();

                return redirect('seriesList')->with('success' , 'Edited Booking Successfully ');

            }else{

                if ($request->hasFile('thumbnail')){
                    $uploadedImage = $request->file('thumbnail');
                    $imageName = self::generate_random_string(). '.' . $uploadedImage->getClientOriginalExtension();
                    $destinationPath = public_path('/Thumbnails_series_file');
                    $uploadedImage->move($destinationPath, $imageName);
                    $uploadedImage->imagePath = $destinationPath . $imageName;

                }

                $arr = [
                    'title' => $request->title,
                    'thumbnail' => $imageName,
                    'show_time'=>$request->show_time,
                    'show_day'=>$request->show_day,
                    'description'=>$request->description
                ];

                Series::create($arr);


                return redirect('seriesList')->with('success' , 'Added Series Successfully ');
            }

        }

    }

    public function viewEditSeries($id){
        $data = Series::where('id' , $id)->first();
        return view('Admin.addSeries' , ['data'=>$data]);
    }

    public function deleteSeries($id){
        Series::where('id' , $id)->delete();
        Episodes::where('series_id' , $id)->delete();
        return redirect('seriesList')->with('success' , 'Deleted Series Successfully ');
    }




    public function viewAddEpisode(){
        $series = Series::get();
        return view('Admin.addEpisode' , ['series'=>$series]);
    }


    public function AddEpisode(Request $request){

        $validator = Validator::make($request->all(),[
            'title' => 'required|min:3|max:125',
            'duration' => 'required',
            'series'=>'required',
            'airing_time'=>'required',
            'airing_day'=>'required',
            'description'=>'required'
        ]);

        if ($validator->fails()){
            $error_messages = implode(',',$validator->messages()->all());
            return back()->with('error', $error_messages);
        }else{

            if($request->id){
                $Episodes = Episodes::find($request->id);

                if ($request->hasFile('thumbnail')){
                    $uploadedImage = $request->file('thumbnail');
                    $imageName = self::generate_random_string(). '.' . $uploadedImage->getClientOriginalExtension();
                    $destinationPath = public_path('/Thumbnails_series_file');
                    $uploadedImage->move($destinationPath, $imageName);
                    $uploadedImage->imagePath = $destinationPath . $imageName;

                    $Episodes->thumbnail = $imageName;
                }

                if ($request->hasFile('video_content')){
                    $uploadedVideo = $request->file('video_content');
                    $videoName = self::generate_random_string(). '.' . $uploadedVideo->getClientOriginalExtension();
                    $destinationPath = public_path('/Thumbnails_series_file/Video');
                    $uploadedVideo->move($destinationPath, $videoName);
                    $uploadedVideo->imagePath = $destinationPath . $videoName;


                    $Episodes->video_content = $videoName;
                }

                $Episodes->series_id = $request->series;
                $Episodes->title = $request->title;
                $Episodes->duration = $request->duration;
                $Episodes->airing_day = $request->airing_day;
                $Episodes->airing_time = $request->airing_time;
                $Episodes->description = $request->description;
                $Episodes->save();

                return redirect('episodesList')->with('success' , 'Edited Episodes Successfully ');

            }else{

                if ($request->hasFile('thumbnail')){
                    $uploadedImage = $request->file('thumbnail');
                    $imageName = self::generate_random_string(). '.' . $uploadedImage->getClientOriginalExtension();
                    $destinationPath = public_path('/Thumbnails_series_file');
                    $uploadedImage->move($destinationPath, $imageName);
                    $uploadedImage->imagePath = $destinationPath . $imageName;

                }

                if ($request->hasFile('video_content')){
                    $uploadedVideo = $request->file('video_content');
                    $videoName = self::generate_random_string(). '.' . $uploadedVideo->getClientOriginalExtension();
                    $destinationPath = public_path('/Thumbnails_series_file/Video');
                    $uploadedVideo->move($destinationPath, $videoName);
                    $uploadedVideo->imagePath = $destinationPath . $videoName;

                }

                $arr = [
                    'series_id'=>$request->series,
                    'title' => $request->title,
                    'duration'=>$request->duration,
                    'thumbnail' => $imageName,
                    'video_content'=>$videoName,
                    'airing_day'=>$request->airing_day,
                    'airing_time'=>$request->airing_time,
                    'description'=>$request->description
                ];

                Episodes::create($arr);


                return redirect('episodesList')->with('success' , 'Added Episodes  Successfully ');
            }

        }
    }

    public function viewEditEpisodes($id){
        $series = Series::get();
        $data = Episodes::where('id' , $id)->first();
        return view('Admin.addEpisode' , ['data'=>$data ,'series'=>$series]);
    }

    public function deleteEpisodes($id){
        Episodes::where('id' , $id)->delete();
        return redirect('episodesList')->with('success' , 'Deleted Episodes Successfully ');
    }

















    public function viewLogin(){
        return view('Admin.login');
    }

    public function generate_random_string()
    {
        return rand(11111111,99999999);
    }
}

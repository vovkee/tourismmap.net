<?php


class ProfileController extends BaseController
{
    public function getProfile()
    {
        return View::make('profile.index');
    }

    public function editProfile()
    {
        return View::make('profile.edit');
    }

    public function updateProfile()
    {
        $file = Input::file('pic');
        $profile = Profile::Where('user_id', '=', Auth::user()->id)->get();
        $profile->about = Input::get('about');

        $fileName = Str::random(8);
        $extension = $file->getClientOriginalExtension();
        $name = $fileName.'.'.$extension;

        $profile->profilePic = 'http://tourismmap.net/img/'.$name;
        $profile->save();

        $file->move('img/', $name);

        return $profile->profilePic;
    }

//    public function index()
//    {
//        $user = Auth::user();
//        return View::make('profile.index')->with(compact('user'));
//    }
//
//    public function getProfile()
//    {
//
//    }
//
//    public function edit()
//    {
//        $user = Auth::user();
//        $method = Request::method();
//        if (Request::isMethod('post')) {
//            $data = Input::all();
//            //var_dump($data);die();
//            if($data['name']){
//
//            }
//            if(Input::hasFile('avatar')){
//                $file = Input::file('avatar');
//                $destinationPath = 'uploads';
//                $extension = Input::file('avatar')->getClientOriginalExtension();
//                $filename = str_random(12).'.'.$extension;
//                 $upload_success = Input::file('avatar')->move($destinationPath, $filename);
//            }
//            return View::make('profile.edit')->with(compact('user'));
//        }
//
//
//        return View::make('profile.edit')->with(compact('user'));
//    }
}
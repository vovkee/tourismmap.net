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
        var_dump(Input::all());
        $profile = Profile::Where('user_id', '=', Auth::user()->id)->firstOrFail();
        $profile->about = Input::get('about');
        $user = User::find(Auth::user()->id);
        $user->name = Input::get('name');
        $user->surname = Input::get('surname');
        $user->email = Input::get('email');
        $user->birth_date = Input::get('birth');
        $file = Input::file('pic');
        if($file){
            $fileName = md5_file($file->getRealPath());
            $extension = $file->getClientOriginalExtension();
            $name = $fileName.'.'.$extension;

            $profile->profilePic = '/img/'.$name;
            $file->move(public_path()."/img", $name);
            $profile->save();
        }
        $user->save();

        return Redirect::to('profile'); //@todo FLASHBAG message
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
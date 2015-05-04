<?php
/**
 * Created by PhpStorm.
 * User: Home
 * Date: 2/2/2015
 * Time: 4:11 PM
 */

class UserController extends BaseController
{
    public function createUser()
    {
        $data = Input::all();
        $rules = array(
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:2',
            'password_confirmation' => 'required|same:password'
        );
        $validator = Validator::make($data, $rules);

        if ($validator->fails())
        {
            return Redirect::to('/signup')->withErrors($validator)->withInput();
        }
        else
        {
            $user = User::createUser($data);
            if($user->save())
            {
                $profile = new Profile;
                $profile->user_id = $user->id;
                $profile->about = '';
                $profile->save();
                Auth::login($user);
                return Redirect::route('userMainPage')->with('success', 'Successful registration');
            }
            //if database connection fails
            else
            {
                return Redirect::to('/signup')->with('fail', 'An error occured');
            }
        }
    }
    public function mainPage()
    {
        return View::make('inner.usermainpage');
    }
    public function logout()
    {
        Auth::logout();
        return Redirect::route('auth');
    }

    public function loginUser()
    {
        $data = Input::all();
        //$remember = (Input::has('remember'))? true : false;
        if (Auth::attempt(array('email' => $data['email'], 'password' => $data['password'])))//, $remember))
        {
            return Redirect::intended('/main');
        }
        //authentification failed
        return Redirect::route('auth')->with('fail', 'Your email/password combination was incorrect.')->withInput();
    }

}
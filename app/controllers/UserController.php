<?php

use TJ\Repositories\Contracts\UserRepositoryInterface as Users;
use TJ\Repositories\UserRepository;

class UserController extends Controller
{
    public function __construct(Users $users)
    {
      $this->users = $users;
      //parent::__construct();
    }
    
    /* 
     * Registration method
     */
    public function register()
    {
        if ($this->isPostRequest()) {
           
            $validator = $this->getRegistrationValidator();

            if ($validator->passes()) {
                $user = new User;
                $user->username = Input::get('username');
                $user->email = Input::get('email');
                $user->password = Hash::make(Input::get('password'));
                $user->first_name = Input::get('first_name');
                $user->surname = Input::get('surname');
                $user->user_role_id = Input::get('user_role_id');
                $user->save();
                
                return Redirect::route("user/login")->with('message', 'Thanks for registering!');
            } 
            else {
                return Redirect::route("user/register")
                  ->withInput()
                  ->withErrors($validator);
            }
         }
        
        return View::make("user/register");
    }
    
    public function login()
    { 
        if ($this->isPostRequest()) {
           
            $validator = $this->getLoginValidator();

            if ($validator->passes()) {
              $credentials = $this->getLoginCredentials();

            if (Auth::attempt($credentials)) {
              return Redirect::route("user/profile");
            }

            return Redirect::route("user/login")->withErrors([
              "password" => ["Invalid Credentials."]
            ]);
            } 
            else {
            return Redirect::route("user/login")
              ->withInput()
              ->withErrors($validator);
            }
         }
        return View::make("user/login");
    }

  protected function isPostRequest()
  {    
      return Input::server("REQUEST_METHOD") == "POST";
  }

  protected function getRegistrationValidator()
  {
    return Validator::make(Input::all(), [
        "username" => "required|alpha_num|between:4,10",
        "email" => "required|email|unique:users",
        "password" => "required|alpha_num|between:6,12",
        "first_name" => "required|min:2",
        "surname" => "required|min:2"
    ]);
  }
  
  protected function getLoginValidator()
  {
    return Validator::make(Input::all(), [
        "username" => "required",
        "password" => "required"
    ]);
  }
  
  protected function getLoginCredentials()
  {
    return [
      "username" => Input::get("username"),
      "password" => Input::get("password")
    ];
  }

  public function profile()
  {
    return View::make("user/profile");
  }

  public function request()
  {
    if ($this->isPostRequest()) {
      $response = $this->getPasswordRemindResponse();

      if ($this->isInvalidUser($response)) {
        return Redirect::route("user/request")
          ->withInput()
          ->with("error", Lang::get($response));
      }

      return Redirect::route("user/request")
        ->with("status", Lang::get($response));
    }

    return View::make("user/request");
  }

  protected function getPasswordRemindResponse()
  {
    return Password::remind(Input::only("email"));
  }

  protected function isInvalidUser($response)
  {
    return $response === Password::INVALID_USER;
  }

  public function reset($token)
  {
    if ($this->isPostRequest()) {
      $credentials = Input::only(
        "email",
        "password",
        "password_confirmation"
      ) + compact("token");

      $response = $this->resetPassword($credentials);

      if ($response === Password::PASSWORD_RESET) {
        return Redirect::route("user/profile");
      }

      return Redirect::route("user/login")
        ->withInput()
        ->with("error", Lang::get($response));
    }

    return View::make("user/reset", compact("token"));
  }

  protected function resetPassword($credentials)
  {
    return Password::reset($credentials, function($user, $pass) {
      $user->password = Hash::make($pass);
      $user->save();
    });
  }

  public function logout()
  {
    Auth::logout();

    return Redirect::route("user/login");
  }
}

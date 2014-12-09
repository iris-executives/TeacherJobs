<?php

use TJ\Repositories\Contracts\UserRepositoryInterface as Users;
use TJ\Repositories\UserRepository;

class UserController extends Controller
{
    public function __construct(UserRepository $users)
    {
      $this->users = $users;
    }

    public function register()
    {  
        $validator = $this->getRegistrationValidator();

        if ($validator->passes()) {

            $username = Input::get('username');
            $email = Input::get('email');
            $pass = Input::get('password');
            $password = Hash::make($pass);
            $first_name = Input::get('first_name');
            $surname = Input::get('surname');
            $user_role_id = Input::get('user_role_id');

            $this->users->create($username, $email, $password, $first_name, $surname, $user_role_id);

            return Redirect::route("user/login")->with('message', 'Thanks for registering!');
        } 
        else {
            return Redirect::route("user/register")
              ->withInput()
              ->withErrors($validator);
        }
    }
    
    public function login()
    { 
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

    public function profileView()
    {
      return View::make("user/profile");
    }
    
    public function loginView()
    {
      return View::make("user/login");
    }
    
    public function registerView()
    {
      return View::make("user/register");
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

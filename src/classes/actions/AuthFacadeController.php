<?php
namespace MiniOrange\Classes\Actions;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Auth\User;
use MiniOrange\Helper\Lib\AESEncryption;

class AuthFacadeController extends Controller
{

    use AuthenticatesUsers;

    protected $redirectTo = '/start';

    public $mailid = '';

    public function __construct()
    {
        $this->middleware('Illuminate\Session\Middleware\StartSession');
        $this->middleware('web');
    }

    public function start()
    {
        $request = request();
        $this->middleware('Illuminate\Session\Middleware\StartSession');
        $this->signin($request);
    }

    public function signin(Request $request)
    {
        $encrypted_mail = $request->email;
        $this->mailid = AESEncryption::decrypt_data($encrypted_mail, "secret");
        if ($this->mailid == '')
            return redirect('/home');
        $creds = array(
            '_token' => csrf_token(),
            'remember' => 'on',
            'email' => $this->mailid
        );
        $request->merge($creds);
        $this->login($request);
        return redirect('/home');
    }

    public function login(Request $request)
    {

        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }

    protected function credentials(Request $request)
    {
        return $request->only($this->username());
    }

    protected function attemptLogin(Request $request)
    {
        /*
         * return $this->guard()->attempt(
         * $this->credentials($request), $request->filled('remember')
         * );
         */
        $user = User::where('email', $request['email'])->first();
        $id = $user->id;
        return $this->guard()->loginUsingId($id, True);
    }
    public function logout(Request $request)
    {
        //echo "here";exit;
        $this->guard()->logout();
        
        $request->session()->invalidate();
        
        return $this->loggedOut($request) ?: redirect('/');
    }
}


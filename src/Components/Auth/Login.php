<?php

namespace TallUi\TallUi\Components\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\App;
use TallUi\TallUi\Traits\Auth\LetWait;

class Login extends Component
{

    public $email;
    public $password;

    use LetWait;

    public function submitLogin()
    {

        if (Auth::attempt(array('email' => $this->email, 'password' => $this->password))) {

            session()->forget('login.attempts');
            session()->regenerate();
            return redirect()->intended('dashboard');

        } else {

            $attempts = session()->get('login.attempts', 0) + 1;
            session()->put('login.attempts', $attempts);

            $this->letWait($attempts);

            session()->flash('error', trans('tallui::auth.login_error'));

        }

    }

    public function render()
    {
        return view('tallui::auth.login');
    }
}

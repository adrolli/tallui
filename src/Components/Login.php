<?php

namespace TallUi\TallUi\Components;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use TallUi\TallUi\Traits\Auth\LetWait;

class Login extends Component
{

    public $email;
    public $password;

    use LetWait;

    public function submitLogin()
    {
        ray('My first ray call');

        if (Auth::attempt(array('email' => $this->email, 'password' => $this->password))) {

            session()->forget('login.attempts');
            session()->regenerate();
            return redirect()->intended('dashboard');

        } else {

            $attempts = session()->get('login.attempts', 0) + 1;
            session()->put('login.attempts', $attempts);

            $this->letWait($attempts);

            session()->flash('error', 'User and password do not match.');

        }

    }

    public function render()
    {
        return view('tallui::auth.login');
    }
}

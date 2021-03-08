<?php

namespace TallUi\TallUi\Components;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{

    public $email;
    public $password;

    public function submitForm()
    {

        if (Auth::attempt(array('email' => $this->email, 'password' => $this->password))) {

            session()->forget('login.attempts');
            session()->regenerate();
            return redirect()->intended('dashboard');

        } else {

            $attempts = session()->get('login.attempts', 0);
            $attempts = $attempts + 1;
            session()->put('login.attempts', $attempts);

            $this->letWait($attempts);

            session()->flash('error', 'User and password do not match.');

        }

    }

    public function letWait($attempts)
    {

        if ($attempts % 2 == 0 && $attempts != 0) {

            session()->flash('letwait', '4');

        }

    }

    public function render()
    {
        return view('tallui::auth.login');
    }
}

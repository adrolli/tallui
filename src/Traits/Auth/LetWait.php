<?php
 
namespace TallUi\TallUi\Traits\Auth;

trait LetWait {
        
    public function letWait($attempts)
    {

        $login_wait_after_attempts = config('tallui.login_wait_after_attempts', 10);
        $login_wait_time = config('tallui.login_wait_time', 60);
        
        if ($attempts % $login_wait_after_attempts == 0 && $attempts != 0) {

            session()->flash('letwait', $login_wait_time);

        }

    }

}
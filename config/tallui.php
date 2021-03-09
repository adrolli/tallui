<?php

return [
 
     /*
     * After how many login attempts should we force the user to wait for 'login_wait_time'.
     */
     
    'login_wait_after_attempts' => env('TALLUI_LOGIN_WAIT_AFTER_ATTEMPTS', 10),

     /*
     * For how long should we force the user to wait, if he failed to login for 'login_wait_after_attempts' time.
     */
     
    'login_wait_time' => env('TALLUI_LOGIN_WAIT_TIME', 60),
    
];
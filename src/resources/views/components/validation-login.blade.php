@if (session()->has('error'))

    @if (session('login.attempts')  == 0)
    <div class="animate__animated animate__headShake">

    @elseif (session('login.attempts') == 3)
    <div class="animate__animated animate__shakeX">

    @elseif (session('login.attempts') == 4)
    <div class="animate__animated animate__headShake animate__repeat-3">

    @else
    <div class="animate__animated animate__fadeIn">

    @endif

        <div class="p-4 mb-4 rounded-md bg-red-50">
            <div class="text-sm font-medium text-red-800">
                {{ session('error') }}

                @if (session('letwait'))

                    <div x-data="{ countdown: {{ session('letwait') }} }"
                         x-init="setInterval(function(){
                                    countdown--;
                                    if (countdown == -1) {
                                        for(var i = 0; i < elems.length; i++) {
                                            elems[i].disabled = false;
                                        }
                                    }
                                }, 1000);

                                var elems = document.getElementsByClassName('disableme');
                                for(var i = 0; i < elems.length; i++) {
                                    elems[i].disabled = true;
                                }
                                ">

                      <template x-if="countdown > 0">
                        <div>
                            Please wait <span x-text="countdown"></span> seconds until your next retry.
                        </div>
                     </template>

                     <template x-if="countdown === 0">
                            You may retry now.
                    </template>

                   </div>

                @endif

            </div>
        </div>

    </div>

@endif

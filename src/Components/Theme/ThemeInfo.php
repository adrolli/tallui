<?php

namespace TallUi\TallUi\Components\Theme;

use Livewire\Component;

class ThemeInfo extends Component
{

    public function readTailwindConf()
    {
        $tailwind = require app_path() . "/../tailwind.config.php";

        foreach ($tailwind->theme->colors AS $color => $colorset)
        {
            if (is_string($colorset))
            {
                $set = $color;
                echo $color . " is " . $colorset . "<br>";
            } else {

                foreach ($colorset AS $color => $value)
                {
                    echo $set . " " . $color . " and " . $value . "<br>";
                }
            }
        }


    }

    public function render()
    {
        $tailwind = require app_path() . "/../tailwind.config.php";

        //$twcolors = $this->readTailwindConf();

        return view('tallui::theme.theme-info')->with('tailwind', $tailwind);
    }
}

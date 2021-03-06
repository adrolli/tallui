<?php

namespace TallUi\TallUi;

use Livewire\Component;

class TestComponent extends Component
{

    public $label;

    public function test($label)
    {

        $label = "TallUI";
        return $label;

    }
}
<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PlanCard extends Component
{
    public $plan;

    public function __construct($plan)
    {
        $this->plan = $plan;
    }

    public function render()
    {
        return view('components.plan-card');
    }
}

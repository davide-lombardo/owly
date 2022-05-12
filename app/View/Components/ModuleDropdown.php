<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Module;

class ModuleDropdown extends Component
{


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.module-dropdown', [
            'modules' => Module::all(),
            'currentModule' => Module::firstWhere('name', request('module'))
        ]);
    }
}

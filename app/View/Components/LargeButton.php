<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LargeButton extends Component
{
    public string $variant;
    
    /**
     * Create a new component instance.
     */
    public function __construct(string $variant = 'standard')
    {
        $this->variant = $variant;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.large-button');
    }

    public function buttonClass(): string
    {
        $buttonClass =[
            'standard' => 'bg-white text-black rounded border border-black mt-4 p-4',
            'invert' => 'bg-black text-white rounded border border-black mt-4 p-4'
        ];

        return $buttonClass[$this->variant] ?? '';
    }
}

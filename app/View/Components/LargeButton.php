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
        $alternatives = ['standard', 'invert'];
        if (!in_array($variant, $alternatives)) {
            throw new \InvalidArgumentException("Invalid variant: {$variant}");
        }
        $this->variant = $variant;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.large-button');
    }

    /**
     * Get the CSS classes for the button based on the variant.
     *
     * @return string
     */
    public function buttonClass(): string
    {
        $buttonClasses = [
            'standard' => 'bg-white text-black rounded border border-black mt-4 p-4',
            'invert' => 'bg-black text-white rounded border border-black mt-4 p-4'
        ];

        return $buttonClasses[$this->variant] ?? '';
    }
}
?>

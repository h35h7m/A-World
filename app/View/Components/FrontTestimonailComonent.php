<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Testimonial;

class FrontTestimonailComonent extends Component
{
    public $testimonials;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->testimonials = Testimonial::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.front-testimonail-comonent');
    }
}

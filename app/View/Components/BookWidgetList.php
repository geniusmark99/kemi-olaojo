<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BookWidgetList extends Component
{
    public array $books;

    public function __construct(array $books)
    {
        $this->books = $books;
    }


    public function render(): View|Closure|string
    {
        return view('components.book-widget-list');
    }
}

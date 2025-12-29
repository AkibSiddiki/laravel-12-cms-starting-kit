<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PageHeader extends Component
{
    public string $pretitle;

    public string $title;

    public function __construct(
        string $pretitle = 'Overview',
        string $title = 'Dashboard',

    ) {
        $this->pretitle = $pretitle;
        $this->title = $title;
    }

    public function render()
    {
        return view('back.layout.components.page-header');
    }
}

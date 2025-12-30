<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Footer extends Component
{
    public string $company;

    public string $url;

    public string $version;

    public int $year;

    public function __construct(
        string $company = 'companyname.com',
        string $url = 'https://companyname.com',
        string $version = 'v1.0.07',
        ?int $year = null
    ) {
        $this->company = $company;
        $this->url = $url;
        $this->version = $version;
        $this->year = $year ?? now()->year;
    }

    public function render()
    {
        return view('back.layout.components.footer');
    }
}

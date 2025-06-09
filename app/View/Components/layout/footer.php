<?php

namespace App\View\Components\Layout;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Setting;

class Footer extends Component
{
    public $settings;

    public function __construct()
    {
        $this->settings = Setting::whereIn('key', [
            'contact_email',
            'contact_phone',
            'contact_address',
            'contact_link',
            'social_fac',
            'social_lin',
        ])->get()->keyBy('key');
        

    }

    public function render(): View|Closure|string
    {
        return view('components.layout.footer', [
            'settings' => $this->settings
        ]);
    }
}
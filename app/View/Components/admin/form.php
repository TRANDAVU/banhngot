<?php

namespace App\View\Components\admin;

use Illuminate\View\Component;

class form extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public $user;
    public function __construct($title,$user)
    {
        $this->title=$title;
        $this->user=$user;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.form');
    }
}

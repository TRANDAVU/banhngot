<?php

namespace App\View\Components\admin;

use Illuminate\View\Component;

class table extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $name;
    public $email;
    public $address;
    public $sdt;
    public $level;
    public $title;
    public $user;
    
    public function __construct($name,$email,$address,$sdt,$level,$title,$user)
    {
        $this->name=$name;
        $this->email=$email;
        $this->address=$address;
        $this->sdt=$sdt;
        $this->level=$level;
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
        return view('components.admin.table');
    }
}

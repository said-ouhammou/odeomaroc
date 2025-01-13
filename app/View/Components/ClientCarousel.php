<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ClientCarousel extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $clientLogos = [
            ["src"=>"/images/clients/company-1.png","alt"=>""],
            ["src"=>"/images/clients/company-2.png","alt"=>""],
            ["src"=>"/images/clients/company-3.png","alt"=>""],
            ["src"=>"/images/clients/company-4.png","alt"=>""],
            ["src"=>"/images/clients/company-49.png","alt"=>""],
            ["src"=>"/images/clients/company-6.png","alt"=>""],
            ["src"=>"/images/clients/company-80.png","alt"=>""],
            ["src"=>"/images/clients/company-45.png","alt"=>""],
            ["src"=>"/images/clients/company-7.png","alt"=>""],
            ["src"=>"/images/clients/company-8.png","alt"=>""],
            ["src"=>"/images/clients/company-64.png","alt"=>""],
            ["src"=>"/images/clients/company-73.png","alt"=>""],
            ["src"=>"/images/clients/company-9.png","alt"=>""],
            ["src"=>"/images/clients/company-71.png","alt"=>""],
            ["src"=>"/images/clients/company-10.png","alt"=>""],
            ["src"=>"/images/clients/company-13.png","alt"=>""],
            ["src"=>"/images/clients/company-85.png","alt"=>""],
            ["src"=>"/images/clients/company-89.png","alt"=>""],
            ["src"=>"/images/clients/company-87.png","alt"=>""],
            ["src"=>"/images/clients/company-14.png","alt"=>""],
            ["src"=>"/images/clients/company-15.png","alt"=>""],
            ["src"=>"/images/clients/company-16.png","alt"=>""],
            ["src"=>"/images/clients/company-17.png","alt"=>""],
            ["src"=>"/images/clients/company-18.png","alt"=>""],
            ["src"=>"/images/clients/company-19.png","alt"=>""],
            ["src"=>"/images/clients/company-20.png","alt"=>""],
            ["src"=>"/images/clients/company-21.png","alt"=>""],
            ["src"=>"/images/clients/company-23.png","alt"=>""],
            ["src"=>"/images/clients/company-12.png","alt"=>""],
            ["src"=>"/images/clients/company-25.png","alt"=>""],
            ["src"=>"/images/clients/company-26.png","alt"=>""],
            ["src"=>"/images/clients/company-27.png","alt"=>""],
            ["src"=>"/images/clients/company-28.png","alt"=>""],
            ["src"=>"/images/clients/company-29.png","alt"=>""],
            ["src"=>"/images/clients/company-30.png","alt"=>""],
            ["src"=>"/images/clients/company-31.png","alt"=>""],
            ["src"=>"/images/clients/company-32.png","alt"=>""],
            ["src"=>"/images/clients/company-34.png","alt"=>""],
            ["src"=>"/images/clients/company-35.png","alt"=>""],
            ["src"=>"/images/clients/company-36.png","alt"=>""],
            ["src"=>"/images/clients/company-38.png","alt"=>""],
            ["src"=>"/images/clients/company-40.png","alt"=>""],
            ["src"=>"/images/clients/company-41.png","alt"=>""],
            ["src"=>"/images/clients/company-42.png","alt"=>""],
            ["src"=>"/images/clients/company-43.png","alt"=>""],
            ["src"=>"/images/clients/company-44.png","alt"=>""],
            ["src"=>"/images/clients/company-47.png","alt"=>""],
            ["src"=>"/images/clients/company-48.png","alt"=>""],
            ["src"=>"/images/clients/company-50.png","alt"=>""],
            ["src"=>"/images/clients/company-51.png","alt"=>""],
            ["src"=>"/images/clients/company-52.png","alt"=>""],
            ["src"=>"/images/clients/company-53.png","alt"=>""],
            ["src"=>"/images/clients/company-54.png","alt"=>""],
            ["src"=>"/images/clients/company-55.png","alt"=>""],
            ["src"=>"/images/clients/company-56.png","alt"=>""],
            ["src"=>"/images/clients/company-57.png","alt"=>""],
            ["src"=>"/images/clients/company-58.png","alt"=>""],
            ["src"=>"/images/clients/company-59.png","alt"=>""],
            ["src"=>"/images/clients/company-60.png","alt"=>""],
            ["src"=>"/images/clients/company-61.png","alt"=>""],
            ["src"=>"/images/clients/company-62.png","alt"=>""],
            ["src"=>"/images/clients/company-63.png","alt"=>""],
            ["src"=>"/images/clients/company-65.png","alt"=>""],
            ["src"=>"/images/clients/company-66.png","alt"=>""],
            
            ["src"=>"/images/clients/company-68.png","alt"=>""],
            ["src"=>"/images/clients/company-69.png","alt"=>""],
            ["src"=>"/images/clients/company-70.png","alt"=>""],
            ["src"=>"/images/clients/company-72.png","alt"=>""],
            ["src"=>"/images/clients/company-74.png","alt"=>""],
            ["src"=>"/images/clients/company-75.png","alt"=>""],
            ["src"=>"/images/clients/company-76.png","alt"=>""],
            ["src"=>"/images/clients/company-77.png","alt"=>""],
            ["src"=>"/images/clients/company-78.png","alt"=>""],
            
            ["src"=>"/images/clients/company-79.png","alt"=>""],
            ["src"=>"/images/clients/company-81.png","alt"=>""],
            ["src"=>"/images/clients/company-83.png","alt"=>""],
            ["src"=>"/images/clients/company-84.png","alt"=>""],
            ["src"=>"/images/clients/company-86.png","alt"=>""],
            ["src"=>"/images/clients/company-88.png","alt"=>""],
            ["src"=>"/images/clients/company-90.png","alt"=>""],
            ["src"=>"/images/clients/company-91.png","alt"=>""],
            ["src"=>"/images/clients/company-46.png","alt"=>""],
            ["src"=>"/images/clients/company-39.png","alt"=>""],
            ["src"=>"/images/clients/company-33.png","alt"=>""],
            ["src"=>"/images/clients/company-37.png","alt"=>""],
            ["src"=>"/images/clients/company-24.png","alt"=>""],
            ["src"=>"/images/clients/company-5.png","alt"=>""],
            ["src"=>"/images/clients/company-22.png","alt"=>""],
        ];
        return view('components.client-carousel',['clientLogos'=>$clientLogos]);
    }
}

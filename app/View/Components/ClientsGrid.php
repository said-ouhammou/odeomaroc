<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ClientsGrid extends Component
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
            [
                "src"=>"/images/clients/company-1.png",
                "alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/lioft.jpg"
            ],
            [
                "src"=>"/images/clients/company-2.png",
                "alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/turc.jpg"
            ],
            [
                "src"=>"/images/clients/company-3.png",
                "alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/lao.jpg"
            ],
            [
                "src"=>"/images/clients/company-4.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/afri.png"
            ],
            [
                "src"=>"/images/clients/company-6.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/soukar.jpg"
            ],
            [
                "src"=>"/images/clients/company-71.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/.jpg"
            ],
            [
                "src"=>"/images/clients/company-7.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/ladresse.jpg"
            ],
            [
                "src"=>"/images/clients/company-85.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/.jpg"
            ],
            [
                "src"=>"/images/clients/company-9.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/mammia.jpg"
            ],
            [
                "src"=>"/images/clients/company-87.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/.jpg"
            ],
            [
                "src"=>"/images/clients/company-64.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/.jpg"
            ],
            [
                "src"=>"/images/clients/company-73.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/.jpg"
            ],
            [
                "src"=>"/images/clients/company-66.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/.jpg"
            ],
            [
                "src"=>"/images/clients/company-8.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/huqqa.jpg"
            ],
            [
                "src"=>"/images/clients/company-45.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/.jpg"
            ],
            [
                "src"=>"/images/clients/company-49.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/.jpg"
            ],
            [
                "src"=>"/images/clients/company-13.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/86.jpg"
            ],
            [
                "src"=>"/images/clients/company-12.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/pho.jpg"
            ],
            [
                "src"=>"/images/clients/company-14.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/masqtapas.avif"
            ],
            [
                "src"=>"/images/clients/company-15.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/opaname.jpg"
            ],
            [
                "src"=>"/images/clients/company-16.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/opaname.jpg"
            ],
            [
                "src"=>"/images/clients/company-17.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/opso.jpg"
            ],
            [
                "src"=>"/images/clients/company-18.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/lutus.jpg"
            ],
            [
                "src"=>"/images/clients/company-19.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/vegas.jpg"
            ],
            [
                "src"=>"/images/clients/company-80.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/.jpg"
            ],
            [
                "src"=>"/images/clients/company-89.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/.jpg"
            ],
            [
                "src"=>"/images/clients/company-90.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/.jpg"
            ],
            [
                "src"=>"/images/clients/company-91.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/.jpg"
            ],
            [
                "src"=>"/images/clients/company-20.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/palais.jpg"
            ],
            [
                "src"=>"/images/clients/company-21.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/symphonie.jpg"
            ],
            
            [
                "src"=>"/images/clients/company-23.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/mix.jpg"
            ],
            [
                "src"=>"/images/clients/company-25.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/arroz.webp"
            ],
            [
                "src"=>"/images/clients/company-26.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/latelier.jpg"
            ],
            [
                "src"=>"/images/clients/company-27.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/berber.jpg"
            ],
            [
                "src"=>"/images/clients/company-28.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/boston.jpg"
            ],
            [
                "src"=>"/images/clients/company-29.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/clients/company-29.png"
            ],
            [
                "src"=>"/images/clients/company-30.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/.jpg"
            ],
            [
                "src"=>"/images/clients/company-31.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/.jpg"
            ],
            [
                "src"=>"/images/clients/company-32.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/.jpg"
            ],
            [
                "src"=>"/images/clients/company-34.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/.jpg"
            ],
            [
                "src"=>"/images/clients/company-35.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/.jpg"
            ],
            [
                "src"=>"/images/clients/company-36.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/.jpg"
            ],
            [
                "src"=>"/images/clients/company-38.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/.jpg"
            ],
            [
                "src"=>"/images/clients/company-40.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/.jpg"
            ],
            [
                "src"=>"/images/clients/company-41.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/.jpg"
            ],
            [
                "src"=>"/images/clients/company-42.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/.jpg"
            ],
            [
                "src"=>"/images/clients/company-43.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/.jpg"
            ],
            [
                "src"=>"/images/clients/company-44.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/.jpg"
            ],
            [
                "src"=>"/images/clients/company-47.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/.jpg"
            ],
            [
                "src"=>"/images/clients/company-48.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/.jpg"
            ],
            
            [
                "src"=>"/images/clients/company-50.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/.jpg"
            ],
            [
                "src"=>"/images/clients/company-51.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/.jpg"
            ],
            [
                "src"=>"/images/clients/company-52.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/.jpg"
            ],
            [
                "src"=>"/images/clients/company-53.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/.jpg"
            ],
            [
                "src"=>"/images/clients/company-54.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/.jpg"
            ],
            [
                "src"=>"/images/clients/company-55.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/.jpg"
            ],
            [
                "src"=>"/images/clients/company-56.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/.jpg"
            ],
            [
                "src"=>"/images/clients/company-57.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/.jpg"
            ],
            [
                "src"=>"/images/clients/company-58.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/.jpg"
            ],
            [
                "src"=>"/images/clients/company-59.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/.jpg"
            ],
            [
                "src"=>"/images/clients/company-60.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/.jpg"
            ],
            [
                "src"=>"/images/clients/company-61.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/.jpg"
            ],
            [
                "src"=>"/images/clients/company-62.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/.jpg"
            ],
            [
                "src"=>"/images/clients/company-63.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/.jpg"
            ],
            [
                "src"=>"/images/clients/company-65.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/.jpg"
            ],
            [
                "src"=>"/images/clients/company-69.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/.jpg"
            ],
            [
                "src"=>"/images/clients/company-70.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/.jpg"
            ],
            [
                "src"=>"/images/clients/company-72.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/.jpg"
            ],
            [
                "src"=>"/images/clients/company-74.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/.jpg"
            ],
            [
                "src"=>"/images/clients/company-75.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/.jpg"
            ],
            [
                "src"=>"/images/clients/company-76.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/.jpg"
            ],
            [
                "src"=>"/images/clients/company-77.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/.jpg"
            ],
            [
                "src"=>"/images/clients/company-78.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/.jpg"
            ],
            [
                "src"=>"/images/clients/company-79.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/.jpg"
            ],
            [
                "src"=>"/images/clients/company-81.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/.jpg"
            ],
            [
                "src"=>"/images/clients/company-5.png","alt"=>""
            ],
            [
                "src"=>"/images/clients/company-82.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/.jpg"
            ],
            [
                "src"=>"/images/clients/company-83.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/.jpg"
            ],
            [
                "src"=>"/images/clients/company-84.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/.jpg"
            ],
            
            [
                "src"=>"/images/clients/company-86.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/.jpg"
            ],
            [
                "src"=>"/images/clients/company-88.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/.jpg"
            ],
            [
                "src"=>"/images/clients/company-33.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/.jpg"
            ],
            [
                "src"=>"/images/clients/company-22.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/bubbles.jpg"
            ],
            [
                "src"=>"/images/clients/company-37.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/.jpg"
            ],
            [
                "src"=>"/images/clients/company-39.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/.jpg"
            ],
            [
                "src"=>"/images/clients/company-46.png","alt"=>"",
                "rating" => 5,
                "projectDetails" => "Implementation of a complete POS solution for retail operations.",
                "shortReview" => "Odeo helped streamline our retail operations.",
                "fullReview" => "We partnered with Odeo to implement a POS solution, and the results were outstanding. Transactions are now faster, and stock management is a breeze. Highly recommend them!",
                "repAvatar" => "/images/ex/.jpg"
            ],
            
        ];

        return view('components.clients-grid',['clientLogos'=>$clientLogos]);
    }
}

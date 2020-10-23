<?php

namespace App\Components;

class Carousel
{

    static public function Carousel()
    {
        var_dump( json_decode('[{
            "A": "b",
            "C": "d"
        }, {
            "A": "b",
            "C": "d"
        }]'));
    }
}

/*
<!-- Carousel -->
<div id="homeCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#homeCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#homeCarousel" data-slide-to="1"></li>
        <li data-target="#homeCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block" src="https://i.pinimg.com/originals/fe/fb/32/fefb324f0f3be423595e19d1736930d6.jpg" alt="Slide 1">
            <div class="carousel-caption d-md-block">
                <h5>11</h5>
                <p class="text-gray-500">a</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block" src="https://i.imgur.com/Cu8Cu.jpg" alt="Slide 2">
            <div class="carousel-caption d-md-block">
                <h5>2</h5>
                <p class="text-gray-500">b</p>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block" style="filter: brightness(0.65);" src="https://i.imgur.com/u3OEr.png" alt="Slide 3">
            <div class="carousel-caption d-md-block">
                <h5 class="text-white">3</h5>
                <p class="text-gray-500">c</p>
            </div>
        </div>
    </div>
    <hr class="carousel-progress-bar" />
    <a class="carousel-control-prev" href="#homeCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#homeCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>*/

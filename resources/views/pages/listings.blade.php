@extends('layouts.main')
@section('page-title', 'All Properties - Smith Realty')

@section('content')
    <div class="listings-page">
        <div class="listings-city">
            <img class="listings-city__img" src="https://www.davidsmalldesigns.com/wp-content/uploads/2020/01/gallery-modern-at-hart-01.jpg" alt="">
            <h1 class="listings-city__title">Fresno</h1>
        </div>
        <div class="listings-filter">
            <div class="listings-filter__wrapper">
                <div class="listings-filter__option">
                    Any Price <i class="fa-solid fa-caret-down"></i>
                </div>
                <div class="listings-filter__option">
                    All Beds <i class="fa-solid fa-caret-down"></i>
                </div>
                <div class="listings-filter__option">
                    HomeType <i class="fa-solid fa-caret-down"></i>
                </div>
                <div class="listings-filter__option">
                    More <i class="fa-solid fa-caret-down"></i>
                </div>
                <div class="listings-filter__button">
                    Save Search 
                </div>
            </div>
        </div>
        <div class="listings-properties">
            <div class="container">
                <div class="row">
                    @for ($i = 1; $i <= 12; $i++)
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <a href="/listing/3501-E-Rialto-Ave-Fresno-Ca-93727/1" class="listings-properties__item">
                            <img src="https://www.davidsmalldesigns.com/wp-content/uploads/2020/01/gallery-modern-at-hart-01.jpg" alt="">

                            <div class="listings-properties__saved ">
                                <i class="fa-solid fa-heart"></i>
                            </div>
                            <span class="listings-properties__item-price">$250,000</span>
                            <span class="listings-properties__item-details">
                                <i class="fa-solid fa-bed"></i> 4 <i class="fa-solid fa-bath"></i> 3 <i class="fa-solid fa-ruler"></i> 2500 SQFT
                            </span>
                            <span class="listings-properties__item-address">2455 Grant St,<br>
                            Fresno, CA 93726
                            </span>
                            <div class="listings-properties__item-line"></div>
                            <span class="listings-properties__item-owner">
                                Bryant Realty
                            </span>
                        </a>
                    </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.account')

@section('page-title', 'User Saved Listings - Smith Realty')

@section('page-bg', 'https://images.pexels.com/photos/1043458/pexels-photo-1043458.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"')

@section('content')

<div class="listings-properties">
        <div class="row">
            <div class="col-sm-12 col-lg-4 col-xl-4">
                <div class="listings-properties__item">
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
                </div>
            </div>
        </div>
</div>
@endsection
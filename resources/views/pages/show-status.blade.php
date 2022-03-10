@extends('layouts.account')

@section('page-title', 'Listing Request Status - Smith Realty')

@section('page-bg', 'https://images.pexels.com/photos/1043458/pexels-photo-1043458.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"')

@section('content')
    <div class="request-list">
        <h2>All Requests</h2>
            @for ($i = 0; $i < 10; $i++)
            <div class="request-list__wrapper">
                <div>
                    <h3>3501 E Riato Ave </h3>
                    <span class="request-list__details"> <i class="fa-solid fa-bed"></i> 4 <i class="fa-solid fa-bath"></i> 3 <i class="fa-solid fa-ruler"></i> 2500 SQFT</span>
                </div>
                <div class="request-list__info">
                    <span class="request-list__info-title">Status:</span>
                    <div class="request-list__info-status request-list__info-status--success request-list__info-status--cancelled request-list__info-status--sold">
                        Success
                    </div>
                </div>
            </div>
            @endfor
    </div>
@endsection
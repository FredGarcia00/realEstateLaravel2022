@extends('layouts.main')
@section('page-title', '3501 E Rialto Ave - Smith Realty')

@section('content')
    <div class="single-listing-page">
        <div class="listing-top">
            <img class="listing-top__img" src="https://www.davidsmalldesigns.com/wp-content/uploads/2020/01/gallery-modern-at-hart-01.jpg" alt="">
            <div class="listing-top__form-wrapper">
                <div class="container">
                    <form class="listing-top__form" action="">

                        {{-- below are options for scheduling --}}
                        <label class="listing-top__form-label">Schedule a tour</label>
                        <div class="
                        listing-top__form-group listing-top__form-group--horizontal">
                            <div class="listing-top__form-option">In-person</div>
                            <div class="listing-top__form-option">Video</div>
                        </div>

                        {{-- below is the date selection --}}
                        <label class="listing-top__form-label">Date</label>
                        <div class="
                        listing-top__form-group ">
                            <div class="listing-top__form-option">March 3, 2022</div>
                        </div>

                        {{-- Below is time selection --}}
                        <label class="listing-top__form-label">Time</label>
                        <div class="
                        listing-top__form-group ">
                            <div class="listing-top__form-option">9:00 AM</div>
                        </div>

                        {{-- Below is Phone number--}}
                        <label class="listing-top__form-label">Personal Info</label>
                        <div class="
                        listing-top__form-group ">
                            <div class="listing-top__form-option">Enter Phone</div>
                        </div>

                        {{-- Below is email--}}
                        <div class="
                        listing-top__form-group">
                            <div class="listing-top__form-option">Enter Email</div>
                        </div>
                        <div class="
                        listing-top__form-group">
                            <button type="submit" class="listing-top__form-button">Schedule A Tour</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
        <section class="listing-info">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1>453 Grant Ave<br>Fresno, CA 93726</h1>
                        <div class="listing-info__details">
                            <span class="listing-info__details-text"><i class="fa-solid fa-bed"></i>4</span>
                            <span class="listing-info__details-text"> <i class="fa-solid fa-bath"></i> 3 </span>
                            <span class="listing-info__details-text"> <i class="fa-solid fa-ruler"></i> 2500 SQFT</span>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <span class="listing-info__agent-title">Agent</span>
                        <span class="listing-info__agent-name">John Smith</span>
                        <p class="listing-info__agent-profile">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab cumque repellat omnis iste minima quae.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="listing-extras">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="listing-extras__details">
                            <h2>More Info</h2>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus possimus illum rerum!</p>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus possimus illum rerum!</p>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus possimus illum rerum!</p>
                            <h3>Details</h3>
                            <ul>
                                <li>Test</li>
                                <li>test</li>
                                <li>test</li>
                                <li>test</li>
                                <li>test</li>
                                <li>test</li>
                                <li>test</li>
                                <li>test</li>
                                <li>test</li>
                                <li>test</li>
                                <li>test</li>
                        </div>
                        </ul>
                    </div>
                    <div class="col-md-5">
                      <div class="listing-extras__gallery">
                          <h2>Images</h2>
                          <img src="https://www.davidsmalldesigns.com/wp-content/uploads/2020/01/gallery-modern-at-hart-01.jpg" alt="">
                          <img src="https://www.davidsmalldesigns.com/wp-content/uploads/2020/01/gallery-modern-at-hart-01.jpg" alt="">
                          <img src="https://www.davidsmalldesigns.com/wp-content/uploads/2020/01/gallery-modern-at-hart-01.jpg" alt="">
                          <img src="https://www.davidsmalldesigns.com/wp-content/uploads/2020/01/gallery-modern-at-hart-01.jpg" alt="">
                      </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
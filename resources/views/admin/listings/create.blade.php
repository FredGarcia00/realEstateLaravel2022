@extends('layouts.admin') 
@section('page-title', 'Create a listing')
@section('content')

<div id="mainContent">
    <div class="col-md-6">
        <div class="bgc-white p-20 bd">
            <h1>Create A Listing</h1>
            <div class="mT-30">
                <form method="POST" action="{{ route('admin.listings.store') }}" >
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="address">Address</label>
                        <input
                            type="text"
                            class="form-control"
                            id="address"
                            name="address"
                            placeholder="1234 Main St"
                            value="{{old('address')}}"
                        />
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="address2"
                            >Address 2</label
                        >
                        <input
                            type="text"
                            class="form-control"
                            id="address2"
                            name="address2"
                            placeholder="Apartment, studio, or floor"
                            value="{{old('address2')}}"
                        />
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="city">City</label>
                            <input
                                type="text"
                                class="form-control"
                                id="city"
                                name="city"
                            value="{{old('city')}}"
                            />
                        </div>
                        <div class="mb-3 col-md-4">
                            <label class="form-label" for="state">State</label>
                            <select name="state" id="state" class="form-control">
                                <option value="CA" @selected(old('state') == 'CA')>California</option>
                                <option value="NY" @selected(old('state') == 'NY')>New York</option>
                            </select>
                        </div>
                        <div class="mb-3 col-md-2">
                            <label class="form-label" for="zipcode">Zip</label>
                            value="{{old('address2')}}"
                            <input type="text" class="form-control" id="zipcode" name="zipcode"  value="{{old('zipcode')}}" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="bedrooms"
                                >Bedrooms</label
                            >
                            <input
                                type="text"
                                class="form-control"
                                id="bedrooms"
                                placeholder="4"
                                name="bedrooms"
                                value="{{old('bedrooms')}}"
                            />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="bathrooms"
                                >Bathrooms</label
                            >
                            <input
                                type="text"
                                class="form-control"
                                id="bathrooms"
                                placeholder="2"
                                name="bathrooms"
                                value="{{old('bathrooms')}}"
                            />
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="squarefootage"
                                >SQFT</label
                            >
                            <input
                                type="text"
                                class="form-control"
                                id="squarefootage"
                                placeholder="2000"
                                name="squarefootage"
                                value="{{old('squarefootage')}}"
                            />
                        </div>
                    </div>
                  
                    <button  type="submit" class="btn btn-primary btn-color">
                        Create Listing
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

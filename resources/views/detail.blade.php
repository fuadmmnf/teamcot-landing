@extends('layouts.master')

@section('title', 'Teamcot Bangladesh Ltd')
<!-- slider -->
@section('content')
    <section style="padding-top: 200px !important; " class="xs-onepage-section">
        <div class="container">
            <div class="row">
                <!-- section title -->
                <div class="col-md-12 text-center">
                    <h3 class="section-title no-padding-bottom deep-gray-text">About {{$teammember->data()['name']}}</h3>
                </div>
                <!-- end section title -->
            </div>
            <div class="row">
                <!-- section text -->
                <div class="col-md-8 col-sm-8 center-col text-center margin-six margin-bottom-seven">
                    <h4 class="gray-text">{{$teammember->data()['description']}}</h4>
                </div>
                <!-- end section text -->
            </div>
        </div>
    </section>
@endsection

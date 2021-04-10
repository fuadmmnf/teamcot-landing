@extends('layouts.master')

@section('title', 'Teamcot Bangladesh Ltd')
<!-- slider -->
@section('content')
    <section style="padding-top: 200px !important; " class="xs-onepage-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6 sm-margin-top-four">

                    <!-- section title -->
                    <div class="col-md-12 text-center">
                        <h3 class="section-title no-padding-bottom deep-gray-text">About {{$teammember->data()['name']}}</h3>
                    </div>
                    <!-- end section title -->
                    <!-- section text -->
                    <div class="col-md-8 col-sm-8 center-col text-center margin-six margin-bottom-seven">
                        <h4 class="gray-text">{{$teammember->data()['description']}}</h4>
                    </div>
                    <!-- end section text -->
                </div>
                <div class="col-md-4 col-sm-6 text-center team-member position-relative wow fadeInUp" >
                    <img height="100" src="{{$teammember->data()['photo_url']}}" alt="{{$teammember->data()['name']}}"/>
                </div>

            </div>

        </div>
    </section>
@endsection

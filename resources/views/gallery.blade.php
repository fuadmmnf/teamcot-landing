@extends('layouts.master')

@section('title', 'Gallery | Teamcot Bangladesh Ltd')
<!-- slider -->
@section('content')

    <!-- content section -->
    <section class="wow fadeIn">
        <div class="container">
            <div class="row lightbox-gallery">
                <h2 class="padding-three">{{$gallery->data()['title']}}</h2>
                @foreach($gallery->data()['photo_urls'] as $photourl)
                    <div class="col-md-4 col-sm-6 wow fadeIn">
                        <!-- photo item -->
                        <a href="{{$photourl}}"><img src="{{$photourl}}" alt="" class="project-img-gallery"></a>
                        <!-- end photo item -->
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- end content section -->
@endsection

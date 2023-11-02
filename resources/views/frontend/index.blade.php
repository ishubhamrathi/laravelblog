@extends('layouts.app')
@section('title', "Devopee")
@section('meta_description', "Find tutorials for PHP, Laravel, ReactJs and more")
@section('meta_keywords', "Devopee")
@section('content')

<div class="bg-danger bg-gradient py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="owl-carousel category-carousel owl-theme">
                    @foreach ($all_categories as $all_cate_item )
                    <a href="{{url('tutorials/'.$all_cate_item->slug)}}" class="text-decoration-none">
                        <div class="item">
                            <div class="card">
                                <img class="category-img"   src="{{asset('uploads/category/'.$all_cate_item->image)}}" alt="image">
                                <div class="card-body text-center">
                                    <h5 class="text-dark">{{$all_cate_item->name}}</h5>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="py-1 bg-gray">
    <div class="container">
        <div class="border p-3 text-center">
            <h3>Advertise here</h3>
        </div>
    </div>
</div>
<div class="py-5 ">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Devopee</h4>
                <div class="underline"></div>

                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem sit mollitia consectetur nisi totam ad, at expedita alias unde nihil! Architecto voluptatibus tenetur eveniet ratione veritatis dolores ipsam ipsum iste!
                </p>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam omnis perspiciatis nostrum quisquam consequatur voluptates illo iure alias eius pariatur corporis, delectus, minima voluptas sit vitae, sed sequi vel nesciunt?
                </p>
            </div>
        </div>
    </div>
</div>


<div class="py-5 bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>All Categories List</h4>
                <div class="underline"></div>
            </div>
                @foreach ($all_categories as $all_cateitem )
                <div class="col-md-3">
                    <div class="card card-body mb-3">
                        <a href="{{url('tutorials/'.$all_cateitem->slug)}}" class="text-decoration-none">
                        <h4 class="text-dark mb-0">{{$all_cateitem->name}}</h4>
                        </a>
                    </div>
                </div>
                @endforeach
        </div>
    </div>
</div>

<div class="py-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Latest Post</h4>
                <div class="underline"></div>
            </div>
            <div class="col-md-8">
                @foreach ($latest_posts as $latest_post_item )
                    <div class="card card-body mb-3 shadow">
                        <a href="{{url('tutorial/'.$latest_post_item->category->slug.'/'.$latest_post_item->slug)}}" class="text-decoration-none">
                        <h4 class="text-dark mb-0">{{$latest_post_item->name}}</h4>
                        </a>
                        <h6>Posted On: {{$latest_post_item->created_at->format('d-m-y')}}</h6>
                    </div>
                @endforeach
            </div>
            <div class="col-md-4">
                <div class="border p-3 text-center">
                    <h3>Advertise here</h3>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

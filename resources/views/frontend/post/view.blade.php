@extends('layouts.app')
@section('title', "$post->meta_title")
@section('meta_description', "$post->meta_description")
@section('meta_keywords', "$post->meta_keywords")
@section('content')
<div class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="category-heading">
                    <h1 class="mb-0">{!! $post->name !!}</h1>
                </div>
                <div class="mt-2">
                    <h6>{{$post->category->name.'/'.$post->name}}</h6>
                </div>
               <div class="card  card-shadow mt-4">
                <div class="card-body">
                    {!! $post->description!!}
                </div>
               </div>
            </div>
            <div class="col-md-3">
                <div class="border p-2 my-2">
                    Advertising
                </div>
                <div class="card mt-3">
                    <div class="card-header">
                        <h4>Latest Posts</h4>
                    </div>
                    <div class="card-body">
                        @foreach ($latest_post as $item )
                            <a href="{{url('tutorial/'.$item->category->slug.'/'.$item->slug)}}" class="text-decoration-none">
                                <h6>> {{$item->name}}</h6>
                            </a>
                        @endforeach
                    </div>
                </div>
                <div class="border p-2 my-2">
                    Advertising
                </div>
                <div class="border p-2 my-2">
                    Advertising
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

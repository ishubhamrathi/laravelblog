@extends('layouts.app')

@section('content')
<div class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="category-heading">
                    <h4>Category: {{$category->name}}</h4>
                </div>
                @forelse ($post as $postitem)


                <div class="card card-shadow mt-4">
                    {{-- <img src="{{url('assets/uploads/'.$post->image)}}" class="card-img-top" alt="..."> --}}
                    <div class="card-body">
                        <h5 class="card-title">{{$postitem->name}}</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">{{$postitem->meta_keywords}}</h6>
                        {{-- <p class="card-text">{{$postitem->description}}</p> --}}
                        <p class="card-text">
                            {{ substr(strip_tags($postitem->description), 0, 200) }} <!-- Change 200 to your desired character limit -->
                            @if (strlen(strip_tags($postitem->description)) > 200)
                                <a href="{{ url('tutorial/' . $category->slug . '/' . $postitem->slug) }}">Read more</a>
                            @endif
                        </p>

                        <a class="card-link btn btn-primary" href="{{url('tutorial/'.$category->slug.'/'.$postitem->slug)}}">
                        View
                        </a>
                        <br>
                        <br>
                        <h6>Posted On: {{$postitem->created_at->format('d-m-y')}}
                        <span class="m-3">By: <i>{{$postitem->user->name}}</span>
                    </h6>
                    </div>
                </div>
                {{-- <div class="pagination">
                    {{$post->links()}}
                </div> --}}
                @empty
                <div class="card card-shadow mt-4">
                    {{-- <img src="{{url('assets/uploads/'.$post->image)}}" class="card-img-top" alt="..."> --}}
                    <div class="card-body">
                        <h5 class="card-title">No Posts Available</h5>
                    </div>
                </div>
                @endforelse
            </div>
            <div class="col-md-3 my-auto">
                <div class="border p-2">
                    advertising area
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

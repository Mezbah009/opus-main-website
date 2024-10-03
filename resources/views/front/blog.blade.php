@extends('front.layouts.app')

@section('content')
<style>

</style>

<div class="contact-bg" style="background-image: url('{{ asset("front-assets/img/blogs.jpg") }}');">
    <h2>Blogs</h2>
    <div class="line">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>

<section id="blog-card" class="padding-top-bottom-90">
    <div class="container">
        <div class="heading-wraper text-center margin-bottom-80">
            <h4>latest published</h4>
            <hr class="heading-devider gradient-orange">
        </div>
        <div class="row">
            @foreach ($blogPosts as $post)
            <div class="col-md-6 mb-4">
                <div class="card" >
                    <img class="card-img-top img-responsive max-width-100" src="{{ asset('uploads/blogs/' . $post->image) }}" alt="{{ $post->title }}">
                    <div class="card-block" style="padding:40px">
                        <p class="card-text"><small class="text-muted blog-category">{{ $post->category }}</small></p>
                        <h4 class="card-title">{{ $post->title }}</h4>
                        <p class="card-text"><small class="text-muted italic">{{ $post->date }}</small></p>
                        <p class="card-text">{{ $post->excerpt }}</p>
                        <a href="{{ route('blog.show', ['slug' => $post->slug]) }}" class="btn btn-link">read more <span><i class="ion-ios-arrow-thin-right"></i></span></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection

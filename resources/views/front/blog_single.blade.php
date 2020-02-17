@extends('front.layouts.master')
@section('content')

<div class="hero-wrap js-fullheight" style="background-image: url('{{ asset('front/images/bg_1.jpg') }}');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start"
                data-scrollax-parent="true">
                <div class="col-md-12 ftco-animate">
                    <h2 class="subheading">{{ $header->title }}</h2>
                    <h1 class="mb-4 mb-md-0">{{ $header->name }} </h1>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="text">
                                {{-- <p>{{ $shareData['header']->body }}</p> --}}
                                <div class="mouse">
                                    <a href="#" class="mouse-icon">
                                        <div class="mouse-wheel"><span class="ion-ios-arrow-round-down"></span></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 ftco-animate">
                <p class="mb-5">
                    <img src="{{ asset('storage/'.$post->image) }}" alt="" class="img-fluid">
                </p>
                <h2 class="mb-3">{{ $post->title }}</h2>
                <p>{!! $post->body !!}</p>
                <div class="tag-widget post-tag-container mb-5 mt-5">
                    <div class="tagcloud">

                        {{-- <a href="#" class="tag-cloud-link">{{ $post->tags->name }}</a> --}}
                        @foreach ($post_tag as $item)
                            <a href="#" class="tag-cloud-link">
                                {{ $item->name }}
                            </a>
                        @endforeach
                    </div>
                </div>



            </div> <!-- .col-md-8 -->
            <div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
                <div class="sidebar-box">
                    <form action="{{ route('blog') }}" method="GET" class="search-form">
                        {{-- @csrf --}}
                        <div class="form-group">
                            <span class="icon icon-search"></span>
                            <input type="text" class="form-control" name="search" placeholder="Type a keyword and hit enter">
                        </div>
                    </form>
                </div>
                <div class="sidebar-box ftco-animate">
                    <div class="categories">
                    <h3>{{ __('single_cat') }}</h3>
                        @foreach ($categories as $category)
                            <li><a href="{{route('blog', ['id' => $category->id])}}">{{ $category->name }} <span class="ion-ios-arrow-forward"></span></a></li>
                        @endforeach
                    </div>
                </div>

                <div class="sidebar-box ftco-animate">
                    <h3>Recent Blog</h3>
                    @foreach ($recent_blog as $recent)
                    <div class="block-21 mb-4 d-flex">
                            <a class="blog-img mr-4" href="{{ route('blog_single',['id' =>$recent->id]) }}">
                                <img src="{{ asset('storage/'.$recent->image) }}" alt="" class="img-fluid">
                            </a>
                            <div class="text">
                                <h3 class="heading"><a href="#">{{ $recent->title }}</a></h3>
                                <div class="meta">
                                    <div><a href="{{ route('blog_single',['id' =>$recent->id]) }}"><span class="icon-calendar"></span> {{ date('F, d, Y',strtotime($post->created_at)) }}</a></div>
                                    {{-- <div><a href="{{ route('blog_single',['id' =>$recent->id]) }}"><span class="icon-person"></span> {{ $project->name }}</a></div> --}}
                                    {{-- <div><a href="#"><span class="icon-chat"></span> 19</a></div> --}}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="sidebar-box ftco-animate">
                    <h3>Tag Cloud</h3>
                    <div class="tagcloud">
                        @foreach ($tags as $tag)

                            <a href="{{route('newblog', ['id' => $tag->id])}}" class="tag-cloud-link">{{ $tag->name }}</a>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> <!-- .section -->
<footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
          <div class="row mb-5">
            <div class="col-md">
              <div class="ftco-footer-widget mb-4">
                <h2 class="logo"><a href="#">Read<span>it</span>.</a></h2>
                <p>{{ $header->title }}</p>
                <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                  <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
              </div>
            </div>
            <div class="col-md">
               <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2">{{ __('news') }}</h2>
                @foreach ($footer_blog as $item)
                <div class="block-21 mb-4 d-flex">
                    <a class="img mr-4 rounded">
                            <img src="{{ asset('storage/'.$item->image) }}" alt="" class="img-fluid">
                    </a>
                    <div class="text">
                    <h3 class="heading"><a href="#">{{ $item->title }}</a></h3>
                      <div class="meta">
                        <div><a href="#"></span> {{ date('F, d, Y',strtotime($item->created_at)) }}</a></div>

                      </div>
                    </div>

                </div>
                @endforeach

              </div>
            </div>
            <div class="col-md">
              <div class="ftco-footer-widget mb-4 ml-md-5">
                <h2 class="ftco-heading-2">{{ __('info') }}</h2>
                <ul class="list-unstyled">
                  {{ menu('main','front.partials.menus.main') }}
                </ul>
              </div>
            </div>
            <div class="col-md">
              <div class="ftco-footer-widget mb-4">
                  <h2 class="ftco-heading-2">{{ __('question') }}</h2>
                  <div class="block-23 mb-3">
                    <ul>
                      <li><span class="icon icon-map-marker"></span><span class="text">{{ $contact->adderss }}</span></li>
                      <li><a href="#"><span class="icon icon-phone"></span><span class="text">{{ $contact->number }}</span></a></li>
                      <li><a href="#"><span class="icon icon-envelope"></span><span class="text">{{ $contact->email }}</span></a></li>
                    </ul>
                  </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">

              <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                {{ __('copy_right') }}
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
          </div>
        </div>
      </footer>


@endsection

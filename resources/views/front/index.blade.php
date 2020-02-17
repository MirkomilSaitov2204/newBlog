@extends('front.layouts.master')
@section('content')

<div class="hero-wrap js-fullheight" style="background-image: url('{{ asset('front/images/bg_1.jpg') }}');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start"
                data-scrollax-parent="true">

                <div class="col-md-12 ftco-animate">
                    <h4>{{ __('choose_lan') }}</h4>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="/locale/uz">Uz</a></li>
                            <li class="list-inline-item"><a href="/locale/en">Eng</a></li>
                        </ul>
                    <h2 class="subheading mt-5">{{ $header->title }}</h2>
                    <h1 class="mb-4 mb-md-0">{{ $header->name }} </h1>
                    <div class="row">
                        <div class="col-md-7">

                            <div class="text">
                                <p>{{ $header->body }}</p>

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

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="case">
                    @foreach ($posts as $post)
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-xl-8 d-flex">
                                <a href="{{ route('blog_single', ['id'=>$post->id]) }}" class="img w-100 mb-3 mb-md-0" >
                                    <img style="height:100%; width:100%; padding-bottom:10%"  src="{{ asset('storage/'.$post->image) }}" alt="">
                                </a>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-4 d-flex">
                                <div class="text w-100 pl-md-3">
                                    <span class="subheading">{{$post->category->name}}</span>
                                    <h2><a href="{{ route('blog_single', ['id'=>$post->id]) }}">{{ $post->title }}</a>
                                    </h2>
                                    <ul class="media-social list-unstyled">
                                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a>
                                        </li>
                                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a>
                                        </li>
                                    </ul>
                                    <div class="meta">
                                        <p class="mb-0"><a href="{{ route('blog_single', ['id'=>$post->id]) }}">{{ $post->created_at->format('m/d/Y') }}</a> | <a href="#">12 min read</a></p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col text-center">
                <div class="block-27">

                </div>
            </div>
        </div>
    </div>
</section>
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

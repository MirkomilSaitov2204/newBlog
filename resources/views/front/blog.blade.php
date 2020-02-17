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
<section class="ftco-section bg-light">
    <div class="container">
        <div class="row d-flex">
            @foreach ($posts as $post)
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="{{ route('blog_single',['id' =>$post->id]) }}" class="block-20" >
                            <img src="{{ asset('storage/'.$post->image) }}" alt="">
                        </a>
                        <div class="text p-4 float-right d-block">
                            <div class="topper d-flex align-items-center">
                                <div class="one py-2 pl-3 pr-1 align-self-stretch">
                                    <span class="day">{{ $post->created_at->format('d') }}</span>
                                </div>
                                <div class="two pl-0 pr-3 py-2 align-self-stretch">
                                    <span class="yr">{{ $post->created_at->format('Y') }}</span>
                                    <span class="mos">{{ date('F',strtotime($post->created_at)) }}</span>
                                </div>
                            </div>
                            <h3 class="heading mb-3"><a href="{{ route('blog_single',['id' =>$post->id]) }}">{{ $post->title }}</a></h3>
                            <p>{{ $post->meta_description }}
                            </p>
                            <p><a href="{{ route('blog_single',['id' =>$post->id]) }}" class="btn-custom"><span class="ion-ios-arrow-round-forward mr-3"></span>Read
                                    more</a></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row mt-5">
            <div class="col text-center">
                <div class="block-27">
                    <ul>
                        {{-- <li>{{ $posts->links() }}</li> --}}

                    </ul>
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

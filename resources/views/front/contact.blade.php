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
<section class="ftco-section contact-section">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">
            <div class="col-md-12 mb-4">
                <h2 class="h3">Contact Information</h2>
            </div>
            <div class="w-100"></div>
            <div class="col-md-3">
                <p><span>{{ __('contact') }}:</span>{{ $contact->adderss }}</p>
            </div>
            <div class="col-md-3">
                <p><span>{{ __('phone') }}:</span> <a href="{{ $contact->number }}"> {{ $contact->number }}</a></p>
            </div>
            <div class="col-md-3">
                <p><span>{{ __('email') }}</span> <a href="{{ $contact->email }}"> {{ $contact->email }}</a></p>
            </div>
        </div>
        <div class="row block-9 no-gutters">
            <div class="col-lg-6 order-md-last d-flex">
                <form action="#" class="bg-light p-4 p-md-5 contact-form">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="{{ __('y_name') }}:">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="{{ __('y_email') }}:">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="{{ __('subject') }}:">
                    </div>
                    <div class="form-group">
                        <textarea name="" id="" cols="30" rows="7" class="form-control"
                            placeholder="{{ __('message') }}"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="{{ __('send') }}" class="btn btn-primary py-3 px-5">
                    </div>
                </form>

            </div>

            <div class="col-lg-6 d-flex">
                <div id="map" class="bg-white"></div>
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

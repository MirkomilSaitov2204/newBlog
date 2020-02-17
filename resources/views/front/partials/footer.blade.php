<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="logo"><a href="#">Read<span>it</span>.</a></h2>
            <p>{{ $shareData['header']->title }}</p>
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
            @foreach ($shareData['recent_blog'] as $item)
            <div class="block-21 mb-4 d-flex">
                <a class="img mr-4 rounded">
                        <img src="{{ asset('storage/'.$item->image) }}" alt="" class="img-fluid">
                </a>
                <div class="text">
                <h3 class="heading"><a href="#">{{ $item->title }}</a></h3>
                  <div class="meta">
                    <div><a href="#"></span> {{ date('F, d, Y',strtotime($item->created_at)) }}</a></div>
                    <div><a href="#"></span> Admin</a></div>
                    <div><a href="#"></span> 19</a></div>
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
              <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Home</a></li>
              <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>About</a></li>
              <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Articles</a></li>
              <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Contact</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">{{ __('question') }}</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">{{ $shareData['contact']->adderss }}</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">{{ $shareData['contact']->number }}</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">{{ $shareData['contact']->email }}</span></a></li>
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

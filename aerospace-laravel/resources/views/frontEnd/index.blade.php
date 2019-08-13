@extends('frontEnd.layouts.master')
@section('content')
@if (Session::has('locale')) 
{{   App::setLocale(Session::get('locale'))}}
@endif
<main role="main" class="main">
    <section id="visual">
       <div class="owl-carousel owl-theme" id="visual-carousel">
          <div class="item">
             <div class="caption">
                <div class="container">
                   <div class="row">
                      <div class="col-12 col-lg-7">
                         <h2>{{trans('home.title1')}}</h2>
                         <div class="lead">{{trans('home.title1-c1')}}</div>
                      </div>
                   </div>
                </div>
             </div>
             <picture>
                <source media="(max-width: 575px)" srcset="https://tjaerospace.com/wp-content/uploads/2019/06/proudly-serving-our-customer-since-2007-400x720.jpg">
                <img width="1920" height="800" src="https://tjaerospace.com/wp-content/uploads/2019/06/proudly-serving-our-customer-since-2007-1920x800.jpg" class="img-fluid wp-post-image" alt="Proudly Serving Our Customer Since 2007">                 
             </picture>
          </div>
          <div class="item">
             <div class="caption">
                <div class="container">
                   <div class="row">
                      <div class="col-12 col-lg-7">
                         <h2>{{trans('home.title2')}}</h2>
                         <div class="lead">{{trans('home.title2-c1')}}</div>
                      </div>
                   </div>
                </div>
             </div>
             <picture>
                <source media="(max-width: 575px)" srcset="https://tjaerospace.com/wp-content/uploads/2019/06/forward-thinking-400x720.jpg">
                <img width="1920" height="800" src="https://tjaerospace.com/wp-content/uploads/2019/06/forward-thinking-1920x800.jpg" class="img-fluid wp-post-image" alt="Forward-Thinking">                 
             </picture>
          </div>
          <div class="item">
             <div class="caption">
                <div class="container">
                   <div class="row">
                      <div class="col-12 col-lg-7">
                         <h2>{{trans('home.title3')}}</h2>
                         <div class="lead">{{trans('home.title3-c1')}}</div>
                      </div>
                   </div>
                </div>
             </div>
             <picture>
                <source media="(max-width: 575px)" srcset="https://tjaerospace.com/wp-content/uploads/2019/06/on-the-cutting-edge-of-excellence-400x720.jpg">
                <img width="1920" height="800" src="https://tjaerospace.com/wp-content/uploads/2019/06/on-the-cutting-edge-of-excellence-1920x800.jpg" class="img-fluid wp-post-image" alt="On the Cutting Edge of Excellence">                 
             </picture>
          </div>
       </div>
       <div class="badges">
          <div class="container">
             <div class="row">
                <div class="col-lg-4 col-md-3 d-flex align-items-center mb-4 mb-md-0">
                   <div class="owl-slider-counter">
                      <span class="current"></span>/<span class="total"></span>
                   </div>
                   <div class="owl-custom-nav"></div>
                </div>
                <div class="col-lg-8 col-md-9">
                   <div class="row no-gutters">
                      <div class="col-auto">
                         <div class="media text-white align-items-center">
                            <span><img width="64" height="64" src="https://tjaerospace.com/wp-content/themes/tjaerospace/assets/img/high-quality.svg"></span>
                            <div class="media-body">
                               <h5 class="font-weight-normal my-0">{{trans('home.title4')}}</h5>
                            </div>
                         </div>
                      </div>
                      <div class="col-auto mx-auto">
                         <div class="border-white border-right h-100"></div>
                      </div>
                      <div class="col-auto">
                         <div class="media text-white align-items-center">
                            <span><img width="64" height="64" src="https://tjaerospace.com/wp-content/themes/tjaerospace/assets/img/delivery.svg"></span>
                            <div class="media-body">
                               <h5 class="font-weight-normal my-0">{{trans('home.title4-c1')}}<br>{{trans('home.title4-c2')}}</h5>
                            </div>
                         </div>
                      </div>
                      <div class="col-auto mx-auto">
                         <div class="border-white border-right h-100"></div>
                      </div>
                      <div class="col-auto">
                         <div class="media text-white align-items-center">
                            <span><img width="64" height="64" src="https://tjaerospace.com/wp-content/themes/tjaerospace/assets/img/price.svg"></span>
                            <div class="media-body">
                               <h5 class="font-weight-normal my-0">{{trans('home.title4-c3')}}</h5>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <section id="keyfactsblock-block_5d28d23535ddf" class="keyfactsblock style-2">
       <div class="inner">
          <h6 class="mb-3 mb-sm-5 mx-auto text-center text-uppercase text-light font-weight-bold">{{trans('home.title5')}}</h6>
          <div class="container">
             <div class="row">
                <div class="col-md-3 col-6 text-center mx-auto">
                   <div class="counter-item"><span class="counter-up">98</span>%</div>
                   <h6>{{trans('home.title5-c1')}}</h6>
                </div>
                <div class="col-md-3 col-6 text-center mx-auto">
                   <div class="counter-item"><span class="counter-up">97</span>%</div>
                   <h6>{{trans('home.title5-c2')}}</h6>
                </div>
                <div class="col-md-3 col-6 text-center mx-auto">
                   <div class="counter-item"><span class="counter-up">100</span>%</div>
                   <h6>{{trans('home.title5-c3')}}</h6>
                </div>
                <div class="col-md-3 col-6 text-center mx-auto">
                   <div class="counter-item"><span class="counter-up">35</span>%</div>
                   <h6>{{trans('home.title5-c4')}}</h6>
                </div>
             </div>
          </div>
       </div>
    </section>
    <div class="wp-block-media-text alignwide">
       <figure class="wp-block-media-text__media"><img src="http://new.tjaerospace.com/wp-content/uploads/2019/07/lean-manufactoring-company-1200x800.jpg" alt="Lean Manufacturing Company" class="wp-image-422" srcset="https://tjaerospace.com/wp-content/uploads/2019/07/lean-manufactoring-company-1200x800.jpg 1200w, https://tjaerospace.com/wp-content/uploads/2019/07/lean-manufactoring-company-600x400.jpg 600w, https://tjaerospace.com/wp-content/uploads/2019/07/lean-manufactoring-company-768x512.jpg 768w" sizes="(max-width: 1200px) 100vw, 1200px" /></figure>
       <div class="wp-block-media-text__content">
          <h5 class="text-uppercase text-primary font-weight-semibold">{{trans('home.title6')}}</h5>
          <h2 class="mb-4">{{trans('home.title6-c1')}}</h2>
          <p class="lead font-weight-normal mb-5">{{trans('home.title6-c2')}}</p>
       <div class="wp-block-button is-style-squared"><a class="wp-block-button__link" href="{{url('/about-us')}}">{{trans('home.title6-c3')}}</a></div>
       </div>
    </div>
    <div class="wp-block-media-text alignwide has-media-on-the-right bg-lightgray">
       <figure class="wp-block-media-text__media"><img src="http://new.tjaerospace.com/wp-content/uploads/2019/07/top-tier-production-manufacturing-1200x800.jpg" alt="Top-Tier Production Manufacturing" class="wp-image-423" srcset="https://tjaerospace.com/wp-content/uploads/2019/07/top-tier-production-manufacturing-1200x800.jpg 1200w, https://tjaerospace.com/wp-content/uploads/2019/07/top-tier-production-manufacturing-600x400.jpg 600w, https://tjaerospace.com/wp-content/uploads/2019/07/top-tier-production-manufacturing-768x512.jpg 768w" sizes="(max-width: 1200px) 100vw, 1200px" /></figure>
       <div class="wp-block-media-text__content">
          <h5 class="text-uppercase text-primary font-weight-semibold">{{trans('home.title7')}}</h5>
          <h2 class="mb-4">{{trans('home.title7-c1')}}</h2>
          <p class="lead font-weight-normal mb-5">{{trans('home.title7-c2')}}</p>
          <div class="wp-block-button is-style-squared"><a class="wp-block-button__link" href={{url('/whatwedo')}}>{{trans('home.title7-c3')}}</a></div>
       </div>
    </div>
    <section id="keyfactsblock-block_5d2305a68d4af" class="keyfactsblock ">
       <div class="inner">
          <h6 class="mb-3 mb-sm-5 mx-auto text-center text-uppercase text-light font-weight-bold">{{trans('home.title8')}}</h6>
          <div class="container">
             <div class="row">
                <div class="col-md-3 col-6 text-center mx-auto">
                   <div class="counter-item">+<span class="counter-up">500</span>K</div>
                   <h6>{{trans('home.title8-c1')}}</h6>
                </div>
                <div class="col-md-3 col-6 text-center mx-auto">
                   <div class="counter-item">+<span class="counter-up">50</span></div>
                   <h6>{{trans('home.title8-c2')}}</h6>
                </div>
                <div class="col-md-3 col-6 text-center mx-auto">
                   <div class="counter-item">+<span class="counter-up">50</span></div>
                   <h6>{{trans('home.title8-c3')}}</h6>
                </div>
                <div class="col-md-3 col-6 text-center mx-auto">
                   <div class="counter-item"><span class="counter-up">100</span>%</div>
                   <h6>{{trans('home.title8-c4')}}</h6>
                </div>
             </div>
          </div>
       </div>
    </section>
    <section id="news">
       <div class="container">
          <h6 class="mb-2 mx-auto text-center text-uppercase text-primary font-weight-bold">{{trans('home.title9')}}</h6>
          <h3 class="h2 mx-auto text-center font-weight-bold mb-3 mb-md-5">{{trans('home.title9-c1')}}</h3>
          <div id="news-carousel" class="owl-carousel owl-theme">
             <div class="card card-news">
                <div class="card-header">
                   <a title="TJ Aerospace Updates Its Website" href="https://tjaerospace.com/news/tj-aerospace-updates-its-website/">
                   <img width="600" height="400" src="https://tjaerospace.com/wp-content/uploads/2019/07/tja-home-page-600x400.jpg" class="card-img-top wp-post-image" alt="">                        </a>
                </div>
                <div class="card-body">
                   <div class="date"><i class="fa fa-clock-o"></i> <time datetime="2019-07-15" itemprop="datePublished">July 15, 2019</time></div>
                   <h4 class="h5 font-weight-bold"><a href="{{url('/post-detail',$id=1)}}">{{trans('home.title9-c2')}}</a></h4>
                </div>
                <div class="card-footer">
                   <a title="TJ Aerospace Updates Its Website" class="read-more" href="https://tjaerospace.com/news/tj-aerospace-updates-its-website/"><span>{{trans('home.title9-c5')}}</span> <i class="fa fa-angle-right"></i></a>
                </div>
             </div>
             <div class="card card-news">
                <div class="card-header">
                   <a title="TJ Aerospace Begins Installation of Their Two New Swiss Turn Machines and Bar Feeders" href="https://tjaerospace.com/news/tj-aerospace-begins-installation-of-their-two-new-swiss-turn-machines-and-bar-feeders/">
                   <img width="600" height="400" src="https://tjaerospace.com/wp-content/uploads/2019/06/Citizen-Cincom-L20-600x400.png" class="card-img-top wp-post-image" alt="">                        </a>
                </div>
                <div class="card-body">
                   <div class="date"><i class="fa fa-clock-o"></i> <time datetime="2019-07-10" itemprop="datePublished">July 10, 2019</time></div>
                <h4 class="h5 font-weight-bold"><a href="{{url('/post-detail',$id=1)}}">{{trans('home.title9-c3')}}</a></h4>
                </div>
                <div class="card-footer">
                   <a title="TJ Aerospace Begins Installation of Their Two New Swiss Turn Machines and Bar Feeders" class="read-more" href="https://tjaerospace.com/news/tj-aerospace-begins-installation-of-their-two-new-swiss-turn-machines-and-bar-feeders/"><span>{{trans('home.title9-c5')}}</span> <i class="fa fa-angle-right"></i></a>
                </div>
             </div>
             <div class="card card-news">
                <div class="card-header">
                   <a title="TJ Aerospace Continues Working On Its CNC Manufacturing Facility In Vietnam" href="https://tjaerospace.com/news/tj-aerospace-continues-working-on-its-cnc-manufacturing-facility-in-vietnam/">
                   <img width="600" height="400" src="https://tjaerospace.com/wp-content/uploads/2019/07/tja-vn-building-600x400.jpg" class="card-img-top wp-post-image" alt="">                        </a>
                </div>
                <div class="card-body">
                   <div class="date"><i class="fa fa-clock-o"></i> <time datetime="2019-07-08" itemprop="datePublished">July 8, 2019</time></div>
                   <h4 class="h5 font-weight-bold"><a href="{{url('/post-detail',$id=2)}}">{{trans('home.title9-c4')}}</a></h4>
                </div>
                <div class="card-footer">
                   <a title="TJ Aerospace Continues Working On Its CNC Manufacturing Facility In Vietnam" class="read-more" href="{{url('/post-detail',$id=3)}}"><span>{{trans('home.title9-c5')}}</span> <i class="fa fa-angle-right"></i></a>
                </div>
             </div>
          </div>
       </div>
    </section>
</main>
 @endsection
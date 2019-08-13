@extends('frontEnd.layouts.master')
@section('content')
<article class="post-2 page type-page status-publish has-post-thumbnail hentry"  itemscope itemtype="http://schema.org/Article">
    <main role="main" class="main">
       <section class="page-title-block">
          <img alt="About Us" class="cover" src={{asset('asset/wp-content/uploads/2019/07/tjaerospace-about-us-1920x800.jpg')}} height="auto" width="auto">
          <div class="title-container">
             <div class="container">
                <div class="row">
                   <div class="col-md-6">
                      <h1 class="page-title">{{trans('aboutus.title1')}}</h1>
                      <div class="lead">{{trans('aboutus.title1-c1')}}</div>
                   </div>
                </div>
             </div>
          </div>
       </section>
       <section class="page-body-block">
          <div class="wp-block-magicblock-magicblock container py-6">
             <h5 class="text-primary text-uppercase">{{trans('aboutus.title2')}}</h5>
             <h2 class="mb-md-4">{{trans('aboutus.title2-c1')}}</h2>
             <p>{{trans('aboutus.title2-c2')}}</p>
             <div class="wp-block-magicblock-magicblock row mt-5">
                <p></p>
                <div class="wp-block-magicblock-magicblock col-md-8 col-12">
                   <figure class="wp-block-image"><img src={{asset('asset/wp-content/uploads/2019/07/tj-aerospace-shipping-department-1200x800.jpg')}} alt="TJ Aerospace Shipping Department" class="wp-image-429" srcset={{asset('asset/wp-content/uploads/2019/07/tj-aerospace-shipping-department-1200x800.jpg')}} 1200w, {{asset('asset/wp-content/uploads/2019/07/tj-aerospace-shipping-department-600x400.jpg')}} 600w, {{asset('asset/wp-content/uploads/2019/07/tj-aerospace-shipping-department-768x512.jpg')}} 768w, {{asset('asset/wp-content/uploads/2019/07/tj-aerospace-shipping-department.jpg')}} 1600w sizes="(max-width: 1200px) 100vw, 1200px" /></figure>
                </div>
                <div class="wp-block-magicblock-magicblock col-md-4 col-12">
                   <p><strong>{{trans('aboutus.title2-c3')}}</strong></p>
                </div>
             </div>
             <div class="wp-block-magicblock-magicblock row mt-5">
                <div class="wp-block-magicblock-magicblock col-lg-6 col-md-5 col-12">
                   <h5 class="text-uppercase text-primary font-weight-semibold">{{trans('aboutus.title3')}}</h5>
                   <h2 class="text-uppercase">{{trans('aboutus.title3-c1')}}</h2>
                   <p>{{trans('aboutus.title3-c2')}}  </p>
                </div>
                <div class="wp-block-magicblock-magicblock col-lg-6 col-md-7 col-12">
                   <figure class="wp-block-image our-policy-image"><img src={{asset('asset/wp-content/uploads/2019/07/tj-aerospace-components-1200x800.jpg')}} alt="Tj Aerospace Components" class="wp-image-428" srcset={{asset('asset/wp-content/uploads/2019/07/tj-aerospace-components-1200x800.jpg')}} 1200w, {{asset('asset/wp-content/uploads/2019/07/tj-aerospace-components-600x400.jpg')}} 600w, {{asset('asset/wp-content/uploads/2019/07/tj-aerospace-components-768x512.jpg')}} 768w" sizes="(max-width: 1200px) 100vw, 1200px" /></figure>
                </div>
             </div>
          </div>
          <div class="wp-block-media-text alignwide">
             <figure class="wp-block-media-text__media"><img src={{asset('asset/wp-content/uploads/2019/07/tj-aerospace-quality-department-1200x750.jpg')}} alt="TJ Aerospace Quality Department" class="wp-image-437" srcset={{asset('asset/wp-content/uploads/2019/07/tj-aerospace-quality-department-1200x750.jpg')}} 1200w, {{asset('asset/wp-content/uploads/2019/07/tj-aerospace-quality-department-600x375.jpg')}} 600w, {{asset('asset/wp-content/uploads/2019/07/tj-aerospace-quality-department-768x480.jpg')}} 768w, {{asset('asset/wp-content/uploads/2019/07/tj-aerospace-quality-department.jpg')}} 1600w" sizes="(max-width: 1200px) 100vw, 1200px" /></figure>
             <div class="wp-block-media-text__content">
                <p>{{trans('aboutus.title3-c3')}}</p>
                <p><strong>{{trans('aboutus.title3-c4')}}</strong></p>
             </div>
          </div>
          <section id="keyfactsblock-block_5d1c7573d5862" class="keyfactsblock bg-primary">
             <div class="inner">
                <h6 class="mb-3 mb-sm-5 mx-auto text-center text-uppercase text-light font-weight-bold">{{trans('aboutus.title4')}}</h6>
                <div class="container">
                   <div class="row">
                      <div class="col-md-3 col-6 text-center mx-auto">
                         <div class="counter-item"><span class="counter-up">94</span>%</div>
                         <h6>{{trans('aboutus.title4-c1')}}</h6>
                      </div>
                      <div class="col-md-3 col-6 text-center mx-auto">
                         <div class="counter-item"><span class="counter-up">97</span>%</div>
                         <h6>{{trans('aboutus.title4-c2')}}</h6>
                      </div>
                      <div class="col-md-3 col-6 text-center mx-auto">
                         <div class="counter-item"><span class="counter-up">7</span>%</div>
                         <h6>{{trans('aboutus.title4-c3')}}</h6>
                      </div>
                      <div class="col-md-3 col-6 text-center mx-auto">
                         <div class="counter-item"><span class="counter-up">5</span>%</div>
                         <h6>{{trans('aboutus.title4-c4')}}</h6>
                      </div>
                   </div>
                </div>
             </div>
          </section>
          <div class="wp-block-media-text alignwide has-media-on-the-right">
             <figure class="wp-block-media-text__media"><img src={{asset('asset/wp-content/uploads/2019/07/tj-aerospace-conference-room-1200x750.jpg')}} alt="TJ Aerospace Conference Room" class="wp-image-435" srcset={{asset('asset/wp-content/uploads/2019/07/tj-aerospace-conference-room-1200x750.jpg')}} 1200w, {{asset('asset/wp-content/uploads/2019/07/tj-aerospace-conference-room-600x375.jpg')}} 600w, {{asset('asset/wp-content/uploads/2019/07/tj-aerospace-conference-room-768x480.jpg')}} 768w, {{asset('asset/wp-content/uploads/2019/07/tj-aerospace-conference-room.jpg')}} 1600w" sizes="(max-width: 1200px) 100vw, 1200px" /></figure>
             <div class="wp-block-media-text__content">
                <h5 class="text-uppercase text-primary font-weight-semibold">{{trans('aboutus.title5')}}</h5>
                <h2 class="mb-4">{{trans('aboutus.title5-c1')}}</h2>
                <ul class="list">
                   <li>{{trans('aboutus.title5-c2')}}</li>
                   <li>{{trans('aboutus.title5-c3')}}</li>
                   <li>{{trans('aboutus.title5-c4')}}</li>
                   <li>{{trans('aboutus.title5-c5')}}</li>
                   <li>{{trans('aboutus.title5-c6')}}</li>
                   <li>{{trans('aboutus.title5-c7')}}</li>
                   <li>{{trans('aboutus.title5-c8')}}</li>
                   <li>{{trans('aboutus.title5-c9')}}</li>
                   <li>{{trans('aboutus.title5-c10')}}</li>
                   <li>{{trans('aboutus.title5-c11')}}</li>
                   <li>{{trans('aboutus.title5-c12')}}</li>
                   <li>{{trans('aboutus.title5-c13')}}</li>
                   <li>{{trans('aboutus.title5-c14')}}</li>
                   <li>{{trans('aboutus.title5-c15')}}</li>
                </ul>
             </div>
          </div>
          <div class="wp-block-magicblock-magicblock py-6 bg-gray">
             <h2 class="text-center mb-5">{{trans('aboutus.title6')}}</h2>
             <div class="wp-block-blockgallery-carousel">
                <div class="is-cropped blockgallery has-no-alignment has-caption-style-dark has-horizontal-gutter">
                   <div class="has-carousel has-carousel-lrg" style="height:600px" data-flickity="{&quot;autoPlay&quot;:false,&quot;draggable&quot;:true,&quot;pageDots&quot;:false,&quot;prevNextButtons&quot;:true,&quot;wrapAround&quot;:true,&quot;arrowShape&quot;:{&quot;x0&quot;:10,&quot;x1&quot;:60,&quot;y1&quot;:50,&quot;x2&quot;:65,&quot;y2&quot;:45,&quot;x3&quot;:20}}">
                      <div class="blockgallery--item">
                         <figure class="blockgallery--figure has-margin-left-15 has-margin-right-15"><img src="http://new.tjaerospace.com/wp-content/uploads/2019/07/Accounting-Department-1200x800.jpg" alt="" data-id="836" data-link="http://new.tjaerospace.com/about-us/attachment/accounting-department/" class="wp-image-836" srcset="https://tjaerospace.com/wp-content/uploads/2019/07/Accounting-Department-1200x800.jpg 1200w, https://tjaerospace.com/wp-content/uploads/2019/07/Accounting-Department-600x400.jpg 600w, https://tjaerospace.com/wp-content/uploads/2019/07/Accounting-Department-768x512.jpg 768w, https://tjaerospace.com/wp-content/uploads/2019/07/Accounting-Department.jpg 1600w" sizes="(max-width: 1200px) 100vw, 1200px" /></figure>
                      </div>
                      <div class="blockgallery--item">
                         <figure class="blockgallery--figure has-margin-left-15 has-margin-right-15"><img src="http://new.tjaerospace.com/wp-content/uploads/2019/07/Conference-Room-1200x800.jpg" alt="" data-id="837" data-link="http://new.tjaerospace.com/about-us/attachment/conference-room/" class="wp-image-837" srcset="https://tjaerospace.com/wp-content/uploads/2019/07/Conference-Room-1200x800.jpg 1200w, https://tjaerospace.com/wp-content/uploads/2019/07/Conference-Room-600x400.jpg 600w, https://tjaerospace.com/wp-content/uploads/2019/07/Conference-Room-768x512.jpg 768w, https://tjaerospace.com/wp-content/uploads/2019/07/Conference-Room.jpg 1600w" sizes="(max-width: 1200px) 100vw, 1200px" /></figure>
                      </div>
                      <div class="blockgallery--item">
                         <figure class="blockgallery--figure has-margin-left-15 has-margin-right-15"><img src="http://new.tjaerospace.com/wp-content/uploads/2019/07/Front-Office-1200x800.jpg" alt="" data-id="838" data-link="http://new.tjaerospace.com/about-us/attachment/front-office/" class="wp-image-838" srcset="https://tjaerospace.com/wp-content/uploads/2019/07/Front-Office-1200x800.jpg 1200w, https://tjaerospace.com/wp-content/uploads/2019/07/Front-Office-600x400.jpg 600w, https://tjaerospace.com/wp-content/uploads/2019/07/Front-Office-768x512.jpg 768w, https://tjaerospace.com/wp-content/uploads/2019/07/Front-Office.jpg 1600w" sizes="(max-width: 1200px) 100vw, 1200px" /></figure>
                      </div>
                      <div class="blockgallery--item">
                         <figure class="blockgallery--figure has-margin-left-15 has-margin-right-15"><img src="http://new.tjaerospace.com/wp-content/uploads/2019/07/Quality-Department-1200x800.jpg" alt="" data-id="839" data-link="http://new.tjaerospace.com/about-us/attachment/quality-department/" class="wp-image-839" srcset="https://tjaerospace.com/wp-content/uploads/2019/07/Quality-Department-1200x800.jpg 1200w, https://tjaerospace.com/wp-content/uploads/2019/07/Quality-Department-600x400.jpg 600w, https://tjaerospace.com/wp-content/uploads/2019/07/Quality-Department-768x512.jpg 768w, https://tjaerospace.com/wp-content/uploads/2019/07/Quality-Department.jpg 1600w" sizes="(max-width: 1200px) 100vw, 1200px" /></figure>
                      </div>
                      <div class="blockgallery--item">
                         <figure class="blockgallery--figure has-margin-left-15 has-margin-right-15"><img src="http://new.tjaerospace.com/wp-content/uploads/2019/07/Shipping-Department-1-1200x800.jpg" alt="" data-id="841" data-link="http://new.tjaerospace.com/about-us/attachment/shipping-department-1/" class="wp-image-841" srcset="https://tjaerospace.com/wp-content/uploads/2019/07/Shipping-Department-1-1200x800.jpg 1200w, https://tjaerospace.com/wp-content/uploads/2019/07/Shipping-Department-1-600x400.jpg 600w, https://tjaerospace.com/wp-content/uploads/2019/07/Shipping-Department-1-768x512.jpg 768w, https://tjaerospace.com/wp-content/uploads/2019/07/Shipping-Department-1.jpg 1600w" sizes="(max-width: 1200px) 100vw, 1200px" /></figure>
                      </div>
                      <div class="blockgallery--item">
                         <figure class="blockgallery--figure has-margin-left-15 has-margin-right-15"><img src="http://new.tjaerospace.com/wp-content/uploads/2019/07/Shipping-Department-3-1200x800.jpg" alt="" data-id="842" data-link="http://new.tjaerospace.com/about-us/attachment/shipping-department-3/" class="wp-image-842" srcset="https://tjaerospace.com/wp-content/uploads/2019/07/Shipping-Department-3-1200x800.jpg 1200w, https://tjaerospace.com/wp-content/uploads/2019/07/Shipping-Department-3-600x400.jpg 600w, https://tjaerospace.com/wp-content/uploads/2019/07/Shipping-Department-3-768x512.jpg 768w, https://tjaerospace.com/wp-content/uploads/2019/07/Shipping-Department-3.jpg 1600w" sizes="(max-width: 1200px) 100vw, 1200px" /></figure>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </section>
    </main>
 </article>

@endsection
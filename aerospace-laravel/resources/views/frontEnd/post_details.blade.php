@extends('frontEnd.layouts.master')
@section('content')
<article class="post-641 post type-post status-publish format-standard has-post-thumbnail hentry category-news" itemscope="" itemtype="http://schema.org/Article">
    <main role="main" class="main">
       <section class="page-title-block">
          <img alt="TJ Aerospace Continues Working On Its CNC Manufacturing Facility In Vietnam" class="cover" src="{{url('images/',$post->img)}}" height="auto" width="auto">
          <div class="title-container">
             <div class="container mb-3 mb-md-5">
                <div class="row">
                   <div class="col-md-6">
                      <a class="text-uppercase lead font-weight-semibold" href={{url('/')}}>Back to all News</a>
                   </div>
                </div>
             </div>
          </div>
       </section>
       <section class="page-body-block">
          <div class="container py-4 py-md-6">
             <div class="date"><i class="fa fa-clock-o"></i> <time datetime="2019-07-08" itemprop="datePublished">July 8, 2019</time></div>
             <h1 class="font-weight-extrabold mb-4 post-title">{{$post->title}}</h1>
             <div class="post-meta mb-5">
                <div class="row align-items-center">
                   <div class="col-auto mr-auto">
                      <hr>
                   </div>
                   <div class="col-auto ml-auto px-0 text-share"><span class="text-uppercase font-weight-bold opacity-40 small">Share this Post</span></div>
                   <div class="col-auto">
                      <div class="a2a_kit a2a_kit_size_24 a2a_default_style" style="line-height: 24px;">
                         <a class="a2a_button_facebook" target="_blank" href="/#facebook" rel="nofollow noopener">
                            <span class="a2a_svg a2a_s__default a2a_s_facebook" style="background-color: rgb(59, 89, 152); width: 24px; line-height: 24px; height: 24px; background-size: 24px; border-radius: 3px;">
                               <svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                  <path fill="#FFF" d="M17.78 27.5V17.008h3.522l.527-4.09h-4.05v-2.61c0-1.182.33-1.99 2.023-1.99h2.166V4.66c-.375-.05-1.66-.16-3.155-.16-3.123 0-5.26 1.905-5.26 5.405v3.016h-3.53v4.09h3.53V27.5h4.223z"></path>
                               </svg>
                            </span>
                            <span class="a2a_label">Facebook</span>
                         </a>
                         <a class="a2a_button_twitter" target="_blank" href="/#twitter" rel="nofollow noopener">
                            <span class="a2a_svg a2a_s__default a2a_s_twitter" style="background-color: rgb(85, 172, 238); width: 24px; line-height: 24px; height: 24px; background-size: 24px; border-radius: 3px;">
                               <svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                  <path fill="#FFF" d="M28 8.557a9.913 9.913 0 0 1-2.828.775 4.93 4.93 0 0 0 2.166-2.725 9.738 9.738 0 0 1-3.13 1.194 4.92 4.92 0 0 0-3.593-1.55 4.924 4.924 0 0 0-4.794 6.049c-4.09-.21-7.72-2.17-10.15-5.15a4.942 4.942 0 0 0-.665 2.477c0 1.71.87 3.214 2.19 4.1a4.968 4.968 0 0 1-2.23-.616v.06c0 2.39 1.7 4.38 3.952 4.83-.414.115-.85.174-1.297.174-.318 0-.626-.03-.928-.086a4.935 4.935 0 0 0 4.6 3.42 9.893 9.893 0 0 1-6.114 2.107c-.398 0-.79-.023-1.175-.068a13.953 13.953 0 0 0 7.55 2.213c9.056 0 14.01-7.507 14.01-14.013 0-.213-.005-.426-.015-.637.96-.695 1.795-1.56 2.455-2.55z"></path>
                               </svg>
                            </span>
                            <span class="a2a_label">Twitter</span>
                         </a>
                         <a class="a2a_button_linkedin" target="_blank" href="/#linkedin" rel="nofollow noopener">
                            <span class="a2a_svg a2a_s__default a2a_s_linkedin" style="background-color: rgb(0, 123, 181); width: 24px; line-height: 24px; height: 24px; background-size: 24px; border-radius: 3px;">
                               <svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                  <path d="M6.227 12.61h4.19v13.48h-4.19V12.61zm2.095-6.7a2.43 2.43 0 0 1 0 4.86c-1.344 0-2.428-1.09-2.428-2.43s1.084-2.43 2.428-2.43m4.72 6.7h4.02v1.84h.058c.56-1.058 1.927-2.176 3.965-2.176 4.238 0 5.02 2.792 5.02 6.42v7.395h-4.183v-6.56c0-1.564-.03-3.574-2.178-3.574-2.18 0-2.514 1.7-2.514 3.46v6.668h-4.187V12.61z" fill="#FFF"></path>
                               </svg>
                            </span>
                            <span class="a2a_label">LinkedIn</span>
                         </a>
                         <a class="a2a_dd" href="https://www.addtoany.com/share#url=https%3A%2F%2Ftjaerospace.com%2Fnews%2Ftj-aerospace-continues-working-on-its-cnc-manufacturing-facility-in-vietnam%2F&amp;title=TJ%20Aerospace%20Continues%20Working%20On%20Its%20CNC%20Manufacturing%20Facility%20In%20Vietnam%20%7C%20TJ%20Aerospace">
                            <span class="a2a_svg a2a_s__default a2a_s_a2a" style="background-color: rgb(1, 102, 255); width: 24px; line-height: 24px; height: 24px; background-size: 24px; border-radius: 3px;">
                               <svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                  <g fill="#FFF">
                                     <path d="M14 7h4v18h-4z"></path>
                                     <path d="M7 14h18v4H7z"></path>
                                  </g>
                               </svg>
                            </span>
                            <span class="a2a_label a2a_localize" data-a2a-localize="inner,Share">Chia sẻ</span>
                         </a>
                         <div style="clear: both;"></div>
                      </div>
                   </div>
                </div>
             </div>
             <figure class="wp-block-image"><img src="{{url('images/',$post->img)}}" sizes="(max-width: 1200px) 100vw, 1200px"></figure>
             <h3 class="mb-5">{{$post->content}}</h3>
             <figure class="wp-block-image"><img src="{{url('images/',$post->img)}}" sizes="(max-width: 1200px) 100vw, 1200px"></figure>
             <p> {{$post->content}}</p>
             <div class="row mt-5">
                <div class="col col-sm-6 text-left">
                   <a class="link-backtoall text-lightgray text-uppercase small font-weight-semibold" href="https://tjaerospace.com/news/"><i class="fa fa-angle-left"></i> Back to all News</a>
                </div>
                <div class="col-auto col-sm-6 text-right">
                   <a class="link-next-post text-lightgray text-uppercase small font-weight-semibold" href="https://tjaerospace.com/news/happy-independence-day-from-the-tj-aerospace-team/" rel="prev">Next Post <i class="fa fa-angle-right"></i></a>                    
                </div>
             </div>
          </div>
       </section>
       <section class="page-share-block">
          <div class="container py-5">
             <h6 class="mb-4 mx-auto text-center text-uppercase text-light font-weight-bold">Share this Post</h6>
             <div class="row">
                <div class="col-auto mx-auto">
                   <div class="a2a_kit a2a_kit_size_64 a2a_default_style" data-a2a-icon-color="transparent" style="line-height: 64px;">
                      <a class="a2a_button_facebook" target="_blank" href="/#facebook" rel="nofollow noopener">
                         <span class="a2a_svg a2a_s__default a2a_s_facebook" style="background-color: transparent; width: 64px; line-height: 64px; height: 64px; background-size: 64px; border-radius: 9px;">
                            <svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                               <path fill="#FFF" d="M17.78 27.5V17.008h3.522l.527-4.09h-4.05v-2.61c0-1.182.33-1.99 2.023-1.99h2.166V4.66c-.375-.05-1.66-.16-3.155-.16-3.123 0-5.26 1.905-5.26 5.405v3.016h-3.53v4.09h3.53V27.5h4.223z"></path>
                            </svg>
                         </span>
                         <span class="a2a_label">Facebook</span>
                      </a>
                      <a class="a2a_button_twitter" target="_blank" href="/#twitter" rel="nofollow noopener">
                         <span class="a2a_svg a2a_s__default a2a_s_twitter" style="background-color: transparent; width: 64px; line-height: 64px; height: 64px; background-size: 64px; border-radius: 9px;">
                            <svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                               <path fill="#FFF" d="M28 8.557a9.913 9.913 0 0 1-2.828.775 4.93 4.93 0 0 0 2.166-2.725 9.738 9.738 0 0 1-3.13 1.194 4.92 4.92 0 0 0-3.593-1.55 4.924 4.924 0 0 0-4.794 6.049c-4.09-.21-7.72-2.17-10.15-5.15a4.942 4.942 0 0 0-.665 2.477c0 1.71.87 3.214 2.19 4.1a4.968 4.968 0 0 1-2.23-.616v.06c0 2.39 1.7 4.38 3.952 4.83-.414.115-.85.174-1.297.174-.318 0-.626-.03-.928-.086a4.935 4.935 0 0 0 4.6 3.42 9.893 9.893 0 0 1-6.114 2.107c-.398 0-.79-.023-1.175-.068a13.953 13.953 0 0 0 7.55 2.213c9.056 0 14.01-7.507 14.01-14.013 0-.213-.005-.426-.015-.637.96-.695 1.795-1.56 2.455-2.55z"></path>
                            </svg>
                         </span>
                         <span class="a2a_label">Twitter</span>
                      </a>
                      <a class="a2a_button_linkedin" target="_blank" href="/#linkedin" rel="nofollow noopener">
                         <span class="a2a_svg a2a_s__default a2a_s_linkedin" style="background-color: transparent; width: 64px; line-height: 64px; height: 64px; background-size: 64px; border-radius: 9px;">
                            <svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                               <path d="M6.227 12.61h4.19v13.48h-4.19V12.61zm2.095-6.7a2.43 2.43 0 0 1 0 4.86c-1.344 0-2.428-1.09-2.428-2.43s1.084-2.43 2.428-2.43m4.72 6.7h4.02v1.84h.058c.56-1.058 1.927-2.176 3.965-2.176 4.238 0 5.02 2.792 5.02 6.42v7.395h-4.183v-6.56c0-1.564-.03-3.574-2.178-3.574-2.18 0-2.514 1.7-2.514 3.46v6.668h-4.187V12.61z" fill="#FFF"></path>
                            </svg>
                         </span>
                         <span class="a2a_label">LinkedIn</span>
                      </a>
                      <a class="a2a_dd" href="https://www.addtoany.com/share#url=https%3A%2F%2Ftjaerospace.com%2Fnews%2Ftj-aerospace-continues-working-on-its-cnc-manufacturing-facility-in-vietnam%2F&amp;title=TJ%20Aerospace%20Continues%20Working%20On%20Its%20CNC%20Manufacturing%20Facility%20In%20Vietnam%20%7C%20TJ%20Aerospace">
                         <span class="a2a_svg a2a_s__default a2a_s_a2a" style="background-color: transparent; width: 64px; line-height: 64px; height: 64px; background-size: 64px; border-radius: 9px;">
                            <svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                               <g fill="#FFF">
                                  <path d="M14 7h4v18h-4z"></path>
                                  <path d="M7 14h18v4H7z"></path>
                               </g>
                            </svg>
                         </span>
                         <span class="a2a_label a2a_localize" data-a2a-localize="inner,Share">Chia sẻ</span>
                      </a>
                      <div style="clear: both;"></div>
                   </div>
                </div>
             </div>
          </div>
       </section>
    </main>
</article>
<script async="" src="https://static.addtoany.com/menu/page.js"></script>
@endsection
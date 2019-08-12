<article class="post-14 page type-page status-publish has-post-thumbnail hentry" itemscope="" itemtype="http://schema.org/Article">
    <main role="main" class="main">
       <section class="page-title-block">
          <picture>
             <source media="(max-width: 575px)" srcset={{asset('asset/wp-content/uploads/2019/07/gear-400x720.jpg')}}>
             <img alt="News" class="cover" src={{asset('asset/wp-content/uploads/2019/07/gear-1920x800.jpg')}} height="auto" width="auto">
          </picture>
          <div class="title-container">
             <div class="container">
                <div class="row">
                   <div class="col-md-6">
                      <h1 class="page-title">News</h1>
                      <div class="lead">Latest Updates from TJ Aerospace</div>
                   </div>
                </div>
             </div>
          </div>
       </section>
       <section class="page-body-block bg-quaternary">
          <div class="container pb-md-6 pb-4">
             <div class="row">
             <article itemscope="" itemtype="http://schema.org/ItemPage" class="col-md-6 mb-4 mb-md-5 col-news-featured">
                   <div class="card card-news card-news-featured">
                      <div class="card-header">
                         <a title="TJ Aerospace Updates Its Website" href="https://tjaerospace.com/news/tj-aerospace-updates-its-website/">
                         <img width="600" height="400" src={{asset('asset/wp-content/uploads/2019/07/tja-home-page-600x400.jpg')}} class="card-img-top wp-post-image" alt="">            </a>
                      </div>
                      <div class="card-body">
                         <div class="date"><i class="fa fa-clock-o"></i> <time datetime="2019-07-15" itemprop="datePublished">July 15, 2019</time></div>
                         <h4 class="h5 font-weight-bold"><a href="https://tjaerospace.com/news/tj-aerospace-updates-its-website/">TJ Aerospace Updates Its Website</a></h4>
                      </div>
                      <div class="card-footer">
                         <a title="TJ Aerospace Updates Its Website" class="read-more" href="https://tjaerospace.com/news/tj-aerospace-updates-its-website/"><span>Read More</span> <i class="fa fa-angle-right"></i></a>
                      </div>
                   </div>
                </article>
                <article itemscope="" itemtype="http://schema.org/ItemPage" class="col-md-6 mb-4 mb-md-5 col-news-featured">
                   <div class="card card-news card-news-featured">
                      <div class="card-header">
                         <a title="TJ Aerospace Begins Installation of Their Two New Swiss Turn Machines and Bar Feeders" href="https://tjaerospace.com/news/tj-aerospace-begins-installation-of-their-two-new-swiss-turn-machines-and-bar-feeders/">
                         <img width="600" height="400" src={{asset('asset/wp-content/uploads/2019/06/Citizen-Cincom-L20-600x400.png')}} class="card-img-top wp-post-image" alt="">            </a>
                      </div>
                      <div class="card-body">
                         <div class="date"><i class="fa fa-clock-o"></i> <time datetime="2019-07-10" itemprop="datePublished">July 10, 2019</time></div>
                         <h4 class="h5 font-weight-bold"><a href="https://tjaerospace.com/news/tj-aerospace-begins-installation-of-their-two-new-swiss-turn-machines-and-bar-feeders/">TJ Aerospace Begins Installation of Their Two New Swiss Turn Machines and Bar Feeders</a></h4>
                      </div>
                      <div class="card-footer">
                         <a title="TJ Aerospace Begins Installation of Their Two New Swiss Turn Machines and Bar Feeders" class="read-more" href="https://tjaerospace.com/news/tj-aerospace-begins-installation-of-their-two-new-swiss-turn-machines-and-bar-feeders/"><span>Read More</span> <i class="fa fa-angle-right"></i></a>
                      </div>
                   </div>
                </article>
             @foreach($posts as $post)
                <article itemscope="" itemtype="http://schema.org/ItemPage" class="mb-4 col-12">
                   <div class="card card-news flex-md-row">
                   <a title={{$post->title}} href="/news/{{$post->id}}">
                      <img width="600" height="400" src={{$post->img}} class="card-img-left flex-auto wp-post-image" alt="">        </a>
                      <div class="card-body d-flex flex-column align-items-start">
                         <div class="card-text">
                            <div class="date"><i class="fa fa-clock-o"></i> <time datetime="2019-07-04" itemprop="datePublished">{{$post->created_at}}</time></div>
                            <h4 class="h5 font-weight-bold"><a href="/news/{{$post->id}}">{{$post->title}}</a></h4>
                         </div>
                         <div class="card-footer mt-auto">
                            <a title="Happy Independence Day from the TJ Aerospace Team" class="read-more" href="https://tjaerospace.com/news/happy-independence-day-from-the-tj-aerospace-team/"><span>Read More</span> <i class="fa fa-angle-right"></i></a>
                         </div>
                      </div>
                   </div>
                </article>
               @endforeach
                <nav class="nav flex-row pagination"><span aria-current="page" class="page-numbers current"><span class="sr-only">Page:  </span>1</span>
                   <a class="page-numbers" href="https://tjaerospace.com/news/page/2/"><span class="sr-only">Page:  </span>2</a>
                   <a class="next page-numbers" href="https://tjaerospace.com/news/page/2/"><span class="text-uppercase">Next</span><i class="fa fa-angle-right"></i></a>
                </nav>
             </div>
          </div>
       </section>
    </main>
 </article>
@extends('templates.master')

@section('title')
    - Blog Home
@endsection

@section('content')
    <!-- BLOG BEGIN -->
    @include('templates.intro')
    <section id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-8 blog-content-sidebar">
                    <ul class="news-list post-list">
                        <li>
                            <h2><a href="single.html">Resolving the issue with synchronization in old version.</a></h2>
                            <div class="news-info">
                                <div class="author"><i class="icon icon-user"></i>John Doe</div>
                                <div class="date"><i class="icon icon-clock"></i>16.07.2014</div>
                                <div class="comments"><i class="icon icon-bubble"></i>7 Comments</div>
                            </div>
                            <div class="post-content">
                                <img src="images/post_img_4.jpg" alt="Resolving the issue with synchronization in old version" class="img-responsive"/>
                                <p>You may take this text as a copied and pasted one, but it is not so. Appearances are deceitful. For real, this text was created by our copywriters, so you could see in details how would the final product look
                                <a href="single.html" class="read-more" title="read more">&bull;&bull;&bull;</a></p>
                            </div>
                        </li>
                        <li>
                            <h2><a href="single.html">Look for the latest update in coming days.</a></h2>
                            <div class="news-info">
                                <div class="author"><i class="icon icon-user"></i>John Doe</div>
                                <div class="date"><i class="icon icon-clock"></i>16.07.2014</div>
                                <div class="comments"><i class="icon icon-bubble"></i>7 Comments</div>
                            </div>
                            <div class="post-content">
                                <img src="images/post_img_1.jpg" alt="Look for the latest update in coming days" class="img-responsive"/>
                                <p>You may take this text as a copied and pasted one, but it is not so. Appearances are deceitful. For real, this text was created by our copywriters, so you could see in details how would the final product look
                                <a href="single.html" class="read-more" title="read more">&bull;&bull;&bull;</a></p>
                            </div>
                        </li>
                        <li>
                            <h2><a href="single.html">The meeting of developers of cross-platform apps.</a></h2>
                            <div class="news-info">
                                <div class="author"><i class="icon icon-user"></i>John Doe</div>
                                <div class="date"><i class="icon icon-clock"></i>16.07.2014</div>
                                <div class="comments"><i class="icon icon-bubble"></i>7 Comments</div>
                            </div>
                            <div class="post-content">
                                <img src="images/post_img_2.jpg" alt="The meeting of developers of cross-platform apps" class="img-responsive"/>
                                <p>You may take this text as a copied and pasted one, but it is not so. Appearances are deceitful. For real, this text was created by our copywriters, so you could see in details how would the final product look
                                <a href="single.html" class="read-more" title="read more">&bull;&bull;&bull;</a></p>
                            </div>
                        </li>
                        <li>
                            <h2><a href="single.html">The new functional sketches.</a></h2>
                            <div class="news-info">
                                <div class="author"><i class="icon icon-user"></i>John Doe</div>
                                <div class="date"><i class="icon icon-clock"></i>16.07.2014</div>
                                <div class="comments"><i class="icon icon-bubble"></i>7 Comments</div>
                            </div>
                            <div class="post-content">
                                <img src="images/post_img_3.jpg" alt="The new functional sketches" class="img-responsive"/>
                                <p>You may take this text as a copied and pasted one, but it is not so. Appearances are deceitful. For real, this text was created by our copywriters, so you could see in details how would the final product look
                                <a href="single.html" class="read-more" title="read more">&bull;&bull;&bull;</a></p>
                            </div>
                        </li>
                    </ul>
                    
                    <ul class="post-pagination">
                        <li class="prev"><a href="#">&nbsp;</a></li>
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li class="next"><a href="#">&nbsp;</a></li>
                    </ul>
                    
                </div>
                <aside class="col-md-3 col-md-offset-1 blog-sidebar">
        <div class="search">
            <form id="search_form">
                <div class="input-group">
                    <input class="form-control" type="text" name="search" placeholder="Search " value="">
                    <div class="input-group-btn">
                        <button type="submit" class="icon-magnifier btn"></button>
                    </div>
                </div>
            </form>
        </div>
        <div class="widget category">
            <h3>Category</h3>
            <ul>
                <li><a href="#">Updates</a></li>
                <li><a href="#">Company news</a></li>
                <li><a href="#">Fresh releases</a></li>
                <li><a href="#">Actions &amp; offers</a></li>
            </ul>
        </div>
        <div class="widget recent_posts">
            <h3>Recent posts</h3>
            <ul>
                <li>
                    <a href="#">The meeting of developers of cross-platform apps.</a>
                    <span class="date">10 June 2014</span>
                    <span class="comments"><i class="icon icon-bubble"></i>5</span>
                </li>
                <li>
                    <a href="#">The new functional sketches.</a>
                    <span class="date">8 June 2014</span>
                    <span class="comments"><i class="icon icon-bubble"></i>0</span>
                </li>
                <li>
                    <a href="#">Resolving the issue with synchronization in old version.</a>
                    <span class="date">5 May 2014</span>
                    <span class="comments"><i class="icon icon-bubble"></i>11</span>
                </li>
            </ul>
        </div>
        <div class="widget tag_cloud">
            <h3>Tag cloud</h3>
            <ul class="tags">
                <li><a href="#">Last update</a></li>
                <li><a href="#">Photo</a></li>
                <li><a href="#">Comming soon</a></li>
                <li><a href="#">Offers</a></li>
                <li><a href="#">New idea</a></li>
            </ul>
        </div>
                </aside>
            </div>
        </div>
    </section>
    <!-- BLOG END -->

    <!-- DOWNLOAD BEGIN -->
    <section id="download" class="bg-color-main">
        <div class="container-fluid wow fadeInDown">
            <a href="index.html#wrap" class="goto">
                <h2><i class="icon soc-icon-apple"></i>Download App</h2>
            </a>
        </div>
        <div class="block-bg" data-stellar-ratio="0.5"></div>
    </section>
    <!-- DOWNLOAD END -->

    <!-- FACTS BEGIN -->
    <section id="facts">
        <div class="container">
            <ul class="facts-list">
                <li class="wow bounceIn">
                    <i class="icon icon-cloud-download"></i>
                    <h3 class="wow">284</h3>
                    <h4>Downloads</h4>
                </li>
                <li class="wow bounceIn" data-wow-delay="0.4s">
                    <i class="icon icon-star"></i>
                    <h3 class="wow">135</h3>
                    <h4>Top Rates</h4>
                </li>
                <li class="wow bounceIn" data-wow-delay="0.8s">
                    <i class="icon icon-like"></i>
                    <h3 class="wow">77</h3>
                    <h4>Likes</h4>
                </li>
                <li class="wow bounceIn" data-wow-delay="1.2s">
                    <i class="icon icon-clock"></i>
                    <h3 class="wow">741</h3>
                    <h4>Hours Safe</h4>
                </li>
            </ul>
        </div>
    </section>
    <!-- FACTS END -->  
@endsection
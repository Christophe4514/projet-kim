@extends('client-layouts.client')

@section('content')
    @include('includes.client-header')

    @include('includes.banners.banner-news')

    <section id="main-container" class="main-container">
        <div class="container">
            <div class="row">

                <div class="col-lg-7 mb-5 mb-lg-0">
                    @foreach ($news as $item)
                        <div class="post">
                            <div class="post-media post-image">
                                <img loading="lazy" src="storage/nouvelle_images/{{ $item->nouvelle_image }}" class="img-fluid"
                                    alt="post-image">
                            </div>

                            <div class="post-body">
                                <div class="entry-header">
                                    <div class="post-meta">
                                        <span class="post-author">
                                            <i class="far fa-user"></i><a href="#"> Admin</a>
                                        </span>
                                        <span class="post-cat">
                                            <i class="far fa-folder-open"></i><a href="#"> News</a>
                                        </span>
                                        <span class="post-meta-date"><i class="far fa-calendar"></i> June 14, 2016</span>
                                        <span class="post-comment"><i class="far fa-comment"></i> 03<a href="#"
                                                class="comments-link">Comments</a></span>
                                    </div>
                                    <h2 class="entry-title">
                                        <a href="news-single.html">{{ $item->nouvelle_titre }}</a>
                                    </h2>
                                </div><!-- header end -->

                                <div class="entry-content">
                                    <p>{{ $item->nouvelle_contenu }}...</p>
                                </div>

                                <div class="post-footer">
                                    <a href="news-single.html" class="btn btn-primary">Continue Reading</a>
                                </div>

                            </div>
                        </div>
                    @endforeach
                    <nav class="paging" aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#"><i
                                        class="fas fa-angle-double-left"></i></a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i
                                        class="fas fa-angle-double-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-4">

                    <div class="sidebar sidebar-right">
                        <div class="widget recent-posts">

                            @include('includes.recent-post')

                        </div>
                        <div class="widget">
                            <h3 class="widget-title">Archives </h3>
                            <ul class="arrow nav nav-tabs">
                                <li><a href="#">Feburay 2016</a></li>
                                <li><a href="#">January 2016</a></li>
                                <li><a href="#">December 2015</a></li>
                                <li><a href="#">November 2015</a></li>
                                <li><a href="#">October 2015</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('includes.client-footer')
@endsection

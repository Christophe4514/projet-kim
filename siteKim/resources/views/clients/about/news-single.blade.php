@extends('client-layouts.client')

@section('content')
    @include('includes.client-header')

    @include('includes.banners.banner-news')

    <section id="main-container" class="main-container">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 mb-5 mb-lg-0">

                    <div class="post-content post-single">
                        <div class="post-media post-image">
                            <img loading="lazy" style="height : 500px; width : 600px"
                                src="storage/nouvelle_images/{{ $sigleNews->nouvelle_image }}" class="img-fluid"
                                alt="post-image">
                        </div>

                        <div class="post-body">
                            <div class="entry-header">
                                <div class="post-meta">
                                    <span class="post-author">
                                        <i class="far fa-user"></i><a href="#"> Admin</a>
                                    </span>
                                    <span class="post-cat">
                                        <i class="far fa-folder-open"></i><a href="#"></a>
                                    </span>
                                    <span class="post-meta-date"><i class="far fa-calendar"></i>
                                        {{ $sigleNews->created_at }}</span>
                                    <span class="post-comment"><i class="far fa-comment"></i> 03<a href="#"
                                            class="comments-link">Comments</a></span>
                                </div>
                                <h2 class="entry-title">
                                    {{ $sigleNews->nouvelle_titre }}
                                </h2>
                            </div><!-- header end -->

                            <div class="entry-content">
                                <p></p>
                                <blockquote>
                                    <p>{{ $sigleNews->nouvelle_contenu }}</p>
                                </blockquote>
                            </div>

                        </div>
                    </div>


                    <div id="comments" class="comments-area">
                        <h3 class="comments-heading">07 Comments</h3>

                        <ul class="comments-list">
                            <li>
                                <div class="comment d-flex">
                                    {{-- <img loading="lazy" class="comment-avatar" alt="author" src="images/news/avator1.png"> --}}
                                    <div class="comment-body">
                                        <div class="meta-data">
                                            <span class="comment-author mr-3">Michelle Aimber</span>
                                            {{-- <span class="comment-date float-right">January 17, 2016 at 1:38 pm</span> --}}
                                        </div>
                                        <div class="comment-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut
                                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                                exercitation ullamco laboris
                                                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehen.
                                            </p>
                                        </div>
                                        <div class="text-left">
                                            <a class="comment-reply font-weight-bold" href="#">Reply</a>
                                        </div>
                                    </div>
                                </div><!-- Comments end -->

                                <ul class="comments-reply">
                                    <li>
                                        <div class="comment d-flex">
                                            {{-- <img loading="lazy" class="comment-avatar" alt="author" src="images/news/avator2.png"> --}}
                                            <div class="comment-body">
                                                <div class="meta-data">
                                                    <span class="comment-author mr-3">Tom Harnandez</span>
                                                    {{-- <span class="comment-date float-right">January 17, 2016 at 1:38 --}}
                                                        pm</span>
                                                </div>
                                                <div class="comment-content">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod tempor incididunt ut
                                                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                                        exercitation ullamco
                                                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                                        dolor in reprehen.</p>
                                                </div>
                                                <div class="text-left">
                                                    <a class="comment-reply font-weight-bold" href="#">Reply</a>
                                                </div>
                                            </div>
                                        </div><!-- Comments end -->
                                    </li>
                                </ul><!-- comments-reply end -->
                                <div class="comment d-flex last">
                                    {{-- <img loading="lazy" class="comment-avatar" alt="author" src="images/news/avator3.png"> --}}
                                    <div class="comment-body">
                                        <div class="meta-data">
                                            <span class="comment-author mr-3">Genelia Dusteen</span>
                                            {{-- <span class="comment-date float-right">January 17, 2016 at 1:38 pm</span> --}}
                                        </div>
                                        <div class="comment-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut
                                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                                exercitation ullamco laboris
                                                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehen.
                                            </p>
                                        </div>
                                        <div class="text-left">
                                            <a class="comment-reply font-weight-bold" href="#">Reply</a>
                                        </div>
                                    </div>
                                </div><!-- Comments end -->
                            </li><!-- Comments-list li end -->
                        </ul><!-- Comments-list ul end -->
                    </div><!-- Post comment end -->

                    <div class="comments-form border-box">
                        <h3 class="title-normal">Add a comment</h3>

                        <form role="form">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="message">
                                            <textarea class="form-control required-field" id="message" placeholder="Your Comment" rows="10" required></textarea>
                                        </label>
                                    </div>
                                </div><!-- Col 12 end -->

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="name"><input class="form-control" name="name" id="name"
                                                placeholder="Your Name" type="text" required></label>
                                    </div>
                                </div><!-- Col 4 end -->

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="email"><input class="form-control" name="email" id="email"
                                                placeholder="Your Email" type="email" required></label>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="website"><input class="form-control" id="website"
                                                placeholder="Your Website" type="text" required></label>
                                    </div>
                                </div>

                            </div><!-- Form row end -->
                            <div class="clearfix">
                                <button class="btn btn-primary" type="submit" aria-label="post-comment">Post
                                    Comment</button>
                            </div>
                        </form><!-- Form end -->
                    </div><!-- Comments form end -->
                </div><!-- Content Col end -->

                <div class="col-lg-4">

                    <div class="sidebar sidebar-right">
                        @include('includes.recent-post')
                        <!-- Recent post end -->

                        {{-- <div class="widget">
              
                </div><!-- Categories end --> --}}

                        {{-- <div class="widget">
                 
                </div><!-- Archives end --> --}}

                        <div class="widget widget-tags">
                            @include('includes.tags')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('includes.client-footer')
@endsection

<div class="col-lg-4 mt-5 mt-lg-0">
    <div class="sidebar sidebar-right">
        <div class="widget recent-posts">
            <h3 class="widget-title">Recent Posts</h3>
            <ul class="list-unstyled">
                @foreach ($recentProject as $item)
                <li class="d-flex align-items-center">
                    <div class="posts-thumb">
                        <a href="#"><img loading="lazy" alt="news-image"
                                src="{{ asset('front-end/images/news/news1.jpg') }}"></a>
                    </div>
                    <div class="post-info">
                        <h4 class="entry-title">
                            <a href="#">{{ $item->project_name }}</a>
                        </h4>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

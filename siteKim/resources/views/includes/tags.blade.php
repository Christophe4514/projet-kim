<div class="widget">
    <h3 class="widget-title">Categories</h3>
    <ul class="arrow nav nav-tabs">
        @foreach ($servicesName as $item)
        <li><a href="#">{{ $item->service_name }} </a></li>
    @endforeach
    </ul>
  </div>
<div class="widget widget-tags">
    <h3 class="widget-title">Tags </h3>

    <ul class="list-unstyled">
        @foreach ($servicesName as $item)
        <li><a href="#">{{ $item->service_name }} </a></li>
    @endforeach
    </ul>
  </div>
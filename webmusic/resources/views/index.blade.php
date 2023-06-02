index.blade.php
@extends('layout')
@section('content')
<section id="portfolio" class="portfolio">
  <div class="container">

    <div class="section-title">
      <h2>Tune Source Music</h2>
    </div>
    <form class="form-inline">
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>
    </form>

    <form action="{{route('search')}}"
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                               aria-label="Search" aria-describedby="basic-addon2" name="keyword">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>

    <div class="row portfolio-container">
      @foreach($videos as $video)
      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-info">
          <h4>{{$video->name}}</h4>
          <button class="btn btn-primary">{{$video->category}}</button>
        </div>
        <iframe src="https://www.youtube.com/embed/{{substr($video->video_url, -11)}}">
        </iframe>
      </div>
      @endforeach
    </div>
    {{ $videos->links() }}
  </div>
</section><!-- End Portfolio Section -->

@endsection
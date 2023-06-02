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
      @foreach($audios as $audio)
      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-info">
          <input type="file" placeholder="Image" value="" name="image" border=3 height=150 width=200 />
          <h4>{{$audio->name}}</h4>
          <input type="file" id="audio" name="audio" accept="audio/*">
            @if (isset($audio) && $audio->audio)
            <audio controls>
                <source src="{{ asset('audio'.$audio->audio) }}"  id="audio" placeholder="Audio" Value="" name="audio">
                Your browser does not support the audio element.
            </audio>
          <button class="btn btn-primary">{{$audio->category}}</button>
        </div>
        <iframe src="https://www.youtube.com/embed/{{substr($audio->audio, -11)}}">
        </iframe>
      </div>
      @endforeach
    </div>
    {{ $audios->links() }}
  </div>
</section><!-- End Portfolio Section -->

@endsection

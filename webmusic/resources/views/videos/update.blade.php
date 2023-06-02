update.blade.php
@extends('layouts.app')
@section('content')

    <section id="login" class="contact">
        <div class="container">
            <div class="section-title">
                <h2 class="text-center">Update Videos</h2>
            </div>

            <div class="row" style="justify-content: center;">

                <div class="col-lg-6">
                    <form class="" action="{{route('video.edit')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="php-email-form">
                            <input type="hidden" name="id" value="{{ $video->id }}">
                            <div class="col-lg-12 col-md-12">
                                <label for="name">Name of Video:</label>
                                <div class="col form-group">
                                    <input type="text" class="video-management form-control" name="name" value="{{ $video->name }}" placeholder="Mizubeo" required>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <label for="video_url">Video URL</label>
                                <div class="form-group">
                                    <input type="text" name="video_url" value="{{ $video->video_url }}" class="video-management form-control" placeholder="FMWS5vLCdPks" required>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <label for="description">Description</label>
                                <div class="form-group">
                                    <input type="text" name="description" value="{{ $video->description }}" placeholder="" class="video-management form-control" required>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <label for="category">Category</label><br><br>
                                <div class="form-group">
                                    <select name="category" class="form-control">
                                        <option value="MUSIC" @if ($video->category === 'MUSIC') {{'selected'}}@endif>Music</option>
                                        <option value="FILM" @if ($video->category === 'FILM') {{'selected'}}@endif>Film</option>
                                        <option value="NATURE" @if ($video->category === 'NATURE') {{'selected'}}@endif>Nature</option>
                                        <option value="OTHERS" @if ($video->category === 'OTHERS') {{'selected'}}@endif>Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="text-center">
                                <input type="hidden" name="id" value="{{ $video->id }}">
                                <button type="submit" class="btn btn-primary">Update Video</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->
@endsection
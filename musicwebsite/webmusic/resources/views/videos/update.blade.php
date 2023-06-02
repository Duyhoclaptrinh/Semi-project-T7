@extends('layouts.app')
@section('content')

    <section id="login" class="contact">
        <div class="container">
            <div class="section-title">
                <h2 class="text-center">Update Audios</h2>
            </div>

            <div class="row" style="justify-content: center;">

                <div class="col-lg-6">
                    <form class="" action="{{route('audio.edit')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="php-email-form">
                            <input type="hidden" name="id" value="{{ $audio->id }}">
                            <div class="col-lg-12 col-md-12">
                                <label for="name">Name of Audio:</label>
                                <div class="col form-group">
                                    <input type="text" class="audio-management form-control" name="name" value="{{ $audio->name }}" placeholder="Mizubeo" required>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <label for="audio_url">Audio URL</label>
                                <div class="form-group">
                                    <input type="text" name="audio_url" value="{{ $audio->audio_url }}" class="audio-management form-control" placeholder="FMWS5vLCdPks" required>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <label for="description">Description</label>
                                <div class="form-group">
                                    <input type="text" name="description" value="{{ $audio->description }}" placeholder="" class="audio-management form-control" required>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <label for="category">Category</label><br><br>
                                <div class="form-group">
                                    <select name="category" class="form-control">
                                        <option value="MUSIC" @if ($audio->category === 'MUSIC') {{'selected'}}@endif>Music</option>
                                        <option value="FILM" @if ($audio->category === 'FILM') {{'selected'}}@endif>Film</option>
                                        <option value="NATURE" @if ($audio->category === 'NATURE') {{'selected'}}@endif>Nature</option>
                                        <option value="OTHERS" @if ($audio->category === 'OTHERS') {{'selected'}}@endif>Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="text-center">
                                <input type="hidden" name="id" value="{{ $audio->id }}">
                                <button type="submit" class="btn btn-primary">Update Audio</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->
@endsection
@extends('layouts.app')
@section('content')

<section id="login" class="contact">
    <div class="container">
        <div class="section-title">
            <h2 class="text-center">Upload Audios</h2>
        </div>

        <div class="row" style="justify-content: center;">

            <div class="col-lg-6">
                <form class="" action="{{route('audio.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="php-email-form">
                        <div class="col-lg-12 col-md-12">
                            <label for="name">Name of Audio:</label>
                            <div class="col form-group">
                                <input type="text" class="audio-management form-control" name="name" value="" placeholder="Mizubeo" required>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <label for="audio_url">Audio URL</label>
                            <div class="form-group">
                                <input type="text" name="audio_url" value="" class="audio-management form-control" placeholder="FMWS5vLCdPks" required>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <label for="description">Description</label>
                            <div class="form-group">
                                <input type="text" name="description" value="" placeholder="" class="audio-management form-control" required>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <label for="category">Category</label><br><br>
                            <div class="form-group">
                                <select name="category" class="form-control">
                                    <option value="MUSIC">Music</option>
                                    <option value="FILM">Film</option>
                                    <option value="NATURE">Nature</option>
                                    <option value="OTHERS">Others</option>
                                </select>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Upload Audio</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>

    </div>
</section><!-- End Contact Section -->
@endsection
add.blade.php
@extends('layouts.app')
@section('content')

<section id="login" class="contact">
    <div class="container">
        <div class="section-title">
            <h2 class="text-center">Upload Videos</h2>
        </div>

        <div class="row" style="justify-content: center;">

            <div class="col-lg-6">
                <form class="" action="{{route('video.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="php-email-form">
                        <div class="col-lg-12 col-md-12">
                            <label for="name">Name of Video:</label>
                            <div class="col form-group">
                                <input type="text" class="video-management form-control" name="name" value="" placeholder="Mizubeo" required>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <label for="video_url">Video URL</label>
                            <div class="form-group">
                                <input type="text" name="video_url" value="" class="video-management form-control" placeholder="FMWS5vLCdPks" required>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <label for="description">Description</label>
                            <div class="form-group">
                                <input type="text" name="description" value="" placeholder="" class="video-management form-control" required>
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
                            <button type="submit" class="btn btn-primary">Upload Video</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>

    </div>
</section><!-- End Contact Section -->
@endsection
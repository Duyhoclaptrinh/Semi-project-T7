list-video.blade.php
@extends('layouts.app')
@section('content')
    <section>
        <div class="container">
            <table class="table">
                <tr>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Description</th>
                    <th>Publish Date</th>
                    <th>Video URL</th>
                    <th>Actions</th>
                </tr>
                @foreach($videos as $video)
                    <tr>
                        <td>{{ $video->name }}</td>
                        <td>{{ $video->category }}</td>
                        <td>{{ $video->description }}</td>
                        <td>{{ $video->created_at }}</td>
                        <td>
                            <iframe width="230" height="157" src="https://www.youtube.com/embed/{{substr($video->video_url, -11)}}">
                            </iframe>
                        </td>
                        <td>
                            <a href="{{ route('video.update',$video->id) }}">
                                <button type="button" class="btn btn-primary">UPDATE</button>
                            </a>
                            <a href="{{ route('video.delete',$video->id) }}">
                                <button type="button" class="btn btn-danger">DELETE</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
            {{ $videos->links() }}
        </div>
    </section>
@endsection
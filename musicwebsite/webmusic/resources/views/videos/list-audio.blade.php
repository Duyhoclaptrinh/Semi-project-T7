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
                    <th>Audio URL</th>
                    <th>Actions</th>
                </tr>
                @foreach($audios as $audio)
                    <tr>
                        <td>{{ $audio->name }}</td>
                        <td>{{ $audio->category }}</td>
                        <td>{{ $audio->description }}</td>
                        <td>{{ $audio->created_at }}</td>
                        <td>
                            <iframe width="230" height="157" src="https://www.youtube.com/embed/{{substr($audio->audio_url, -11)}}">
                            </iframe>
                        </td>
                        <td>
                            <a href="{{ route('audio.update',$audio->id) }}">
                                <button type="button" class="btn btn-primary">UPDATE</button>
                            </a>
                            <a href="{{ route('audio.delete',$audio->id) }}">
                                <button type="button" class="btn btn-danger">DELETE</button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
            {{ $audios->links() }}
        </div>
    </section>
@endsection
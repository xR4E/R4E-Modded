@extends('layout.default')

@section('content')
    <div class="container-fluid">
        @include('blocks.news')
        @include('blocks.donations')

        @if (!auth()->user()->chat_hidden)
            @include('blocks.chat')
        @endif

        @include('blocks.featured')
        @include('blocks.poll')
        @include('blocks.top_torrents')
        @include('blocks.top_uploaders')
        @include('blocks.latest_topics')
        @include('blocks.latest_posts')
        @include('blocks.online')
        @include('blocks.calendar')
    </div>
@endsection

@extends('layout.index')

@section('content')
@foreach ($data as $datum)

 <!-- Post preview-->
 <div class="post-preview">
    <a href="post.html">
        <h2 class="post-title">{{ $datum -> title }}</h2>
        <h3 class="post-subtitle">{{ $datum -> excerpt }}</h3>
    </a>
    <p class="post-meta">
        Posted by
        <a href="#!">Start Bootstrap</a> on September 24, 2023
    </p>
</div>
<!-- Divider-->
<hr class="my-4" />
@endforeach
@endsection


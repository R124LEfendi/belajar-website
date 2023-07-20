

@extends('layouts.main')

@section('container')
@foreach ($biografi as $post)
<article class="mb-5">

<h2>{{ $post["judul"] }}</h2>
<h1>{{ $post["nama"] }}</h1>
<h5>{{ $post["latar belakang"] }}</h5>
    
</article>
@endforeach
@endsection

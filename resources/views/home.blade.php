
@extends('layout', ['title' => 'Home'])

@section('data-title')
<h1 style="color: azure"><strong>Posts</strong></h1>
@endsection

@section('content')
    @include('partials.content')
@endsection

@push('scripts')
    <script>
      $(document).ready(()=>{
        $("nav div > *")
        .addClass("btn")
        .css("margin-right", "10px")
        .parent()
        .css("margin-top", "20px");
      })
    </script>
@endpush
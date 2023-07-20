@extends('template')
@section('content')
<div class="jumbotron">
    <h1 class="display-4" >Hello World</h1>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam reprehenderit in provident, praesentium repellat voluptatum minus commodi nesciunt sunt ea. Maxime ex libero numquam rem eum maiores sit eaque alias?</p>
    <hr class="my-4">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum est provident, a quos ullam ut fugiat ipsum laudantium eius laboriosam.</p>
    <a class="btn btn-danger btn-lg" href={{url('login/google')}}>Login Via Google</a>
</div>
    
@endsection
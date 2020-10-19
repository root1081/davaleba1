@extends('main', [
    'title' => $title,
    'showFooter' =>  $showFooter,
    'theme' =>  $theme,
    'menu'  => $menu
])
@section('content')
    <h1>{{$text}}</h1>
@endsection

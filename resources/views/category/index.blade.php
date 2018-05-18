@extends('uslugi.layout',  array('title'=>$page['title'],'price'=>$page['price'], 'allServise'=>$page['allServise'], 'menus'=>$page['menu']))
@section('content')
   {!! $page['content'] !!}
@endsection
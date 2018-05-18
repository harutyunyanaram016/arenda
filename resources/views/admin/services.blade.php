@extends('admin.layout', array('title'=>$page['title']))

@section('content')
    <h2>{{$page['title']}}</h2>
    @if(isset($status))
    <p>

        {{$status}}
    </p>
    @endif
    <div>
        <a href="{{route('servicesAdd')}}"><button class="btn-primary" >Добавить услугу</button></a>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>Имя</th>
            <th>Ссылка</th>
            <th>Цена</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($page['services'] as $sub)
        <tr>
            <td>{{$sub->id}}</td>
            <td>{{$sub->name}}</td>
            <td>{{$sub->link}}</td>
            <td>{{$sub->price}}</td>
            <td>

                <a href="{{route('servicesEdit',['sevice'=>$sub->id])}}" class="ser-edit"><span class="glyphicon glyphicon-edit"></span></a>
                <a href="javascript:void(0)" class="ser-delete"> <span class="glyphicon glyphicon-remove"></span></a></td>

        </tr>
        @endforeach

        </tbody>
    </table>
@endsection

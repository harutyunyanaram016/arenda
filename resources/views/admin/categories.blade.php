@extends('admin.layout', array('title'=>$page['title']))

@section('content')
    <h2>{{$page['title']}}</h2>
    @if(isset($status))
    <p>


    </p>
    @endif
    <div>
        <a href="{{route('categoriesAdd')}}"><button class="btn-primary" >Добавить технику</button></a>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>Имя</th>
            <th>Ссылка</th>
            <th>Цена</th>
            <th>Категория</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($page['subCat'] as $sub)
        <tr>
            <td>{{$sub->id}}</td>
            <td>{{$sub->name}}</td>
            <td>{{$sub->link}}</td>
            <td>{{$sub->price}}</td>
            <td>
                @foreach($page['cat'] as $cat)
                    @if($sub->category_id == $cat->id)
                        {{$cat->name}}
                    @endif
                @endforeach
            </td>
            <td>

                <a href="{{route('categoriesEdit',['sevice'=>$sub->id])}}" class="cat-edit"><span class="glyphicon glyphicon-edit"></span></a>
                <a href="javascript:void(0)" class="cat-delete"> <span class="glyphicon glyphicon-remove"></span></a></td>

        </tr>
        @endforeach

        </tbody>
    </table>
@endsection

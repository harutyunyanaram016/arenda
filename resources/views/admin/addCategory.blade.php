@extends('admin.layout', array('title'=>$page['title']))

@section('content')
    <h2>{{$page['title']}}</h2>
    @if(isset($status))
        <p>
            {{$status}}

        </p>
    @endif

    <div class="wrapper container-fluid">

        <div class="content col-md-10 col-md-offset-1">

            {!! Form::open(['url'=>route('categoriesAdd'), 'method'=>'POST', 'class'=>'form-horizontal','enctype'=>'multipart/form-data']) !!}


            <div class="form-group">
                {!! Form::label('name','Имя',['class'=>'col-xs-2 control-label']) !!}
                <div class="col-xs-8">
                    {!! Form::text('name','',['class'=>'form-control','placeholder'=>'Имя']) !!}
                </div>

            </div>


            <div class="form-group">

                {!! Form::label('alias','Ссылка',['class'=>'col-xs-2 control-label']) !!}
                <div class="col-xs-8">
                    {!! Form::text('link','',['class'=>'form-control','placeholder'=>'Ссылка']) !!}
                </div>

            </div>

            <div class="form-group">

                {!! Form::label('alias','Цена',['class'=>'col-xs-2 control-label']) !!}
                <div class="col-xs-8">
                    {!! Form::number('price','',['class'=>'form-control','placeholder'=>'Цена']) !!}
                </div>

            </div>

            <div class="form-group">

                {!! Form::label('category_id','Категория',['class'=>'col-xs-2 control-label']) !!}
                <div class="col-xs-8">
                    {!! Form::select('category_id',$page['cat'],['class'=>'form-control']) !!}
                </div>

            </div>


            <div class="form-group">

                {!! Form::label('text','Описание',['class'=>'col-xs-2 control-label']) !!}
                <div class="col-xs-8">
                    {!! Form::textarea('text','',['id'=>'editor','class'=>'form-control']) !!}
                </div>

            </div>
            <div class="form-group">

                {{--{!! Form::label('old_images','Image:',['class'=>'col-xs-2 control-label']) !!}--}}
                {{--<div class="col-xs-8">--}}
                    {{--{!! Html::image('img/'.$page['service']['images'],'') !!}--}}
                    {{--{!! Form::hidden('old_images', $page['images']) !!}--}}
                {{--</div>--}}

            </div>
            <div class="form-group">

                {{--{!! Form::label('images','Image',['class'=>'col-xs-2 control-label']) !!}--}}
                {{--<div class="col-xs-8">--}}
                    {{--{!! Form::file('images') !!}--}}
                {{--</div>--}}

            </div>


            <div class="form-group">
                <div class="col-md-offset-2 col-md-8">
                    {!! Form::button('Save',['class'=>'save btn btn-primary','type'=>'submit']) !!}
                </div>
            </div>


            <script>
                CKEDITOR.replace('editor');
            </script>
        </div>
    </div>
    
@endsection
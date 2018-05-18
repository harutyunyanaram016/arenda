@extends('admin.layout', array('title'=>$page['title']))

@section('content')
    <h2>{{$page['title']}}</h2>
    @if(isset($status))
        <p>


        </p>
    @endif

    <div class="wrapper container-fluid">

        <div class="content col-md-10 col-md-offset-1">

            {!! Form::open(['url'=>route('servicesEdit',array('page'=>$page['service']->id)), 'method'=>'POST', 'class'=>'form-horizontal','enctype'=>'multipart/form-data']) !!}


            <div class="form-group">
                {!! Form::label('name','Имя',['class'=>'col-xs-2 control-label']) !!}
                <div class="col-xs-8">
                    {!! Form::text('name',$page['service']['name'],['class'=>'form-control','placeholder'=>'Input name']) !!}
                </div>

            </div>


            <div class="form-group">

                {!! Form::label('alias','Ссылка',['class'=>'col-xs-2 control-label']) !!}
                <div class="col-xs-8">
                    {!! Form::text('link',$page['service']['link'],['class'=>'form-control','placeholder'=>'Input Link']) !!}
                </div>

            </div>

            <div class="form-group">

                {!! Form::label('alias','Цена',['class'=>'col-xs-2 control-label']) !!}
                <div class="col-xs-8">
                    {!! Form::number('price',$page['service']['price'],['class'=>'form-control','placeholder'=>'Input Link']) !!}
                </div>

            </div>


            <div class="form-group">

                {!! Form::label('text','Описание',['class'=>'col-xs-2 control-label']) !!}
                <div class="col-xs-8">
                    {!! Form::textarea('text',$page['service']['content'],['id'=>'editor','class'=>'form-control']) !!}
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
@extends('backend.layouts.main')

@section('content')
    <div class="content row">
        <div class="row flex">
            <h2>{{  $faculty->id ? 'Sửa thông tin Khoa ' : 'Thêm Khoa' }}</h2>
        </div>
        <div class="table">
            @if(!empty($faculty->id))
                {!! Form::model($faculty, ['method' => 'PUT', 'route' => ['faculties.update', $faculty->id]]) !!}
            @else
                {!! Form::model($faculty, ['method' => 'POST', 'route' => ['faculties.store']]) !!}
            @endif
                {!! Form::hidden('id',  $faculty->id ) !!}
            <div class="form-group">
                {!!  Form::label('name', 'Tên Khoa:') !!}
                {!!  Form::text('name', $faculty->name , ['class' => 'form-control']) !!}
                @if ( $errors->has('name') )
                    <span role="alert" style="color:red;">{{ $errors->first('name') }}</span>
                @endif
            </div>
            <div class="form-group flex">
                {!! Form::submit('Lưu', ['class' => 'btn btn-success']) !!}
                <a href="{{ route('faculties.index') }}" class="btn btn-default btn-primary">Thoát</a>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

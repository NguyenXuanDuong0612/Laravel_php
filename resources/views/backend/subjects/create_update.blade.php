@extends('backend.layouts.main')

@section('content')
    <div class="content row">
        <div class="row flex">
            <h2>{{  $subject->id ? 'Sửa thông tin môn học ' : 'Thêm môn học' }}</h2>
        </div>
        <div class="table">
            @if(!empty($subject->id))
                {!! Form::model($subject, ['method' => 'PUT', 'route' => ['subjects.update', $subject->id]]) !!}
            @else
                {!! Form::model($subject, ['method' => 'POST', 'route' => ['subjects.store']]) !!}
            @endif
                {!! Form::hidden('id',  $subject->id ) !!}
            <div class="form-group">
                {!!  Form::label('name', 'Tên môn học:') !!}
                {!!  Form::text('name', $subject->name , ['class' => 'form-control']) !!}
                @if ( $errors->has('name') )
                    <span role="alert" style="color:red;">{{ $errors->first('name') }}</span>
                @endif
            </div>
            <div class="form-group flex">
                {!! Form::submit('Lưu', ['class' => 'btn btn-success']) !!}
                <a href="{{ route('subjects.index') }}" class="btn btn-default btn-primary">Thoát</a>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

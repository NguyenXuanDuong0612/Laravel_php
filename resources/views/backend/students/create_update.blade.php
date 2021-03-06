@extends('backend.layouts.main')

@section('content')
    <div class="content row">
        <div class="row flex">
            <h2>{{ $student->id ? 'Sửa thông tin sinh viên ' : 'Thêm sinh viên' }}</h2>
        </div>
        <div class="table">
            @if(!empty($student->id))
                {!! Form::model($student, ['method' => 'PUT', 'route' => ['students.update', $student->id], 'enctype' => 'multipart/form-data']) !!}
            @else
                {!! Form::model($student, ['method' => 'POST', 'route' => ['students.store'], 'enctype' => 'multipart/form-data']) !!}
            @endif
                {!! Form::hidden('id',  $student->id ) !!}
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        {!!  Form::label('name', 'Tên sinh viên:') !!}
                        {!!  Form::text('name', $student->name , ['class' => 'form-control']) !!}
                        @if ( $errors->has('name') )
                            <span role="alert" style="color:red;">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        {!!  Form::label('image', 'Ảnh:') !!}
                        {!!  Form::file('image' , ['class' => 'form-control']) !!}
                        @if(!empty($student->id))
                            <img src="{{asset($student->image)}}" width="80">
                        @endif
                        @if ( $errors->has('image') )
                            <span role="alert" style="color:red;">{{ $errors->first('image') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        {!!  Form::label('phone_number', 'Số điện thoại:') !!}
                        {!!  Form::text('phone_number', $student->phone_number , ['class' => 'form-control']) !!}
                        @if ( $errors->has('phone_number') )
                            <span role="alert" style="color:red;">{{ $errors->first('phone_number') }}</span>
                        @endif
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        {!!  Form::label('birthday', 'Ngày sinh:') !!}
                        {!!  Form::date('birthday', $student->birthday , ['class' => 'form-control']) !!}
                        @if ( $errors->has('birthday') )
                            <span role="alert" style="color:red;">{{ $errors->first('birthday') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        {!!  Form::label('gender', 'Giới tính:') !!}
                        {!! Form::select('gender', $gender, $student->gender, ['class' => 'form-control']) !!}
                        @if ( $errors->has('gender') )
                            <span role="alert" style="color:red;">{{ $errors->first('gender') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        {!!  Form::label('faculty_id', 'Khoa:') !!}
                        {!! Form::select('faculty_id', $faculty, $student->faculty_id, ['class' => 'form-control']) !!}
                        @if ( $errors->has('faculty_id') )
                            <span role="alert" style="color:red;">{{ $errors->first('faculty_id') }}</span>
                        @endif
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        {!!  Form::label('address', 'Địa chỉ:') !!}
                        {!!  Form::text('address', $student->address, ['class' => 'form-control']) !!}
                        @if ( $errors->has('address') )
                            <span role="alert" style="color:red;">{{ $errors->first('address') }}</span>
                        @endif
                    </div>
                </div>
            </div>
            <div class=" col-12 form-group flex">
                {!! Form::submit('Lưu', ['class' => 'btn btn-success']) !!}
                <a href="{{ route('students.index') }}" class="btn btn-default btn-primary">Thoát</a>
                {!! Form::close() !!}
            </div>

        </div>
    </div>
@endsection


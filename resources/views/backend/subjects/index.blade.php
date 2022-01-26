@extends('backend.layouts.main')

@section('content')
    <div class="content row">
        @if (session('success'))
            <div class="alert alert-success" >{{ session('success') }}</div>
        @endif
        <div class="row flex">
            <h2>Danh sách môn học</h2>
            <a class="content__add" href="{{ route('subjects.create') }}"><i class="fas fa-plus plus"></i> Thêm môn học</a>
        </div>
        <div class="table">
            <table >
                <thead class="table__header">
                    <tr class="header__title">
                        <th>STT</th>
                        <th>Tên môn học</th>
                        <th>Ngày tạo</th>
                        <th>Ngày cấp nhật</th>
                        <th>Thao tác</th>
                    </tr>
                </thead>
                <tbody class="table__body">
                @foreach( $subjects as $key => $subject )
                    <tr class="">
                        <td align="center">{{ $subjects->firstItem() + $key }}</td>
                        <td >{{ $subject->name }}</td>
                        <td align="center">{{ $subject->created_at }}</td>
                        <td align="center">{{ $subject->updated_at }}</td>
                        <td class="d-flex">
                            <a href="{{ route('subjects.edit', $subject->id) }}" class="button"><i class="far fa-edit"></i></a>
                            {{ Form::model($subject, ['method'=>'DELETE', 'route' => ['subjects.destroy', $subject->id]]) }}
                                <button onclick="return confirm('Are you sure you want to delete this entry?')" class="button remove"><i class="far fa-trash-alt "></i> </button>
                            {{ Form::close() }}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="pagination">
            {{ $subjects->links() }}
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('title')
<title>Add Certificate | Certnote</title>
@endsection

@section('main_container')
    <div class="col-md-12">

        <h3>프로젝트 등록</h3>

        <form class="form-horizontal" role="form" method="POST" action="{{ route('note.store') }}">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="Note Name">프로젝트 명</label>
                <div>
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                </div>
            </div>

            <div class="form-group">
                <label for="설명">설명</label>
                <div>
                    <textarea class="form-control" rows="5" name="memo">{{ old('memo') }}</textarea>
                </div>
            </div>

            <div class="form-group">
                <div>
                    <button type="submit" class="btn btn-primary">
                        등록
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection

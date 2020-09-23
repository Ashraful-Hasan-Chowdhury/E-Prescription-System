@extends('welcome')
@section('content')
<div class="container">
    <div class="row">
        <a href="{{ route('create.backup') }}" class="btn btn-sm btn-success"> <strong>+</strong> Create New Backup</a>
    </div>
</div>

@endsection

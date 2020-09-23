@extends('welcome')
@section('content')
<div class="card bg-warning text-center card-form">
    <div class="card-body">
        <h3 class="card-title border-bottom border-secondary">
            <img src="public/img/disease.png" class="img-fluid" alt="Responsive image">
            Add On Examination</h3><br>
        <!-- Error Handler -->
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <!-- Error Handler -->
        <form action="{{ route('Add.Examinations') }}" method="post">
            @csrf
            <div class="form-group">
                <label class="h5" for="onExamination">Add On Examination</label>
                <input name="onExamination" type="text" class="form-control" id="onExamination"
                    placeholder="Add On Examination">
            </div>

            <input class="btn bg-success btn-outline-light btn-block" type="submit" name="" value="save on examination">
        </form>
    </div>
</div>

<div class="card bg-warning">
    <div class="card-body">
        <center>
            <h3 class="card-title border-bottom border-secondary">
                <img src="public/img/disease.png" class="img-fluid" alt="Responsive image">
                On Examination List</h3>
        </center><br>

        <!-- table -->
        <table id="Dtable1" class="table text-center">
            <thead class="thead-dark">
                <tr>
                    <th>SL</th>
                    <th>On Examination</th>
                    <th>Edit</th>
                    <th>Update</th>
                    <th>Delete</th>
                    <th>Created at</th>
                </tr>
            </thead>
            <tbody>
                @foreach($examination as $row)
                <tr>
                    <td>{{$loop->index+1}}</td>
                    <td class="text-left">{{$row->onExamination}} </td>
                    <td>
                        <form action="{{route('update.Examination',['id'=>$row->id])}}" method="post">
                            @csrf
                            <input style="color:black;font-weight:bold;" name="Examinationupdate{{$row->id}}"
                                type="text" class="form-control text-center h6"
                                placeholder="Insert on examination to update" value="{{$row->onExamination}}">
                    </td>
                    <td><button class="btn btn-success">update</button>
                        </form>
                    </td>
                    <td><a href="{{route('delete.Examination',['id'=>$row->id])}}" id="delete"
                            class="btn btn-danger">Delete</a></td>
                    <td>{{$row->created_at->diffForHumans()}}</td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>SL</th>
                    <th>On Examination</th>
                    <th>Edit</th>
                    <th>Update</th>
                    <th>Delete</th>
                    <th>Created at</th>
                </tr>
            </tfoot>
        </table>
        <!-- table -->
    </div>
</div>

<div class="card-body">

</div>
@endsection
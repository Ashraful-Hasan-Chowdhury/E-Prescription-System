@extends('welcome')
@section('content')

<div class="card bg-warning text-center card-form">
    <div class="card-body">
        <h3 class="card-title border-bottom border-secondary">
            <img src="public/img/medicine.png" class="img-fluid" alt="Responsive image">
            Add Medicine</h3><br>
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
        <form action="{{ route('Add.Medicine') }}" method="post">
            @csrf
            <div class="form-group">
                <label class="h5" for="medName">Medicine Name</label>
                <input name="medName" type="text" class="form-control" id="medName" placeholder="Medicine Name">
            </div>

            <input class="btn bg-success btn-outline-light btn-block" type="submit" value="save medicine">
        </form>
    </div>
</div>

<div class="card bg-warning card-form">
    <div class="card-body">
        <h3 class="card-title text-center border-bottom border-secondary">
            <img src="public/img/medicine.png" class="img-fluid" alt="Responsive image">
            Medicine List</h3><br>

        <!-- table -->
        <table id="Dtable1" class="table text-center">
            <thead class="thead-dark">
                <tr>
                    <th>SL</th>
                    <th>Medicine Name</th>
                    <th>Edit</th>
                    <th>Update</th>
                    <th>Delete</th>
                    <th>Created at</th>
                </tr>
            </thead>
            <tbody>
                @foreach($medicine as $row)
                <tr>
                    <td>{{$loop->index+1}}</td>
                    <td class="text-left">{{$row->medName}}</td>
                    <td>
                        <form action="{{route('update.Medicine',['id'=>$row->id])}}" method="post">
                            @csrf
                            <input style="color:black;font-weight:bold;" name="medupdate{{$row->id}}" type="text"
                                class="form-control text-center h6" placeholder="Insert a medicine name to update"
                                value="{{$row->medName}}">

                    </td>
                    <td><button class="btn btn-success">update</button>
                        </form>
                    </td>
                    <td><a href="{{route('delete.Medicine',['id'=>$row->id])}}" id="delete"
                            class="btn btn-danger">Delete</a></td>
                    <td>{{$row->created_at->diffForHumans()}}</td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>SL</th>
                    <th>Medicine Name</th>
                    <th>Edit</th>
                    <th>Update</th>
                    <th>Delete</th>
                    <th>Created at</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>



@endsection
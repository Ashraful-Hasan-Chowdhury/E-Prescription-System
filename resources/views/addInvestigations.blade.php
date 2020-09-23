@extends('welcome')
@section('content')
<div class="card bg-warning text-center card-form">
    <div class="card-body">
        <h3 class="card-title border-bottom border-secondary">
            <img src="public/img/investigation.png" class="img-fluid" alt="Responsive image">
            Add Investigations</h3><br>
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
        <form action="{{ route('Add.Investigations') }}" method="post">
            @csrf
            <div class="form-group">
                <label class="h5" for="investigation">Investigations</label>
                <input name="investigation" type="text" class="form-control" id="investigation"
                    placeholder="Investigations">
            </div>

            <input class="btn bg-success btn-outline-light btn-block" type="submit" name="" value="save investigation">
        </form>
    </div>
</div>

<div class="card bg-warning  card-form">
    <div class="card-body">
        <h3 class="card-title text-center border-bottom border-secondary">
            <img src="public/img/investigation.png" class="img-fluid" alt="Responsive image">
            Investigation List</h3><br>

        <!-- table -->
        <table id="Dtable1" class="table text-center">
            <thead class="thead-dark">
                <tr>
                    <th>SL</th>
                    <th>Investigations</th>
                    <th>Edit</th>
                    <th>Update</th>
                    <th>Delete</th>
                    <th>Created at</th>
                </tr>
            </thead>
            <tbody>
                @foreach($investigation as $row)
                <tr>
                    <td>{{$loop->index+1}}</td>
                    <td class="text-left">{{$row->investigation}} </td>
                    <td>
                        <form action="{{route('update.Investigation',['id'=>$row->id])}}" method="post">
                            @csrf
                            <input style="color:black;font-weight:bold;" name="investigationupdate{{$row->id}}"
                                type="text" class="form-control text-center h6"
                                placeholder="Insert investigation to update" value="{{$row->investigation}}">
                    </td>
                    <td><button class="btn btn-success">update</button>
                        </form>
                    </td>
                    <td><a href="{{route('delete.Investigation',['id'=>$row->id])}}" id="delete"
                            class="btn btn-danger">Delete</a></td>
                    <td>{{$row->created_at->diffForHumans()}}</td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>SL</th>
                    <th>Investigations</th>
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



@endsection
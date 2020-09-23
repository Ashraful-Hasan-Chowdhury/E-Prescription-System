@extends('welcome')
@section('content')
<div class="card bg-warning  card-form">
    <div class="card-body">
        <h3 class="card-title text-center border-bottom border-secondary">
            <img src="public/img/routine.png" class="img-fluid" alt="Responsive image">
            Prescription List</h3><br>

        <!-- table -->
        <table id="Dtable1" class="table text-center">
            <thead class="thead-dark">
                <tr>

                    <th>Patient id</th>
                    <th>Name</th>
                    <th>Edit</th>
                    <th>Preview</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($prescripitions as $prescripition)
                <tr>
                    <td>{{$prescripition->id}}</td>
                    <td>{{$prescripition->pName}}</td>
                    <td><a href="{{ route('edit.prescription',$prescripition->id) }}"
                            class="btn btn-md btn-success">Edit</a></td>
                    <td><a href="{{ route('preview.prescription',$prescripition->id) }}"
                            class="btn btn-md btn-info">Preview</a></td>
                    <td><a href="{{ route('delete.prescription',$prescripition->id) }}" class="btn btn-md btn-danger"
                            id="delete">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <!-- table -->
    </div>
</div>
@endsection
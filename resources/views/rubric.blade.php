@extends('master')
@section('content')
<div class="container">
            @if(session('success'))
            <div class="alert alert-primary" role="alert">
                {{session('success')}}
            </div>
        </div>
        @endif

<p class="h2">Manage Rubric</p>
<table id="example" class="table table-striped table-bordered dt-responsive nowrap"style="background:ivory"><br><br>
        <thead>
            <tr>
                <th>RUBRICS ID</th>
                <th>RUBRICS NAME</th>
                <th>RUBRICS DATE</th>
                <th>SESSION</th>
            </tr>
        </thead>
        <tbody>
        @foreach($rubrics_data as $rubrics)
					<tr>
						<td>{{$rubrics->id}}</td>
						<td>{{$rubrics->RubricsName}}</td>
						<td>{{$rubrics->RubricsDate}}</td>
						<td>{{$rubrics->RubricsSession}}</td>
						<td>
	                    <a class="btn btn-primary" href="data/{{$rubrics->id}}/edit" role="button">Edit</a>
                    </td>
                        <td>
						<a class="btn btn-danger" href="data/{{$rubrics->id}}/delete" onClick="return confirm('Confirm Delete?')" role="button">Delete</a></a></td>
						</td>
					</tr>
                @endforeach
            </tbody>
    </table>
</div>
</div>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
</center>

<div>
<button class="btn btn-primary"style="color:white;float:right;margin-right:200px"><a style="color:white;text-decoration:none" href="addRub">Add New</a></button>
</div>
@endsection

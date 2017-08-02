@extends('about.master')
@section('isi')
<div class=-"row">
		<center><h1>Data author</h1></center>
		<div class="panel panel-primary">
		<div class ="panel-heading">Data author
		<div class="panel-title pull-right"><a href="/author/create"> Tambah Data </a></div></div>
		
		<div class="panel-body"></div>
		<table class="table">
				<thead>
			<tr>
				<th>Nama</th>
				<th colspan="3">Action</th>
			</tr>
			</thead>
			<tbody>
					@foreach($author as $data)
					<tr>
						<td>{{$data->nama}}</td>
						<td>
						@foreach($data->book as $a)
							<li>{{$a->nama}}</li>
						@endforeach
						</td>
			
					<td>
						<a class="btn btn-warning" href="/author/{{$data->id}}/edit">Edit</a> </td>
						<td>
						<td>
						<a class="btn btn-info" href="/author/{{$data->id}}
						">Show</a> </td>
						<td>
						<form action="{{route('author.destroy',$data->id)}}" method="post">
							
							<input type="hidden" name="_method" value="DELETE">
							<input type="hidden" name="_token" >
							<input type="submit" class="btn btn-danger" value="delete">
							{{csrf_field()}}
						</form>
					</td>

					</tr>
					@endforeach
			</tbody>

		

		
		</div>
</div>


@endsection
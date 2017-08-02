@extends('about.master')
@section('isi')
<div class="row">
		<center><h1>Data author</h1></center>
		<div class="panel panel-primary">
		<div class="panel-heading">Data author
		<div class="panel-title pull-right">
		<a href="{{ URL::previous() }}">Kembali</a></div>
		</div>

	<div class="panel body">
		<form action="{{route('author.update',$author->id)}}" method="post">
			{{csrf_field()}}
			<div class="form-group">
			<input type="hidden" name="_method" value="PUT">
			<input type="hidden" name="_token" value="{{csrf_token() }}">
				<label class="control-label">Nama</label>
				<input type="text" name="a" value="{{$author->nama }}" class="form-control" required="">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-success">Simpan</button>
				<button type="reset" class="btn btn-danger">Reset</button>
			</div>
		</form>
	</div>
</div>
</div>
@endsection
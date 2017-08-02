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
			<div class="form-group">	
				<label class="control-label">Nama</label>
				<input type="text" name="a" value="{{$author->nama }}" class="form-control" readonly="">
			</div>
			
			
	</div>
</div>
</div>
@endsection
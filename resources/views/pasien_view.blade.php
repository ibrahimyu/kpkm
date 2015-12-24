@extends('template')
@section('content')
<div class="clearfix"></div>
<div class="col-xs-12">

	<div class="box">
	<div class="box-body table-responsive no-padding">
	<table class="table table-hover">
		<tr>
		<th>No. RM</th>
		<th>Nama</th>
		<th>Jenis Kelamin</th>
		<th>Tgl Lhr</th>
		<th>Alamat</th>
		<th>Opsi</th>
		</tr>
		@foreach ($pasien as $p)
		<tr>
			<td>{{$p->no_rm}}</td>
			<td>{{$p->nama}}</td>
			<td>{{$p->kode_jenis_kelamin}}</td>
			<td>{{$p->tgl_lahir}}</td>
			<td>{{$p->alamat}}</td>
			<td>Opsi</td>
		</tr>
		@endforeach
	</table>
</div>
</div>
</div>
<div class="clearfix"></div>
@stop
@extends('FormUbah')

@section('content')
<div class="container documents">
		<div class="row">
			<div class="col-md-5 ">
			<form>
				<label>Nama Pemohon</label>
				<input class="form-control" placeholder="nama pemohon"><br>
				<label>Lokasi</label>
				<input class="form-control" placeholder="lokasi"><br>
				<label>Jenis Izin </label>
				<select name="selecter_basic" class="selecter_1">
					<option value="1">Izin Pengelolaan Air Bawah Tanah</option>
					<option value="2">Izin Pengambilan Air Permukaan</option>
					<option value="3">Izin  pembuangan air buangan  ke sumber air</option>
					<option value="4">Izin perubahan alur, bentuk, dimensi, dan kemiringan dasar saluran/sungai </option>
					<option value="5">Izin pembangunan lintasan yang berada di bawah/atasnya </option>
					<option value="6">Izin pemanfaatan bangunan pengairan dan lahan pada daerah sempadan saluran air </option>
					<option value="7">Izin pemanfaatan lahan mata air dan lahan pengairan lainnya </option>
				</select><br>
				<label>Instansi</label>
				<input class="form-control" placeholder="instansi"><br>
				<label>Deskripsi</label>
				<textarea class="form-control" placeholder="deskripsi"></textarea><br>
				<button class="btn btn-primary" type="submit">Submit</button><br> 
			</form>
			</div>
		</div>
	</div>
@endsection
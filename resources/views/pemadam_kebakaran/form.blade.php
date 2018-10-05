<!-- <div class="form-group">
	<label class="col-sm-2 control-label">Kategori</label>
	<div class="col-sm-10">
		{!! Form::select('kategori', ['Damkar'=>'Damkar', 'Balakar'=>'Balakar'],null,['class'=>'form-control','placeholder'=>"Masukkan Kategori"]) !!}
	</div>	
</div> -->

<div class="form-group">
	<label class="col-sm-2 control-label">Nama</label>
	<div class="col-sm-10">
		{!! Form::text('nama',null,['class'=>'form-control','placeholder'=>"Nama"]) !!}
	</div>	
</div>

<div class="form-group">
	<label class="col-sm-2 control-label">Alamat</label>
	<div class="col-sm-10">
		{!! Form::text('alamat',null,['class'=>'form-control','placeholder'=>"Alamat"]) !!}
	</div>	
</div>

<div class="form-group">
	<label class="col-sm-2 control-label">Nomor</label>
	<div class="col-sm-10">
		{!! Form::text('nomor',null,['class'=>'form-control','placeholder'=>"Nomor"]) !!}
	</div>	
</div>
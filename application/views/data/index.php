<h5 style="margin-left: 12px; padding-bottom:10px;">Form Pendataan Pasien Covid-19 Kab.Kudus</h5>
<form action="<?=base_url('auth/tambah')?>" method="POST">

<div class="form-group form-group col-md-6">
		<label for="bulan">Minggu Ke-</label>
		<select id="bulan" name="minggu" class="form-control">
			<option value="">- Silahkan Pilih -</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			</select>
	</div> 
	
	<div class="form-group form-group col-md-6">
		<label for="bulan">Bulan</label>
		<select id="bulan" name="bulan" class="form-control">
			<option value="">- Silahkan Pilih -</option>
			<option value="Januari">Januari</option>
			<option value="Februari">Februari</option>
			<option value="Maret">Maret</option>
			<option value="April">April</option>
			<option value="Mei">Mei</option>
			<option value="Mei">Juni</option>
			<option value="Juli">Juli</option>
			<option value="Agustus">Agustus</option>
			<option value="September">September</option>
			<option value="Oktober">Oktober</option>
			<option value="November">November</option>
			<option value="Desember">Desember</option>
		</select>
    </div> 
    
	<div class="form-group col-md-6">
		<label for="nama">Tahun</label>
		<input type="text" name="tahun" id="tahun" class="form-control" placeholder="Masukkan Tahun">
	</div>
	<div class="form-group col-md-6">
		<label for="nama">Jumlah Pasien</label>
		<input type="text" id="jumlah_pasien" name="jumlah_pasien" class="form-control" placeholder="Jumlah Pasien">
	</div>
	
	<button type="submit" class="btn btn-primary" style="margin-left: 12px; margin-bottom: 270px;">Submit</button>
</form>
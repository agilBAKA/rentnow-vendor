<form action="" class="default-form">
    
    <div class="row">
         
        <div class="col-md-3">
            <div class="field">
                <label> Jenis kendaraan</label>
                <select name="" id="">
                    <option value="" disabled selected>Pilih Kendaraan Anda</option>
                    <option value="">Option 1</option>
                    <option value="">Option 2</option>
                    <option value="">Option 3</option>
                </select>
            </div>
        </div>

        <div class="col-md-3">
            <div class="field">
                <label>Merk</label>
                <select name="" id="">
                    <option value="" disabled selected>Pilih Merk kendaraan</option>
                    <option value="">Option 1</option>
                    <option value="">Option 2</option>
                    <option value="">Option 3</option>
                </select>
            </div>
        </div>

        <div class="col-md-3">
            <div class="field">
                <label>Model</label>
                <select name="" id="">
                    <option value="" disabled selected>Model kendaraan</option>
                    <option value="">Option 1</option>
                    <option value="">Option 2</option>
                    <option value="">Option 3</option>
                </select>
            </div>
        </div>

        <div class="col-md-3">
            <div class="field field-money">
                <label>Tarif per jam</label>
                <a class="link edit-tarif">Ubah jenis Tarif</a>
                <select name="" id="" class="select-money">
                    <option value="" disabled selected>IDR</option>
                    <option value="">USD</option>
                    <option value="">EUR</option>
                    <option value="">SGD</option>
                </select>
                <input type="text" value="1.000.000">
            </div>
        </div>

        <div class="col-md-6">
            <div class="field">
                <label> Keterangan</label>
                <textarea name="" id="" cols="30" rows="4" placeholder="Tulis keterangan singkat mengenai kendaraan Anda di sini"></textarea>
            </div>
        </div>

        <div class="col-md-3">
            <div class="field">
                <label>Warna Kendaraan</label>
                <input type="text" placeholder="Tulis warna sesuai STNK">
            </div>
        </div>

        <div class="col-md-3">
            <div class="field">
                <label> Transmisi</label>
                <div class="box-radio">
                    <div class="style-radio">
                        <input id="manual" name="Transmisi" type="radio">
                        <label>Manual</label>
                    </div>
                    <div class="style-radio">
                        <input id="otomatis" name="Transmisi" type="radio">
                        <label>Otomatis</label>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <hr>

    <div class="row">
    	<div class="col-md-3">
            <div class="field">
                <label>Nomor Polisi</label>
                <input type="text" placeholder="Tulis nomor polisi ">
            </div>
        </div>
        <div class="col-md-9">
    		<div class="field field_stnk">
    			<label>Unggah foto STNK</label>
    			<input type="file" name="files_stnk">
    		</div>
    	</div>
    </div>

    <hr>

    <div class="row">
        <div class="col-md-12">
            <div class="box-upload-gallery">
                <h3>Unduh Galeri PRODUK</h3>
                <p class="info">
                    Foto produk yang diunggah harus berformat JPG atau PNG dengan resolusi maksimum 1600px x 500px dan ukuran kurang dari 100KB per foto. Foto yang diunggah diharuskan foto nyata dari kendaraan Anda yang sekurangnya menggambarkan tampak depan, kanan, kiri, belakang dan dalam kendaraan Anda.
                </p>
                <input type="file" name="files_product">
            </div>
        </div>
    </div>

	<div class="action-form">
        <button class="btn-secondary">Simpan sebagai Draft</button>
        <button class="btn-primary">Simpan &amp; Terbitkan</button>
    </div>

</form>
<form action="" class="default-form">
    
    <div class="row">
         
        <div class="col-md-3">
            <div class="field">
                <label> Jenis tempat yang ditawarkan</label>
                <select name="" id="">
                    <option value="" disabled selected>Pilih jenis tempatmu</option>
                    <option value="">Seluruh Tempat</option>
                    <option value="">Kamar Pribadi</option>
                    <option value="">Kamar Bersama</option>
                </select>
            </div>
        </div>

        <div class="col-md-3">
            <div class="field">
                <label> Pilih jenis properti yang ditawarkan</label>
                <select name="" id="">
                    <option value="" disabled selected>pilih properti</option>
                    <option value="">Rumah</option>
                    <option value="">Apartemen</option>
                    <option value="">Villa</option>
                </select>
            </div>
        </div>

        <div class="col-md-3">
            <div class="field">
                <label>Kapasitas tamu</label>
                <div class="counter-field">
                    <input type="number" id="guestCapacity" value="0">
                    <div class="box-counter">
                        <span class="counter min" onclick="modify_qty(-1)">
                            <i class="zmdi zmdi-minus"></i>
                        </span>       
                        <span class="counter plus" onclick="modify_qty(+1)">
                            <i class="zmdi zmdi-plus"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="field field-money">
                <label>Tarif per hari</label>
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

    </div>

    <hr>

    <div class="row">
        <div class="col-md-3">
            <div class="field">
                <label>Total kamar</label>
                <div class="counter-field">
                    <input type="number" id="bedCapacity" value="0">
                    <div class="box-counter">
                        <span class="counter min" onclick="modify_qty(-1)">
                            <i class="zmdi zmdi-minus"></i>
                        </span>       
                        <span class="counter plus" onclick="modify_qty(+1)">
                            <i class="zmdi zmdi-plus"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-3">
            <div class="field">
                <label>Total kasur</label>
                <div class="counter-field">
                    <input type="number" id="bedCapacity" value="0">
                    <div class="box-counter">
                        <span class="counter min" onclick="modify_qty(-1)">
                            <i class="zmdi zmdi-minus"></i>
                        </span>       
                        <span class="counter plus" onclick="modify_qty(+1)">
                            <i class="zmdi zmdi-plus"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="field">
                <label>Total kamar mandi</label>
                <div class="counter-field">
                    <input type="number" id="bedCapacity" value="0">
                    <div class="box-counter">
                        <span class="counter min" onclick="modify_qty(-1)">
                            <i class="zmdi zmdi-minus"></i>
                        </span>       
                        <span class="counter plus" onclick="modify_qty(+1)">
                            <i class="zmdi zmdi-plus"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <hr>

    <div class="row">
        <div class="col-md-6">
              <div class="field">
                <label>Fasilitas</label>
                <div class="row">
                    <div class="col-md-6">
                        <div class="box-check">
                            <div class="style-check">
                                <input id="opsi_1" name="fasilitas" type="checkbox">
                                <label>Wifi</label>
                            </div>
                            <div class="style-check">
                                <input id="opsi_2" name="fasilitas" type="checkbox">
                                <label>perlengkapan mandi</label>
                            </div>
                            <div class="style-check">
                                <input id="opsi_3" name="fasilitas" type="checkbox">
                                <label>AC</label>
                            </div>
                            <div class="style-check">
                                <input id="opsi_4" name="fasilitas" type="checkbox">
                                <label>Sarapan</label>
                            </div>
                            <div class="style-check">
                                <input id="opsi_5" name="fasilitas" type="checkbox">
                                <label>Penghangat ruangan</label>
                            </div>
                            <div class="style-check">
                                <input id="opsi_6" name="fasilitas" type="checkbox">
                                <label>Setrika</label>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box-check">
                            <div class="style-check">
                                <input id="opsi_7" name="fasilitas" type="checkbox">
                                <label>Closet</label>
                            </div>
                            <div class="style-check">
                                <input id="opsi_8" name="fasilitas" type="checkbox">
                                <label>Kopi/Teh</label>
                            </div>
                            <div class="style-check">
                                <input id="opsi_9" name="fasilitas" type="checkbox">
                                <label>TV</label>
                            </div>
                            <div class="style-check">
                                <input id="opsi_10" name="fasilitas" type="checkbox">
                                <label><em>Workspace</em></label>
                            </div>
                            <div class="style-check">
                                <input id="opsi_11" name="fasilitas" type="checkbox">
                                <label><em>Fireplace</em></label>
                            </div>
                            <div class="style-check">
                                <input id="opsi_12" name="fasilitas" type="checkbox">
                                <label><em>Hair Dryer</em></label>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
              <div class="field">
                <label>Fasilitas Keamanan</label>
                <div class="row">
                    <div class="col-md-12">
                        <div class="box-check">
                            <div class="style-check">
                                <input id="opsi_1" name="fasilitas_keamanan" type="checkbox">
                                <label>Penditeksi Asap</label>
                            </div>
                            <div class="style-check">
                                <input id="opsi_2" name="fasilitas_keamanan" type="checkbox">
                                <label>P3K</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
              <div class="field">
                <label>Ruangan untuk Penyewa</label>
                <div class="row">
                    <div class="col-md-12">
                        <div class="box-check">
                            <div class="style-check">
                                <input id="opsi_1" name="fasilitas" type="checkbox">
                                <label>Dapur</label>
                            </div>
                            <div class="style-check">
                                <input id="opsi_2" name="fasilitas" type="checkbox">
                                <label>Laundry</label>
                            </div>
                            <div class="style-check">
                                <input id="opsi_4" name="fasilitas" type="checkbox">
                                <label>Kolam Renang</label>
                            </div>
                            <div class="style-check">
                                <input id="opsi_5" name="fasilitas" type="checkbox">
                                <label><em>Hot Tub</em></label>
                            </div>
                            <div class="style-check">
                                <input id="opsi_6" name="fasilitas" type="checkbox">
                                <label>Tempat Fitness</label>
                            </div>
                            
                        </div>
                    </div>
                     
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="field">
                <label> Keterangan</label>
                <textarea name="" id="" cols="30" rows="4" placeholder="Tulis keterangan singkat mengenai Akomodasi Anda di sini"></textarea>
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
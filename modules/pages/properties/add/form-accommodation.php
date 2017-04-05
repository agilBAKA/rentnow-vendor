<form action="" class="default-form">
    
    <div class="row">
         
        <div class="col-md-3">
            <div class="field">
                <label> Jenis tempat yang ditawarkan</label>
                <select name="" id="">
                    <option value="" disabled selected>Pilih jenis tempatmu</option>
                    <option value="">Seluruh tempat</option>
                    <option value="">Kamar Pribadi</option>
                    <option value="">Kamar berbagi</option>
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
                <label>Tarif perjam</label>
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
                <label> Pilih jenis kamar</label>
                <select name="" id="">
                    <option value="" disabled selected>pilih kamar</option>
                    <option value="">Opsi 1</option>
                    <option value="">Opsi 2</option>
                    <option value="">Opsi 3</option>
                </select>
            </div>
        </div>

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
        <div class="col-md-4">
              <div class="field">
                <label>Fasilitas</label>
                <div class="row">
                    <div class="col-md-6">
                        <div class="box-check">
                            <div class="style-check">
                                <input id="opsi_1" name="fasilitas" type="checkbox">
                                <label>Opsi 1</label>
                            </div>
                            <div class="style-check">
                                <input id="opsi_2" name="fasilitas" type="checkbox">
                                <label>Opsi 2</label>
                            </div>
                            <div class="style-check">
                                <input id="opsi_3" name="fasilitas" type="checkbox">
                                <label>Opsi 3</label>
                            </div>
                            <div class="style-check">
                                <input id="opsi_4" name="fasilitas" type="checkbox">
                                <label>Opsi 4</label>
                            </div>
                            <div class="style-check">
                                <input id="opsi_5" name="fasilitas" type="checkbox">
                                <label>Opsi 5</label>
                            </div>
                            <div class="style-check">
                                <input id="opsi_6" name="fasilitas" type="checkbox">
                                <label>Opsi 6</label>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box-check">
                            <div class="style-check">
                                <input id="opsi_7" name="fasilitas" type="checkbox">
                                <label>Opsi 7</label>
                            </div>
                            <div class="style-check">
                                <input id="opsi_8" name="fasilitas" type="checkbox">
                                <label>Opsi 8</label>
                            </div>
                            <div class="style-check">
                                <input id="opsi_9" name="fasilitas" type="checkbox">
                                <label>Opsi 9</label>
                            </div>
                            <div class="style-check">
                                <input id="opsi_10" name="fasilitas" type="checkbox">
                                <label>Opsi 10</label>
                            </div>
                            <div class="style-check">
                                <input id="opsi_11" name="fasilitas" type="checkbox">
                                <label>Opsi 11</label>
                            </div>
                            <div class="style-check">
                                <input id="opsi_12" name="fasilitas" type="checkbox">
                                <label>Opsi 12</label>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
              <div class="field">
                <label>Fasilitas</label>
                <div class="row">
                    <div class="col-md-6">
                        <div class="box-check">
                            <div class="style-check">
                                <input id="opsi_1" name="fasilitas" type="checkbox">
                                <label>Opsi 1</label>
                            </div>
                            <div class="style-check">
                                <input id="opsi_2" name="fasilitas" type="checkbox">
                                <label>Opsi 2</label>
                            </div>
                            <div class="style-check">
                                <input id="opsi_3" name="fasilitas" type="checkbox">
                                <label>Opsi 3</label>
                            </div>
                            <div class="style-check">
                                <input id="opsi_4" name="fasilitas" type="checkbox">
                                <label>Opsi 4</label>
                            </div>
                            <div class="style-check">
                                <input id="opsi_5" name="fasilitas" type="checkbox">
                                <label>Opsi 5</label>
                            </div>
                            <div class="style-check">
                                <input id="opsi_6" name="fasilitas" type="checkbox">
                                <label>Opsi 6</label>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box-check">
                            <div class="style-check">
                                <input id="opsi_7" name="fasilitas" type="checkbox">
                                <label>Opsi 7</label>
                            </div>
                            <div class="style-check">
                                <input id="opsi_8" name="fasilitas" type="checkbox">
                                <label>Opsi 8</label>
                            </div>
                            <div class="style-check">
                                <input id="opsi_9" name="fasilitas" type="checkbox">
                                <label>Opsi 9</label>
                            </div>
                            <div class="style-check">
                                <input id="opsi_10" name="fasilitas" type="checkbox">
                                <label>Opsi 10</label>
                            </div>
                            <div class="style-check">
                                <input id="opsi_11" name="fasilitas" type="checkbox">
                                <label>Opsi 11</label>
                            </div>
                            <div class="style-check">
                                <input id="opsi_12" name="fasilitas" type="checkbox">
                                <label>Opsi 12</label>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
              <div class="field">
                <label>Fasilitas</label>
                <div class="row">
                    <div class="col-md-6">
                        <div class="box-check">
                            <div class="style-check">
                                <input id="opsi_1" name="fasilitas" type="checkbox">
                                <label>Opsi 1</label>
                            </div>
                            <div class="style-check">
                                <input id="opsi_2" name="fasilitas" type="checkbox">
                                <label>Opsi 2</label>
                            </div>
                            <div class="style-check">
                                <input id="opsi_3" name="fasilitas" type="checkbox">
                                <label>Opsi 3</label>
                            </div>
                            <div class="style-check">
                                <input id="opsi_4" name="fasilitas" type="checkbox">
                                <label>Opsi 4</label>
                            </div>
                            <div class="style-check">
                                <input id="opsi_5" name="fasilitas" type="checkbox">
                                <label>Opsi 5</label>
                            </div>
                            <div class="style-check">
                                <input id="opsi_6" name="fasilitas" type="checkbox">
                                <label>Opsi 6</label>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box-check">
                            <div class="style-check">
                                <input id="opsi_7" name="fasilitas" type="checkbox">
                                <label>Opsi 7</label>
                            </div>
                            <div class="style-check">
                                <input id="opsi_8" name="fasilitas" type="checkbox">
                                <label>Opsi 8</label>
                            </div>
                            <div class="style-check">
                                <input id="opsi_9" name="fasilitas" type="checkbox">
                                <label>Opsi 9</label>
                            </div>
                            <div class="style-check">
                                <input id="opsi_10" name="fasilitas" type="checkbox">
                                <label>Opsi 10</label>
                            </div>
                            <div class="style-check">
                                <input id="opsi_11" name="fasilitas" type="checkbox">
                                <label>Opsi 11</label>
                            </div>
                            <div class="style-check">
                                <input id="opsi_12" name="fasilitas" type="checkbox">
                                <label>Opsi 12</label>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="field">
                <label> Keterangan</label>
                <textarea name="" id="" cols="30" rows="4" placeholder="tulis keterangan singkat menngenai kendaraan disini..."></textarea>
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
        <button class="btn-secondary">Save as draft</button>
        <button class="btn-primary">Save &amp; publish</button>
    </div>

</form>
<form action="" class="default-form">
    
    <div class="row">
        
        <div class="col-md-6">
            <div class="field">
                <label> Title</label>
                <input type="text" placeholder="placeholder here">
            </div>
        </div>

        <div class="col-md-3">
            <div class="field">
                <label> Title text field</label>
                <input type="text" placeholder="placeholder here">
            </div>
        </div>

        <div class="col-md-3">
            <div class="field">
                <label> Title counter</label>
                <div class="counter-field">
                    <input type="number" id="qty" value="0">
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
                <label> Title select</label>
                <select name="" id="">
                    <option value="" disabled selected>Select Option</option>
                    <option value="">Option 1</option>
                    <option value="">Option 2</option>
                    <option value="">Option 3</option>
                </select>
            </div>
        </div>

        <div class="col-md-3">
            <div class="field">
                <label> Title select</label>
                <select name="" id="">
                    <option value="" disabled selected>Select Option</option>
                    <option value="">Option 1</option>
                    <option value="">Option 2</option>
                    <option value="">Option 3</option>
                </select>
            </div>
        </div>

        <div class="col-md-3">
            <div class="field">
                <label> Title Radio</label>
                <div class="box-radio">
                    <div class="style-radio">
                        <input id="male" name="gender" type="radio">
                        <label>Male</label>
                    </div>
                    <div class="style-radio">
                        <input id="female" name="gender" type="radio">
                        <label>female</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="field">
                <label>Title check</label>
                <div class="box-check">
                    <div class="style-check">
                        <input id="opsi_1" name="opsi" type="checkbox">
                        <label>Opsi 1</label>
                    </div>
                    <div class="style-check">
                        <input id="opsi_2" name="opsi" type="checkbox">
                        <label>Opsi 2</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="action-form">
            <button class="btn-secondary">Save as draft</button>
            <button class="btn-primary">Save &amp; publish</button>
        </div>

    </div>

</form>
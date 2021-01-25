<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1> Tambah Assets</h1>
        </div>
        <div class="row" syu>
            <div class="col-md-12 bg-white" style="border-radius:3px;box-shadow:rgba(0, 0, 0, 0.03) 0px 4px 8px 0px;">
                <h3 class="font-weight-bold" style="color: #34395e!important; padding-top: 15px;"><?= $menu ?> </h3>
                <hr>
                <?php if ($menu == "Access Point") { ?>
                    <form method="POST" action="<?= base_url('staff/create_request') ?>">
                        <div class="row" style="width: 100%;">
                            <div class="col-lg-6">
                                <div class="form-group ">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                                </div>
                                <div class="form-group ">
                                    <label>Business Impact</label>
                                    <input type="text"  class="form-control" name="user" placeholder="Masukan Nama">
                                </div>
                                <div class="form-group">
                                    <label>Product</label>
                                    <select style=" height:50px;" class="form-control selectpicker" id="category" name="kategori">
                                        <option>---- Pilih Kategori ---- </option>
                                        <?php
                                        foreach ($kategori as $u) {
                                        ?>
                                            <option <?php if ($_GET['menu'] == $u->kategori) : ?> selected <?php endif ?> value="<?php echo $u->kategori ?>"><?php echo $u->kategori ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>nama lokasi</label>
                                    <select style=" height:50px;" class="form-control selectpicker" name="status">
                                        <option value="">---- Pilih Status ---- </option>
                                        <option value="Open">Open</option>
                                        <option value="Close">Close</option>
                                        <option value="Tindak Lanjut">Tindak Lanjut</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>kota</label>
                                    <select style=" height:50px;" class="form-control selectpicker" name="status">
                                        <option value="">---- Pilih Status ---- </option>
                                        <option value="Open">Open</option>
                                        <option value="Close">Close</option>
                                        <option value="Tindak Lanjut">Tindak Lanjut</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>parent lokasi</label>
                                    <select style=" height:50px;" class="form-control selectpicker" name="pj">
                                        <option value="">---- Pilih PJ ---- </option>
                                        <?php
                                        foreach ($m_pj as $u) {
                                        ?>
                                            <option value="<?php echo $u->nama ?>"><?php echo $u->nama ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>org serial number : </label>
                                    <input class="form-control" id="ass" type="text" name="assets">
                                </div>
                                <div class="form-group">
                                    <label>Barcode : </label>
                                    <input class="form-control" id="ass" type="text" name="assets">
                                </div>
                                <div class="form-group">
                                    <label>asset tag :</label>
                                    <input class="form-control" id="count_data" name="count_a" type="text" readonly>
                                </div>
                                <div class="form-group">
                                    <label>vendor name : </label>
                                    <input class="form-control" type="text" name="start_date">
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Purchase Cost</label>
                                    <input class="form-control" type="text" name="end_date">
                                </div>
                                <div class="form-group">
                                    <label>acquisition date :</label>
                                    <input class="form-control" type="date" name="end_date">
                                </div>
                                <div class="form-group">
                                    <label>expiry date :</label>
                                    <input class="form-control" type="date" name="end_date">
                                </div>
                                <div class="form-group">
                                    <label>warrant expiry date :</label>
                                    <input class="form-control" type="date" name="end_date">
                                </div>
                                <div class="form-group">
                                    <label>Single Line :</label>
                                    <input class="form-control" type="text" name="end_date">
                                </div>
                                <div class="form-group">
                                    <label>Multi Line :</label>

                                </div>
                                <textarea name="Text1" rows="5" cols="100"></textarea>
                            </div>
                            <p style="padding-bottom: 20px;">
                        </div>
                        <input type="submit" value="Created Asset" class="btn btn-success btn-block">
                        <p style="padding-bottom: 20px;">
            </div>
            </form>
        <?php } ?>

        <?php if ($menu == "Router" || $menu == "Switch") { ?>
            <form method="POST" action="<?= base_url('staff/create_request') ?>">
                <div class="row" style="width: 100%;">
                    <div class="col-lg-6">
                        <div class="form-group ">
                            <label>Name</label>
                            <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                        </div>
                        <div class="form-group ">
                            <label>Firmware Revision</label>
                            <input type="text"  class="form-control" name="user" placeholder="Masukan Nama">
                        </div>
                        <div class="form-group ">
                            <label>Subnet Mask</label>
                            <input type="text"  class="form-control" name="user" placeholder="Masukan Nama">
                        </div>
                        <div class="form-group ">
                            <label>Os Version</label>
                            <input type="text"  class="form-control" name="user" placeholder="Masukan Nama">
                        </div>
                        <div class="form-group ">
                            <label>CPU (Mb)</label>
                            <input type="text"  class="form-control" name="user" placeholder="Masukan Nama">
                        </div>
                        <div class="form-group ">
                            <label>Flash Size (Mb)</label>
                            <input type="text"  class="form-control" name="user" placeholder="Masukan Nama">
                        </div>
                        <div class="form-group ">
                            <label>NvRam Size (Kb)</label>
                            <input type="text"  class="form-control" name="user" placeholder="Masukan Nama">
                        </div>
                        <div class="form-group ">
                            <label>CPU Revision</label>
                            <input type="text"  class="form-control" name="user" placeholder="Masukan Nama">
                        </div>
                        <div class="form-group ">
                            <label>Description</label>
                            <input type="text"  class="form-control" name="user" placeholder="Masukan Nama">
                        </div>
                        <div class="form-group ">
                            <label>Product</label>
                            <input type="text"  class="form-control" name="user" placeholder="Masukan Nama">
                        </div>
                        <div class="form-group ">
                            <label>Mac Address</label>
                            <input type="text"  class="form-control" name="user" placeholder="Masukan Nama">
                        </div>
                        <div class="form-group ">
                            <label>IP Address</label>
                            <input type="text"  class="form-control" name="user" placeholder="Masukan Nama">
                        </div>
                        <div class="form-group ">
                            <label>Estimated Bandwidth</label>
                            <input type="text"  class="form-control" name="user" placeholder="Masukan Nama">
                        </div>
                        <div class="form-group ">
                            <label>DRAM Size</label>
                            <input type="text"  class="form-control" name="user" placeholder="Masukan Nama">
                        </div>
                        <div class="form-group ">
                            <label>Business Impact</label>
                            <input type="text"  class="form-control" name="user" placeholder="Masukan Nama">
                        </div>
                        <div class="form-group ">
                            <label>Firmware Revision</label>
                            <input type="text"  class="form-control" name="user" placeholder="Masukan Nama">
                        </div>

                    </div>
                    <div class="col-lg-6">

                        <div class="form-group ">
                            <label>IP Address</label>
                            <input type="text"  class="form-control" name="user" placeholder="Masukan Nama">
                        </div>
                        <div class="form-group ">
                            <label>Description</label>
                            <input type="text"  class="form-control" name="user" placeholder="Masukan Nama">
                        </div>
                        <div class="form-group">
                            <label>Product</label>
                            <select style=" height:50px;" class="form-control selectpicker" id="category" name="kategori">
                                <option>---- Pilih Kategori ---- </option>
                                <?php
                                foreach ($kategori as $u) {
                                ?>
                                    <option <?php if ($_GET['menu'] == $u->kategori) : ?> selected <?php endif ?> value="<?php echo $u->kategori ?>"><?php echo $u->kategori ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>nama lokasi</label>
                            <select style=" height:50px;" class="form-control selectpicker" name="status">
                                <option value="">---- Pilih Status ---- </option>
                                <option value="Open">Open</option>
                                <option value="Close">Close</option>
                                <option value="Tindak Lanjut">Tindak Lanjut</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>kota</label>
                            <select style=" height:50px;" class="form-control selectpicker" name="status">
                                <option value="">---- Pilih Status ---- </option>
                                <option value="Open">Open</option>
                                <option value="Close">Close</option>
                                <option value="Tindak Lanjut">Tindak Lanjut</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>parent lokasi</label>
                            <select style=" height:50px;" class="form-control selectpicker" name="pj">
                                <option value="">---- Pilih PJ ---- </option>
                                <?php
                                foreach ($m_pj as $u) {
                                ?>
                                    <option value="<?php echo $u->nama ?>"><?php echo $u->nama ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>org serial number : </label>
                            <input class="form-control" id="ass" type="text" name="assets">
                        </div>
                        <div class="form-group">
                            <label>Barcode : </label>
                            <input class="form-control" id="ass" type="text" name="assets">
                        </div>
                        <div class="form-group">
                            <label>asset tag :</label>
                            <input class="form-control" id="count_data" name="count_a" type="text" readonly>
                        </div>
                        <div class="form-group">
                            <label>vendor name : </label>
                            <input class="form-control" type="text" name="start_date">
                        </div>
                        <div class="form-group">
                            <label>Purchase Cost</label>
                            <input class="form-control" type="text" name="end_date">
                        </div>
                        <div class="form-group">
                            <label>acquisition date :</label>
                            <input class="form-control" type="date" name="end_date">
                        </div>
                        <div class="form-group">
                            <label>expiry date :</label>
                            <input class="form-control" type="date" name="end_date">
                        </div>
                        <div class="form-group">
                            <label>warrant expiry date :</label>
                            <input class="form-control" type="date" name="end_date">
                        </div>
                        <div class="form-group">
                            <label>Single Line :</label>
                            <input class="form-control" type="text" name="end_date">
                        </div>
                        <div class="form-group">
                            <label>Multi Line :</label>

                        </div>
                        <textarea name="Text1" rows="5" cols="100"></textarea>
                    </div>
                    <p style="padding-bottom: 20px;">
                </div>
                <input type="submit" value="Created Asset" class="btn btn-success btn-block">
                <p style="padding-bottom: 20px;">
        </div>
        </form>
    <?php } ?>


    <?php if ($menu == "Firewall") { ?>
        <form method="POST" action="<?= base_url('staff/create_request') ?>">
            <div class="row" style="width: 100%;">
                <div class="col-lg-6">
                    <div class="form-group ">
                        <label>Name</label>
                        <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                    </div>
                    <div class="form-group ">
                        <label>Business Impact</label>
                        <input type="text"  class="form-control" name="user" placeholder="Masukan Nama">
                    </div>
                    <div class="form-group ">
                        <label>Firmware Revision</label>
                        <input type="text"  class="form-control" name="user" placeholder="Masukan Nama">
                    </div>
                    <div class="form-group ">
                        <label>IP Address</label>
                        <input type="text"  class="form-control" name="user" placeholder="Masukan Nama">
                    </div>
                    <div class="form-group ">
                        <label>Description</label>
                        <input type="text"  class="form-control" name="user" placeholder="Masukan Nama">
                    </div>
                    <div class="form-group">
                        <label>Product</label>
                        <select style=" height:50px;" class="form-control selectpicker" id="category" name="kategori">
                            <option>---- Pilih Kategori ---- </option>
                            <?php
                            foreach ($kategori as $u) {
                            ?>
                                <option <?php if ($_GET['menu'] == $u->kategori) : ?> selected <?php endif ?> value="<?php echo $u->kategori ?>"><?php echo $u->kategori ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>nama lokasi</label>
                        <select style=" height:50px;" class="form-control selectpicker" name="status">
                            <option value="">---- Pilih Status ---- </option>
                            <option value="Open">Open</option>
                            <option value="Close">Close</option>
                            <option value="Tindak Lanjut">Tindak Lanjut</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>kota</label>
                        <select style=" height:50px;" class="form-control selectpicker" name="status">
                            <option value="">---- Pilih Status ---- </option>
                            <option value="Open">Open</option>
                            <option value="Close">Close</option>
                            <option value="Tindak Lanjut">Tindak Lanjut</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>parent lokasi</label>
                        <select style=" height:50px;" class="form-control selectpicker" name="pj">
                            <option value="">---- Pilih PJ ---- </option>
                            <?php
                            foreach ($m_pj as $u) {
                            ?>
                                <option value="<?php echo $u->nama ?>"><?php echo $u->nama ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>org serial number : </label>
                        <input class="form-control" id="ass" type="text" name="assets">
                    </div>
                    <div class="form-group">
                        <label>Barcode : </label>
                        <input class="form-control" id="ass" type="text" name="assets">
                    </div>
                    <div class="form-group">
                        <label>asset tag :</label>
                        <input class="form-control" id="count_data" name="count_a" type="text" readonly>
                    </div>


                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>vendor name : </label>
                        <input class="form-control" type="text" name="start_date">
                    </div>
                    <div class="form-group">
                        <label>Purchase Cost</label>
                        <input class="form-control" type="text" name="end_date">
                    </div>
                    <div class="form-group">
                        <label>acquisition date :</label>
                        <input class="form-control" type="date" name="end_date">
                    </div>
                    <div class="form-group">
                        <label>expiry date :</label>
                        <input class="form-control" type="date" name="end_date">
                    </div>
                    <div class="form-group">
                        <label>warrant expiry date :</label>
                        <input class="form-control" type="date" name="end_date">
                    </div>
                    <div class="form-group">
                        <label>Single Line :</label>
                        <input class="form-control" type="text" name="end_date">
                    </div>
                    <div class="form-group">
                        <label>Multi Line :</label>

                    </div>
                    <textarea name="Text1" rows="5" cols="100"></textarea>
                </div>
                <p style="padding-bottom: 20px;">
            </div>
            <input type="submit" value="Created Asset" class="btn btn-success btn-block">
            <p style="padding-bottom: 20px;">
</div>
</form>
<?php } ?>


<?php if ($menu == "IP Phone") { ?>
    <form method="POST" action="<?= base_url('staff/create_request') ?>">
        <div class="row" style="width: 100%;">
            <div class="col-lg-6">
                <div class="form-group ">
                    <label>Name</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group ">
                    <label>IP Address</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group ">
                    <label>Serial Number</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group ">
                    <label>Description</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group ">
                    <label>Product</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group ">
                    <label>Mac Address</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group ">
                    <label>Business Impact</label>
                    <input type="text"  class="form-control" name="user" placeholder="Masukan Nama">
                </div>
                <div class="form-group">
                    <label>nama lokasi</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="status">
                        <option value="">---- Pilih Status ---- </option>
                        <option value="Open">Open</option>
                        <option value="Close">Close</option>
                        <option value="Tindak Lanjut">Tindak Lanjut</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>kota</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="status">
                        <option value="">---- Pilih Status ---- </option>
                        <option value="Open">Open</option>
                        <option value="Close">Close</option>
                        <option value="Tindak Lanjut">Tindak Lanjut</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>parent lokasi</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="pj">
                        <option value="">---- Pilih PJ ---- </option>
                        <?php
                        foreach ($m_pj as $u) {
                        ?>
                            <option value="<?php echo $u->nama ?>"><?php echo $u->nama ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>org serial number : </label>
                    <input class="form-control" id="ass" type="text" name="assets">
                </div>
                <div class="form-group">
                    <label>Barcode : </label>
                    <input class="form-control" id="ass" type="text" name="assets">
                </div>
                <div class="form-group">
                    <label>asset tag :</label>
                    <input class="form-control" id="count_data" name="count_a" type="text" readonly>
                </div>


            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>vendor name : </label>
                    <input class="form-control" type="text" name="start_date">
                </div>
                <div class="form-group">
                    <label>Purchase Cost</label>
                    <input class="form-control" type="text" name="end_date">
                </div>
                <div class="form-group">
                    <label>acquisition date :</label>
                    <input class="form-control" type="date" name="end_date">
                </div>
                <div class="form-group">
                    <label>expiry date :</label>
                    <input class="form-control" type="date" name="end_date">
                </div>
                <div class="form-group">
                    <label>warrant expiry date :</label>
                    <input class="form-control" type="date" name="end_date">
                </div>
                <div class="form-group">
                    <label>Single Line :</label>
                    <input class="form-control" type="text" name="end_date">
                </div>
                <div class="form-group">
                    <label>Multi Line :</label>

                </div>
                <textarea name="Text1" rows="5" cols="100"></textarea>
            </div>
            <p style="padding-bottom: 20px;">
        </div>
        <input type="submit" value="Created Asset" class="btn btn-success btn-block">
        <p style="padding-bottom: 20px;">
            </div>
    </form>
<?php } ?>





<?php if ($menu == "IPS") { ?>
    <form method="POST" action="<?= base_url('staff/create_request') ?>">
        <div class="row" style="width: 100%;">
            <div class="col-lg-6">
                <div class="form-group ">
                    <label>Name</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group ">
                    <label>IP Address</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group ">
                    <label>Software Version</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group ">
                    <label>Description</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group ">
                    <label>Product</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group ">
                    <label>Hardware Version</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group">
                    <label>nama lokasi</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="status">
                        <option value="">---- Pilih Status ---- </option>
                        <option value="Open">Open</option>
                        <option value="Close">Close</option>
                        <option value="Tindak Lanjut">Tindak Lanjut</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>kota</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="status">
                        <option value="">---- Pilih Status ---- </option>
                        <option value="Open">Open</option>
                        <option value="Close">Close</option>
                        <option value="Tindak Lanjut">Tindak Lanjut</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>parent lokasi</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="pj">
                        <option value="">---- Pilih PJ ---- </option>
                        <?php
                        foreach ($m_pj as $u) {
                        ?>
                            <option value="<?php echo $u->nama ?>"><?php echo $u->nama ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>org serial number : </label>
                    <input class="form-control" id="ass" type="text" name="assets">
                </div>
                <div class="form-group">
                    <label>Barcode : </label>
                    <input class="form-control" id="ass" type="text" name="assets">
                </div>
                <div class="form-group">
                    <label>asset tag :</label>
                    <input class="form-control" id="count_data" name="count_a" type="text" readonly>
                </div>


            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>vendor name : </label>
                    <input class="form-control" type="text" name="start_date">
                </div>
                <div class="form-group">
                    <label>Purchase Cost</label>
                    <input class="form-control" type="text" name="end_date">
                </div>
                <div class="form-group">
                    <label>acquisition date :</label>
                    <input class="form-control" type="date" name="end_date">
                </div>
                <div class="form-group">
                    <label>expiry date :</label>
                    <input class="form-control" type="date" name="end_date">
                </div>
                <div class="form-group">
                    <label>warrant expiry date :</label>
                    <input class="form-control" type="date" name="end_date">
                </div>
                <div class="form-group">
                    <label>Single Line :</label>
                    <input class="form-control" type="text" name="end_date">
                </div>
                <div class="form-group">
                    <label>Multi Line :</label>

                </div>
                <textarea name="Text1" rows="5" cols="100"></textarea>
            </div>
            <p style="padding-bottom: 20px;">
        </div>
        <input type="submit" value="Created Asset" class="btn btn-success btn-block">
        <p style="padding-bottom: 20px;">
            </div>
    </form>
<?php } ?>




<?php if ($menu == "NTP") { ?>
    <form method="POST" action="<?= base_url('staff/create_request') ?>">
        <div class="row" style="width: 100%;">
            <div class="col-lg-6">
                <div class="form-group ">
                    <label>Name</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group ">
                    <label>IP Address</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group ">
                    <label>System Type</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group ">
                    <label>Description</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group ">
                    <label>Product</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group ">
                    <label>Os Version</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group ">
                    <label>Bussines Impact</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group">
                    <label>nama lokasi</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="status">
                        <option value="">---- Pilih Status ---- </option>
                        <option value="Open">Open</option>
                        <option value="Close">Close</option>
                        <option value="Tindak Lanjut">Tindak Lanjut</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>kota</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="status">
                        <option value="">---- Pilih Status ---- </option>
                        <option value="Open">Open</option>
                        <option value="Close">Close</option>
                        <option value="Tindak Lanjut">Tindak Lanjut</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>parent lokasi</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="pj">
                        <option value="">---- Pilih PJ ---- </option>
                        <?php
                        foreach ($m_pj as $u) {
                        ?>
                            <option value="<?php echo $u->nama ?>"><?php echo $u->nama ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>org serial number : </label>
                    <input class="form-control" id="ass" type="text" name="assets">
                </div>
                <div class="form-group">
                    <label>Barcode : </label>
                    <input class="form-control" id="ass" type="text" name="assets">
                </div>
                <div class="form-group">
                    <label>asset tag :</label>
                    <input class="form-control" id="count_data" name="count_a" type="text" readonly>
                </div>


            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>vendor name : </label>
                    <input class="form-control" type="text" name="start_date">
                </div>
                <div class="form-group">
                    <label>Purchase Cost</label>
                    <input class="form-control" type="text" name="end_date">
                </div>
                <div class="form-group">
                    <label>acquisition date :</label>
                    <input class="form-control" type="date" name="end_date">
                </div>
                <div class="form-group">
                    <label>expiry date :</label>
                    <input class="form-control" type="date" name="end_date">
                </div>
                <div class="form-group">
                    <label>warrant expiry date :</label>
                    <input class="form-control" type="date" name="end_date">
                </div>
                <div class="form-group">
                    <label>Single Line :</label>
                    <input class="form-control" type="text" name="end_date">
                </div>
                <div class="form-group">
                    <label>Multi Line :</label>

                </div>
                <textarea name="Text1" rows="5" cols="100"></textarea>
            </div>
            <p style="padding-bottom: 20px;">
        </div>
        <input type="submit" value="Created Asset" class="btn btn-success btn-block">
        <p style="padding-bottom: 20px;">
            </div>
    </form>
<?php } ?>



<?php if ($menu == "NTP") { ?>
    <form method="POST" action="<?= base_url('staff/create_request') ?>">
        <div class="row" style="width: 100%;">
            <div class="col-lg-6">
                <div class="form-group ">
                    <label>Name</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group ">
                    <label>IP Address</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group ">
                    <label>System Type</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group ">
                    <label>Description</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group ">
                    <label>Product</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group ">
                    <label>Os Version</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group ">
                    <label>Bussines Impact</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group">
                    <label>nama lokasi</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="status">
                        <option value="">---- Pilih Status ---- </option>
                        <option value="Open">Open</option>
                        <option value="Close">Close</option>
                        <option value="Tindak Lanjut">Tindak Lanjut</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>kota</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="status">
                        <option value="">---- Pilih Status ---- </option>
                        <option value="Open">Open</option>
                        <option value="Close">Close</option>
                        <option value="Tindak Lanjut">Tindak Lanjut</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>parent lokasi</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="pj">
                        <option value="">---- Pilih PJ ---- </option>
                        <?php
                        foreach ($m_pj as $u) {
                        ?>
                            <option value="<?php echo $u->nama ?>"><?php echo $u->nama ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>org serial number : </label>
                    <input class="form-control" id="ass" type="text" name="assets">
                </div>
                <div class="form-group">
                    <label>Barcode : </label>
                    <input class="form-control" id="ass" type="text" name="assets">
                </div>
                <div class="form-group">
                    <label>asset tag :</label>
                    <input class="form-control" id="count_data" name="count_a" type="text" readonly>
                </div>


            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>vendor name : </label>
                    <input class="form-control" type="text" name="start_date">
                </div>
                <div class="form-group">
                    <label>Purchase Cost</label>
                    <input class="form-control" type="text" name="end_date">
                </div>
                <div class="form-group">
                    <label>acquisition date :</label>
                    <input class="form-control" type="date" name="end_date">
                </div>
                <div class="form-group">
                    <label>expiry date :</label>
                    <input class="form-control" type="date" name="end_date">
                </div>
                <div class="form-group">
                    <label>warrant expiry date :</label>
                    <input class="form-control" type="date" name="end_date">
                </div>
                <div class="form-group">
                    <label>Single Line :</label>
                    <input class="form-control" type="text" name="end_date">
                </div>
                <div class="form-group">
                    <label>Multi Line :</label>

                </div>
                <textarea name="Text1" rows="5" cols="100"></textarea>
            </div>
            <p style="padding-bottom: 20px;">
        </div>
        <input type="submit" value="Created Asset" class="btn btn-success btn-block">
        <p style="padding-bottom: 20px;">
            </div>
    </form>
<?php } ?>

<?php if ($menu == "Rack") { ?>
    <form method="POST" action="<?= base_url('staff/create_request') ?>">
        <div class="row" style="width: 100%;">
            <div class="col-lg-6">
                <div class="form-group ">
                    <label>Name</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group ">
                    <label>FootPrint</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group ">
                    <label>Rack unit </label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group ">
                    <label>Power Consumption</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group ">
                    <label>Description</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group ">
                    <label>Product</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group ">
                    <label>Rack unit in Use</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group ">
                    <label>Bussines Impact</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group">
                    <label>nama lokasi</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="status">
                        <option value="">---- Pilih Status ---- </option>
                        <option value="Open">Open</option>
                        <option value="Close">Close</option>
                        <option value="Tindak Lanjut">Tindak Lanjut</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>kota</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="status">
                        <option value="">---- Pilih Status ---- </option>
                        <option value="Open">Open</option>
                        <option value="Close">Close</option>
                        <option value="Tindak Lanjut">Tindak Lanjut</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>parent lokasi</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="pj">
                        <option value="">---- Pilih PJ ---- </option>
                        <?php
                        foreach ($m_pj as $u) {
                        ?>
                            <option value="<?php echo $u->nama ?>"><?php echo $u->nama ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>org serial number : </label>
                    <input class="form-control" id="ass" type="text" name="assets">
                </div>
                <div class="form-group">
                    <label>Barcode : </label>
                    <input class="form-control" id="ass" type="text" name="assets">
                </div>
                <div class="form-group">
                    <label>asset tag :</label>
                    <input class="form-control" id="count_data" name="count_a" type="text" readonly>
                </div>


            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>vendor name : </label>
                    <input class="form-control" type="text" name="start_date">
                </div>
                <div class="form-group">
                    <label>Purchase Cost</label>
                    <input class="form-control" type="text" name="end_date">
                </div>
                <div class="form-group">
                    <label>acquisition date :</label>
                    <input class="form-control" type="date" name="end_date">
                </div>
                <div class="form-group">
                    <label>expiry date :</label>
                    <input class="form-control" type="date" name="end_date">
                </div>
                <div class="form-group">
                    <label>warrant expiry date :</label>
                    <input class="form-control" type="date" name="end_date">
                </div>
                <div class="form-group">
                    <label>Single Line :</label>
                    <input class="form-control" type="text" name="end_date">
                </div>
                <div class="form-group">
                    <label>Multi Line :</label>

                </div>
                <textarea name="Text1" rows="5" cols="100"></textarea>
            </div>
            <p style="padding-bottom: 20px;">
        </div>
        <input type="submit" value="Created Asset" class="btn btn-success btn-block">
        <p style="padding-bottom: 20px;">
            </div>
    </form>
<?php } ?>




<?php if ($menu == "Room Sensor") { ?>
    <form method="POST" action="<?= base_url('staff/create_request') ?>">
        <div class="row" style="width: 100%;">
            <div class="col-lg-6">
                <div class="form-group ">
                    <label>Name</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group ">
                    <label>Ip Address</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group ">
                    <label>Description</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group ">
                    <label>Product</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group">
                    <label>nama lokasi</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="status">
                        <option value="">---- Pilih Status ---- </option>
                        <option value="Open">Open</option>
                        <option value="Close">Close</option>
                        <option value="Tindak Lanjut">Tindak Lanjut</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>kota</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="status">
                        <option value="">---- Pilih Status ---- </option>
                        <option value="Open">Open</option>
                        <option value="Close">Close</option>
                        <option value="Tindak Lanjut">Tindak Lanjut</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>parent lokasi</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="pj">
                        <option value="">---- Pilih PJ ---- </option>
                        <?php
                        foreach ($m_pj as $u) {
                        ?>
                            <option value="<?php echo $u->nama ?>"><?php echo $u->nama ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>org serial number : </label>
                    <input class="form-control" id="ass" type="text" name="assets">
                </div>
                <div class="form-group">
                    <label>Barcode : </label>
                    <input class="form-control" id="ass" type="text" name="assets">
                </div>
                <div class="form-group">
                    <label>asset tag :</label>
                    <input class="form-control" id="count_data" name="count_a" type="text" readonly>
                </div>


            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>vendor name : </label>
                    <input class="form-control" type="text" name="start_date">
                </div>
                <div class="form-group">
                    <label>Purchase Cost</label>
                    <input class="form-control" type="text" name="end_date">
                </div>
                <div class="form-group">
                    <label>acquisition date :</label>
                    <input class="form-control" type="date" name="end_date">
                </div>
                <div class="form-group">
                    <label>expiry date :</label>
                    <input class="form-control" type="date" name="end_date">
                </div>
                <div class="form-group">
                    <label>warrant expiry date :</label>
                    <input class="form-control" type="date" name="end_date">
                </div>
                <div class="form-group">
                    <label>Single Line :</label>
                    <input class="form-control" type="text" name="end_date">
                </div>
                <div class="form-group">
                    <label>Multi Line :</label>

                </div>
                <textarea name="Text1" rows="5" cols="100"></textarea>
            </div>
            <p style="padding-bottom: 20px;">
        </div>
        <input type="submit" value="Created Asset" class="btn btn-success btn-block">
        <p style="padding-bottom: 20px;">
            </div>
    </form>
<?php } ?>



<?php if ($menu == "Smart Phone") { ?>
    <form method="POST" action="<?= base_url('staff/create_request') ?>">
        <div class="row" style="width: 100%;">
            <div class="col-lg-6">
                <div class="form-group ">
                    <label>Name</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group ">
                    <label>Ip Address</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group ">
                    <label>Description</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group ">
                    <label>Product</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group">
                    <label>nama lokasi</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="status">
                        <option value="">---- Pilih Status ---- </option>
                        <option value="Open">Open</option>
                        <option value="Close">Close</option>
                        <option value="Tindak Lanjut">Tindak Lanjut</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>kota</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="status">
                        <option value="">---- Pilih Status ---- </option>
                        <option value="Open">Open</option>
                        <option value="Close">Close</option>
                        <option value="Tindak Lanjut">Tindak Lanjut</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>parent lokasi</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="pj">
                        <option value="">---- Pilih PJ ---- </option>
                        <?php
                        foreach ($m_pj as $u) {
                        ?>
                            <option value="<?php echo $u->nama ?>"><?php echo $u->nama ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>org serial number : </label>
                    <input class="form-control" id="ass" type="text" name="assets">
                </div>
                <div class="form-group">
                    <label>Barcode : </label>
                    <input class="form-control" id="ass" type="text" name="assets">
                </div>
                <div class="form-group">
                    <label>asset tag :</label>
                    <input class="form-control" id="count_data" name="count_a" type="text" readonly>
                </div>


            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>vendor name : </label>
                    <input class="form-control" type="text" name="start_date">
                </div>
                <div class="form-group">
                    <label>Purchase Cost</label>
                    <input class="form-control" type="text" name="end_date">
                </div>
                <div class="form-group">
                    <label>acquisition date :</label>
                    <input class="form-control" type="date" name="end_date">
                </div>
                <div class="form-group">
                    <label>expiry date :</label>
                    <input class="form-control" type="date" name="end_date">
                </div>
                <div class="form-group">
                    <label>warrant expiry date :</label>
                    <input class="form-control" type="date" name="end_date">
                </div>
                <div class="form-group">
                    <label>Single Line :</label>
                    <input class="form-control" type="text" name="end_date">
                </div>
                <div class="form-group">
                    <label>Multi Line :</label>

                </div>
                <textarea name="Text1" rows="5" cols="100"></textarea>
            </div>
            <p style="padding-bottom: 20px;">
        </div>
        <input type="submit" value="Created Asset" class="btn btn-success btn-block">
        <p style="padding-bottom: 20px;">
            </div>
    </form>
<?php } ?>





<?php if ($menu == "Storage Device") { ?>
    <form method="POST" action="<?= base_url('staff/create_request') ?>">
        <div class="row" style="width: 100%;">
            <div class="col-lg-6">
                <div class="form-group ">
                    <label>Name</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group ">
                    <label>Ip Address</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group ">
                    <label>Description</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group ">
                    <label>Product</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group">
                    <label>nama lokasi</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="status">
                        <option value="">---- Pilih Status ---- </option>
                        <option value="Open">Open</option>
                        <option value="Close">Close</option>
                        <option value="Tindak Lanjut">Tindak Lanjut</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>kota</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="status">
                        <option value="">---- Pilih Status ---- </option>
                        <option value="Open">Open</option>
                        <option value="Close">Close</option>
                        <option value="Tindak Lanjut">Tindak Lanjut</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>parent lokasi</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="pj">
                        <option value="">---- Pilih PJ ---- </option>
                        <?php
                        foreach ($m_pj as $u) {
                        ?>
                            <option value="<?php echo $u->nama ?>"><?php echo $u->nama ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>org serial number : </label>
                    <input class="form-control" id="ass" type="text" name="assets">
                </div>
                <div class="form-group">
                    <label>Barcode : </label>
                    <input class="form-control" id="ass" type="text" name="assets">
                </div>
                <div class="form-group">
                    <label>asset tag :</label>
                    <input class="form-control" id="count_data" name="count_a" type="text" readonly>
                </div>


            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>vendor name : </label>
                    <input class="form-control" type="text" name="start_date">
                </div>
                <div class="form-group">
                    <label>Purchase Cost</label>
                    <input class="form-control" type="text" name="end_date">
                </div>
                <div class="form-group">
                    <label>acquisition date :</label>
                    <input class="form-control" type="date" name="end_date">
                </div>
                <div class="form-group">
                    <label>expiry date :</label>
                    <input class="form-control" type="date" name="end_date">
                </div>
                <div class="form-group">
                    <label>warrant expiry date :</label>
                    <input class="form-control" type="date" name="end_date">
                </div>
                <div class="form-group">
                    <label>Single Line :</label>
                    <input class="form-control" type="text" name="end_date">
                </div>
                <div class="form-group">
                    <label>Multi Line :</label>

                </div>
                <textarea name="Text1" rows="5" cols="100"></textarea>
            </div>
            <p style="padding-bottom: 20px;">
        </div>
        <input type="submit" value="Created Asset" class="btn btn-success btn-block">
        <p style="padding-bottom: 20px;">
            </div>
    </form>
<?php } ?>





<?php if ($menu == "Tablet") { ?>
    <form method="POST" action="<?= base_url('staff/create_request') ?>">
        <div class="row" style="width: 100%;">
            <div class="col-lg-6">
                <div class="form-group ">
                    <label>Name</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group ">
                    <label>Ip Address</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group ">
                    <label>Description</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group ">
                    <label>Product</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group">
                    <label>nama lokasi</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="status">
                        <option value="">---- Pilih Status ---- </option>
                        <option value="Open">Open</option>
                        <option value="Close">Close</option>
                        <option value="Tindak Lanjut">Tindak Lanjut</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>kota</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="status">
                        <option value="">---- Pilih Status ---- </option>
                        <option value="Open">Open</option>
                        <option value="Close">Close</option>
                        <option value="Tindak Lanjut">Tindak Lanjut</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>parent lokasi</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="pj">
                        <option value="">---- Pilih PJ ---- </option>
                        <?php
                        foreach ($m_pj as $u) {
                        ?>
                            <option value="<?php echo $u->nama ?>"><?php echo $u->nama ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>org serial number : </label>
                    <input class="form-control" id="ass" type="text" name="assets">
                </div>
                <div class="form-group">
                    <label>Barcode : </label>
                    <input class="form-control" id="ass" type="text" name="assets">
                </div>
                <div class="form-group">
                    <label>asset tag :</label>
                    <input class="form-control" id="count_data" name="count_a" type="text" readonly>
                </div>


            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>vendor name : </label>
                    <input class="form-control" type="text" name="start_date">
                </div>
                <div class="form-group">
                    <label>Purchase Cost</label>
                    <input class="form-control" type="text" name="end_date">
                </div>
                <div class="form-group">
                    <label>acquisition date :</label>
                    <input class="form-control" type="date" name="end_date">
                </div>
                <div class="form-group">
                    <label>expiry date :</label>
                    <input class="form-control" type="date" name="end_date">
                </div>
                <div class="form-group">
                    <label>warrant expiry date :</label>
                    <input class="form-control" type="date" name="end_date">
                </div>
                <div class="form-group">
                    <label>Single Line :</label>
                    <input class="form-control" type="text" name="end_date">
                </div>
                <div class="form-group">
                    <label>Multi Line :</label>

                </div>
                <textarea name="Text1" rows="5" cols="100"></textarea>
            </div>
            <p style="padding-bottom: 20px;">
        </div>
        <input type="submit" value="Created Asset" class="btn btn-success btn-block">
        <p style="padding-bottom: 20px;">
            </div>
    </form>
<?php } ?>





<?php if ($menu == "UPS") { ?>
    <form method="POST" action="<?= base_url('staff/create_request') ?>">
        <div class="row" style="width: 100%;">
            <div class="col-lg-6">
                <div class="form-group ">
                    <label>Name</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group ">
                    <label>Ip Address</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group ">
                    <label>Description</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group ">
                    <label>Product</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group">
                    <label>nama lokasi</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="status">
                        <option value="">---- Pilih Status ---- </option>
                        <option value="Open">Open</option>
                        <option value="Close">Close</option>
                        <option value="Tindak Lanjut">Tindak Lanjut</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>kota</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="status">
                        <option value="">---- Pilih Status ---- </option>
                        <option value="Open">Open</option>
                        <option value="Close">Close</option>
                        <option value="Tindak Lanjut">Tindak Lanjut</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>parent lokasi</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="pj">
                        <option value="">---- Pilih PJ ---- </option>
                        <?php
                        foreach ($m_pj as $u) {
                        ?>
                            <option value="<?php echo $u->nama ?>"><?php echo $u->nama ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>org serial number : </label>
                    <input class="form-control" id="ass" type="text" name="assets">
                </div>
                <div class="form-group">
                    <label>Barcode : </label>
                    <input class="form-control" id="ass" type="text" name="assets">
                </div>
                <div class="form-group">
                    <label>asset tag :</label>
                    <input class="form-control" id="count_data" name="count_a" type="text" readonly>
                </div>


            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>vendor name : </label>
                    <input class="form-control" type="text" name="start_date">
                </div>
                <div class="form-group">
                    <label>Purchase Cost</label>
                    <input class="form-control" type="text" name="end_date">
                </div>
                <div class="form-group">
                    <label>acquisition date :</label>
                    <input class="form-control" type="date" name="end_date">
                </div>
                <div class="form-group">
                    <label>expiry date :</label>
                    <input class="form-control" type="date" name="end_date">
                </div>
                <div class="form-group">
                    <label>warrant expiry date :</label>
                    <input class="form-control" type="date" name="end_date">
                </div>
                <div class="form-group">
                    <label>Single Line :</label>
                    <input class="form-control" type="text" name="end_date">
                </div>
                <div class="form-group">
                    <label>Multi Line :</label>

                </div>
                <textarea name="Text1" rows="5" cols="100"></textarea>
            </div>
            <p style="padding-bottom: 20px;">
        </div>
        <input type="submit" value="Created Asset" class="btn btn-success btn-block">
        <p style="padding-bottom: 20px;">
            </div>
    </form>
<?php } ?>




<?php if ($menu == "Video Encoder") { ?>
    <form method="POST" action="<?= base_url('staff/create_request') ?>">
        <div class="row" style="width: 100%;">
            <div class="col-lg-6">
                <div class="form-group ">
                    <label>Name</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group ">
                    <label>Ip Address</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group ">
                    <label>Description</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group ">
                    <label>Product</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group">
                    <label>nama lokasi</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="status">
                        <option value="">---- Pilih Status ---- </option>
                        <option value="Open">Open</option>
                        <option value="Close">Close</option>
                        <option value="Tindak Lanjut">Tindak Lanjut</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>kota</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="status">
                        <option value="">---- Pilih Status ---- </option>
                        <option value="Open">Open</option>
                        <option value="Close">Close</option>
                        <option value="Tindak Lanjut">Tindak Lanjut</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>parent lokasi</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="pj">
                        <option value="">---- Pilih PJ ---- </option>
                        <?php
                        foreach ($m_pj as $u) {
                        ?>
                            <option value="<?php echo $u->nama ?>"><?php echo $u->nama ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>org serial number : </label>
                    <input class="form-control" id="ass" type="text" name="assets">
                </div>
                <div class="form-group">
                    <label>Barcode : </label>
                    <input class="form-control" id="ass" type="text" name="assets">
                </div>
                <div class="form-group">
                    <label>asset tag :</label>
                    <input class="form-control" id="count_data" name="count_a" type="text" readonly>
                </div>


            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>vendor name : </label>
                    <input class="form-control" type="text" name="start_date">
                </div>
                <div class="form-group">
                    <label>Purchase Cost</label>
                    <input class="form-control" type="text" name="end_date">
                </div>
                <div class="form-group">
                    <label>acquisition date :</label>
                    <input class="form-control" type="date" name="end_date">
                </div>
                <div class="form-group">
                    <label>expiry date :</label>
                    <input class="form-control" type="date" name="end_date">
                </div>
                <div class="form-group">
                    <label>warrant expiry date :</label>
                    <input class="form-control" type="date" name="end_date">
                </div>
                <div class="form-group">
                    <label>Single Line :</label>
                    <input class="form-control" type="text" name="end_date">
                </div>
                <div class="form-group">
                    <label>Multi Line :</label>

                </div>
                <textarea name="Text1" rows="5" cols="100"></textarea>
            </div>
            <p style="padding-bottom: 20px;">
        </div>
        <input type="submit" value="Created Asset" class="btn btn-success btn-block">
        <p style="padding-bottom: 20px;">
            </div>
    </form>
<?php } ?>



<?php if ($menu == "IPS") { ?>
    <form method="POST" action="<?= base_url('staff/create_request') ?>">
        <div class="row" style="width: 100%;">
            <div class="col-lg-6">
                <div class="form-group ">
                    <label>Name</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group ">
                    <label>Ip Address</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group ">
                    <label>Description</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group ">
                    <label>Product</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group">
                    <label>nama lokasi</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="status">
                        <option value="">---- Pilih Status ---- </option>
                        <option value="Open">Open</option>
                        <option value="Close">Close</option>
                        <option value="Tindak Lanjut">Tindak Lanjut</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>kota</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="status">
                        <option value="">---- Pilih Status ---- </option>
                        <option value="Open">Open</option>
                        <option value="Close">Close</option>
                        <option value="Tindak Lanjut">Tindak Lanjut</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>parent lokasi</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="pj">
                        <option value="">---- Pilih PJ ---- </option>
                        <?php
                        foreach ($m_pj as $u) {
                        ?>
                            <option value="<?php echo $u->nama ?>"><?php echo $u->nama ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>org serial number : </label>
                    <input class="form-control" id="ass" type="text" name="assets">
                </div>
                <div class="form-group">
                    <label>Barcode : </label>
                    <input class="form-control" id="ass" type="text" name="assets">
                </div>
                <div class="form-group">
                    <label>asset tag :</label>
                    <input class="form-control" id="count_data" name="count_a" type="text" readonly>
                </div>


            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>vendor name : </label>
                    <input class="form-control" type="text" name="start_date">
                </div>
                <div class="form-group">
                    <label>Purchase Cost</label>
                    <input class="form-control" type="text" name="end_date">
                </div>
                <div class="form-group">
                    <label>acquisition date :</label>
                    <input class="form-control" type="date" name="end_date">
                </div>
                <div class="form-group">
                    <label>expiry date :</label>
                    <input class="form-control" type="date" name="end_date">
                </div>
                <div class="form-group">
                    <label>warrant expiry date :</label>
                    <input class="form-control" type="date" name="end_date">
                </div>
                <div class="form-group">
                    <label>Single Line :</label>
                    <input class="form-control" type="text" name="end_date">
                </div>
                <div class="form-group">
                    <label>Multi Line :</label>

                </div>
                <textarea name="Text1" rows="5" cols="100"></textarea>
            </div>
            <p style="padding-bottom: 20px;">
        </div>
        <input type="submit" value="Created Asset" class="btn btn-success btn-block">
        <p style="padding-bottom: 20px;">
            </div>
    </form>
<?php } ?>




<?php if ($menu == "Projector") { ?>
    <form method="POST" action="<?= base_url('staff/create_request') ?>">
        <div class="row" style="width: 100%;">
            <div class="col-lg-6">
                <div class="form-group ">
                    <label>Name</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group ">
                    <label>Ip Address</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group ">
                    <label>Description</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group ">
                    <label>Product</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group">
                    <label>nama lokasi</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="status">
                        <option value="">---- Pilih Status ---- </option>
                        <option value="Open">Open</option>
                        <option value="Close">Close</option>
                        <option value="Tindak Lanjut">Tindak Lanjut</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>kota</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="status">
                        <option value="">---- Pilih Status ---- </option>
                        <option value="Open">Open</option>
                        <option value="Close">Close</option>
                        <option value="Tindak Lanjut">Tindak Lanjut</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>parent lokasi</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="pj">
                        <option value="">---- Pilih PJ ---- </option>
                        <?php
                        foreach ($m_pj as $u) {
                        ?>
                            <option value="<?php echo $u->nama ?>"><?php echo $u->nama ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>org serial number : </label>
                    <input class="form-control" id="ass" type="text" name="assets">
                </div>
                <div class="form-group">
                    <label>Barcode : </label>
                    <input class="form-control" id="ass" type="text" name="assets">
                </div>
                <div class="form-group">
                    <label>asset tag :</label>
                    <input class="form-control" id="count_data" name="count_a" type="text" readonly>
                </div>


            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>vendor name : </label>
                    <input class="form-control" type="text" name="start_date">
                </div>
                <div class="form-group">
                    <label>Purchase Cost</label>
                    <input class="form-control" type="text" name="end_date">
                </div>
                <div class="form-group">
                    <label>acquisition date :</label>
                    <input class="form-control" type="date" name="end_date">
                </div>
                <div class="form-group">
                    <label>expiry date :</label>
                    <input class="form-control" type="date" name="end_date">
                </div>
                <div class="form-group">
                    <label>warrant expiry date :</label>
                    <input class="form-control" type="date" name="end_date">
                </div>
                <div class="form-group">
                    <label>Single Line :</label>
                    <input class="form-control" type="text" name="end_date">
                </div>
                <div class="form-group">
                    <label>Multi Line :</label>

                </div>
                <textarea name="Text1" rows="5" cols="100"></textarea>
            </div>
            <p style="padding-bottom: 20px;">
        </div>
        <input type="submit" value="Created Asset" class="btn btn-success btn-block">
        <p style="padding-bottom: 20px;">
            </div>
    </form>
<?php } ?>




<?php if ($menu == "TV") { ?>
    <form method="POST" action="<?= base_url('staff/create_request') ?>">
        <div class="row" style="width: 100%;">
            <div class="col-lg-6">
                <div class="form-group ">
                    <label>Name</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group ">
                    <label>Ip Address</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group ">
                    <label>Description</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group ">
                    <label>Product</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group">
                    <label>nama lokasi</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="status">
                        <option value="">---- Pilih Status ---- </option>
                        <option value="Open">Open</option>
                        <option value="Close">Close</option>
                        <option value="Tindak Lanjut">Tindak Lanjut</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>kota</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="status">
                        <option value="">---- Pilih Status ---- </option>
                        <option value="Open">Open</option>
                        <option value="Close">Close</option>
                        <option value="Tindak Lanjut">Tindak Lanjut</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>parent lokasi</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="pj">
                        <option value="">---- Pilih PJ ---- </option>
                        <?php
                        foreach ($m_pj as $u) {
                        ?>
                            <option value="<?php echo $u->nama ?>"><?php echo $u->nama ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>org serial number : </label>
                    <input class="form-control" id="ass" type="text" name="assets">
                </div>
                <div class="form-group">
                    <label>Barcode : </label>
                    <input class="form-control" id="ass" type="text" name="assets">
                </div>
                <div class="form-group">
                    <label>asset tag :</label>
                    <input class="form-control" id="count_data" name="count_a" type="text" readonly>
                </div>


            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>vendor name : </label>
                    <input class="form-control" type="text" name="start_date">
                </div>
                <div class="form-group">
                    <label>Purchase Cost</label>
                    <input class="form-control" type="text" name="end_date">
                </div>
                <div class="form-group">
                    <label>acquisition date :</label>
                    <input class="form-control" type="date" name="end_date">
                </div>
                <div class="form-group">
                    <label>expiry date :</label>
                    <input class="form-control" type="date" name="end_date">
                </div>
                <div class="form-group">
                    <label>warrant expiry date :</label>
                    <input class="form-control" type="date" name="end_date">
                </div>
                <div class="form-group">
                    <label>Single Line :</label>
                    <input class="form-control" type="text" name="end_date">
                </div>
                <div class="form-group">
                    <label>Multi Line :</label>

                </div>
                <textarea name="Text1" rows="5" cols="100"></textarea>
            </div>
            <p style="padding-bottom: 20px;">
        </div>
        <input type="submit" value="Created Asset" class="btn btn-success btn-block">
        <p style="padding-bottom: 20px;">
            </div>
    </form>
<?php } ?>



<?php if ($menu == "Video Conference") { ?>
    <form method="POST" action="<?= base_url('staff/create_request') ?>">
        <div class="row" style="width: 100%;">
            <div class="col-lg-6">
                <div class="form-group ">
                    <label>Name</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group ">
                    <label>Ip Address</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group ">
                    <label>Description</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group ">
                    <label>Product</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group">
                    <label>nama lokasi</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="status">
                        <option value="">---- Pilih Status ---- </option>
                        <option value="Open">Open</option>
                        <option value="Close">Close</option>
                        <option value="Tindak Lanjut">Tindak Lanjut</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>kota</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="status">
                        <option value="">---- Pilih Status ---- </option>
                        <option value="Open">Open</option>
                        <option value="Close">Close</option>
                        <option value="Tindak Lanjut">Tindak Lanjut</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>parent lokasi</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="pj">
                        <option value="">---- Pilih PJ ---- </option>
                        <?php
                        foreach ($m_pj as $u) {
                        ?>
                            <option value="<?php echo $u->nama ?>"><?php echo $u->nama ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>org serial number : </label>
                    <input class="form-control" id="ass" type="text" name="assets">
                </div>
                <div class="form-group">
                    <label>Barcode : </label>
                    <input class="form-control" id="ass" type="text" name="assets">
                </div>
                <div class="form-group">
                    <label>asset tag :</label>
                    <input class="form-control" id="count_data" name="count_a" type="text" readonly>
                </div>


            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>vendor name : </label>
                    <input class="form-control" type="text" name="start_date">
                </div>
                <div class="form-group">
                    <label>Purchase Cost</label>
                    <input class="form-control" type="text" name="end_date">
                </div>
                <div class="form-group">
                    <label>acquisition date :</label>
                    <input class="form-control" type="date" name="end_date">
                </div>
                <div class="form-group">
                    <label>expiry date :</label>
                    <input class="form-control" type="date" name="end_date">
                </div>
                <div class="form-group">
                    <label>warrant expiry date :</label>
                    <input class="form-control" type="date" name="end_date">
                </div>
                <div class="form-group">
                    <label>Single Line :</label>
                    <input class="form-control" type="text" name="end_date">
                </div>
                <div class="form-group">
                    <label>Multi Line :</label>

                </div>
                <textarea name="Text1" rows="5" cols="100"></textarea>
            </div>
            <p style="padding-bottom: 20px;">
        </div>
        <input type="submit" value="Created Asset" class="btn btn-success btn-block">
        <p style="padding-bottom: 20px;">
            </div>
    </form>
<?php } ?>



<?php if ($menu == "Virtual Hosts") { ?>
    <form method="POST" action="<?= base_url('staff/create_request') ?>">
        <div class="row" style="width: 100%;">
            <div class="col-lg-6">
                <div class="form-group ">
                    <label>Name</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group ">
                    <label>Ip Address</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group ">
                    <label>Description</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group ">
                    <label>Product</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group">
                    <label>nama lokasi</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="status">
                        <option value="">---- Pilih Status ---- </option>
                        <option value="Open">Open</option>
                        <option value="Close">Close</option>
                        <option value="Tindak Lanjut">Tindak Lanjut</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>kota</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="status">
                        <option value="">---- Pilih Status ---- </option>
                        <option value="Open">Open</option>
                        <option value="Close">Close</option>
                        <option value="Tindak Lanjut">Tindak Lanjut</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>parent lokasi</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="pj">
                        <option value="">---- Pilih PJ ---- </option>
                        <?php
                        foreach ($m_pj as $u) {
                        ?>
                            <option value="<?php echo $u->nama ?>"><?php echo $u->nama ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>org serial number : </label>
                    <input class="form-control" id="ass" type="text" name="assets">
                </div>
                <div class="form-group">
                    <label>Barcode : </label>
                    <input class="form-control" id="ass" type="text" name="assets">
                </div>
                <div class="form-group">
                    <label>asset tag :</label>
                    <input class="form-control" id="count_data" name="count_a" type="text" readonly>
                </div>


            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>vendor name : </label>
                    <input class="form-control" type="text" name="start_date">
                </div>
                <div class="form-group">
                    <label>Purchase Cost</label>
                    <input class="form-control" type="text" name="end_date">
                </div>
                <div class="form-group">
                    <label>acquisition date :</label>
                    <input class="form-control" type="date" name="end_date">
                </div>
                <div class="form-group">
                    <label>expiry date :</label>
                    <input class="form-control" type="date" name="end_date">
                </div>
                <div class="form-group">
                    <label>warrant expiry date :</label>
                    <input class="form-control" type="date" name="end_date">
                </div>
                <div class="form-group">
                    <label>Single Line :</label>
                    <input class="form-control" type="text" name="end_date">
                </div>
                <div class="form-group">
                    <label>Multi Line :</label>

                </div>
                <textarea name="Text1" rows="5" cols="100"></textarea>
            </div>
            <p style="padding-bottom: 20px;">
        </div>
        <input type="submit" value="Created Asset" class="btn btn-success btn-block">
        <p style="padding-bottom: 20px;">
            </div>
    </form>
<?php } ?>



<?php if ($menu == "Virtual Machines") { ?>
    <form method="POST" action="<?= base_url('staff/create_request') ?>">
        <div class="row" style="width: 100%;">
            <div class="col-lg-6">
                <div class="form-group ">
                    <label>Name</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group ">
                    <label>Ip Address</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group ">
                    <label>Description</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group ">
                    <label>Product</label>
                    <input type="text" class="form-control" name="user_id" placeholder="Masukan Nama">
                </div>
                <div class="form-group">
                    <label>nama lokasi</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="status">
                        <option value="">---- Pilih Status ---- </option>
                        <option value="Open">Open</option>
                        <option value="Close">Close</option>
                        <option value="Tindak Lanjut">Tindak Lanjut</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>kota</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="status">
                        <option value="">---- Pilih Status ---- </option>
                        <option value="Open">Open</option>
                        <option value="Close">Close</option>
                        <option value="Tindak Lanjut">Tindak Lanjut</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>parent lokasi</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="pj">
                        <option value="">---- Pilih PJ ---- </option>
                        <?php
                        foreach ($m_pj as $u) {
                        ?>
                            <option value="<?php echo $u->nama ?>"><?php echo $u->nama ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>org serial number : </label>
                    <input class="form-control" id="ass" type="text" name="assets">
                </div>
                <div class="form-group">
                    <label>Barcode : </label>
                    <input class="form-control" id="ass" type="text" name="assets">
                </div>
                <div class="form-group">
                    <label>asset tag :</label>
                    <input class="form-control" id="count_data" name="count_a" type="text" readonly>
                </div>


            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>vendor name : </label>
                    <input class="form-control" type="text" name="start_date">
                </div>
                <div class="form-group">
                    <label>Purchase Cost</label>
                    <input class="form-control" type="text" name="end_date">
                </div>
                <div class="form-group">
                    <label>acquisition date :</label>
                    <input class="form-control" type="date" name="end_date">
                </div>
                <div class="form-group">
                    <label>expiry date :</label>
                    <input class="form-control" type="date" name="end_date">
                </div>
                <div class="form-group">
                    <label>warrant expiry date :</label>
                    <input class="form-control" type="date" name="end_date">
                </div>
                <div class="form-group">
                    <label>Single Line :</label>
                    <input class="form-control" type="text" name="end_date">
                </div>
                <div class="form-group">
                    <label>Multi Line :</label>

                </div>
                <textarea name="Text1" rows="5" cols="100"></textarea>
            </div>
            <p style="padding-bottom: 20px;">
        </div>
        <input type="submit" value="Created Asset" class="btn btn-success btn-block">
        <p style="padding-bottom: 20px;">
            </div>
    </form>
<?php } ?>







</div>
</div>
</div>
</div>

<?php include("footer.php") ?>

<script>
    $(function() {
        // bind change event to select
        $('#category').on('change', function() {
            var kategori = $(this).val();
            var id_menu = $('#menu_id').val();
            var sub_kategori = $('#sub_category').val();
            var base_url = window.location.origin + window.location.pathname;
            if (id_menu == 1) {
                var url = base_url + "?id_menu=" + 2 + "&menu=" + kategori + "&submenu=" + sub_kategori
            } else {
                var url = base_url + "?id_menu=" + 1 + "&menu=" + kategori + "&submenu=" + sub_kategori
            }

            if (url) { // require a URL
                window.location = url; // redirect
            }
            return false;
        });
    });
</script>

<!-- General JS Scripts -->
<script>
    function count_aset() {
        var selectedItem = $('#assetss').val();
        var options = document.getElementById("assetss").options,
            count = 0;
        for (var i = 0; i < options.length; i++) {
            if (options[i].selected) count++;
        } // end of for loop
        document.getElementById("count_data").value = count;
        document.getElementById("ass").value = selectedItem;
        console.log(count);
    } // end of function
</script>


<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="<?= base_url('assets/') ?>stisla-assets/js/stisla.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
<!-- JS Libraies -->
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

<!-- Template JS File -->
<script src="<?= base_url('assets/') ?>stisla-assets/js/scripts.js"></script>
<script src="<?= base_url('assets/') ?>stisla-assets/js/custom.js"></script>

<!-- Page Specific JS File -->
</body>

</html>
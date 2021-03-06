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
                    <form method="POST" action="<?= base_url('teknisi/create_assets/IT Assets/' . $menu) ?>">
                        <div class="row" style="width: 100%;">
                            <div class="col-lg-6">
                                <div class="form-group ">
                                    <label>Name</label>
                                    <input required type="text" class="form-control" name="nama" placeholder="Masukan Data">
                                </div>
                                <div class="form-group ">
                                    <label>Business Impact</label>
                                    <input required type="text" class="form-control" name="bisnis" placeholder="Masukan Data">
                                </div>
                                <div class="form-group">
                                    <label>Product</label>
                                    <select style=" height:50px;" class="form-control selectpicker" name="a">
                                        <option>---- Pilih Product ---- </option>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>nama lokasi</label>
                                    <select style=" height:50px;" class="form-control selectpicker" name="b">
                                        <option value="">---- Pilih Lokasi ---- </option>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>kota</label>
                                    <select style=" height:50px;" class="form-control selectpicker" name="c">
                                        <option value="">---- Pilih Lokasi ---- </option>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>parent lokasi</label>
                                    <select style=" height:50px;" class="form-control selectpicker" name="d">
                                        <option value="">---- Pilih Parent Lokasi ---- </option>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>org serial number : </label>
                                    <input required class="form-control" id="ass" type="text" name="e">
                                </div>
                                <div class="form-group">
                                    <label>Barcode : </label>
                                    <input required class="form-control" id="ass" type="text" name="f">
                                </div>
                                <div class="form-group">
                                    <label>asset tag :</label>
                                    <input required class="form-control" id="count_data" name="g" type="text">
                                </div>
                                <div class="form-group">
                                    <label>vendor name : </label>
                                    <input required class="form-control" type="text" name="h">
                                </div>

                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Purchase Cost</label>
                                    <input required class="form-control" type="text" name="i">
                                </div>
                                <div class="form-group">
                                    <label>acquisition date :</label>
                                    <input required class="form-control" type="date" name="date1" required>
                                </div>
                                <div class="form-group">
                                    <label>expiry date :</label>
                                    <input required class="form-control" type="date" name="date2" required>
                                </div>
                                <div class="form-group">
                                    <label>warrant expiry date :</label>
                                    <input required class="form-control" type="date" name="date3" required>
                                </div>
                                <div class="form-group">
                                    <label>Single Line :</label>
                                    <input required class="form-control" type="text" name="j">
                                </div>
                                <div class="form-group">
                                    <label>Multi Line :</label>

                                </div>
                                <textarea name="k" rows="5" cols="100"></textarea>
                            </div>
                            <p style="padding-bottom: 20px;">
                        </div>
                        <input required type="submit" value="Created Asset" class="btn btn-success btn-block">
                        <p style="padding-bottom: 20px;">
            </div>
            </form>
        <?php } ?>




        <?php if ($menu == "Router" || $menu == "Switch" || $menu == "Server") { ?>
            <form method="POST" action="<?= base_url('teknisi/create_assets/IT Assets/' . $menu) ?>">
                <div class="row" style="width: 100%;">
                    <div class="col-lg-6">
                        <div class="form-group ">
                            <label>Name</label>
                            <input required type="text" class="form-control" name="nama" placeholder="Masukan Data">
                        </div>
                        <div class="form-group ">
                            <label>Firmware Revision</label>
                            <input required type="text" class="form-control" name="a" placeholder="Masukan Data">
                        </div>
                        <div class="form-group ">
                            <label>Subnet Mask</label>
                            <input required type="text" class="form-control" name="b" placeholder="Masukan Data">
                        </div>
                        <div class="form-group ">
                            <label>Os Version</label>
                            <input required type="text" class="form-control" name="c" placeholder="Masukan Data">
                        </div>
                        <div class="form-group ">
                            <label>CPU (Mb)</label>
                            <input required type="text" class="form-control" name="d" placeholder="Masukan Data">
                        </div>
                        <div class="form-group ">
                            <label>Flash Size (Mb)</label>
                            <input required type="text" class="form-control" name="e" placeholder="Masukan Data">
                        </div>
                        <div class="form-group ">
                            <label>NvRam Size (Kb)</label>
                            <input required type="text" class="form-control" name="f" placeholder="Masukan Data">
                        </div>
                        <div class="form-group ">
                            <label>CPU Revision</label>
                            <input required type="text" class="form-control" name="g" placeholder="Masukan Data">
                        </div>
                        <div class="form-group ">
                            <label>Description</label>
                            <input required type="text" class="form-control" name="h" placeholder="Masukan Data">
                        </div>
                        <div class="form-group ">
                            <label>Product</label>
                            <input required type="text" class="form-control" name="i" placeholder="Masukan Data">
                        </div>
                        <div class="form-group ">
                            <label>Mac Address</label>
                            <input required type="text" class="form-control" name="j" placeholder="Masukan Data">
                        </div>
                        <div class="form-group ">
                            <label>IP Address</label>
                            <input required type="text" class="form-control" name="k" placeholder="Masukan Data">
                        </div>
                        <div class="form-group ">
                            <label>Estimated Bandwidth</label>
                            <input required type="text" class="form-control" name="l" placeholder="Masukan Data">
                        </div>
                        <div class="form-group ">
                            <label>DRAM Size</label>
                            <input required type="text" class="form-control" name="m" placeholder="Masukan Data">
                        </div>
                        <div class="form-group ">
                            <label>Business Impact</label>
                            <input required type="text" class="form-control" name="bisnis" placeholder="Masukan Data">
                        </div>
                        <div class="form-group ">
                            <label>Firmware Revision</label>
                            <input required type="text" class="form-control" name="o" placeholder="Masukan Data">
                        </div>

                    </div>
                    <div class="col-lg-6">

                        <div class="form-group ">
                            <label>IP Address</label>
                            <input required type="text" class="form-control" name="p" placeholder="Masukan Data">
                        </div>
                        <div class="form-group ">
                            <label>Description</label>
                            <input required type="text" class="form-control" name="q" placeholder="Masukan Data">
                        </div>
                        <div class="form-group">
                            <label>Product</label>
                            <select style=" height:50px;" class="form-control selectpicker" name="r">
                                <option>---- Pilih Product ---- </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>nama lokasi</label>
                            <select style=" height:50px;" class="form-control selectpicker" name="s">
                                <option value="">---- Pilih Lokasi ---- </option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label>kota</label>
                            <select style=" height:50px;" class="form-control selectpicker" name="t">
                                <option value="">---- Pilih Kota ---- </option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label>parent lokasi</label>
                            <select style=" height:50px;" class="form-control selectpicker" name="u">
                                <option value="">---- Pilih Parent Lokasi ---- </option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label>org serial number : </label>
                            <input required class="form-control" id="ass" type="text" name="v">
                        </div>
                        <div class="form-group">
                            <label>Barcode : </label>
                            <input required class="form-control" id="ass" type="text" name="w">
                        </div>
                        <div class="form-group">
                            <label>asset tag :</label>
                            <input required class="form-control" id="count_data" name="count_a" type="x">
                        </div>
                        <div class="form-group">
                            <label>vendor name : </label>
                            <input required class="form-control" type="text" name="y">
                        </div>
                        <div class="form-group">
                            <label>Purchase Cost</label>
                            <input required class="form-control" type="text" name="z">
                        </div>
                        <div class="form-group">
                            <label>acquisition date :</label>
                            <input required class="form-control" type="date" name="date1" required>
                        </div>
                        <div class="form-group">
                            <label>expiry date :</label>
                            <input required class="form-control" type="date" name="date2" required>
                        </div>
                        <div class="form-group">
                            <label>warrant expiry date :</label>
                            <input required class="form-control" type="date" name="date3" required>
                        </div>
                        <div class="form-group">
                            <label>Single Line :</label>
                            <input required class="form-control" type="text" name="aa">
                        </div>
                        <div class="form-group">
                            <label>Multi Line :</label>

                        </div>
                        <textarea name="ab" rows="5" cols="100"></textarea>
                    </div>
                    <p style="padding-bottom: 20px;">
                </div>
                <input required type="submit" value="Created Asset" class="btn btn-success btn-block">
                <p style="padding-bottom: 20px;">
        </div>
        </form>
    <?php } ?>




    <?php if ($menu == "Firewall") { ?>
        <form method="POST" action="<?= base_url('teknisi/create_assets/IT Assets/' . $menu) ?>">
            <div class="row" style="width: 100%;">
                <div class="col-lg-6">
                    <div class="form-group ">
                        <label>Name</label>
                        <input required type="text" class="form-control" name="nama" placeholder="Masukan Data">
                    </div>
                    <div class="form-group ">
                        <label>Business Impact</label>
                        <input required type="text" class="form-control" name="bisnis" placeholder="Masukan Data">
                    </div>
                    <div class="form-group ">
                        <label>Firmware Revision</label>
                        <input required type="text" class="form-control" name="a" placeholder="Masukan Data">
                    </div>
                    <div class="form-group ">
                        <label>IP Address</label>
                        <input required type="text" class="form-control" name="b" placeholder="Masukan Data">
                    </div>
                    <div class="form-group ">
                        <label>Description</label>
                        <input required type="text" class="form-control" name="c" placeholder="Masukan Data">
                    </div>
                    <div class="form-group">
                        <label>Product</label>
                        <select style=" height:50px;" class="form-control selectpicker" name="d">
                            <option>---- Pilih Product ---- </option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label>nama lokasi</label>
                        <select style=" height:50px;" class="form-control selectpicker" name="e">
                            <option value="">---- Pilih Lokasi ---- </option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label>kota</label>
                        <select style=" height:50px;" class="form-control selectpicker" name="f">
                            <option value="">---- Pilih Lokasi ---- </option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label>parent lokasi</label>
                        <select style=" height:50px;" class="form-control selectpicker" name="g">
                            <option value="">---- Pilih Parent Lokasi ---- </option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label>org serial number : </label>
                        <input required class="form-control" id="ass" type="text" name="h">
                    </div>
                    <div class="form-group">
                        <label>Barcode : </label>
                        <input required class="form-control" id="ass" type="text" name="i">
                    </div>
                    <div class="form-group">
                        <label>asset tag :</label>
                        <input required class="form-control" id="count_data" name="j" type="text">
                    </div>


                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label>vendor name : </label>
                        <input required class="form-control" type="text" name="k">
                    </div>
                    <div class="form-group">
                        <label>Purchase Cost</label>
                        <input required class="form-control" type="text" name="l">
                    </div>
                    <div class="form-group">
                        <label>acquisition date :</label>
                        <input required class="form-control" type="date" name="date1">
                    </div>
                    <div class="form-group">
                        <label>expiry date :</label>
                        <input required class="form-control" type="date" name="date2">
                    </div>
                    <div class="form-group">
                        <label>warrant expiry date :</label>
                        <input required class="form-control" type="date" name="date3">
                    </div>
                    <div class="form-group">
                        <label>Single Line :</label>
                        <input required class="form-control" type="text" name="m">
                    </div>
                    <div class="form-group">
                        <label>Multi Line :</label>

                    </div>
                    <textarea name="n" rows="5" cols="100"></textarea>
                </div>
                <p style="padding-bottom: 20px;">
            </div>
            <input required type="submit" value="Created Asset" class="btn btn-success btn-block">
            <p style="padding-bottom: 20px;">
</div>
</form>
<?php } ?>


<?php if ($menu == "IP Phone") { ?>
    <form method="POST" action="<?= base_url('teknisi/create_assets/IT Assets/' . $menu) ?>">
        <div class="row" style="width: 100%;">
            <div class="col-lg-6">
                <div class="form-group ">
                    <label>Name</label>
                    <input required type="text" class="form-control" name="nama" placeholder="Masukan Data">
                </div>
                <div class="form-group ">
                    <label>IP Address</label>
                    <input required type="text" class="form-control" name="a" placeholder="Masukan Data">
                </div>
                <div class="form-group ">
                    <label>Serial Number</label>
                    <input required type="text" class="form-control" name="b" placeholder="Masukan Data">
                </div>
                <div class="form-group ">
                    <label>Description</label>
                    <input required type="text" class="form-control" name="c" placeholder="Masukan Data">
                </div>
                <div class="form-group ">
                    <label>Product</label>
                    <input required type="text" class="form-control" name="d" placeholder="Masukan Data">
                </div>
                <div class="form-group ">
                    <label>Mac Address</label>
                    <input required type="text" class="form-control" name="e" placeholder="Masukan Data">
                </div>
                <div class="form-group ">
                    <label>Business Impact</label>
                    <input required type="text" class="form-control" name="f" placeholder="Masukan Data">
                </div>
                <div class="form-group">
                    <label>nama lokasi</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="g">
                        <option value="">---- Pilih Lokasi ---- </option>

                    </select>
                </div>
                <div class="form-group">
                    <label>kota</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="h">
                        <option value="">---- Pilih Lokasi ---- </option>

                    </select>
                </div>
                <div class="form-group">
                    <label>parent lokasi</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="i">
                        <option value="">---- Pilih Parent Lokasi ---- </option>

                    </select>
                </div>
                <div class="form-group">
                    <label>org serial number : </label>
                    <input required class="form-control" id="ass" type="text" name="j">
                </div>
                <div class="form-group">
                    <label>Barcode : </label>
                    <input required class="form-control" id="ass" type="text" name="k">
                </div>
                <div class="form-group">
                    <label>asset tag :</label>
                    <input required class="form-control" id="count_data" name="l" type="text">
                </div>


            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>vendor name : </label>
                    <input required class="form-control" type="text" name="m">
                </div>
                <div class="form-group">
                    <label>Purchase Cost</label>
                    <input required class="form-control" type="text" name="n">
                </div>
                <div class="form-group">
                    <label>acquisition date :</label>
                    <input required class="form-control" type="date" name="date1">
                </div>
                <div class="form-group">
                    <label>expiry date :</label>
                    <input required class="form-control" type="date" name="date2">
                </div>
                <div class="form-group">
                    <label>warrant expiry date :</label>
                    <input required class="form-control" type="date" name="date3">
                </div>
                <div class="form-group">
                    <label>Single Line :</label>
                    <input required class="form-control" type="text" name="o">
                </div>
                <div class="form-group">
                    <label>Multi Line :</label>

                </div>
                <textarea name="p" rows="5" cols="100"></textarea>
            </div>
            <p style="padding-bottom: 20px;">
        </div>
        <input required type="submit" value="Created Asset" class="btn btn-success btn-block">
        <p style="padding-bottom: 20px;">
            </div>
    </form>
<?php } ?>





<?php if ($menu == "IPS") { ?>
    <form method="POST" action="<?= base_url('teknisi/create_assets/IT Assets/' . $menu) ?>">
        <div class="row" style="width: 100%;">
            <div class="col-lg-6">
                <div class="form-group ">
                    <label>Name</label>
                    <input required type="text" class="form-control" name="nama" placeholder="Masukan Data">
                </div>
                <div class="form-group ">
                    <label>IP Address</label>
                    <input required type="text" class="form-control" name="a" placeholder="Masukan Data">
                </div>
                <div class="form-group ">
                    <label>Software Version</label>
                    <input required type="text" class="form-control" name="b" placeholder="Masukan Data">
                </div>
                <div class="form-group ">
                    <label>Description</label>
                    <input required type="text" class="form-control" name="c" placeholder="Masukan Data">
                </div>
                <div class="form-group ">
                    <label>Product</label>
                    <input required type="text" class="form-control" name="d" placeholder="Masukan Data">
                </div>
                <div class="form-group ">
                    <label>Hardware Version</label>
                    <input required type="text" class="form-control" name="e" placeholder="Masukan Data">
                </div>
                <div class="form-group">
                    <label>nama lokasi</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="f">
                        <option value="">---- Pilih Lokasi ---- </option>

                    </select>
                </div>
                <div class="form-group">
                    <label>kota</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="g">
                        <option value="">---- Pilih Lokasi ---- </option>

                    </select>
                </div>
                <div class="form-group">
                    <label>parent lokasi</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="h">
                        <option value="">---- Pilih Parent Lokasi ---- </option>

                    </select>
                </div>
                <div class="form-group">
                    <label>org serial number : </label>
                    <input required class="form-control" id="ass" type="text" name="i">
                </div>
                <div class="form-group">
                    <label>Barcode : </label>
                    <input required class="form-control" id="ass" type="text" name="j">
                </div>
                <div class="form-group">
                    <label>asset tag :</label>
                    <input required class="form-control" id="count_data" name="count_a" type="k">
                </div>


            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>vendor name : </label>
                    <input required class="form-control" type="text" name="l">
                </div>
                <div class="form-group">
                    <label>Purchase Cost</label>
                    <input required class="form-control" type="text" name="m">
                </div>
                <div class="form-group">
                    <label>acquisition date :</label>
                    <input required class="form-control" type="date" name="date1">
                </div>
                <div class="form-group">
                    <label>expiry date :</label>
                    <input required class="form-control" type="date" name="date2">
                </div>
                <div class="form-group">
                    <label>warrant expiry date :</label>
                    <input required class="form-control" type="date" name="date3">
                </div>
                <div class="form-group">
                    <label>Single Line :</label>
                    <input required class="form-control" type="text" name="n">
                </div>
                <div class="form-group">
                    <label>Multi Line :</label>

                </div>
                <textarea name="o" rows="5" cols="100"></textarea>
            </div>
            <p style="padding-bottom: 20px;">
        </div>
        <input required type="submit" value="Created Asset" class="btn btn-success btn-block">
        <p style="padding-bottom: 20px;">
            </div>
    </form>
<?php } ?>




<?php if ($menu == "NTP") { ?>
    <form method="POST" action="<?= base_url('teknisi/create_assets/IT Assets/' . $menu) ?>">
        <div class="row" style="width: 100%;">
            <div class="col-lg-6">
                <div class="form-group ">
                    <label>Name</label>
                    <input required type="text" class="form-control" name="nama" placeholder="Masukan Data">
                </div>
                <div class="form-group ">
                    <label>IP Address</label>
                    <input required type="text" class="form-control" name="a" placeholder="Masukan Data">
                </div>
                <div class="form-group ">
                    <label>System Type</label>
                    <input required type="text" class="form-control" name="b" placeholder="Masukan Data">
                </div>
                <div class="form-group ">
                    <label>Description</label>
                    <input required type="text" class="form-control" name="c" placeholder="Masukan Data">
                </div>
                <div class="form-group ">
                    <label>Product</label>
                    <input required type="text" class="form-control" name="d" placeholder="Masukan Data">
                </div>
                <div class="form-group ">
                    <label>Os Version</label>
                    <input required type="text" class="form-control" name="e" placeholder="Masukan Data">
                </div>
                <div class="form-group ">
                    <label>Bussines Impact</label>
                    <input required type="text" class="form-control" name="f" placeholder="Masukan Data">
                </div>
                <div class="form-group">
                    <label>nama lokasi</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="g">
                        <option value="">---- Pilih Lokasi ---- </option>

                    </select>
                </div>
                <div class="form-group">
                    <label>kota</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="h">
                        <option value="">---- Pilih Lokasi ---- </option>

                    </select>
                </div>
                <div class="form-group">
                    <label>parent lokasi</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="i">
                        <option value="">---- Pilih Parent Lokasi ---- </option>

                    </select>
                </div>
                <div class="form-group">
                    <label>org serial number : </label>
                    <input required class="form-control" id="ass" type="text" name="j">
                </div>
                <div class="form-group">
                    <label>Barcode : </label>
                    <input required class="form-control" id="ass" type="text" name="k">
                </div>
                <div class="form-group">
                    <label>asset tag :</label>
                    <input required class="form-control" id="count_data" name="l" type="text">
                </div>


            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>vendor name : </label>
                    <input required class="form-control" type="text" name="m">
                </div>
                <div class="form-group">
                    <label>Purchase Cost</label>
                    <input required class="form-control" type="text" name="n">
                </div>
                <div class="form-group">
                    <label>acquisition date :</label>
                    <input required class="form-control" type="date" name="date1">
                </div>
                <div class="form-group">
                    <label>expiry date :</label>
                    <input required class="form-control" type="date" name="date2">
                </div>
                <div class="form-group">
                    <label>warrant expiry date :</label>
                    <input required class="form-control" type="date" name="date3">
                </div>
                <div class="form-group">
                    <label>Single Line :</label>
                    <input required class="form-control" type="text" name="o">
                </div>
                <div class="form-group">
                    <label>Multi Line :</label>

                </div>
                <textarea name="p" rows="5" cols="100"></textarea>
            </div>
            <p style="padding-bottom: 20px;">
        </div>
        <input required type="submit" value="Created Asset" class="btn btn-success btn-block">
        <p style="padding-bottom: 20px;">
            </div>
    </form>
<?php } ?>

<?php if ($menu == "Rack") { ?>
    <form method="POST" action="<?= base_url('teknisi/create_assets/IT Assets/' . $menu) ?>">
        <div class="row" style="width: 100%;">
            <div class="col-lg-6">
                <div class="form-group ">
                    <label>Name</label>
                    <input required type="text" class="form-control" name="nama" placeholder="Masukan Data">
                </div>
                <div class="form-group ">
                    <label>FootPrint</label>
                    <input required type="text" class="form-control" name="a" placeholder="Masukan Data">
                </div>
                <div class="form-group ">
                    <label>Rack unit </label>
                    <input required type="text" class="form-control" name="b" placeholder="Masukan Data">
                </div>
                <div class="form-group ">
                    <label>Power Consumption</label>
                    <input required type="text" class="form-control" name="c" placeholder="Masukan Data">
                </div>
                <div class="form-group ">
                    <label>Description</label>
                    <input required type="text" class="form-control" name="d" placeholder="Masukan Data">
                </div>
                <div class="form-group ">
                    <label>Product</label>
                    <input required type="text" class="form-control" name="e" placeholder="Masukan Data">
                </div>
                <div class="form-group ">
                    <label>Rack unit in Use</label>
                    <input required type="text" class="form-control" name="f" placeholder="Masukan Data">
                </div>
                <div class="form-group ">
                    <label>Bussines Impact</label>
                    <input required type="text" class="form-control" name="g" placeholder="Masukan Data">
                </div>
                <div class="form-group">
                    <label>nama lokasi</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="h">
                        <option value="">---- Pilih Lokasi ---- </option>

                    </select>
                </div>
                <div class="form-group">
                    <label>kota</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="i">
                        <option value="">---- Pilih Lokasi ---- </option>

                    </select>
                </div>
                <div class="form-group">
                    <label>parent lokasi</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="j">
                        <option value="">---- Pilih Parent Lokasi ---- </option>

                    </select>
                </div>
                <div class="form-group">
                    <label>org serial number : </label>
                    <input required class="form-control" id="ass" type="text" name="k">
                </div>
                <div class="form-group">
                    <label>Barcode : </label>
                    <input required class="form-control" id="ass" type="text" name="l">
                </div>
                <div class="form-group">
                    <label>asset tag :</label>
                    <input required class="form-control" id="count_data" name="m" type="text">
                </div>


            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>vendor name : </label>
                    <input required class="form-control" type="text" name="n">
                </div>
                <div class="form-group">
                    <label>Purchase Cost</label>
                    <input required class="form-control" type="text" name="o">
                </div>
                <div class="form-group">
                    <label>acquisition date :</label>
                    <input required class="form-control" type="date" name="date1">
                </div>
                <div class="form-group">
                    <label>expiry date :</label>
                    <input required class="form-control" type="date" name="date2">
                </div>
                <div class="form-group">
                    <label>warrant expiry date :</label>
                    <input required class="form-control" type="date" name="date3">
                </div>
                <div class="form-group">
                    <label>Single Line :</label>
                    <input required class="form-control" type="text" name="p">
                </div>
                <div class="form-group">
                    <label>Multi Line :</label>

                </div>
                <textarea name="q" rows="5" cols="100"></textarea>
            </div>
            <p style="padding-bottom: 20px;">
        </div>
        <input required type="submit" value="Created Asset" class="btn btn-success btn-block">
        <p style="padding-bottom: 20px;">
            </div>
    </form>
<?php } ?>




<?php if ($menu == "Room Sensor") { ?>
    <form method="POST" action="<?= base_url('teknisi/create_assets/IT Assets/' . $menu) ?>">
        <div class="row" style="width: 100%;">
            <div class="col-lg-6">
                <div class="form-group ">
                    <label>Name</label>
                    <input required type="text" class="form-control" name="nama" placeholder="Masukan Data">
                </div>
                <div class="form-group ">
                    <label>Ip Address</label>
                    <input required type="text" class="form-control" name="a" placeholder="Masukan Data">
                </div>
                <div class="form-group ">
                    <label>Description</label>
                    <input required type="text" class="form-control" name="b" placeholder="Masukan Data">
                </div>
                <div class="form-group ">
                    <label>Product</label>
                    <input required type="text" class="form-control" name="c" placeholder="Masukan Data">
                </div>
                <div class="form-group">
                    <label>nama lokasi</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="d">
                        <option value="">---- Pilih Lokasi ---- </option>

                    </select>
                </div>
                <div class="form-group">
                    <label>kota</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="e">
                        <option value="">---- Pilih Lokasi ---- </option>

                    </select>
                </div>
                <div class="form-group">
                    <label>parent lokasi</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="e">
                        <option value="">---- Pilih Parent Lokasi ---- </option>

                    </select>
                </div>
                <div class="form-group">
                    <label>org serial number : </label>
                    <input required class="form-control" id="ass" type="text" name="f">
                </div>
                <div class="form-group">
                    <label>Barcode : </label>
                    <input required class="form-control" id="ass" type="text" name="g">
                </div>
                <div class="form-group">
                    <label>asset tag :</label>
                    <input required class="form-control" id="count_data" name="h" type="text">
                </div>


            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>vendor name : </label>
                    <input required class="form-control" type="text" name="i">
                </div>
                <div class="form-group">
                    <label>Purchase Cost</label>
                    <input required class="form-control" type="text" name="j">
                </div>
                <div class="form-group">
                    <label>acquisition date :</label>
                    <input required class="form-control" type="date" name="date1">
                </div>
                <div class="form-group">
                    <label>expiry date :</label>
                    <input required class="form-control" type="date" name="date2">
                </div>
                <div class="form-group">
                    <label>warrant expiry date :</label>
                    <input required class="form-control" type="date" name="date3">
                </div>
                <div class="form-group">
                    <label>Single Line :</label>
                    <input required class="form-control" type="text" name="k">
                </div>
                <div class="form-group">
                    <label>Multi Line :</label>

                </div>
                <textarea name="l" rows="5" cols="100"></textarea>
            </div>
            <p style="padding-bottom: 20px;">
        </div>
        <input required type="submit" value="Created Asset" class="btn btn-success btn-block">
        <p style="padding-bottom: 20px;">
            </div>
    </form>
<?php } ?>



<?php if ($menu == "Smart Phone") { ?>
    <form method="POST" action="<?= base_url('teknisi/create_assets/IT Assets/' . $menu) ?>">
        <div class="row" style="width: 100%;">
            <div class="col-lg-6">
                <div class="form-group ">
                    <label>Name</label>
                    <input required type="text" class="form-control" name="nama" placeholder="Masukan Data">
                </div>
                <div class="form-group ">
                    <label>Ip Address</label>
                    <input required type="text" class="form-control" name="a" placeholder="Masukan Data">
                </div>
                <div class="form-group ">
                    <label>Description</label>
                    <input required type="text" class="form-control" name="b" placeholder="Masukan Data">
                </div>
                <div class="form-group ">
                    <label>Product</label>
                    <input required type="text" class="form-control" name="c" placeholder="Masukan Data">
                </div>
                <div class="form-group">
                    <label>nama lokasi</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="d">
                        <option value="">---- Pilih Lokasi ---- </option>

                    </select>
                </div>
                <div class="form-group">
                    <label>kota</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="e">
                        <option value="">---- Pilih Lokasi ---- </option>

                    </select>
                </div>
                <div class="form-group">
                    <label>parent lokasi</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="e">
                        <option value="">---- Pilih Parent Lokasi ---- </option>

                    </select>
                </div>
                <div class="form-group">
                    <label>org serial number : </label>
                    <input required class="form-control" id="ass" type="text" name="f">
                </div>
                <div class="form-group">
                    <label>Barcode : </label>
                    <input required class="form-control" id="ass" type="text" name="g">
                </div>
                <div class="form-group">
                    <label>asset tag :</label>
                    <input required class="form-control" id="count_data" name="h" type="text">
                </div>


            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>vendor name : </label>
                    <input required class="form-control" type="text" name="i">
                </div>
                <div class="form-group">
                    <label>Purchase Cost</label>
                    <input required class="form-control" type="text" name="j">
                </div>
                <div class="form-group">
                    <label>acquisition date :</label>
                    <input required class="form-control" type="date" name="date1">
                </div>
                <div class="form-group">
                    <label>expiry date :</label>
                    <input required class="form-control" type="date" name="date2">
                </div>
                <div class="form-group">
                    <label>warrant expiry date :</label>
                    <input required class="form-control" type="date" name="date3">
                </div>
                <div class="form-group">
                    <label>Single Line :</label>
                    <input required class="form-control" type="text" name="k">
                </div>
                <div class="form-group">
                    <label>Multi Line :</label>

                </div>
                <textarea name="l" rows="5" cols="100"></textarea>
            </div>
            <p style="padding-bottom: 20px;">
        </div>
        <input required type="submit" value="Created Asset" class="btn btn-success btn-block">
        <p style="padding-bottom: 20px;">
            </div>
    </form>
<?php } ?>





<?php if ($menu == "Storage Device") { ?>
    <form method="POST" action="<?= base_url('teknisi/create_assets/IT Assets/' . $menu) ?>">
        <div class="row" style="width: 100%;">
            <div class="col-lg-6">
                <div class="form-group ">
                    <label>Name</label>
                    <input required type="text" class="form-control" name="nama" placeholder="Masukan Data">
                </div>
                <div class="form-group ">
                    <label>Ip Address</label>
                    <input required type="text" class="form-control" name="a" placeholder="Masukan Data">
                </div>
                <div class="form-group ">
                    <label>Description</label>
                    <input required type="text" class="form-control" name="b" placeholder="Masukan Data">
                </div>
                <div class="form-group ">
                    <label>Product</label>
                    <input required type="text" class="form-control" name="c" placeholder="Masukan Data">
                </div>
                <div class="form-group">
                    <label>nama lokasi</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="d">
                        <option value="">---- Pilih Lokasi ---- </option>

                    </select>
                </div>
                <div class="form-group">
                    <label>kota</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="e">
                        <option value="">---- Pilih Lokasi ---- </option>

                    </select>
                </div>
                <div class="form-group">
                    <label>parent lokasi</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="e">
                        <option value="">---- Pilih Parent Lokasi ---- </option>

                    </select>
                </div>
                <div class="form-group">
                    <label>org serial number : </label>
                    <input required class="form-control" id="ass" type="text" name="f">
                </div>
                <div class="form-group">
                    <label>Barcode : </label>
                    <input required class="form-control" id="ass" type="text" name="g">
                </div>
                <div class="form-group">
                    <label>asset tag :</label>
                    <input required class="form-control" id="count_data" name="h" type="text">
                </div>


            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>vendor name : </label>
                    <input required class="form-control" type="text" name="i">
                </div>
                <div class="form-group">
                    <label>Purchase Cost</label>
                    <input required class="form-control" type="text" name="j">
                </div>
                <div class="form-group">
                    <label>acquisition date :</label>
                    <input required class="form-control" type="date" name="date1">
                </div>
                <div class="form-group">
                    <label>expiry date :</label>
                    <input required class="form-control" type="date" name="date2">
                </div>
                <div class="form-group">
                    <label>warrant expiry date :</label>
                    <input required class="form-control" type="date" name="date3">
                </div>
                <div class="form-group">
                    <label>Single Line :</label>
                    <input required class="form-control" type="text" name="k">
                </div>
                <div class="form-group">
                    <label>Multi Line :</label>

                </div>
                <textarea name="l" rows="5" cols="100"></textarea>
            </div>
            <p style="padding-bottom: 20px;">
        </div>
        <input required type="submit" value="Created Asset" class="btn btn-success btn-block">
        <p style="padding-bottom: 20px;">
            </div>
    </form>
<?php } ?>





<?php if ($menu == "Tablet") { ?>
    <form method="POST" action="<?= base_url('teknisi/create_assets/IT Assets/' . $menu) ?>">
        <div class="row" style="width: 100%;">
            <div class="col-lg-6">
                <div class="form-group ">
                    <label>Name</label>
                    <input required type="text" class="form-control" name="nama" placeholder="Masukan Data">
                </div>
                <div class="form-group ">
                    <label>Ip Address</label>
                    <input required type="text" class="form-control" name="a" placeholder="Masukan Data">
                </div>
                <div class="form-group ">
                    <label>Description</label>
                    <input required type="text" class="form-control" name="b" placeholder="Masukan Data">
                </div>
                <div class="form-group ">
                    <label>Product</label>
                    <input required type="text" class="form-control" name="c" placeholder="Masukan Data">
                </div>
                <div class="form-group">
                    <label>nama lokasi</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="d">
                        <option value="">---- Pilih Lokasi ---- </option>

                    </select>
                </div>
                <div class="form-group">
                    <label>kota</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="e">
                        <option value="">---- Pilih Lokasi ---- </option>

                    </select>
                </div>
                <div class="form-group">
                    <label>parent lokasi</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="e">
                        <option value="">---- Pilih Parent Lokasi ---- </option>

                    </select>
                </div>
                <div class="form-group">
                    <label>org serial number : </label>
                    <input required class="form-control" id="ass" type="text" name="f">
                </div>
                <div class="form-group">
                    <label>Barcode : </label>
                    <input required class="form-control" id="ass" type="text" name="g">
                </div>
                <div class="form-group">
                    <label>asset tag :</label>
                    <input required class="form-control" id="count_data" name="h" type="text">
                </div>


            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>vendor name : </label>
                    <input required class="form-control" type="text" name="i">
                </div>
                <div class="form-group">
                    <label>Purchase Cost</label>
                    <input required class="form-control" type="text" name="j">
                </div>
                <div class="form-group">
                    <label>acquisition date :</label>
                    <input required class="form-control" type="date" name="date1">
                </div>
                <div class="form-group">
                    <label>expiry date :</label>
                    <input required class="form-control" type="date" name="date2">
                </div>
                <div class="form-group">
                    <label>warrant expiry date :</label>
                    <input required class="form-control" type="date" name="date3">
                </div>
                <div class="form-group">
                    <label>Single Line :</label>
                    <input required class="form-control" type="text" name="k">
                </div>
                <div class="form-group">
                    <label>Multi Line :</label>

                </div>
                <textarea name="l" rows="5" cols="100"></textarea>
            </div>
            <p style="padding-bottom: 20px;">
        </div>
        <input required type="submit" value="Created Asset" class="btn btn-success btn-block">
        <p style="padding-bottom: 20px;">
            </div>
    </form>
<?php } ?>





<?php if ($menu == "UPS") { ?>
    <form method="POST" action="<?= base_url('teknisi/create_assets/IT Assets/' . $menu) ?>">
        <div class="row" style="width: 100%;">
            <div class="col-lg-6">
                <div class="form-group ">
                    <label>Name</label>
                    <input required type="text" class="form-control" name="nama" placeholder="Masukan Data">
                </div>
                <div class="form-group ">
                    <label>Ip Address</label>
                    <input required type="text" class="form-control" name="a" placeholder="Masukan Data">
                </div>
                <div class="form-group ">
                    <label>Description</label>
                    <input required type="text" class="form-control" name="b" placeholder="Masukan Data">
                </div>
                <div class="form-group ">
                    <label>Product</label>
                    <input required type="text" class="form-control" name="c" placeholder="Masukan Data">
                </div>
                <div class="form-group">
                    <label>nama lokasi</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="d">
                        <option value="">---- Pilih Lokasi ---- </option>

                    </select>
                </div>
                <div class="form-group">
                    <label>kota</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="e">
                        <option value="">---- Pilih Lokasi ---- </option>

                    </select>
                </div>
                <div class="form-group">
                    <label>parent lokasi</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="e">
                        <option value="">---- Pilih Parent Lokasi ---- </option>

                    </select>
                </div>
                <div class="form-group">
                    <label>org serial number : </label>
                    <input required class="form-control" id="ass" type="text" name="f">
                </div>
                <div class="form-group">
                    <label>Barcode : </label>
                    <input required class="form-control" id="ass" type="text" name="g">
                </div>
                <div class="form-group">
                    <label>asset tag :</label>
                    <input required class="form-control" id="count_data" name="h" type="text">
                </div>


            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>vendor name : </label>
                    <input required class="form-control" type="text" name="i">
                </div>
                <div class="form-group">
                    <label>Purchase Cost</label>
                    <input required class="form-control" type="text" name="j">
                </div>
                <div class="form-group">
                    <label>acquisition date :</label>
                    <input required class="form-control" type="date" name="date1">
                </div>
                <div class="form-group">
                    <label>expiry date :</label>
                    <input required class="form-control" type="date" name="date2">
                </div>
                <div class="form-group">
                    <label>warrant expiry date :</label>
                    <input required class="form-control" type="date" name="date3">
                </div>
                <div class="form-group">
                    <label>Single Line :</label>
                    <input required class="form-control" type="text" name="k">
                </div>
                <div class="form-group">
                    <label>Multi Line :</label>

                </div>
                <textarea name="l" rows="5" cols="100"></textarea>
            </div>
            <p style="padding-bottom: 20px;">
        </div>
        <input required type="submit" value="Created Asset" class="btn btn-success btn-block">
        <p style="padding-bottom: 20px;">
            </div>
    </form>
<?php } ?>




<?php if ($menu == "Video Encoder") { ?>
    <form method="POST" action="<?= base_url('teknisi/create_assets/IT Assets/' . $menu) ?>">
        <div class="row" style="width: 100%;">
            <div class="col-lg-6">
                <div class="form-group ">
                    <label>Name</label>
                    <input required type="text" class="form-control" name="nama" placeholder="Masukan Data">
                </div>
                <div class="form-group ">
                    <label>Ip Address</label>
                    <input required type="text" class="form-control" name="a" placeholder="Masukan Data">
                </div>
                <div class="form-group ">
                    <label>Description</label>
                    <input required type="text" class="form-control" name="b" placeholder="Masukan Data">
                </div>
                <div class="form-group ">
                    <label>Product</label>
                    <input required type="text" class="form-control" name="c" placeholder="Masukan Data">
                </div>
                <div class="form-group">
                    <label>nama lokasi</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="d">
                        <option value="">---- Pilih Lokasi ---- </option>

                    </select>
                </div>
                <div class="form-group">
                    <label>kota</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="e">
                        <option value="">---- Pilih Lokasi ---- </option>

                    </select>
                </div>
                <div class="form-group">
                    <label>parent lokasi</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="e">
                        <option value="">---- Pilih Parent Lokasi ---- </option>

                    </select>
                </div>
                <div class="form-group">
                    <label>org serial number : </label>
                    <input required class="form-control" id="ass" type="text" name="f">
                </div>
                <div class="form-group">
                    <label>Barcode : </label>
                    <input required class="form-control" id="ass" type="text" name="g">
                </div>
                <div class="form-group">
                    <label>asset tag :</label>
                    <input required class="form-control" id="count_data" name="h" type="text">
                </div>


            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>vendor name : </label>
                    <input required class="form-control" type="text" name="i">
                </div>
                <div class="form-group">
                    <label>Purchase Cost</label>
                    <input required class="form-control" type="text" name="j">
                </div>
                <div class="form-group">
                    <label>acquisition date :</label>
                    <input required class="form-control" type="date" name="date1">
                </div>
                <div class="form-group">
                    <label>expiry date :</label>
                    <input required class="form-control" type="date" name="date2">
                </div>
                <div class="form-group">
                    <label>warrant expiry date :</label>
                    <input required class="form-control" type="date" name="date3">
                </div>
                <div class="form-group">
                    <label>Single Line :</label>
                    <input required class="form-control" type="text" name="k">
                </div>
                <div class="form-group">
                    <label>Multi Line :</label>

                </div>
                <textarea name="l" rows="5" cols="100"></textarea>
            </div>
            <p style="padding-bottom: 20px;">
        </div>
        <input required type="submit" value="Created Asset" class="btn btn-success btn-block">
        <p style="padding-bottom: 20px;">
            </div>
    </form>
<?php } ?>



<?php if ($menu == "IPS") { ?>
    <form method="POST" action="<?= base_url('teknisi/create_assets/IT Assets/' . $menu) ?>">
        <div class="row" style="width: 100%;">
            <div class="col-lg-6">
                <div class="form-group ">
                    <label>Name</label>
                    <input required type="text" class="form-control" name="nama" placeholder="Masukan Data">
                </div>
                <div class="form-group ">
                    <label>Ip Address</label>
                    <input required type="text" class="form-control" name="a" placeholder="Masukan Data">
                </div>
                <div class="form-group ">
                    <label>Description</label>
                    <input required type="text" class="form-control" name="b" placeholder="Masukan Data">
                </div>
                <div class="form-group ">
                    <label>Product</label>
                    <input required type="text" class="form-control" name="c" placeholder="Masukan Data">
                </div>
                <div class="form-group">
                    <label>nama lokasi</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="d">
                        <option value="">---- Pilih Lokasi ---- </option>

                    </select>
                </div>
                <div class="form-group">
                    <label>kota</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="e">
                        <option value="">---- Pilih Lokasi ---- </option>

                    </select>
                </div>
                <div class="form-group">
                    <label>parent lokasi</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="e">
                        <option value="">---- Pilih Parent Lokasi ---- </option>

                    </select>
                </div>
                <div class="form-group">
                    <label>org serial number : </label>
                    <input required class="form-control" id="ass" type="text" name="f">
                </div>
                <div class="form-group">
                    <label>Barcode : </label>
                    <input required class="form-control" id="ass" type="text" name="g">
                </div>
                <div class="form-group">
                    <label>asset tag :</label>
                    <input required class="form-control" id="count_data" name="h" type="text">
                </div>


            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>vendor name : </label>
                    <input required class="form-control" type="text" name="i">
                </div>
                <div class="form-group">
                    <label>Purchase Cost</label>
                    <input required class="form-control" type="text" name="j">
                </div>
                <div class="form-group">
                    <label>acquisition date :</label>
                    <input required class="form-control" type="date" name="date1">
                </div>
                <div class="form-group">
                    <label>expiry date :</label>
                    <input required class="form-control" type="date" name="date2">
                </div>
                <div class="form-group">
                    <label>warrant expiry date :</label>
                    <input required class="form-control" type="date" name="date3">
                </div>
                <div class="form-group">
                    <label>Single Line :</label>
                    <input required class="form-control" type="text" name="k">
                </div>
                <div class="form-group">
                    <label>Multi Line :</label>

                </div>
                <textarea name="l" rows="5" cols="100"></textarea>
            </div>
            <p style="padding-bottom: 20px;">
        </div>
        <input required type="submit" value="Created Asset" class="btn btn-success btn-block">
        <p style="padding-bottom: 20px;">
            </div>
    </form>
<?php } ?>




<?php if ($menu == "Projector") { ?>
    <form method="POST" action="<?= base_url('teknisi/create_assets/Non IT Assets/' . $menu) ?>">
        <div class="row" style="width: 100%;">
            <div class="col-lg-6">
                <div class="form-group ">
                    <label>Name</label>
                    <input required type="text" class="form-control" name="nama" placeholder="Masukan Data">
                </div>
                <div class="form-group ">
                    <label>Ip Address</label>
                    <input required type="text" class="form-control" name="a" placeholder="Masukan Data">
                </div>
                <div class="form-group ">
                    <label>Description</label>
                    <input required type="text" class="form-control" name="b" placeholder="Masukan Data">
                </div>
                <div class="form-group ">
                    <label>Product</label>
                    <input required type="text" class="form-control" name="c" placeholder="Masukan Data">
                </div>
                <div class="form-group">
                    <label>nama lokasi</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="d">
                        <option value="">---- Pilih Lokasi ---- </option>

                    </select>
                </div>
                <div class="form-group">
                    <label>kota</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="e">
                        <option value="">---- Pilih Lokasi ---- </option>

                    </select>
                </div>
                <div class="form-group">
                    <label>parent lokasi</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="e">
                        <option value="">---- Pilih Parent Lokasi ---- </option>

                    </select>
                </div>
                <div class="form-group">
                    <label>org serial number : </label>
                    <input required class="form-control" id="ass" type="text" name="f">
                </div>
                <div class="form-group">
                    <label>Barcode : </label>
                    <input required class="form-control" id="ass" type="text" name="g">
                </div>
                <div class="form-group">
                    <label>asset tag :</label>
                    <input required class="form-control" id="count_data" name="h" type="text">
                </div>


            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>vendor name : </label>
                    <input required class="form-control" type="text" name="i">
                </div>
                <div class="form-group">
                    <label>Purchase Cost</label>
                    <input required class="form-control" type="text" name="j">
                </div>
                <div class="form-group">
                    <label>acquisition date :</label>
                    <input required class="form-control" type="date" name="date1">
                </div>
                <div class="form-group">
                    <label>expiry date :</label>
                    <input required class="form-control" type="date" name="date2">
                </div>
                <div class="form-group">
                    <label>warrant expiry date :</label>
                    <input required class="form-control" type="date" name="date3">
                </div>
                <div class="form-group">
                    <label>Single Line :</label>
                    <input required class="form-control" type="text" name="k">
                </div>
                <div class="form-group">
                    <label>Multi Line :</label>

                </div>
                <textarea name="l" rows="5" cols="100"></textarea>
            </div>
            <p style="padding-bottom: 20px;">
        </div>
        <input required type="submit" value="Created Asset" class="btn btn-success btn-block">
        <p style="padding-bottom: 20px;">
            </div>
    </form>
<?php } ?>




<?php if ($menu == "TV") { ?>
    <form method="POST" action="<?= base_url('teknisi/create_assets/Non IT Assets/' . $menu) ?>">
        <div class="row" style="width: 100%;">
            <div class="col-lg-6">
                <div class="form-group ">
                    <label>Name</label>
                    <input required type="text" class="form-control" name="nama" placeholder="Masukan Data">
                </div>
                <div class="form-group ">
                    <label>Ip Address</label>
                    <input required type="text" class="form-control" name="a" placeholder="Masukan Data">
                </div>
                <div class="form-group ">
                    <label>Description</label>
                    <input required type="text" class="form-control" name="b" placeholder="Masukan Data">
                </div>
                <div class="form-group ">
                    <label>Product</label>
                    <input required type="text" class="form-control" name="c" placeholder="Masukan Data">
                </div>
                <div class="form-group">
                    <label>nama lokasi</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="d">
                        <option value="">---- Pilih Lokasi ---- </option>

                    </select>
                </div>
                <div class="form-group">
                    <label>kota</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="e">
                        <option value="">---- Pilih Lokasi ---- </option>

                    </select>
                </div>
                <div class="form-group">
                    <label>parent lokasi</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="e">
                        <option value="">---- Pilih Parent Lokasi ---- </option>

                    </select>
                </div>
                <div class="form-group">
                    <label>org serial number : </label>
                    <input required class="form-control" id="ass" type="text" name="f">
                </div>
                <div class="form-group">
                    <label>Barcode : </label>
                    <input required class="form-control" id="ass" type="text" name="g">
                </div>
                <div class="form-group">
                    <label>asset tag :</label>
                    <input required class="form-control" id="count_data" name="h" type="text">
                </div>


            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>vendor name : </label>
                    <input required class="form-control" type="text" name="i">
                </div>
                <div class="form-group">
                    <label>Purchase Cost</label>
                    <input required class="form-control" type="text" name="j">
                </div>
                <div class="form-group">
                    <label>acquisition date :</label>
                    <input required class="form-control" type="date" name="date1">
                </div>
                <div class="form-group">
                    <label>expiry date :</label>
                    <input required class="form-control" type="date" name="date2">
                </div>
                <div class="form-group">
                    <label>warrant expiry date :</label>
                    <input required class="form-control" type="date" name="date3">
                </div>
                <div class="form-group">
                    <label>Single Line :</label>
                    <input required class="form-control" type="text" name="k">
                </div>
                <div class="form-group">
                    <label>Multi Line :</label>

                </div>
                <textarea name="l" rows="5" cols="100"></textarea>
            </div>
            <p style="padding-bottom: 20px;">
        </div>
        <input required type="submit" value="Created Asset" class="btn btn-success btn-block">
        <p style="padding-bottom: 20px;">
            </div>
    </form>
<?php } ?>



<?php if ($menu == "Video Conference") { ?>
    <form method="POST" action="<?= base_url('teknisi/create_assets/Non IT Assets/' . $menu) ?>">
        <div class="row" style="width: 100%;">
            <div class="col-lg-6">
                <div class="form-group ">
                    <label>Name</label>
                    <input required type="text" class="form-control" name="nama" placeholder="Masukan Data">
                </div>
                <div class="form-group ">
                    <label>Ip Address</label>
                    <input required type="text" class="form-control" name="a" placeholder="Masukan Data">
                </div>
                <div class="form-group ">
                    <label>Description</label>
                    <input required type="text" class="form-control" name="b" placeholder="Masukan Data">
                </div>
                <div class="form-group ">
                    <label>Product</label>
                    <input required type="text" class="form-control" name="c" placeholder="Masukan Data">
                </div>
                <div class="form-group">
                    <label>nama lokasi</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="d">
                        <option value="">---- Pilih Lokasi ---- </option>

                    </select>
                </div>
                <div class="form-group">
                    <label>kota</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="e">
                        <option value="">---- Pilih Lokasi ---- </option>

                    </select>
                </div>
                <div class="form-group">
                    <label>parent lokasi</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="e">
                        <option value="">---- Pilih Parent Lokasi ---- </option>

                    </select>
                </div>
                <div class="form-group">
                    <label>org serial number : </label>
                    <input required class="form-control" id="ass" type="text" name="f">
                </div>
                <div class="form-group">
                    <label>Barcode : </label>
                    <input required class="form-control" id="ass" type="text" name="g">
                </div>
                <div class="form-group">
                    <label>asset tag :</label>
                    <input required class="form-control" id="count_data" name="h" type="text">
                </div>


            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>vendor name : </label>
                    <input required class="form-control" type="text" name="i">
                </div>
                <div class="form-group">
                    <label>Purchase Cost</label>
                    <input required class="form-control" type="text" name="j">
                </div>
                <div class="form-group">
                    <label>acquisition date :</label>
                    <input required class="form-control" type="date" name="date1">
                </div>
                <div class="form-group">
                    <label>expiry date :</label>
                    <input required class="form-control" type="date" name="date2">
                </div>
                <div class="form-group">
                    <label>warrant expiry date :</label>
                    <input required class="form-control" type="date" name="date3">
                </div>
                <div class="form-group">
                    <label>Single Line :</label>
                    <input required class="form-control" type="text" name="k">
                </div>
                <div class="form-group">
                    <label>Multi Line :</label>

                </div>
                <textarea name="l" rows="5" cols="100"></textarea>
            </div>
            <p style="padding-bottom: 20px;">
        </div>
        <input required type="submit" value="Created Asset" class="btn btn-success btn-block">
        <p style="padding-bottom: 20px;">
            </div>
    </form>
<?php } ?>



<?php if ($menu == "Virtual Hosts") { ?>
    <form method="POST" action="<?= base_url('teknisi/create_assets/Virtual Host/' . $menu) ?>">
        <div class="row" style="width: 100%;">
            <div class="col-lg-6">
                <div class="form-group ">
                    <label>Name</label>
                    <input required type="text" class="form-control" name="nama" placeholder="Masukan Data">
                </div>
                <div class="form-group ">
                    <label>Ip Address</label>
                    <input required type="text" class="form-control" name="a" placeholder="Masukan Data">
                </div>
                <div class="form-group ">
                    <label>Description</label>
                    <input required type="text" class="form-control" name="b" placeholder="Masukan Data">
                </div>
                <div class="form-group ">
                    <label>Product</label>
                    <input required type="text" class="form-control" name="c" placeholder="Masukan Data">
                </div>
                <div class="form-group">
                    <label>nama lokasi</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="d">
                        <option value="">---- Pilih Lokasi ---- </option>

                    </select>
                </div>
                <div class="form-group">
                    <label>kota</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="e">
                        <option value="">---- Pilih Lokasi ---- </option>

                    </select>
                </div>
                <div class="form-group">
                    <label>parent lokasi</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="e">
                        <option value="">---- Pilih Parent Lokasi ---- </option>

                    </select>
                </div>
                <div class="form-group">
                    <label>org serial number : </label>
                    <input required class="form-control" id="ass" type="text" name="f">
                </div>
                <div class="form-group">
                    <label>Barcode : </label>
                    <input required class="form-control" id="ass" type="text" name="g">
                </div>
                <div class="form-group">
                    <label>asset tag :</label>
                    <input required class="form-control" id="count_data" name="h" type="text">
                </div>


            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>vendor name : </label>
                    <input required class="form-control" type="text" name="i">
                </div>
                <div class="form-group">
                    <label>Purchase Cost</label>
                    <input required class="form-control" type="text" name="j">
                </div>
                <div class="form-group">
                    <label>acquisition date :</label>
                    <input required class="form-control" type="date" name="date1">
                </div>
                <div class="form-group">
                    <label>expiry date :</label>
                    <input required class="form-control" type="date" name="date2">
                </div>
                <div class="form-group">
                    <label>warrant expiry date :</label>
                    <input required class="form-control" type="date" name="date3">
                </div>
                <div class="form-group">
                    <label>Single Line :</label>
                    <input required class="form-control" type="text" name="k">
                </div>
                <div class="form-group">
                    <label>Multi Line :</label>

                </div>
                <textarea name="l" rows="5" cols="100"></textarea>
            </div>
            <p style="padding-bottom: 20px;">
        </div>
        <input required type="submit" value="Created Asset" class="btn btn-success btn-block">
        <p style="padding-bottom: 20px;">
            </div>
    </form>
<?php } ?>



<?php if ($menu == "Virtual Machines") { ?>
    <form method="POST" action="<?= base_url('teknisi/create_assets/Virtual Host/' . $menu) ?>">
        <div class="row" style="width: 100%;">
            <div class="col-lg-6">
                <div class="form-group ">
                    <label>Name</label>
                    <input required type="text" class="form-control" name="nama" placeholder="Masukan Data">
                </div>
                <div class="form-group ">
                    <label>Ip Address</label>
                    <input required type="text" class="form-control" name="a" placeholder="Masukan Data">
                </div>
                <div class="form-group ">
                    <label>Description</label>
                    <input required type="text" class="form-control" name="b" placeholder="Masukan Data">
                </div>
                <div class="form-group ">
                    <label>Product</label>
                    <input required type="text" class="form-control" name="c" placeholder="Masukan Data">
                </div>
                <div class="form-group">
                    <label>nama lokasi</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="d">
                        <option value="">---- Pilih Lokasi ---- </option>

                    </select>
                </div>
                <div class="form-group">
                    <label>kota</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="e">
                        <option value="">---- Pilih Lokasi ---- </option>

                    </select>
                </div>
                <div class="form-group">
                    <label>parent lokasi</label>
                    <select style=" height:50px;" class="form-control selectpicker" name="e">
                        <option value="">---- Pilih Parent Lokasi ---- </option>

                    </select>
                </div>
                <div class="form-group">
                    <label>org serial number : </label>
                    <input required class="form-control" id="ass" type="text" name="f">
                </div>
                <div class="form-group">
                    <label>Barcode : </label>
                    <input required class="form-control" id="ass" type="text" name="g">
                </div>
                <div class="form-group">
                    <label>asset tag :</label>
                    <input required class="form-control" id="count_data" name="h" type="text">
                </div>


            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label>vendor name : </label>
                    <input required class="form-control" type="text" name="i">
                </div>
                <div class="form-group">
                    <label>Purchase Cost</label>
                    <input required class="form-control" type="text" name="j">
                </div>
                <div class="form-group">
                    <label>acquisition date :</label>
                    <input required class="form-control" type="date" name="date1">
                </div>
                <div class="form-group">
                    <label>expiry date :</label>
                    <input required class="form-control" type="date" name="date2">
                </div>
                <div class="form-group">
                    <label>warrant expiry date :</label>
                    <input required class="form-control" type="date" name="date3">
                </div>
                <div class="form-group">
                    <label>Single Line :</label>
                    <input required class="form-control" type="text" name="k">
                </div>
                <div class="form-group">
                    <label>Multi Line :</label>

                </div>
                <textarea name="l" rows="5" cols="100"></textarea>
            </div>
            <p style="padding-bottom: 20px;">
        </div>
        <input required type="submit" value="Created Asset" class="btn btn-success btn-block">
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
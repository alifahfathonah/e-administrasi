<div class="card shadow">
    <div class="card-header">
        <h4>Form Tambah Honor</h4>
    </div>
    <?php if(isset($edit)): ?>
    <form role="form" action="<?=base_url('pegawai/proses_edit_honor');?>" method="post">
        <?php else: ?>
        <form role="form" action="<?=base_url('pegawai/proses_add_honor');?>" method="post">
            <?php endif; ?>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="control-label">Nama</label>
                            <input type="hidden" name="id_honor" value="<?=isset($edit)?$row['id_honor']:'';?>">
                            <input type="text" class="form-control" name="nama"
                                value="<?=isset($edit)?$row['nama']:'';?>" placeholder="Masukkan Nama" />
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label">Tempat Lahir</label>
                            <input type="text" class="form-control" name="tempat_lahir"
                                value="<?=isset($edit)?$row['tempat_lahir']:'';?>"
                                placeholder="Masukkan Tempat Lahir" />
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label class="control-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tgl_lahir"
                                value="<?=isset($edit)?$row['tgl_lahir']:'';?>">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label class="control-label">Agama</label>
                            <select class="form-control" name="agama">
                                <option value="Islam" <?=isset($edit)?$row['agama']=='Islam'?'selected':'':'';?>>
                                    Islam</option>
                                <option value="K.Protestan"
                                    <?=isset($edit)?$row['agama']=='K.Protestan'?'selected':'':'';?>>K.Protestan
                                </option>
                                <option value="K.Katolik"
                                    <?=isset($edit)?$row['agama']=='K.Katolik'?'selected':'':'';?>>
                                    K.Katolik
                                </option>
                                <option value="Hindu" <?=isset($edit)?$row['agama']=='Hindu'?'selected':'':'';?>>
                                    Hindu</option>
                                <option value="Budha" <?=isset($edit)?$row['agama']=='Budha'?'selected':'':'';?>>
                                    Budha</option>
                                <option value="Konghucu" <?=isset($edit)?$row['agama']=='Konghucu'?'selected':'':'';?>>
                                    Konghucu</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label">Unit Kerja</label>
                            <input type="text" class="form-control" name="unit_kerja"
                                value="<?=isset($edit)?$row['unit_kerja']:'';?>" placeholder="Masukkan Unit Kerja" />
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label class="control-label">SK</label>
                            <select class="form-control" name="sk">
                                <option value="ada" <?=isset($edit)?$row['sk']=='ada'?'selected':'':'';?>>
                                    Ada</option>
                                <option value="belum ada" <?=isset($edit)?$row['sk']=='belum ada'?'selected':'':'';?>>
                                    Belum Ada</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a href="<?=base_url('menu/honor');?>" class="btn btn-secondary float-left mb-2"><i
                        class="fas fa-undo"></i>
                    Kembali</a>
                <button type="submit" class="btn btn-success float-right mb-2"><i class="fas fa-save"></i>
                    Simpan</button>
            </div>
        </form>
</div>
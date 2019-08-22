<div id="content">
    <header>
        <h2 class="page_title">Tambah penduduk</h2>
    </header>

    <div class="content-inner">
        <div class="form-wrapper">
            <form action="<?= base_url('admin/penduduk/tambah'); ?>" class="form-horizontal" method="post">
                <div class="form-group">
                    <label for="title" class="col-sm-2 control-label">NIK</label>
                    <div class="col-sm-4">
                        <input type="text" name="nik" class="form-control" id="nik" placeholder="NIK..." value="<?= set_value('nik'); ?>" autofocus>
                        <?= form_error('nik', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="title" class="col-sm-2 control-label">Nama</label>
                    <div class="col-sm-8">
                        <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama..." value="<?= set_value('nama'); ?>">
                        <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="gender" class="col-sm-2 control-label">Jenis kelamin</label>
                    <div class="col-sm-10">
                        <label class="radio-inline">
                            <input type="radio" name="gender" id="gender" value="Pria" checked> Laki-Laki
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="gender" id="gender" value="Wanita"> Perempuan
                            <?= form_error('gender', '<small class="text-danger">', '</small>'); ?>
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="title" class="col-sm-2 control-label">Tahun lahir</label>
                    <div class="col-sm-4">
                        <input type="text" name="usia" class="form-control" id="usia" placeholder="Tahun lahir..." value="<?= set_value('usia'); ?>">
                        <?= form_error('usia', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="title" class="col-sm-2 control-label">Dusun</label>
                    <div class="col-sm-4">
                        <select class="form-control" name="dusun">
                            <option>-- Pilih Dusun--</option>
                            <option value="Ngapaompu">Ngapaompu</option>
                            <option value="Wapulaka">Wapulaka</option>
                        </select>
                        <?= form_error('dusun', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="title" class="col-sm-2 control-label">RT</label>
                    <div class="col-sm-3">
                        <select class="form-control" name="rt">
                            <option>-- Pilih RT--</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <?= form_error('rt', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="title" class="col-sm-2 control-label">Pendidikan</label>
                    <div class="col-sm-5">
                        <input type="text" name="pendidikan" class="form-control" id="pendidikan" placeholder="Pendidikan..." value="<?= set_value('pendidikan'); ?>">
                        <?= form_error('pendidikan', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="title" class="col-sm-2 control-label">Pekerjaan</label>
                    <div class="col-sm-5">
                        <input type="text" name="pekerjaan" class="form-control" id="pekerjaan" placeholder="Pekerjaan..." value="<?= set_value('pekerjaan'); ?>">
                        <?= form_error('pekerjaan', '<small class="text-danger">', '</small>'); ?>
                    </div>
                </div>

                <div class="clearfix">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
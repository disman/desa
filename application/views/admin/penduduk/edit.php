<div id="content">
    <header>
        <h2 class="page_title">Update penduduk</h2>
    </header>

    <div class="content-inner">
        <div class="form-wrapper">
            <form action="<?= base_url('admin/penduduk/edit'); ?>" class="form-horizontal" method="post">
                <input type="hidden" name="nik" value="<?= $penduduk['nik']; ?>">
                <div class="form-group">
                    <label for="title" class="col-sm-2 control-label">NIK</label>
                    <div class="col-sm-4">
                        <input type="text" name="nik" class="form-control" id="nik" value="<?= $penduduk['nik']; ?>" disabled>
                    </div>
                </div>

                <div class="form-group">
                    <label for="title" class="col-sm-2 control-label">Nama</label>
                    <div class="col-sm-8">
                        <input type="text" name="nama" class="form-control" id="nama" value="<?= $penduduk['nama']; ?>">
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
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label for="title" class="col-sm-2 control-label">Usia</label>
                    <div class="col-sm-4">
                        <input type="text" name="usia" class="form-control" id="usia" value="<?= $penduduk['usia']; ?>">
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
                    </div>
                </div>

                <div class="form-group">
                    <label for="title" class="col-sm-2 control-label">Pendidikan</label>
                    <div class="col-sm-5">
                        <input type="text" name="pendidikan" class="form-control" id="pendidikan" value="<?= $penduduk['pendidikan']; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="title" class="col-sm-2 control-label">Pekerjaan</label>
                    <div class="col-sm-5">
                        <input type="text" name="pekerjaan" class="form-control" id="pekerjaan" value="<?= $penduduk['pekerjaan']; ?>">
                    </div>
                </div>

                <div class="clearfix">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
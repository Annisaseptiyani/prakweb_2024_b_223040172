<div class="container mt-3">

<div class="row">
  <div class="col-lg-6">
    <? Flasher::flash();?>
  </div>

</div>

<div class ="row">
    <div class="col-lg-6">
      <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#forModal">
  Tambah data mahasiswa
</button>
<br><br>

        <h3>Daftar Mahasiswa</h3>
        <ul class="list-group">
        <?php foreach($data['mhs'] as $mhs) : ?>
  <li class="list-group-item "></li>
    <?= $mhs['nama'];?>
    <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id'];?>"class="badge badge-danger float-right ml-2"
     onclick="return confirm('yakin?');">hapus</a>
</li>
<a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id'];?>"class="badge badge-primary float-right ml-2">Detail</a>
</li>
  <?php endforeach; ?>
</ul>

              

        
    </div>
   </div>
 </div>

 <!-- Modal -->
<div class="modal fade" id="forModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<form action="<? BASEURL; ?>/mahasiswa/tambah" method="post">
<div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" id="nama" name="nama">  
  </div>

  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="number" class="form-control" id="nrp" name="nrp">  
  </div>

  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email">  
  </div>

  <div class="form-group">
    <label for="jurusan">Jurusan</label>
    <select class="form-control" id="jurusan" name="jurusan">
      <option value="Tekinik Informatika">Teknik Informatika</option>
      <option value="Tekinik Industri">Teknik Industri</option>
      <option value="Tekinik Pangan">Teknik Pangan</option>
      <option value="Tekinik Lingkungan">Teknik Lingkungan</option>

    </select>
  </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>
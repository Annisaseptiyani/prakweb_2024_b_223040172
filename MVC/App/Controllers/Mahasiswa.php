<?

class Mahasiswa extends Controler{
    public function index (){
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
        $this ->view('templates/header',$data);
        $this ->view('mahasiswa/index',$data);
        $this ->view('templates/footer');
    }

    public function detail ($id){
        $data['judul'] = 'Detail Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswaById($id);
        $this ->view('templates/header',$data);
        $this ->view('mahasiswa/detail',$data);
        $this ->view('templates/footer');
    }
    public function tambah(){
        if($this->model("Mahasiswa_model")->tambahDataMahasiswa($_POST) > 0){
        Flasher::setFlash('berhasil','ditambahkan','succsess');
            header('Location:' . BASEURL . '/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('gagal','ditambahkan','denger');
            header('Location:' . BASEURL . '/mahasiswa');
            exit;
        }
    }

    public function hapus($id){
        if($this->model("Mahasiswa_model")->hapusDataMahasiswa($id) > 0){
        Flasher::setFlash('berhasil','dihapus','succsess');
            header('Location:' . BASEURL . '/mahasiswa');
            exit;
        } else {
            Flasher::setFlash('gagal','dihapus','denger');
            header('Location:' . BASEURL . '/mahasiswa');
            exit;
        }
    }
    public function getubah(){
      echo json_encode  ($this->model('Mahasiswa_model')->getMahasiswaById($_POST['id']));
    }

    public function ubah(){
        if($this->model("Mahasiswa_model")->ubahDataMahasiswa($_POST) > 0){
            Flasher::setFlash('berhasil','diubah','succsess');
                header('Location:' . BASEURL . '/mahasiswa');
                exit;
            } else {
                Flasher::setFlash('gagal','diubah','denger');
                header('Location:' . BASEURL . '/mahasiswa');
                exit;
            } 
    }
}
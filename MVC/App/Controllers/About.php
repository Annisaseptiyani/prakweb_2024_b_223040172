<?

class About extends Controler {
    public function index($nama = 'Annisa Septiyani',$pekerjaan='Enginer',$umur = 22)
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] = 'About Me';
    $this->view('templates/header',$data);
    $this ->view('about/index',$data);
    $this ->view('templates/footer');
    }
    public function page()
    {
        $data['judul'] = 'page';
        $this->view('templates/header',$data);
        $this-> view('about/page');
        $this->view('templates/footer');
    }
}
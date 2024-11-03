<?
class Home extends Controler{
    public function index()
    {
        $data['judul'] = 'Home';
        $data['nama'] = $this -> model('User_model')->getUser();
   $this ->view('templates/header',$data);
   $this-> view ('home/index.php',$data);
   $this->view('templates/footer');
    }
}
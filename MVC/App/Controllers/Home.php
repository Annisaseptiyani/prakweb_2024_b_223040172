<?
class Home extends Controler{
    public function index()
    {
        $data['judul'] = 'Home';
   $this ->view('templates/header',$data);
   $this-> view ('home/index.php');
   $this->view('templates/footer');
    }
}
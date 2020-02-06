<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Yonetim extends CI_Controller{

  function protect()
  {

    $giris = $this->session->userdata('giris');
    if(!$giris){
      redirect('yonetim');
    }

  }

  function index()
  {
      $giris = $this->session->userdata('giris');
      if($giris){
        redirect('yonetim/anasayfa');
      }
          $this->load->view('back/giris');



  }

  public function girisyap()
  {
      $email = $this->input->post('email');
      $sifre = $this->input->post('sifre');

      $kontrol = $this->dtbs->kontrol($email, $sifre);

      if ($kontrol) {
         $this->session->set_userdata('giris',true);
         redirect('yonetim/anasayfa');
      }
      else{
         $this->session->set_flashdata('durum','<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> HATA!</h4>
                E-mail adresi ya da şifreniz hatalı.
              </div>');
         redirect('yonetim');
      }


  }

  public function anasayfa(){

    $this->protect();
    $this->load->view('back/anasayfa');
  }

  public function cikis()
  {
    $this->session->sess_destroy();
    redirect('yonetim');
  }


  //Site yönetim genel işlemler bitiş


  //Site ayarlar başlangıç

  public function ayarlar ()
  {

    $sonuc = $this->dtbs->listele('site_ayarlari');
    $data['bilgi'] = $sonuc;
    $this->load->view('back/ayarlar/anasayfa');

  }


}
?>

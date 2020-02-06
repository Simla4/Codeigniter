<<?php
defined('BASEPATH')OR exit('No direct script access allowed');

/**
 *
 */
class Dtbs extends CI_Model
{

  function kontrol($email, $sifre)
  {

    $sonuc = $this->db->select('*')->
    from('yonetici')->
    where('email',$email)->
    where('sifre',sha1(md5($sifre)))
    ->get()->row();
    return $sonuc;

  }

  function listele($from)
  {

    $sonuc = $this->db->select('*')->from($from)
    ->order_by('id','desc')->get()->result_array();

    return $sonuc;

  }

}


?>

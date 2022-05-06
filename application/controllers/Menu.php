<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("HomeModel");
    }
    public function index()
    {
        $masaKontrol = $this->HomeModel->getGeneral("masa", array("id" => $this->session->userdata("masaid"), "durum" => 1));
        if($masaKontrol){
            $data['gruplar'] = $this->HomeModel->urun("grup");  //kategoriler
            $this->load->view('menu/menu', $data);
        }else{
            $this->load->view('masalogin');
        }
    }

    public function yiyecek()
    {
        $menu['menu'] = $this->HomeModel->urun("menu");  //yiyecekler
        $this->load->view('menu/menu', $menu);
    }

    public function siparis()  //sepete ekleme
    {
        date_default_timezone_set('Europe/Istanbul');
        $masa = $this->input->post('no');
        $urun = $this->input->post('id');
        $zaman = date("Y-m-d");

        $urunKontrol = $this->HomeModel->getGeneral("sepet", array("urun_id" => $urun, "masano" => $masa)); //urun sepette eklenmiş mi kontrol 
        if ($urunKontrol) {
            $adet = $urunKontrol->adet + 1;
            $updated = $this->HomeModel->update(array("masano" => $masa, "urun_id" => $urun), array('adet' => $adet), "sepet");
            if (!$updated) {
                echo "eklenmedi";
            } else {
                echo "Sepete Eklendi";
            }
        } else {  //eklenmemişse ekle
            $kaydet = $this->HomeModel->sepeteekle(
                "sepet",
                array(
                    'masano' => $masa,
                    'urun_id' => $urun,
                    'adet' => '1',
                    'zaman' => $zaman
                )
            );
            if (!$kaydet) {
                $alert = array("type" => "danger", "title" => "Eklenmedi!", "content" => "ekleme işlemi başarılı bir şekilde sonuçlandı");
            } else {
                $alert = array("type" => "success", "title" => "EKLENDİ!", "content" => "ekleme işlemi başarılı bir şekilde sonuçlandı");
            }
        }
    }

    public function sepet()  //sepet sayfasındaki ürünler
    {
        $data['sepet'] = $this->HomeModel->masa("sepet", array("masano" => $this->session->userdata("masaid"), "durum" => 0));
        $this->load->view("menu/sepet", $data);
    }

    public function adet() //sepetteki ürün miktar 
    {
        $urun = $this->input->post("urun");  //ürün id
        $qty = $this->input->post('qty');    //ürün adet

        $updated = $this->HomeModel->update(array("masano" => $this->input->post("masano"), "urun_id" => $urun), array('adet' => $qty), "sepet");  //miktarı qty ye eşit olan ürünü çek-> > 1

        $data = array();
        $data["urunToplami"] = 0;   //birim fiyat
        $data["toplam"] = 0;        //toplam fiyat
        if ($updated) {
            $urunBilgi = $this->HomeModel->getGeneral("menu", array("id" => $urun));   //sepetteki tek üründen fiyat
            $data["urunToplami"] = number_format($urunBilgi->fiyat * $qty, 2, ',', '.');   // girilen adet x fiyat

            $sepetUrunler = $this->HomeModel->getAllGeneral("sepet", array("masano" => $this->input->post('masano'), "durum" => 0));  //sepetteki tüm ürünlerden fiyat
            if ($sepetUrunler) {
                foreach ($sepetUrunler as $sepetUrun) {
                    $urunBilgi = $this->HomeModel->getGeneral("menu", array("id" => $sepetUrun->urun_id));
                    $data["toplam"] = $data["toplam"] + ($sepetUrun->adet * $urunBilgi->fiyat);    //sepettekilerin fiyatlarını toplama
                }
            }
            $data["toplam"] = number_format($data["toplam"], 2, ',', '.');
        }
        echo json_encode($data);  //json formatında view'e gönder
    }

    public function delete() //sepetteki ürün sil
    {
        $id = $this->input->post("id");
        $this->db->delete('sepet', array('sepet_id' => $id));
    }

    public function clear() //sepeti temizle
    {
        $id = $this->input->post("id");
        $this->db->delete('sepet', array('masano' => $id));
    }

    public function tamam() //sepeti tamamla
    {
        $ok = $this->HomeModel->tamam(
            $this->input->post("id"),
            array(
                'durum' => 1,
            ),
            "sepet"
        );
        if (!$ok) {
            echo "sipariş oluşmadı";
        } else {
            date_default_timezone_set('Europe/Istanbul');

            $sepetUrunler = $this->HomeModel->getAllGeneral("sepet", array("masano" => $this->input->post('id'), "durum" => 1));
            if ($sepetUrunler) {
                foreach ($sepetUrunler as $sepetUrun) {
                    $urunBilgi = $this->HomeModel->getGeneral("menu", array("id" => $sepetUrun->urun_id));

                    $this->HomeModel->siparisekle(
                        "siparis",
                        array(
                            'masa_no' => $sepetUrun->masano,
                            'siparis_id' => $sepetUrun->sepet_id,
                            'urun_id' => $sepetUrun->urun_id,
                            'adet' => $sepetUrun->adet,
                            'toplam' => ($sepetUrun->adet * $urunBilgi->fiyat),
                            'durum' => '1',
                            'zaman' => date("Y-m-d")
                        )
                    );
                }
            }
            $this->db->delete('sepet', array('masano' => $this->input->post("id")));
        }
    }

    public function hesap()
    {
        $data['siparis'] = $this->HomeModel->masa("siparis", array("masa_no" => $this->session->userdata("masaid")));
        $this->load->view("menu/hesap", $data);
    }
}

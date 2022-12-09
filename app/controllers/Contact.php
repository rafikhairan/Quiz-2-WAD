<?php

session_start();

class Contact extends Controller {
  public function index() {
    $data = [
      'title' => 'Contact'
    ];

    if(isset($_COOKIE["login"]) && isset($_COOKIE['email'])) {
      if($_COOKIE['login'] == 'true') {
        $_SESSION['login'] = true;
        $_SESSION['email'] = $_COOKIE['email'];
      }
    }

    if(isset($_SESSION['login'])) {
      $data['data_login'] = $this->model('User_model')->getUser($_SESSION['email']);
      $items = $this->model('Cart_model')->totalItem($data['data_login']['id']);
      $jumlah = 0;
      foreach($items as $item) {
        $jumlah += $item['jumlah'];
      }
      $data['jumlah'] = $jumlah;
      $this->view('templates/header', $data);
      $this->view('components/navbar', $data);
      $this->view('contact/index', $data);
      $this->view('components/cart', $data);
      $this->view('components/footer');
      $this->view('templates/footer');
    } else {
      $this->view('templates/header', $data);
      $this->view('components/navbar', $data);
      $this->view('contact/index', $data);
      $this->view('components/footer');
      $this->view('templates/footer');
    }
  }
}
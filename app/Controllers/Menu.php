<?php namespace App\Controllers;

class Menu extends BaseController
{
	
  // ADMIN
	public function menu_admin(){
    return view('user/v_admin');
	}

  // FITUR ADMIN
  public function kelola_penumpang(){
    return view('user/v_kelolapenumpang');
  }

  public function kelola_kondektur(){
    return view('user/v_kelolakondektur');
  }
   // FITUR ADMIN

	public function kondektur(){
    return view('user/v_kondektur');
  }
  
  public function dashboard_penumpang(){
    if(session()->get('level')<>3){
      return redirect()->to(base_url('auth/login'));
    }
    return view('user/v_pengunjung');
  }

	public function jadwal_penumpang(){
    if(session()->get('level')<>3){
      return redirect()->to(base_url('home/user'));
    }
    return view('user/v_pengunjungJadwal');
	}

	public function kupon_penumpang(){
    if(session()->get('level')<>3){
      return redirect()->to(base_url('home/user'));
    }
    return view('user/v_pengunjungKupon');
	}

	public function informasi_penumpang(){
    if(session()->get('level')<>3){
      return redirect()->to(base_url('home/user'));
    }
    return view('user/v_pengunjungInformasi');
	}

	public function profil_penumpang(){
    if(session()->get('level')<>3){
      return redirect()->to(base_url('home/user'));
    }
    return view('user/v_pengunjungProfil');
	}

}

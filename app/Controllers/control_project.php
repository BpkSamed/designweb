<?php
namespace App\Controllers;

use App\Models\UsersModel;
class control_project extends BaseController
{
	public function hal_pertama()
    {
        return view('hal_depan_web');
    }
	public function hal_produk()
    {
		if (! session('logged_in')) {
            return redirect()->to('/account'); 
        }else{
        $email = session('email');

        echo "Selamat datang: " . $email;
        return view('product');}
    }
	public function hal_about()
    {
		$email = session('email');
		echo "Selamat datang: " . $email;
        return view('about');
		
    }
	public function hal_contact()
    {
		
        $email = session('email');
		echo "Selamat datang: " . $email;
	return view('contact');
		
    }
	public function hal_account()
    {
       
        $email = session('email');
		echo "Selamat datang: " . $email;
		return view('account');
		
    }
	public function hal_daftar()
    {
       
		
		return view('daftar');
		
    }
	public function hal_belanja()
    {
		$email = session('email');
		 $username = session('name');
		echo "Selamat datang: " . $email;
        return view('belanja', ['email' => $email, 'username' => $username]);
		
    }
	
    public function register()
    {
        if (!$this->validate([
            'username' => [
                'rules' => 'required|min_length[4]|max_length[20]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 20 Karakter',
                ]
            ],
            'email' => [
                'rules' => 'required|valid_email|is_unique[pengguna.email]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'valid_email' => 'Gunakan email yang valid',
                    'is_unique' => 'Email sudah digunakan sebelumnya'
                ]
            ],
            'pass' => [
                'rules' => 'required|min_length[4]|max_length[50]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 50 Karakter',
                ]
            ],
            'con_pass' => [
                'rules' => 'matches[pass]',
                'errors' => [
                    'matches' => 'Konfirmasi Password tidak sesuai dengan password',
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $users = new UsersModel();
        $users->insert([
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
        ]);
        return redirect()->to('/hal_depan_web');
    }

    public function process()
    {
        $users = new UsersModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $dataUser = $users->where([
		'email' => $email,
        ])->first();
        if ($dataUser) {
            if (password_verify($password, $dataUser->password)) {
                session()->set([
                    'email' => $dataUser->email,
					'name' => $dataUser->username,
                    'logged_in' => TRUE
                ]);
				$username = $dataUser->username;
                return redirect()->to(base_url('/hal_depan_web'));
            } else {
                session()->setFlashdata('error', 'Email & Password Salah');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Email & Password Salah');
            return redirect()->back();
        }
    }

    public function logout()
    {
        // Hapus session pengguna dan redirect ke halaman login
        $session = session();
        $session->destroy();

        return redirect()->to('/account');
    }
	
	
  
  /*public function hal_home_pk2()
    {
        return view('home_PK2');
    }
  public function hal_about_pk2()
    {
        return view('about_PK2');
    }
  public function hal_portofolio_pk2()
    {
        return view('portofolio_PK2');
    }
  public function hal_pricing_pk2()
    {
        return view('pricing_PK2');
    }
  public function hal_contact_pk2()
    {
        return view('contact_PK2');
    }*/
}

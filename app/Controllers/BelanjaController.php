<?php
namespace App\Controllers;
use App\Models\BelanjaModel;
class BelanjaController extends BaseController
{
public function submit()
    {
        $belanjaModel = new BelanjaModel();

        // Tangkap data dari formulir belanja
        $username = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $webPertama = $this->request->getPost('web_pertama') ? 1 : 0;
        $webKedua = $this->request->getPost('web_kedua') ? 1 : 0;
        $webKetiga = $this->request->getPost('web_ketiga') ? 1 : 0;

        // Simpan data ke dalam database
        $belanjaModel->insert([
            'username' => $username,
            'email' => $email,
            'web_pertama' => $webPertama,
            'web_kedua' => $webKedua,
            'web_ketiga' => $webKetiga,
        ]);

        // Redirect atau tampilkan pesan sukses
        return redirect()->to('/product');
    }
}
?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Profile extends CI_Controller {


  public function __construct()
  {
    parent::__construct();
    $this->load->model('ModelProfile');
    if ($this->session->userdata('roleId') != 1 && $this->session->userdata('roleId') != 2) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
           <strong>Anda Harus Login Terlebih Dahulu !</strong>
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>');
			redirect('Auth/login');
		}
  }
  public function index()
  {
    $id_user = $this->session->userdata('idUser');
    $data['user'] = $this->ModelProfile->get_byId($id_user)->row_array();
    if ($this->session->userdata('roleId') == 1) {
      $this->load->view("layout/templateAdmin");
      $this->load->view("profile/profileAdmin", $data);
    }else {
      $this->load->view("layout/template");
      $this->load->view("profile/profileUser", $data);
    }  
  }
  // edit data profil
	public function edit($idMotor)
	{
		$where = array('idMotor' => $idMotor);
        $data['motor'] = $this->ModelProfile->editTentang($where, 'tb_tentang')->result();
        $this->load->view('layout/templateAdmin');
        $this->load->view('profile/EditprofileUser', $data);

    $response['success'] = TRUE;
    $response['message'] = "Data Profil berhasil Diperbarui!";
    echo json_encode($response);	
	}

  // update data kendaraan
	public function update_kendaraan()
	{
		$idUser = $this->input->post("idUser");
		$namaMotor = $this->input->post("nama_kendaraan");
		$merkMotor = $this->input->post("merk_kendaraan");
		$typeMotor = $this->input->post("type_kendaraan");
		$platNomor = $this->input->post("plat_nomor");

		$data = array(
			'nama_motor' => $namaMotor,
			'merk_motor'   => $merkMotor,
			'type_motor'   => $typeMotor,
			'plat_nomor'   => $platNomor
		);
		$where = array(
			'idUser' => $idUser
		);
		$this->ModelProfile->updateKendaraan($where, $data, 'tb_user');
    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
           <strong>Data Kendaraan Berhasil Di Update !</strong>
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>');
		redirect("../Profile");
	}

  // update data diri
	public function update_diri()
	{
		$idUser = $this->input->post("idUser");
		$namaUser = $this->input->post("nama_User");
		$noTelp = $this->input->post("no_Telp");
		$alamat = $this->input->post("alamat");
		$prov = $this->input->post("provinsi");
		$kota = $this->input->post("kota");
		$kec = $this->input->post("kecamatan");
		$desa = $this->input->post("desa");
		$dusun = $this->input->post("dusun");

		$data = array(
      
			'namaUser' => $namaUser,
			'noTelp'   => $noTelp,
			'alamat'   => $alamat,
			'provinsi'   => $prov,
			'kota'   => $kota,
			'kecamatan'   => $kec,
			'desa'   => $desa,
			'dusun'   => $dusun,
		);
		$where = array(
			'idUser' => $idUser
		);
		$this->ModelProfile->updateDiri($where, $data, 'tb_user');
    $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
           <strong>Data Diri Berhasil Di Update !</strong>
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
         </div>');
		redirect("../Profile");
	}

  function update_profile() {
    $id = $this->input->post('id_user');
    $nama_user = $this->input->post("nama_user");

    date_default_timezone_set('Asia/Jakarta');
    $object = array( 
      'nama' => $nama_user, 
    );
    $this->db->where('id', $id);
    $this->db->update('users', $object);

    $ses_array = array(
      'auth_nama_user' => $nama_user,
    );
    $this->session->set_userdata( $ses_array );
    
    $response['success'] = TRUE;
    $response['message'] = "Data Profil berhasil Diperbarui!";
    echo json_encode($response);	
  }
}

/* End of file Profile.php */

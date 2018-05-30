<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	// cek login

	public function __construct(){
		parent::__construct();
		if ($this->session->userdata('status') != 'login'){
			redirect(base_url().'index.php/login');
		}
	}

	// index
	
	public function index(){
		$this->beranda();
	}

	// beranda

	public function beranda(){
		$data = $this->db->query('select * from quote order by rand() limit 1')->result();
		$this->load->view('layout/default', array(
			'judul' => 'Beranda',
			'isi' => 'beranda',
			'parameter' => array(
				'data' => $data[0]
			)
		));
	}

	// surat masuk

	public function surat_masuk($order = 'keterangan'){
		$data = $this->db->query('select * from surat_masuk order by '.$order)->result();
		$this->load->view('layout/default', array(
			'judul' => 'Surat Masuk',
			'isi' => 'surat_masuk',
			'parameter' => array(
				'data' => $data
			)
		));
	}

	public function tambah_surat_masuk(){
		$this->load->view('layout/default', array(
			'judul' => 'Tambah Surat Masuk',
			'isi' => 'tambah_surat_masuk',
			'parameter' => ''
		));
	}

	public function tambah_surat_masuk_do(){
		$keterangan = $this->input->post('keterangan');
		$instansi = $this->input->post('instansi');
		$file = '';
		$this->upload->initialize(array(
			'upload_path' => './file/surat_masuk',
			'allowed_types' => '*',
			'encrypt_name' => TRUE
		));
		if ($this->upload->do_upload('file')){
			$file = $this->upload->data()['file_name'];
		}
		$this->db->insert('surat_masuk', array(
			'keterangan' => $keterangan,
			'instansi' => $instansi,
			'file' => $file
		));
		redirect(base_url().'index.php/home/surat_masuk');
	}

	public function edit_surat_masuk($id){
		$data = $this->db->get_where('surat_masuk', array(
			'id_surat_masuk' => $id
		))->result();
		$this->load->view('layout/default', array(
			'judul' => 'Edit Surat Masuk',
			'isi' => 'edit_surat_masuk',
			'parameter' => array(
				'data' => $data[0]
			)
		));
	}

	public function edit_surat_masuk_do($id){
		$keterangan = $this->input->post('keterangan');
		$instansi = $this->input->post('instansi');
		$this->db->update('surat_masuk', array(
			'keterangan' => $keterangan,
			'instansi' => $instansi
		), array(
			'id_surat_masuk' => $id
		));
		redirect(base_url().'index.php/home/surat_masuk');
	}

	public function hapus_surat_masuk($id){
		$data = $this->db->get_where('surat_masuk', array(
			'id_surat_masuk' => $id
		))->result();
		unlink('./file/surat_masuk/'.$data[0]->file);
		$this->db->delete('surat_masuk', array(
			'id_surat_masuk' => $id
		));
		redirect(base_url().'index.php/home/surat_masuk');
	}

	// surat keluar

	public function surat_keluar($order = 'keterangan'){
		$data = $this->db->query('select * from surat_keluar order by '.$order)->result();
		$this->load->view('layout/default', array(
			'judul' => 'Surat Keluar',
			'isi' => 'surat_keluar',
			'parameter' => array(
				'data' => $data
			)
		));
	}

	public function tambah_surat_keluar(){
		$this->load->view('layout/default', array(
			'judul' => 'Tambah Surat Keluar',
			'isi' => 'tambah_surat_keluar',
			'parameter' => ''
		));
	}

	public function tambah_surat_keluar_do(){
		$keterangan = $this->input->post('keterangan');
		$instansi = $this->input->post('instansi');
		$file = '';
		$this->upload->initialize(array(
			'upload_path' => './file/surat_keluar',
			'allowed_types' => '*',
			'encrypt_name' => TRUE
		));
		if ($this->upload->do_upload('file')){
			$file = $this->upload->data()['file_name'];
		}
		$this->db->insert('surat_keluar', array(
			'keterangan' => $keterangan,
			'instansi' => $instansi,
			'file' => $file
		));
		redirect(base_url().'index.php/home/surat_keluar');
	}

	public function edit_surat_keluar($id){
		$data = $this->db->get_where('surat_keluar', array(
			'id' => $id
		))->result();
		$this->load->view('layout/default', array(
			'judul' => 'Edit Surat Keluar',
			'isi' => 'edit_surat_keluar',
			'parameter' => array(
				'data' => $data[0]
			)
		));
	}

	public function edit_surat_keluar_do($id){
		$keterangan = $this->input->post('keterangan');
		$instansi = $this->input->post('instansi');
		$this->db->update('surat_keluar', array(
			'keterangan' => $keterangan,
			'instansi' => $instansi
		), array(
			'id' => $id
		));
		redirect(base_url().'index.php/home/surat_keluar');
	}

	public function hapus_surat_keluar($id){
		$data = $this->db->get_where('surat_keluar', array(
			'id' => $id
		))->result();
		unlink('./file/surat_keluar/'.$data[0]->file);
		$this->db->delete('surat_keluar', array(
			'id' => $id
		));
		redirect(base_url().'index.php/home/surat_keluar');
	}

	// data pegawai

	public function data_pegawai($order = 'nama'){
		$data = $this->db->query('select * from data_pegawai order by '.$order)->result();
		$this->load->view('layout/default', array(
			'judul' => 'Data Pegawai',
			'isi' => 'data_pegawai',
			'parameter' => array(
				'data' => $data
			)
		));
	}

	public function tambah_data_pegawai(){
		$this->load->view('layout/default', array(
			'judul' => 'Tambah Data Pegawai',
			'isi' => 'tambah_data_pegawai',
			'parameter' => ''
		));
	}

	public function tambah_data_pegawai_do(){
		$nip = $this->input->post('nip');
		$foto = '';
		$nama = $this->input->post('nama');
		$gelar_depan = $this->input->post('gelar_depan');
		$gelar_belakang = $this->input->post('gelar_belakang');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$golongan_darah = $this->input->post('golongan_darah');
		$agama = $this->input->post('agama');
		$status = $this->input->post('status');
		$alamat = $this->input->post('alamat');
		$status_pegawai = $this->input->post('status_pegawai');
		$jenis_pegawai = $this->input->post('jenis_pegawai');
		$nik = $this->input->post('nik');
		$bpjs = $this->input->post('bpjs');
		$npwp = $this->input->post('npwp');
		$karpeg = $this->input->post('karpeg');
		$taspen = $this->input->post('taspen');
		$tmt_cpns = $this->input->post('tmt_cpns');
		$tmp_pns = $this->input->post('tmp_pns');
		$jabatan = $this->input->post('jabatan');
		$pangkat = $this->input->post('pangkat');
		$pendidikan = $this->input->post('pendidikan');
		$jurusan = $this->input->post('jurusan');
		$tahun_lulus = $this->input->post('tahun_lulus');
		$this->upload->initialize(array(
			'upload_path' => './file/foto_pegawai',
			'allowed_types' => '*',
			'encrypt_name' => TRUE
		));
		if ($this->upload->do_upload('foto')){
			$foto = $this->upload->data()['file_name'];
		}
		$this->db->insert('data_pegawai', array(
			'nip' => $nip,
			'foto' => $foto,
			'nama' => $nama,
			'gelar_depan' => $gelar_depan,
			'gelar_belakang' => $gelar_belakang,
			'tempat_lahir' => $tempat_lahir,
			'tanggal_lahir' => $tanggal_lahir,
			'jenis_kelamin' => $jenis_kelamin,
			'golongan_darah' => $golongan_darah,
			'agama' => $agama,
			'status' => $status,
			'alamat' => $alamat,
			'status_pegawai' => $status_pegawai,
			'jenis_pegawai' => $jenis_pegawai,
			'nik' => $nik,
			'bpjs' => $bpjs,
			'npwp' => $npwp,
			'karpeg' => $karpeg,
			'taspen' => $taspen,
			'tmt_cpns' => $tmt_cpns,
			'tmp_pns' => $tmp_pns,
			'jabatan' => $jabatan,
			'pangkat' => $pangkat,
			'pendidikan' => $pendidikan,
			'jurusan' => $jurusan,
			'tahun_lulus' => $tahun_lulus
		));
		redirect(base_url().'index.php/home/data_pegawai');
	}

	public function detail_data_pegawai($id){
		$data = $this->db->get_where('data_pegawai', array(
			'id' => $id
		))->result();
		$this->load->view('layout/default', array(
			'judul' => 'Detail Data Pegawai',
			'isi' => 'detail_data_pegawai',
			'parameter' => array(
				'data' => $data[0]
			)
		));
	}

	public function edit_data_pegawai($id){
		$data = $this->db->get_where('data_pegawai', array(
			'id' => $id
		))->result();
		$this->load->view('layout/default', array(
			'judul' => 'Edit Data Pegawai',
			'isi' => 'edit_data_pegawai',
			'parameter' => array(
				'data' => $data[0]
			)
		));
	}

	public function edit_data_pegawai_do($id){
		$nip = $this->input->post('nip');
		$nama = $this->input->post('nama');
		$gelar_depan = $this->input->post('gelar_depan');
		$gelar_belakang = $this->input->post('gelar_belakang');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$golongan_darah = $this->input->post('golongan_darah');
		$agama = $this->input->post('agama');
		$status = $this->input->post('status');
		$alamat = $this->input->post('alamat');
		$status_pegawai = $this->input->post('status_pegawai');
		$jenis_pegawai = $this->input->post('jenis_pegawai');
		$nik = $this->input->post('nik');
		$bpjs = $this->input->post('bpjs');
		$npwp = $this->input->post('npwp');
		$karpeg = $this->input->post('karpeg');
		$taspen = $this->input->post('taspen');
		$tmt_cpns = $this->input->post('tmt_cpns');
		$tmp_pns = $this->input->post('tmp_pns');
		$jabatan = $this->input->post('jabatan');
		$pangkat = $this->input->post('pangkat');
		$pendidikan = $this->input->post('pendidikan');
		$jurusan = $this->input->post('jurusan');
		$tahun_lulus = $this->input->post('tahun_lulus');
		$this->db->update('data_pegawai', array(
			'nip' => $nip,
			'nama' => $nama,
			'gelar_depan' => $gelar_depan,
			'gelar_belakang' => $gelar_belakang,
			'tempat_lahir' => $tempat_lahir,
			'tanggal_lahir' => $tanggal_lahir,
			'jenis_kelamin' => $jenis_kelamin,
			'golongan_darah' => $golongan_darah,
			'agama' => $agama,
			'status' => $status,
			'alamat' => $alamat,
			'status_pegawai' => $status_pegawai,
			'jenis_pegawai' => $jenis_pegawai,
			'nik' => $nik,
			'bpjs' => $bpjs,
			'npwp' => $npwp,
			'karpeg' => $karpeg,
			'taspen' => $taspen,
			'tmt_cpns' => $tmt_cpns,
			'tmp_pns' => $tmp_pns,
			'jabatan' => $jabatan,
			'pangkat' => $pangkat,
			'pendidikan' => $pendidikan,
			'jurusan' => $jurusan,
			'tahun_lulus' => $tahun_lulus
		), array(
			'id' => $id
		));
		redirect(base_url().'index.php/home/data_pegawai');
	}

	public function hapus_data_pegawai($id){
		$data = $this->db->get_where('data_pegawai', array(
			'id' => $id
		))->result();
		unlink('./file/foto_pegawai/'.$data[0]->foto);
		$this->db->delete('data_pegawai', array(
			'id' => $id
		));
		redirect(base_url().'index.php/home/data_pegawai');
	}

	// profil puskesmas

	public function profil_puskesmas(){
		$data = $this->db->get('profil_puskesmas')->result();
		$this->load->view('layout/default', array(
			'judul' => 'Profil Puskesmas',
			'isi' => 'profil_puskesmas',
			'parameter' => array(
				'data' => $data[0]
			)
		));
	}

	public function edit_profil_puskesmas(){
		$data = $this->db->get('profil_puskesmas')->result();
		$this->load->view('layout/default', array(
			'judul' => 'Edit Profil Puskesmas',
			'isi' => 'edit_profil_puskesmas',
			'parameter' => array(
				'data' => $data[0]
			)
		));
	}

	public function edit_profil_puskesmas_do(){
		$nama_puskesmas = $this->input->post('nama_puskesmas');
		$kode_registrasi_puskesmas = $this->input->post('kode_registrasi_puskesmas');
		$status_registrasi_puskesmas = $this->input->post('status_registrasi_puskesmas');
		$jalan = $this->input->post('jalan');
		$desa_kelurahan = $this->input->post('desa_kelurahan');
		$kecamatan = $this->input->post('kecamatan');
		$kabupaten_kota = $this->input->post('kabupaten_kota');
		$provinsi = $this->input->post('provinsi');
		$kode_pos = $this->input->post('kode_pos');
		$telpon = $this->input->post('telpon');
		$fax = $this->input->post('fax');
		$email = $this->input->post('email');
		$titik_koordinat = $this->input->post('titik_koordinat');
		$kategori_wilayah = $this->input->post('kategori_wilayah');
		$kategori_kemampuan = $this->input->post('kategori_kemampuan');
		$luas_wilayah = $this->input->post('luas_wilayah');
		$jumlah_penduduk = $this->input->post('jumlah_penduduk');
		$this->db->update('profil_puskesmas', array(
			'nama_puskesmas' => $nama_puskesmas,
			'kode_registrasi_puskesmas' => $kode_registrasi_puskesmas,
			'status_registrasi_puskesmas' => $status_registrasi_puskesmas,
			'jalan' => $jalan,
			'desa_kelurahan' => $desa_kelurahan,
			'kecamatan' => $kecamatan,
			'kabupaten_kota' => $kabupaten_kota,
			'provinsi' => $provinsi,
			'kode_pos' => $kode_pos,
			'telpon' => $telpon,
			'fax' => $fax,
			'email' => $email,
			'titik_koordinat' => $titik_koordinat,
			'kategori_wilayah' => $kategori_wilayah,
			'kategori_kemampuan' => $kategori_kemampuan,
			'luas_wilayah' => $luas_wilayah,
			'jumlah_penduduk' => $jumlah_penduduk
		), array(
			'id' => 1
		));
		redirect(base_url().'index.php/home/profil_puskesmas');
	}

	// surat keputusan

	public function surat_keputusan(){
		$data = $this->db->get('surat_keputusan')->result();
		$this->load->view('layout/default', array(
			'judul' => 'Surat Keputusan',
			'isi' => 'surat_keputusan',
			'parameter' => array(
				'data' => $data[0]
			)
		));
	}

	public function edit_surat_keputusan(){
		$this->load->view('layout/default', array(
			'judul' => 'Edit Surat Keputusan',
			'isi' => 'edit_surat_keputusan',
			'parameter' => ''
		));	
	}

	public function edit_surat_keputusan_do(){
		$data = $this->db->get('surat_keputusan')->result();
		unlink('./file/surat_keputusan/'.$data[0]->surat_keputusan);
		$surat_keputusan = '';
		$this->upload->initialize(array(
			'upload_path' => './file/surat_keputusan',
			'allowed_types' => '*',
			'encrypt_name' => TRUE
		));
		if ($this->upload->do_upload('surat_keputusan')){
			$surat_keputusan = $this->upload->data()['file_name'];
		}
		$this->db->update('surat_keputusan', array(
			'surat_keputusan' => $surat_keputusan
		), array(
			'id' => '1'
		));
		redirect(base_url().'index.php/home/surat_keputusan');
	}

	// mou

	public function mou(){
		$data = $this->db->get('mou')->result();
		$this->load->view('layout/default', array(
			'judul' => 'MoU',
			'isi' => 'mou',
			'parameter' => array(
				'data' => $data[0]
			)
		));
	}

	public function edit_mou(){
		$this->load->view('layout/default', array(
			'judul' => 'Edit MoU',
			'isi' => 'edit_mou',
			'parameter' => ''
		));	
	}

	public function edit_mou_do(){
		$data = $this->db->get('mou')->result();
		unlink('./file/mou/'.$data[0]->mou);
		$mou = '';
		$this->upload->initialize(array(
			'upload_path' => './file/mou',
			'allowed_types' => '*',
			'encrypt_name' => TRUE
		));
		if ($this->upload->do_upload('mou')){
			$mou = $this->upload->data()['file_name'];
		}
		$this->db->update('mou', array(
			'mou' => $mou
		), array(
			'id' => '1'
		));
		redirect(base_url().'index.php/home/mou');
	}

	// ini mainan quote

	public function list_quote(){
		$data_quote = $this->db->get('quote')->result();
		$this->load->view('layout/default', array(
			'judul' => 'Edit Quote',
			'isi' => 'list_quote',
			'parameter' => array(
				'quote' => $data_quote
			)
		));
	}

	public function tambah_quote(){
		$this->load->view('layout/default', array(
			'judul' => 'Tambah Quote',
			'isi' => 'tambah_quote',
			'parameter' => ''
		));
	}

	public function tambah_quote_do(){
		$quote = $this->input->post('quote');
		$this->db->insert('quote', array(
			'quote' => $quote
		));
		redirect(base_url().'index.php/home/list_quote');
	}

	public function edit_quote($id){
		$data_quote = $this->db->get_where('quote', array(
			'id_quote' => $id
		))->result();
		$this->load->view('layout/default', array(
			'judul' => 'Edit Quote',
			'isi' => 'edit_quote',
			'parameter' => array(
				'data' => $data_quote[0]
			)
		));
	}

	public function edit_quote_do($id){
		$quote = $this->input->post('quote');
		$this->db->update('quote', array(
			'quote' => $quote
		), array(
			'id_quote' => $id
		));
		redirect(base_url().'index.php/home/list_quote');
	}

	public function hapus_quote($id){
		$this->db->delete('quote', array(
			'id_quote' => $id
		));
		redirect(base_url().'index.php/home/list_quote');
	}

	// password

	public function ganti_password(){
		$data = $this->db->get('admin')->result();
		$this->load->view('layout/default', array(
			'judul' => 'Ganti Password',
			'isi' => 'ganti_password',
			'parameter' => array(
				'data' => $data[0]
			)
		));
	}

	public function ganti_password_do(){
		$password = $this->input->post('password');
		$this->db->update('admin', array(
			'password' => $password
		), array(
			'username' => 'admin'
		));
		$this->session->set_flashdata('pesan', 'Password berhasil diubah');
		redirect(base_url().'index.php/home/ganti_password');
	}

	// logout

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}

}

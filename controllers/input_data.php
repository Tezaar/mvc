

<?php
class input_data extends CI_Controller
{
    public function index()

    {
        $this->load->view('view_form');
    }

    public function cetak()
    {
        $this->form_validation->set_rules('nama', 'nama siswa', 'required|min_length[5]', [
			'required' => 'Nama harus Di isi',
            'min_length' => 'Masukan Nama Lengkap'
		]);

		$this->form_validation->set_rules('nis', 'NIS', 'required|min_length[4]', [
			'required' => 'NIS Harus Di isi',
			'min_length' => 'Masukan NIS Dengan Benar'
		]);

        $this->form_validation->set_rules('kelas', 'Kelas', 'required|min_length[4]', [
			'required' => 'Kelas Harus Di isi',
			'min_length' => 'Masukan Kelas Dengan Benar'
		]);

		if ($this->form_validation->run() !=true) {
			$this->load->view('view_form');
		} else {
		
        $data = [
            'nama' => $this->input->post('nama'),
            'nis' => $this->input->post('nis'),
            'kelas' => $this->input->post('kelas'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'tmp_lahir' => $this->input->post('tmp_lahir'),
            'alamat' => $this->input->post('alamat'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'agama' => $this->input->post('agama')
    
        ];

        $this->load->view('view_data', $data);
    }
    }
}

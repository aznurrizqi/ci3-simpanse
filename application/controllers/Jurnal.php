<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class jurnal extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->slogin->cek_login();
        $this->load->model('Jurnal_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $jurnal = $this->Jurnal_model->get_all();

        $data = array(
            'jurnal_data' => $jurnal
        );

        $this->load->view('jurnal/jurnal_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Jurnal_model->get_by_id($id);
        if ($row) {
            $data = array(
		'idjurnal' => $row->idjurnal,
		'judul' => $row->judul,
		'penulis' => $row->penulis,
		'abstrak' => $row->abstrak,
		'tahun' => $row->tahun,
		'bidang' => $row->bidang,
		'tipedokumen' => $row->tipedokumen,
		'bahasaasli' => $row->bahasaasli,
		'referensi' => $row->referensi,
		'link' => $row->link,
		'penerbit' => $row->penerbit,
		'isbn' => $row->isbn,
	    );
            $this->load->view('jurnal/jurnal_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jurnal'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('jurnal/create_action'),
	    'idjurnal' => set_value('idjurnal'),
	    'judul' => set_value('judul'),
	    'penulis' => set_value('penulis'),
	    'abstrak' => set_value('abstrak'),
	    'tahun' => set_value('tahun'),
	    'bidang' => set_value('bidang'),
	    'tipedokumen' => set_value('tipedokumen'),
	    'bahasaasli' => set_value('bahasaasli'),
	    'referensi' => set_value('referensi'),
	    'link' => set_value('link'),
	    'penerbit' => set_value('penerbit'),
	    'isbn' => set_value('isbn'),
	);
        $this->load->view('jurnal/jurnal_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'judul' => $this->input->post('judul',TRUE),
		'penulis' => $this->input->post('penulis',TRUE),
		'abstrak' => $this->input->post('abstrak',TRUE),
		'tahun' => $this->input->post('tahun',TRUE),
		'bidang' => $this->input->post('bidang',TRUE),
		'tipedokumen' => $this->input->post('tipedokumen',TRUE),
		'bahasaasli' => $this->input->post('bahasaasli',TRUE),
		'referensi' => $this->input->post('referensi',TRUE),
		'link' => $this->input->post('link',TRUE),
		'penerbit' => $this->input->post('penerbit',TRUE),
		'isbn' => $this->input->post('isbn',TRUE),
	    );

            $this->Jurnal_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('jurnal'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Jurnal_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('jurnal/update_action'),
		'idjurnal' => set_value('idjurnal', $row->idjurnal),
		'judul' => set_value('judul', $row->judul),
		'penulis' => set_value('penulis', $row->penulis),
		'abstrak' => set_value('abstrak', $row->abstrak),
		'tahun' => set_value('tahun', $row->tahun),
		'bidang' => set_value('bidang', $row->bidang),
		'tipedokumen' => set_value('tipedokumen', $row->tipedokumen),
		'bahasaasli' => set_value('bahasaasli', $row->bahasaasli),
		'referensi' => set_value('referensi', $row->referensi),
		'link' => set_value('link', $row->link),
		'penerbit' => set_value('penerbit', $row->penerbit),
		'isbn' => set_value('isbn', $row->isbn),
	    );
            $this->load->view('jurnal/jurnal_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jurnal'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('idjurnal', TRUE));
        } else {
            $data = array(
		'judul' => $this->input->post('judul',TRUE),
		'penulis' => $this->input->post('penulis',TRUE),
		'abstrak' => $this->input->post('abstrak',TRUE),
		'tahun' => $this->input->post('tahun',TRUE),
		'bidang' => $this->input->post('bidang',TRUE),
		'tipedokumen' => $this->input->post('tipedokumen',TRUE),
		'bahasaasli' => $this->input->post('bahasaasli',TRUE),
		'referensi' => $this->input->post('referensi',TRUE),
		'link' => $this->input->post('link',TRUE),
		'penerbit' => $this->input->post('penerbit',TRUE),
		'isbn' => $this->input->post('isbn',TRUE),
	    );

            $this->Jurnal_model->update($this->input->post('idjurnal', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('jurnal'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Jurnal_model->get_by_id($id);

        if ($row) {
            $this->Jurnal_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('jurnal'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jurnal'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('judul', 'judul', 'trim|required');
	$this->form_validation->set_rules('penulis', 'penulis', 'trim|required');
	$this->form_validation->set_rules('abstrak', 'abstrak', 'trim|required');
	$this->form_validation->set_rules('tahun', 'tahun', 'trim|required');
	$this->form_validation->set_rules('bidang', 'bidang', 'trim|required');
	$this->form_validation->set_rules('tipedokumen', 'tipedokumen', 'trim|required');
	$this->form_validation->set_rules('bahasaasli', 'bahasaasli', 'trim|required');
	$this->form_validation->set_rules('referensi', 'referensi', 'trim|required');
	$this->form_validation->set_rules('link', 'link', 'trim|required');
	$this->form_validation->set_rules('penerbit', 'penerbit', 'trim|required');
	$this->form_validation->set_rules('isbn', 'isbn', 'trim|required');

	$this->form_validation->set_rules('idjurnal', 'idjurnal', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "jurnal.xls";
        $judul = "jurnal";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
	xlsWriteLabel($tablehead, $kolomhead++, "Judul");
	xlsWriteLabel($tablehead, $kolomhead++, "Penulis");
	xlsWriteLabel($tablehead, $kolomhead++, "Abstrak");
	xlsWriteLabel($tablehead, $kolomhead++, "Tahun");
	xlsWriteLabel($tablehead, $kolomhead++, "Bidang");
	xlsWriteLabel($tablehead, $kolomhead++, "Tipedokumen");
	xlsWriteLabel($tablehead, $kolomhead++, "Bahasaasli");
	xlsWriteLabel($tablehead, $kolomhead++, "Referensi");
	xlsWriteLabel($tablehead, $kolomhead++, "Link");
	xlsWriteLabel($tablehead, $kolomhead++, "Penerbit");
	xlsWriteLabel($tablehead, $kolomhead++, "Isbn");

	foreach ($this->Jurnal_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->judul);
	    xlsWriteLabel($tablebody, $kolombody++, $data->penulis);
	    xlsWriteLabel($tablebody, $kolombody++, $data->abstrak);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tahun);
	    xlsWriteLabel($tablebody, $kolombody++, $data->bidang);
	    xlsWriteLabel($tablebody, $kolombody++, $data->tipedokumen);
	    xlsWriteLabel($tablebody, $kolombody++, $data->bahasaasli);
	    xlsWriteLabel($tablebody, $kolombody++, $data->referensi);
	    xlsWriteLabel($tablebody, $kolombody++, $data->link);
	    xlsWriteLabel($tablebody, $kolombody++, $data->penerbit);
	    xlsWriteLabel($tablebody, $kolombody++, $data->isbn);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=jurnal.doc");

        $data = array(
            'jurnal_data' => $this->Jurnal_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('jurnal/jurnal_doc',$data);
    }

}

/* End of file jurnal.php */
/* Location: ./application/controllers/jurnal.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-06-12 07:58:02 */
/* http://harviacode.com */
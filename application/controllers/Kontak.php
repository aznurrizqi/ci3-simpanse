<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Kontak extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->slogin->cek_login();
        $this->load->model('Kontak_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $kontak = $this->Kontak_model->get_all();

        $data = array(
            'kontak_data' => $kontak
        );

        $this->load->view('kontak/kontak_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Kontak_model->get_by_id($id);
        if ($row) {
            $data = array(
		'idkontak' => $row->idkontak,
		'nmkontak' => $row->nmkontak,
		'emailkontak' => $row->emailkontak,
		'telpkontak' => $row->telpkontak,
		'pesan' => $row->pesan,
	    );
            $this->load->view('kontak/kontak_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('kontak'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('kontak/create_action'),
	    'idkontak' => set_value('idkontak'),
	    'nmkontak' => set_value('nmkontak'),
	    'emailkontak' => set_value('emailkontak'),
	    'telpkontak' => set_value('telpkontak'),
	    'pesan' => set_value('pesan'),
	);
        $this->load->view('kontak/kontak_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nmkontak' => $this->input->post('nmkontak',TRUE),
		'emailkontak' => $this->input->post('emailkontak',TRUE),
		'telpkontak' => $this->input->post('telpkontak',TRUE),
		'pesan' => $this->input->post('pesan',TRUE),
	    );

            $this->Kontak_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('kontak'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Kontak_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('kontak/update_action'),
		'idkontak' => set_value('idkontak', $row->idkontak),
		'nmkontak' => set_value('nmkontak', $row->nmkontak),
		'emailkontak' => set_value('emailkontak', $row->emailkontak),
		'telpkontak' => set_value('telpkontak', $row->telpkontak),
		'pesan' => set_value('pesan', $row->pesan),
	    );
            $this->load->view('kontak/kontak_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('kontak'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('idkontak', TRUE));
        } else {
            $data = array(
		'nmkontak' => $this->input->post('nmkontak',TRUE),
		'emailkontak' => $this->input->post('emailkontak',TRUE),
		'telpkontak' => $this->input->post('telpkontak',TRUE),
		'pesan' => $this->input->post('pesan',TRUE),
	    );

            $this->Kontak_model->update($this->input->post('idkontak', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('kontak'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Kontak_model->get_by_id($id);

        if ($row) {
            $this->Kontak_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('kontak'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('kontak'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nmkontak', 'nmkontak', 'trim|required');
	$this->form_validation->set_rules('emailkontak', 'emailkontak', 'trim|required');
	$this->form_validation->set_rules('telpkontak', 'telpkontak', 'trim|required');
	$this->form_validation->set_rules('pesan', 'pesan', 'trim|required');

	$this->form_validation->set_rules('idkontak', 'idkontak', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "kontak.xls";
        $judul = "kontak";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Nmkontak");
	xlsWriteLabel($tablehead, $kolomhead++, "Emailkontak");
	xlsWriteLabel($tablehead, $kolomhead++, "Telpkontak");
	xlsWriteLabel($tablehead, $kolomhead++, "Pesan");

	foreach ($this->Kontak_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nmkontak);
	    xlsWriteLabel($tablebody, $kolombody++, $data->emailkontak);
	    xlsWriteLabel($tablebody, $kolombody++, $data->telpkontak);
	    xlsWriteLabel($tablebody, $kolombody++, $data->pesan);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=kontak.doc");

        $data = array(
            'kontak_data' => $this->Kontak_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('kontak/kontak_doc',$data);
    }

}

/* End of file kontak.php */
/* Location: ./application/controllers/kontak.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-06-12 07:58:02 */
/* http://harviacode.com */
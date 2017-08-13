<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Wilayah extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->slogin->cek_login();
        $this->load->model('Wilayah_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $wilayah = $this->Wilayah_model->get_all();

        $data = array(
            'wilayah_data' => $wilayah
        );

        //$this->load->view('wilayah/wilayah_list', $data);
        $this->template->display('wilayah/wilayah_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Wilayah_model->get_by_id($id);
        if ($row) {
            $data = array(
		'idwilayah' => $row->idwilayah,
		'nmwilayah' => $row->nmwilayah,
	    );
            //$this->load->view('wilayah/wilayah_read', $data);
            $this->template->display('wilayah/wilayah_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('wilayah'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('wilayah/create_action'),
	    'idwilayah' => set_value('idwilayah'),
	    'nmwilayah' => set_value('nmwilayah'),
	);
        //$this->load->view('wilayah/wilayah_form', $data);
        $this->template->display('wilayah/wilayah_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nmwilayah' => $this->input->post('nmwilayah',TRUE),
	    );

            $this->Wilayah_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('wilayah'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Wilayah_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('wilayah/update_action'),
		'idwilayah' => set_value('idwilayah', $row->idwilayah),
		'nmwilayah' => set_value('nmwilayah', $row->nmwilayah),
	    );
            //$this->load->view('wilayah/wilayah_form', $data);
            $this->template->display('wilayah/wilayah_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('wilayah'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('idwilayah', TRUE));
        } else {
            $data = array(
    		'nmwilayah' => $this->input->post('nmwilayah',TRUE),
	    );

            $this->Wilayah_model->update($this->input->post('idwilayah', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('wilayah'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Wilayah_model->get_by_id($id);

        if ($row) {
            $this->Wilayah_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('wilayah'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('wilayah'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nmwilayah', 'nmwilayah', 'trim|required');

	$this->form_validation->set_rules('idwilayah', 'idwilayah', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "wilayah.xls";
        $judul = "wilayah";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Nmwilayah");

	foreach ($this->Wilayah_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nmwilayah);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=wilayah.doc");

        $data = array(
            'wilayah_data' => $this->Wilayah_model->get_all(),
            'start' => 0
        );
        
        //$this->load->view('wilayah/wilayah_doc',$data);
        $this->template->display('wilayah/wilayah_doc', $data);
    }

}

/* End of file wilayah.php */
/* Location: ./application/controllers/wilayah.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-06-12 07:58:02 */
/* http://harviacode.com */
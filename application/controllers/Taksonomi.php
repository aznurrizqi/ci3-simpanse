<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Taksonomi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->slogin->cek_login();
        $this->load->model('Taksonomi_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $taksonomi = $this->Taksonomi_model->get_all();

        $data = array(
            'taksonomi_data' => $taksonomi
        );

        //$this->load->view('taksonomi/taksonomi_list', $data);
        $this->template->display('taksonomi/taksonomi_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Taksonomi_model->get_by_id($id);
        if ($row) {
            $data = array(
		'idtaksonomi' => $row->idtaksonomi,
		'kingdom' => $row->kingdom,
		'subkingdom' => $row->subkingdom,
		'superdivisi' => $row->superdivisi,
		'divisi' => $row->divisi,
		'kelas' => $row->kelas,
		'subkelas' => $row->subkelas,
		'ordo' => $row->ordo,
		'famili' => $row->famili,
		'genus' => $row->genus,
		'spesies' => $row->spesies,
	    );
            //$this->load->view('taksonomi/taksonomi_read', $data);
            $this->template->display('taksonomi/taksonomi_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('taksonomi'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('taksonomi/create_action'),
	    'idtaksonomi' => set_value('idtaksonomi'),
	    'kingdom' => set_value('kingdom'),
	    'subkingdom' => set_value('subkingdom'),
	    'superdivisi' => set_value('superdivisi'),
	    'divisi' => set_value('divisi'),
	    'kelas' => set_value('kelas'),
	    'subkelas' => set_value('subkelas'),
	    'ordo' => set_value('ordo'),
	    'famili' => set_value('famili'),
	    'genus' => set_value('genus'),
	    'spesies' => set_value('spesies'),
	);
        //$this->load->view('taksonomi/taksonomi_form', $data);
        $this->template->display('taksonomi/taksonomi_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'kingdom' => $this->input->post('kingdom',TRUE),
		'subkingdom' => $this->input->post('subkingdom',TRUE),
		'superdivisi' => $this->input->post('superdivisi',TRUE),
		'divisi' => $this->input->post('divisi',TRUE),
		'kelas' => $this->input->post('kelas',TRUE),
		'subkelas' => $this->input->post('subkelas',TRUE),
		'ordo' => $this->input->post('ordo',TRUE),
		'famili' => $this->input->post('famili',TRUE),
		'genus' => $this->input->post('genus',TRUE),
		'spesies' => $this->input->post('spesies',TRUE),
	    );

            $this->Taksonomi_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('taksonomi'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Taksonomi_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('taksonomi/update_action'),
		'idtaksonomi' => set_value('idtaksonomi', $row->idtaksonomi),
		'kingdom' => set_value('kingdom', $row->kingdom),
		'subkingdom' => set_value('subkingdom', $row->subkingdom),
		'superdivisi' => set_value('superdivisi', $row->superdivisi),
		'divisi' => set_value('divisi', $row->divisi),
		'kelas' => set_value('kelas', $row->kelas),
		'subkelas' => set_value('subkelas', $row->subkelas),
		'ordo' => set_value('ordo', $row->ordo),
		'famili' => set_value('famili', $row->famili),
		'genus' => set_value('genus', $row->genus),
		'spesies' => set_value('spesies', $row->spesies),
	    );
            //$this->load->view('taksonomi/taksonomi_form', $data);
            $this->template->display('taksonomi/taksonomi_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('taksonomi'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('idtaksonomi', TRUE));
        } else {
            $data = array(
		'kingdom' => $this->input->post('kingdom',TRUE),
		'subkingdom' => $this->input->post('subkingdom',TRUE),
		'superdivisi' => $this->input->post('superdivisi',TRUE),
		'divisi' => $this->input->post('divisi',TRUE),
		'kelas' => $this->input->post('kelas',TRUE),
		'subkelas' => $this->input->post('subkelas',TRUE),
		'ordo' => $this->input->post('ordo',TRUE),
		'famili' => $this->input->post('famili',TRUE),
		'genus' => $this->input->post('genus',TRUE),
		'spesies' => $this->input->post('spesies',TRUE),
	    );

            $this->Taksonomi_model->update($this->input->post('idtaksonomi', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('taksonomi'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Taksonomi_model->get_by_id($id);

        if ($row) {
            $this->Taksonomi_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('taksonomi'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('taksonomi'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('kingdom', 'kingdom', 'trim|required');
	$this->form_validation->set_rules('subkingdom', 'subkingdom', 'trim|required');
	$this->form_validation->set_rules('superdivisi', 'superdivisi', 'trim|required');
	$this->form_validation->set_rules('divisi', 'divisi', 'trim|required');
	$this->form_validation->set_rules('kelas', 'kelas', 'trim|required');
	$this->form_validation->set_rules('subkelas', 'subkelas', 'trim|required');
	$this->form_validation->set_rules('ordo', 'ordo', 'trim|required');
	$this->form_validation->set_rules('famili', 'famili', 'trim|required');
	$this->form_validation->set_rules('genus', 'genus', 'trim|required');
	$this->form_validation->set_rules('spesies', 'spesies', 'trim|required');

	$this->form_validation->set_rules('idtaksonomi', 'idtaksonomi', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "taksonomi.xls";
        $judul = "taksonomi";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Kingdom");
	xlsWriteLabel($tablehead, $kolomhead++, "Subkingdom");
	xlsWriteLabel($tablehead, $kolomhead++, "Superdivisi");
	xlsWriteLabel($tablehead, $kolomhead++, "Divisi");
	xlsWriteLabel($tablehead, $kolomhead++, "Kelas");
	xlsWriteLabel($tablehead, $kolomhead++, "Subkelas");
	xlsWriteLabel($tablehead, $kolomhead++, "Ordo");
	xlsWriteLabel($tablehead, $kolomhead++, "Famili");
	xlsWriteLabel($tablehead, $kolomhead++, "Genus");
	xlsWriteLabel($tablehead, $kolomhead++, "Spesies");

	foreach ($this->Taksonomi_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->kingdom);
	    xlsWriteLabel($tablebody, $kolombody++, $data->subkingdom);
	    xlsWriteLabel($tablebody, $kolombody++, $data->superdivisi);
	    xlsWriteLabel($tablebody, $kolombody++, $data->divisi);
	    xlsWriteLabel($tablebody, $kolombody++, $data->kelas);
	    xlsWriteLabel($tablebody, $kolombody++, $data->subkelas);
	    xlsWriteLabel($tablebody, $kolombody++, $data->ordo);
	    xlsWriteLabel($tablebody, $kolombody++, $data->famili);
	    xlsWriteLabel($tablebody, $kolombody++, $data->genus);
	    xlsWriteLabel($tablebody, $kolombody++, $data->spesies);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=taksonomi.doc");

        $data = array(
            'taksonomi_data' => $this->Taksonomi_model->get_all(),
            'start' => 0
        );
        
        //$this->load->view('taksonomi/taksonomi_doc',$data);
        $this->template->display('wilayah/wilayah_doc', $data);
    }

}

/* End of file taksonomi.php */
/* Location: ./application/controllers/taksonomi.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-06-12 07:58:02 */
/* http://harviacode.com */
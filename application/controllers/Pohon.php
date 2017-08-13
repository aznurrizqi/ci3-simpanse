<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pohon extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->slogin->cek_login();
        $this->load->library('upload');
        $this->load->library('image_lib');
        $this->load->model('Pohon_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $pohon = $this->Pohon_model->get_all();

        $data = array(
            'pohon_data' => $pohon
        );

        //$this->load->view('pohon/pohon_list', $data);
        $this->template->display('pohon/pohon_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Pohon_model->get_by_id($id);
        if ($row) {
            $data = array(
		'idpohon' => $row->idpohon,
		'nmpohonum' => $row->nmpohonum,
		'nmpohonil' => $row->nmpohonil,
		'nmpohonlok' => $row->nmpohonlok,
		'foto' => $row->foto,
		'tinggi' => $row->tinggi,
		'diameter' => $row->diameter,
		'longitude' => $row->longitude,
		'lattitude' => $row->lattitude,
		'wilayah' => $row->wilayah,
		'kelangkaan' => $row->kelangkaan,
		'genus' => $row->genus,
		'morfologi' => $row->morfologi,
		'deskripsi' => $row->deskripsi,
	    );
            //$this->load->view('pohon/pohon_read', $data);
            $this->template->display('pohon/pohon_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pohon'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('pohon/create_action'),
	    'idpohon' => set_value('idpohon'),
	    'nmpohonum' => set_value('nmpohonum'),
	    'nmpohonil' => set_value('nmpohonil'),
	    'nmpohonlok' => set_value('nmpohonlok'),
	    'foto' => set_value('foto'),
	    'tinggi' => set_value('tinggi'),
	    'diameter' => set_value('diameter'),
	    'longitude' => set_value('longitude'),
	    'lattitude' => set_value('lattitude'),
	    'wilayah' => set_value('wilayah'),
	    'kelangkaan' => set_value('kelangkaan'),
	    'genus' => set_value('genus'),
	    'morfologi' => set_value('morfologi'),
	    'deskripsi' => set_value('deskripsi'),
	);
        //$this->load->view('pohon/pohon_form', $data);
        $this->template->display('pohon/pohon_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();
        
        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $config['upload_path']          = './upload/';
            $config['allowed_types']        = 'gif|jpg|jpeg|png';
            $this->load->library('upload',$config);
            if(!$this->upload->do_upload()){
                $error=array('error'=>$this->upload->display_errors());
                $this->template->display('pohon/pohon_form', $error);
            }else{
                $file_data=$this->upload->data();
            }
                $data = array(
                'nmpohonum' => $this->input->post('nmpohonum',TRUE),
                'nmpohonil' => $this->input->post('nmpohonil',TRUE),
                'nmpohonlok' => $this->input->post('nmpohonlok',TRUE),
                //'foto' => base_url().'/upload/'.$file_data['filename'],
                'foto' => base_url().'./upload/'.$file_data['file_name'],
                'tinggi' => $this->input->post('tinggi',TRUE),
                'diameter' => $this->input->post('diameter',TRUE),
                'longitude' => $this->input->post('longitude',TRUE),
                'lattitude' => $this->input->post('lattitude',TRUE),
                'wilayah' => $this->input->post('wilayah',TRUE),
                'kelangkaan' => $this->input->post('kelangkaan',TRUE),
                'genus' => $this->input->post('genus',TRUE),
                'morfologi' => $this->input->post('morfologi',TRUE),
                'deskripsi' => $this->input->post('deskripsi',TRUE),
                 );
            $this->Pohon_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('pohon'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Pohon_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('pohon/update_action'),
		'idpohon' => set_value('idpohon', $row->idpohon),
		'nmpohonum' => set_value('nmpohonum', $row->nmpohonum),
		'nmpohonil' => set_value('nmpohonil', $row->nmpohonil),
		'nmpohonlok' => set_value('nmpohonlok', $row->nmpohonlok),
		'foto' => set_value('foto', $row->foto),
		'tinggi' => set_value('tinggi', $row->tinggi),
		'diameter' => set_value('diameter', $row->diameter),
		'longitude' => set_value('longitude', $row->longitude),
		'lattitude' => set_value('lattitude', $row->lattitude),
		'wilayah' => set_value('wilayah', $row->wilayah),
		'kelangkaan' => set_value('kelangkaan', $row->kelangkaan),
		'genus' => set_value('genus', $row->genus),
		'morfologi' => set_value('morfologi', $row->morfologi),
		'deskripsi' => set_value('deskripsi', $row->deskripsi),
	    );
            //$this->load->view('pohon/pohon_form', $data);
            $this->template->display('pohon/pohon_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pohon'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('idpohon', TRUE));
        } else {
            $data = array(
		'nmpohonum' => $this->input->post('nmpohonum',TRUE),
		'nmpohonil' => $this->input->post('nmpohonil',TRUE),
		'nmpohonlok' => $this->input->post('nmpohonlok',TRUE),
		'foto' => $this->input->post('foto',TRUE),
		'tinggi' => $this->input->post('tinggi',TRUE),
		'diameter' => $this->input->post('diameter',TRUE),
		'longitude' => $this->input->post('longitude',TRUE),
		'lattitude' => $this->input->post('lattitude',TRUE),
		'wilayah' => $this->input->post('wilayah',TRUE),
		'kelangkaan' => $this->input->post('kelangkaan',TRUE),
		'genus' => $this->input->post('genus',TRUE),
		'morfologi' => $this->input->post('morfologi',TRUE),
		'deskripsi' => $this->input->post('deskripsi',TRUE),
	    );

            $this->Pohon_model->update($this->input->post('idpohon', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('pohon'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Pohon_model->get_by_id($id);

        if ($row) {
            $this->Pohon_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('pohon'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('pohon'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nmpohonum', 'nmpohonum', 'trim|required');
	$this->form_validation->set_rules('nmpohonil', 'nmpohonil', 'trim|required');
	$this->form_validation->set_rules('nmpohonlok', 'nmpohonlok', 'trim|required');
	$this->form_validation->set_rules('foto', 'foto', 'trim');
	$this->form_validation->set_rules('tinggi', 'tinggi', 'trim|required');
	$this->form_validation->set_rules('diameter', 'diameter', 'trim|required');
	$this->form_validation->set_rules('longitude', 'longitude', 'trim|required|numeric');
	$this->form_validation->set_rules('lattitude', 'lattitude', 'trim|required|numeric');
	$this->form_validation->set_rules('wilayah', 'wilayah', 'trim|required');
	$this->form_validation->set_rules('kelangkaan', 'kelangkaan', 'trim|required');
	$this->form_validation->set_rules('genus', 'genus', 'trim|required');
	$this->form_validation->set_rules('morfologi', 'morfologi', 'trim|required');
	$this->form_validation->set_rules('deskripsi', 'deskripsi', 'trim|required');

	$this->form_validation->set_rules('idpohon', 'idpohon', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "pohon.xls";
        $judul = "pohon";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Nmpohonum");
	xlsWriteLabel($tablehead, $kolomhead++, "Nmpohonil");
	xlsWriteLabel($tablehead, $kolomhead++, "Nmpohonlok");
	xlsWriteLabel($tablehead, $kolomhead++, "Foto");
	xlsWriteLabel($tablehead, $kolomhead++, "Tinggi");
	xlsWriteLabel($tablehead, $kolomhead++, "Diameter");
	xlsWriteLabel($tablehead, $kolomhead++, "Longitude");
	xlsWriteLabel($tablehead, $kolomhead++, "Lattitude");
	xlsWriteLabel($tablehead, $kolomhead++, "Wilayah");
	xlsWriteLabel($tablehead, $kolomhead++, "Kelangkaan");
	xlsWriteLabel($tablehead, $kolomhead++, "Genus");
	xlsWriteLabel($tablehead, $kolomhead++, "Morfologi");
	xlsWriteLabel($tablehead, $kolomhead++, "Deskripsi");

	foreach ($this->Pohon_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nmpohonum);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nmpohonil);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nmpohonlok);
	    xlsWriteLabel($tablebody, $kolombody++, $data->foto);
	    xlsWriteNumber($tablebody, $kolombody++, $data->tinggi);
	    xlsWriteNumber($tablebody, $kolombody++, $data->diameter);
	    xlsWriteNumber($tablebody, $kolombody++, $data->longitude);
	    xlsWriteNumber($tablebody, $kolombody++, $data->lattitude);
	    xlsWriteLabel($tablebody, $kolombody++, $data->wilayah);
	    xlsWriteLabel($tablebody, $kolombody++, $data->kelangkaan);
	    xlsWriteLabel($tablebody, $kolombody++, $data->genus);
	    xlsWriteLabel($tablebody, $kolombody++, $data->morfologi);
	    xlsWriteLabel($tablebody, $kolombody++, $data->deskripsi);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=pohon.doc");

        $data = array(
            'pohon_data' => $this->Pohon_model->get_all(),
            'start' => 0
        );
        
        //$this->load->view('pohon/pohon_doc',$data);
        $this->template->display('pohon/pohon_doc', $data);
    }

}

/* End of file pohon.php */
/* Location: ./application/controllers/pohon.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-06-12 08:24:31 */
/* http://harviacode.com */
<?php

class Upload extends CI_Controller {

        function Upload_photo(){
                $config['upload_path'] = 'upload';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']     = '10240';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('file')){
                        
                        $filedata = $this->upload->data();
                        
                        $data->filename = $filedata['file_name'];
                        
                        $this->user->update_photo($data->filename);
                        
                        $data->filename = 'upload' . $filedata['file_name'];
                        
                                
                        echo '<script language="javascript" type="text/javascript">';
                        echo 'window.top.window.formSubmitted(1,'.json_encode($data).')';
                        echo '</script>';

                } else {
                        
                        echo '<script language="javascript" type="text/javascript">';
                        echo 'window.top.window.formSubmitted(0,"'.$error.'")';
                        echo '</script>';
                }               
        }

        // public function __construct()
        // {
        //         parent::__construct();
        //         $this->load->helper(array('form', 'url'));
        // }

        // public function index()
        // {
        //         $this->load->view('upload_form', array('error' => ' ' ));
        // }

        // public function do_upload()
        // {
        //         $data['photo'] = $this->upload_model->insert_data();

        //         $config['upload_path']          = 'upload';
        //         $config['allowed_types']        = 'gif|jpg|png';
        //         $config['max_size']             = '10240';
        //         // $config['max_width']            = 1024;
        //         // $config['max_height']           = 768;

        //         $this->load->library('upload', $config);

        //         if ( ! $this->upload->do_upload('userfile'))
        //         {
        //                 $error = array('error' => $this->upload->display_errors());

        //                 $this->load->view('upload_form', $error);
        //         }
        //         else
        //         {
        //                 $data = array('upload_data' => $this->upload->data());

        //                 $this->load->view('upload_success', $data);
        //         }
        // }
}
?>
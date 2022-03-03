<?php
include_once(APPPATH.'core/Admin_Controller.php');
class Vehicle extends Admin_Controller {
    public function __construct(){

     parent::__construct();
        $this->load->model(array(
            "mod_common"
        ));
    }
	public function add_vehicle() {
        $url=authenticate().'/lgapi/vehicle_add.php';

        required('transportationProviderId',$this->input->post('transportationProviderId'));
        required('make',$this->input->post('make'));
        required('vin',$this->input->post('vin'));
        required('licensePlate',$this->input->post('licensePlate'));

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $this->input->post());
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $json_response = curl_exec($curl);
        curl_close($curl);
        if ($json_response==1) {

          echo json_encode($this->input->post());
          exit();
        } else {
            echo $json_response;
            exit();
        }
        
    } 

    
    public function update_vehicle($uuid='') {
        echo $uuid;
        exit();

        $url=authenticate().'/lgapi/vehicle_update.php';
        if ($uuid=='') {
            $response = array('message' =>'Invalid id ','error' =>true,'success' =>false);
            echo json_encode($response);
            exit();
        }
        required('transportationProviderId',$this->input->post('transportationProviderId'));
        required('make',$this->input->post('make'));
        required('vin',$this->input->post('vin'));
        required('licensePlate',$this->input->post('licensePlate'));
        $data=$this->input->post();
        $data['uuid']=$uuid;

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $json_response = curl_exec($curl);
        curl_close($curl);
        if ($json_response==1) {
            echo json_encode($this->input->post());
            exit();
        } else {
            echo $json_response;
            exit();
        }
    }
    public function get_vehicle($uuid='') {

        $url=authenticate().'/lgapi/vehicle_get.php';

        if ($uuid=='') {
            $response = array('message' =>'Invalid id ','error' =>true,'success' =>false);
            echo json_encode($response);
            exit();
        }
        $data = array('uuid' =>$uuid);

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $json_response = curl_exec($curl);
        echo $json_response;
        curl_close($curl);
    }

    public function modal() {
        $this->load->view('admin/_layout_modal', $this->data);
    }
}
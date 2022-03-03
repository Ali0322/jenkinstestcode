<?php
include_once(APPPATH.'core/Admin_Controller.php');
class Driver extends Admin_Controller {
    public function __construct(){
    parent::__construct();
        $this->load->model(array(
            "mod_common"
        ));
    }
    public function add_driver() {

        $txt =json_encode($_REQUEST);
        $myfile = fopen("driver1.txt", "w") or die("Unable to open file!");
        fwrite($myfile, $txt);
        fclose($myfile);

        $txt =json_encode($this->input->post());
        $myfile = fopen("driver2.txt", "w") or die("Unable to open file!");
        fwrite($myfile, $txt);
        fclose($myfile);

        $url_token=explode("_",authenticate());

        $data['add_driver']='add_driver';
        $data['hybrid_secrect']=$url_token[1];

        $url=$url_token[0].'/lgapi/driver.php';

        //$url='https://demo5.nemtclouddispatch.com/lgapi/driver_add.php';

        // required('transportationProviderId',$this->input->post('transportationProviderId'));
        // required('firstName',$this->input->post('firstName'));
        // required('lastName',$this->input->post('lastName'));
        // required('licenseId',$this->input->post('licenseId'));

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

    public function update_driver($uuid='') {
        //$url=authenticate().'/lgapi/driver_update.php';

        if ($uuid=='') {
            $response = array('message' =>'Id required','error' =>true,'success' =>false);
            echo json_encode($response);
            exit();
        }
        // required('transportationProviderId',$this->input->post('transportationProviderId'));
        // required('firstName',$this->input->post('firstName'));
        // required('lastName',$this->input->post('lastName'));
        // required('licenseId',$this->input->post('licenseId'));

        $data=$this->input->post();
        $url_token=explode("_",authenticate());

        $data['update_driver']='update_driver';
        $data['hybrid_secrect']=$url_token[1];

        $url=$url_token[0].'/lgapi/driver.php';

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
    public function get_driver($uuid='') {

        $url=authenticate().'/lgapi/ride_get.php';

        if ($uuid=='') {
            $response = array('message' =>'Id required ','error' =>true,'success' =>false);
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
    public function index() {
        
        $data['client_id']='OscVfJzHdPvgXHkbkhQ1rDfEf7gZf8nnjbvcl2vm';
        $data['client_secret']='nWyyS4g9fXtAyJSA3loPwVIMF5SvbVNAxIuyeLaerQlgWNNuhPWSRJbYMe8MCwdVb3P93iyp876V14MkHXSvmb5pUFteK0HJUFDnETdHWdNOPUSNHM9Oi6xjrWnD4kyT';
        $data['grant_type']='client_credentials';
        $url='https://uat-api.circulation.care/oauth2/token/';

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $json_response = curl_exec($curl);

        echo $access_token= json_decode($json_response)->access_token;

        $d_data['id']="5XnvSGjgcDw6H3zZVtrZNx";
        $d_data['transportationProviderId']="5XnvSGjgcDw6H3zZVtrZNx";
        $d_data['firstName']="MAX";
        $d_data['lastName']="CLAYTON";
        $d_data['phone']="655-899-0009";
        $d_data['email']="max@clayton.com";
        $d_data['licenseId']="T081782783";
        $d_data['licenseState']="OK";
        $d_data['licenseExpiration']="2011-09-30";
        $d_data['credentialingStatus']="credentialed";
        $d_data['dob']="1994-01-06";

        $url='https://uat-api.circulation.care/hybrid-test-provider/drivers/';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer '.$access_token));
        curl_setopt($ch, CURLOPT_POSTFIELDS,$d_data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $driver_output = curl_exec($ch);
        curl_close ($ch);
        $driver_output=json_decode($driver_output);

        pm($driver_output);
        exit();
        echo "<br>";

        $url='https://uat-api.circulation.care/oauth2/token/';

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $d_data);
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $json_response = curl_exec($curl);

    }
    public function modal() {
        $this->load->view('admin/_layout_modal', $this->data);
    }
}
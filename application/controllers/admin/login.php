<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

  
	function __construct()
	{
		parent:: __construct();		
		$this->load->model('admin/login_model');    

          
        }
	
	//function for default page
	public function index()
	{
	
         $data['file']='admin/login/login';
		if($this->input->post())
		{
		   $this->load->model('admin/login_model');
		   $res=$this->login_model->login();
	        }
		if(@$res)
                { 
     	            redirect(base_url().'index.php/admin/login/welcome'); 	                 		
		}
			
		$this->load->view('admin/without_header_template',$data);
	}	
	
	//function for Welcome page
	public function welcome()
	{	$this->checklogin();	
		$data['file']='admin/login/welcome';
		$this->load->view('admin/template',$data);  
	} 
	
	//function for Logout	
	function logout()
	{	
		$this->session->sess_destroy();
		redirect(base_url().'index.php/admin/login');
	}	
	
	//Function for forgot Password
	function forgotpassword()
	{
		$data['file']='admin/login/forgotpassword';
		$this->load->view('admin/without_header_template',$data);
		   $email=$this->input->post('username');
		if(!empty($email))
		{
			$res=$this->login_model->forgotcheckmail($email);
				if($res=='1')
				{
					  $temp_pass = (uniqid());           
					$this->load->library('email', array('mailtype'=>'html'));
					$this->email->from('visitorAdmin', "Site");
					$this->email->to($this->input->post('email'));
					$this->email->subject("Reset your Password");

					$message = "<p>This email has been sent as a request to reset our password.Your new password is $temp_pass</p>";
					$this->email->message($message);

					if($this->email->send())
					{
						if($this->login_model->updatepass($temp_pass,$email))
						{
							echo "Your password has been sent successfully";
						}
						else
						{
							echo "Please check your Email";
						}
				        }	
				  
			       }	
			       else
			        {
				      echo "Your Email is not valid";  
                                }
        }
	
   }
   
   /***********Functions for Manage Security**********/
   
   //Function for Manage Security 
    function manageusers()
   {
        $this->checklogin();	
   $res=$this->login_model->manageusers();
	   
		if(!empty($res))
		{ 
		   $data['result']=$res;
		   
		}
                $data['file']='admin/login/manageusers';
		$this->load->view('admin/template',$data); 	
   } 
        
    //Function for add User Or Security
    function adduser()
   {   
$this->checklogin();
          if(isset($_POST['add']))
	   {
           @$res=$this->login_model->adduser();
	   $data['result']=@$res;
		   if(@$res!='0')
		   { 	   
                       redirect("admin/login/manageusers");
		   }
	   }
            else
             {
                   $data['file']='admin/login/adduser';
		   $this->load->view('admin/template',$data); 
             }
   }
   
    //Function for Delete User Or Security
    function deleteusers()
     {
         
$this->checklogin();
    if(isset($_POST['IDs'])){
	   $res=$this->login_model->deleteusers($this->input->post('IDs'));
	   if($res!='0')
		{ 
                   $this->session->set_flashdata('success','Deleted success');
		    redirect("admin/login/manageusers");  
		}
		else
		{
		    $this->session->set_flashdata('warning','Deleted Unsuccess');
		    redirect("admin/login/manageusers");  	
		}	 
             }
      }
/**************************************FUNCTIONS FOR MANAGE OWNERS*********************************************/    
    
     //Function for Adding owners
       function addowners()
        {   

$this->checklogin();
           if(isset($_POST['add']))
	   {
           @$res=$this->login_model->addowners();
	   $data['result']=@$res;
		   if(@$res!='0')
		   { 	   
                       redirect("admin/login/manageowners");
		   }
	   }
            else
             {
                   $data['file']='admin/login/addowners';
		   $this->load->view('admin/template',$data); 
             }
         }

 //Function for Manage owners 
   function manageowners()
   {

$this->checklogin();
	   $res=$this->login_model->manageowners();
	   
		if(!empty($res))
		{ 
		   $data['result']=$res;
		   
		}
                $data['file']='admin/login/manageowners';
		$this->load->view('admin/template',$data); 	
   } 

     //Function for Delete owners
      function deleteowners()
     {

$this->checklogin();
            if(isset($_POST['IDs'])){
	   $res=$this->login_model->deleteowners($this->input->post('IDs'));
	   if($res!='0')
		{ 
                   $this->session->set_flashdata('success','Deleted success');
		    redirect("admin/login/manageowners");  
		}
		else
		{
		    $this->session->set_flashdata('warning','Deleted Unsuccess');
		    redirect("admin/login/manageowners");  	
		}	 
             }
      }
/******************Functions For Manage visitors**************************/

  function managevisitors()
   {

$this->checklogin();
	   $res=$this->login_model->managevisitors();
	   
		if(!empty($res))
		{ 
		   $data['result']=$res;
		   
		}
                $data['file']='admin/login/managevisitor';
		$this->load->view('admin/template',$data); 	
   } 

    //Function for Delete owners
      function deletevisitors()
     {

          $this->checklogin();
            if(isset($_POST['IDs'])){
	   $res=$this->login_model->deletevisitors($this->input->post('IDs'));
	   if($res!='0')
		{ 
                   $this->session->set_flashdata('success','Deleted success');
		    redirect("admin/login/managevisitors");  
		}
		else
		{
		    $this->session->set_flashdata('warning','Deleted Unsuccess');
		    redirect("admin/login/managevisitors");  	
		}	 
             }
      }

function deletenoexit()
{
$this->checklogin();
            if(isset($_POST['IDs'])){
	   $res=$this->login_model->deletenoexit($this->input->post('IDs'));
	   if($res!='0')
		{ 
                   $this->session->set_flashdata('success','Deleted success');
		    redirect("admin/login/noexit");  
		}
		else
		{
		    $this->session->set_flashdata('warning','Deleted Unsuccess');
		    redirect("admin/login/noexit");  	
		}	 
             }


}

function deletenoentry()
{
$this->checklogin();
            if(isset($_POST['IDs'])){
	   $res=$this->login_model->deletenoentry($this->input->post('IDs'));
	   if($res!='0')
		{ 
                   $this->session->set_flashdata('success','Deleted success');
		    redirect("admin/login/noentry");  
		}
		else
		{
		    $this->session->set_flashdata('warning','Deleted Unsuccess');
		    redirect("admin/login/noentry");  	
		}	 
             }




}

 function deleteinappvisitors()
     {

$this->checklogin();
            if(isset($_POST['IDs'])){
//print_r($_POST['IDs']);
	   $res=$this->login_model->deleteinappvisitors($this->input->post('IDs'));
	   if($res!='0')
		{ 
                   $this->session->set_flashdata('success','Deleted success');
		    redirect("admin/login/inappvisitor");  
		}
		else
		{
		    $this->session->set_flashdata('warning','Deleted Unsuccess');
		    redirect("admin/login/inappvisitor");  	
		}	 
             }
      }

/***********************/
function deleteallentries()
     {

$this->checklogin();
            if(isset($_POST['IDs'])){
//print_r($_POST['IDs']);die;
	   $res=$this->login_model->deleteallentries($this->input->post('IDs'));
	   if($res!='0')
		{ 
                   $this->session->set_flashdata('success','Deleted success');
		    redirect("admin/login/allentry");  
		}
		else
		{
		    $this->session->set_flashdata('warning','Deleted Unsuccess');
		    redirect("admin/login/allentry");  	
		}	 
             }
      }

function deletelasthours()
{
          $this->checklogin();
            if(isset($_POST['IDs'])){
	   $res=$this->login_model->deletelasthours($this->input->post('IDs'));
	   if($res!='0')
		{ 
                   $this->session->set_flashdata('success','Deleted success');
		    redirect("admin/login/lasthours");  
		}
		else
		{
		    $this->session->set_flashdata('warning','Deleted Unsuccess');
		    redirect("admin/login/lasthours");  	
		}	

}
}
function pr($data){
	echo "<pre>";
        print_r($data);
        echo "</pre>";
}	


function checklogin(){

   $user = $this->session->userdata('user_data');
              if(empty($user)){
                
                    redirect(base_url().'index.php/admin/login'); 	
              }

}

function inappvisitor()
{
      $this->checklogin();
          $res=$this->login_model->inappvisitor();
 if(!empty($res))
		{ 
		   $data['result']=$res;
		}
                $data['file']='admin/login/inappvisitor';
		$this->load->view('admin/template',$data); 	


}

function lasthours()
{

 $this->checklogin();
          $res=$this->login_model->lasthours();


if(!empty($res))
{
        $data['result']=$res;

}
 $data['file']='admin/login/lasthours';
		$this->load->view('admin/template',$data); 


}


function noexit()
{

 $this->checklogin();
          $res=$this->login_model->noexit();


if(!empty($res))
{
        $data['result']=$res;

}
 $data['file']='admin/login/noexit';
		$this->load->view('admin/template',$data); 


}


function noentry()
{

 $this->checklogin();
          $res=$this->login_model->noentry();


if(!empty($res))
{
        $data['result']=$res;

}
 $data['file']='admin/login/noentry';
		$this->load->view('admin/template',$data); 


}


function allentry()
{

 $this->checklogin();
          $res=$this->login_model->allentry();


if(!empty($res))
{
        $data['result']=$res;

}
 $data['file']='admin/login/allentry';
		$this->load->view('admin/template',$data); 


}


               

}
                            
                 

                            

                                                                                                <?php //if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model {

	//function for Email Exist
	function checkmail($email,$password)
	{
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		$q=$this->db->get('security');                            //databasename
		$res=$q->row_array();
		//echo "<pre>";print_r($res);die;
		if($q->num_rows()>0)
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}
	
	//Function Email Exist
	function forgotcheckmail($email)
	{
		$this->db->where('email',$email);
		$q=$this->db->get('user');                            //databasename
		$res=$q->row_array();
		if($q->num_rows()>0)
		{
			return 1;
		}
		else
		{
			return 0;
		}
	}
	
	//function for Signup
	function login()
	{              
		/****************Query section*****************************/
		
		 $email=$this->input->post('email');
		$password=$this->input->post('password');
		
		$query = $this->db->get_where('security',array("email"=>$email,"password"=>$password,"type"=>'admin'));
		
		
		/********************Query result condition*******************/
		if($query->num_rows())
        {			
			$dataRes = $query->row();
				$user_data=array(
					'id'=>$dataRes->id,
					'username'=>$dataRes->username,
					'image'=>$dataRes->image,
					'email'=>$dataRes->email
				);
				$this->session->set_userdata('user_data', $user_data);//session
				return true;
		}
		else
		{
			return false;
		}
		/********************Query result condition*******************/
	}
	
	//Function for Uodate Password 
	function updatepass($temp_pass,$mail)
	{
		$this->db->where("email",$mail);
        $this->db->update("user",array("password"=>$temp_pass));
	}
	
/****************FUNCTIONS FOR MANAGE SECURITY******************/


	//Function For Manage Security
	function manageusers()
	{
		$this->db->where('type','security');
		$q=$this->db->get('security');                            //databasename
		$res=$q->result_array();
		if($q->num_rows()>0)
		{
			return $res;
		}
		else
		{
			return 0;
		}
	}	
	
	function adduser()
	{
		$data=array('username'=>$this->input->post('username'),
		             'password'=>$this->input->post('password'),
					'age'=>$this->input->post('age'),
					'address'=>$this->input->post('address'),
					'gender'=>$this->input->post('gender'),
					'type'=>'security',
					'image'=>$_FILES['image']['name']
					);	
			if(!empty($_FILES['image']['name'])) 
			{	

			
			    /* $image_name=$_FILES['image']['name'];
	move_uploaded_file($_FILES['image']['tmp_name'],$_SERVER['DOCUMENT_ROOT']."/visitor/public/uploads/images".$image_name);

*/
			 $config['upload_path'] = 'public/uploads/images';
$config['allowed_types'] = '*';

		         $this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('image'))
		{
			 echo $this->upload->display_errors();

			
		}

			}
		  	
		          $this->db->insert('security',$data);
		if($this->db->insert_id()>0)
		{
			$id=$this->db->insert_id();
			return $id;
			$this->session->set_flashdata('success','<div class="notyfy_message"><span class="notyfy_text">Successfully Added</div></div>');
		}
		else
		{
			return 0;
			 $this->session->set_flashdata('success','<div class="notyfy_message"><span class="notyfy_text">Added Unsuccess </div></div>');
		}
	}
	
	function deleteusers($ids)
	{
		foreach($ids as $id)
                {
                           $this->db->where('id', $id);
                           $q=$this->db->delete('security');
                             
                }
                if($q)
                {
                    return true;
                }
		
	}	

/***************************************Functions for Manage Owners**************************************************************/


	//function To add Owners
	function addowners()
	{
		$data=array('name'=>$this->input->post('name'),		             
					'age'=>$this->input->post('age'),
					'gender'=>$this->input->post('gender'),
					'image'=>$_FILES['image']['name']
					);	
			if(!empty($_FILES['image']['name'])) 
			{				
			  
			 $config['upload_path'] = 'public/uploads/images';
$config['allowed_types'] = '*';

		         $this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('image'))
		{
			 echo $this->upload->display_errors();
		}
			}
		  	
		          $this->db->insert('flatowners',$data);
$id=$this->db->insert_id();

		if($id>0)
		{
			
                            $data1=array('flatno'=>$this->input->post('flatno'),
                               'floorno'=>$this->input->post('floorno'),
                                'user_id'=>$id
                                     );
		                            $this->db->insert('flatinfo',$data1);
                                                    
                         	return $id;
		}
		else
		{
			return 0;
		}
	}

     
     //Function For Manage Owners
	function manageowners()
	{
		$this->db->select('*');
                $this->db->from('flatowners');
                $this->db->join('flatinfo', 'flatowners.id = flatinfo.user_id');                         //databasename
                
                $q=$this->db->get();              
                 $res=$q->result_array();
		if($q->num_rows()>0)
		{
			return $res;
		}
		else
		{
			return 0;
		}
	}

 //function for Delete Owners
    function deleteowners($ids)
	{



		foreach($ids as $id)
                {
                           $this->db->where('id', $id);
                           $q=$this->db->delete('flatowners');
                          //   echo $this->db->last_query();die;
                }
                if($q)
                {
                    return true;
                }
	}

           /*********************Functions For Manage Visitors**************************/

       //function for Manage Visitors

      function managevisitors()
	{

 $date=date('Y-m-d H:i:s');
 $hours = date('Y-m-d H:i:s',strtotime ( '-12 hours' , strtotime ( $date ) )) ;
$this->db->where('visitors.created_date >',$hours);
                 $this->db->where('visitors.status', 2);
                $this->db->select('visitors.*,flatowners.name');
                $this->db->from('visitors');
                $this->db->join('flatowners', 'flatowners.id = visitors.user_id');  
		 $q=$this->db->get();              
//echo $this->db->last_query();                 
$res=$q->result_array();
		if($q->num_rows()>0)
		{
			return $res;
		}
		else
		{
			return 0;
		}
	}


     //Functions for Delete Visitors
      function deletevisitors($ids)
	{ 
		foreach($ids as $id)
                {

          $q="delete from visitors where id='$id'";
           $this->db->query($q);                          
                }

                if($q)
                {
                    return true;
                }
	}


 function deleteinappvisitors($ids)
	{

		foreach($ids as $id)
                {

                           $this->db->where('id', $id);
                           $q=$this->db->delete('visitors');   

   $this->db->where('visitor_id', $id);
                                $q=$this->db->delete('visitor_inapp');   
                 
                 }
                if($q)
                {
                    return true;
                }
	}

function inappvisitor()
{

 $date=date('Y-m-d H:i:s');
 $hours = date('Y-m-d H:i:s',strtotime ( '-12 hours' , strtotime ( $date ) )) ; //echo $hours;die;


//$this->db->where('b.created_date >',$hours);


$query=$this->db->query("SELECT a.*,b.updateddate as dated,b.created_date as cr_date,b.driver_image as drvpic,b.idproof_pic as idpic,b.frontcar_pic as frontpic,
b.backcar_pic as backpic,b.carplate_pic as carpic,b.peoples as peop,b.status as sttatus,c.name FROM `visitors` as a INNER JOIN visitor_inapp as b ON a.id=b.visitor_id INNER JOIN flatowners as c on a.user_id=c.id WHERE b.created_date >'$hours'");
//echo $this->db->last_query();die;
		$res=$query->result_array();
		if($query->num_rows()>0)
		{
			return $res;
		}
		else
		{
			return 0;
		}


}

function lasthours()
{
 
 $date=date('Y-m-d H:i:s');
 $hours = date('Y-m-d H:i:s',strtotime ( '-12 hours' , strtotime ( $date ) )) ; //echo $hours;die;


$this->db->where('a.created_date > ',$hours);
$this->db->select('a.id,a.peoples,a.created_date,a.status,a.flat_no,a.driver_image,a.type,a.entrytime,a.idproof_pic,a.frontcar_pic,a.backcar_pic,a.carplate_pic,b.user_id,b.flatno,c.name');
$this->db->join('flatinfo as b', 'b.flatno=a.flat_no');
$this->db->join('flatowners as c', 'b.user_id=c.id');
  $this->db->group_by('a.id');
$q=$this->db->get('visitors as a');


//echo $this->db->last_query();
$res=$q->result_array();

return $res;
 
}
  


function noexit()
{
 
 $date=date('Y-m-d H:i:s');
$days = date('Y-m-d H:i:s',strtotime ( '-12 hours' , strtotime ( $date ) )) ; 

 $q=$this->db->query("select a.*,b.name from visitors as a INNER JOIN flatowners as b ON a.user_id=b.id WHERE a.created_date < '$days' AND a.status=0");
$res=$q->result_array();
//echo $this->db->last_query();die;
return $res;
 
}

function noentry()
{
 $date=date('Y-m-d H:i:s');
$days = date('Y-m-d H:i:s',strtotime ( '-12 hours' , strtotime ( $date ) )) ; 

$q=$this->db->query("select a.*,b.name from visitors as a INNER JOIN flatowners as b ON a.user_id=b.id WHERE a.type='exit' AND a.status=0 AND a.created_date > '$days'");
$res=$q->result_array();

return $res;
 
}


function allentry()
{


$q=$this->db->query("select c.name,a.flat_no as fno,b.* from visitors as a INNER JOIN visitor_inapp as b ON a.flat_no=b.flat_no inner join flatowners as c ON c.id=a.user_id");
$res=$q->result_array();

return $res;
 
}


 function deleteallentries($ids)
	{
		foreach($ids as $id)
                {
                           $this->db->where('id', $id);
                           $q=$this->db->delete('visitor_inapp'); 
                             $this->db->where('id', $id);
                             $q1=$this->db->delete('visitors');                           
                }
                if($q)
                {
                    return true;
                }
	}

function deletenoexit($ids)
{ 
             foreach($ids as $id)
                {   
                           $this->db->where('status', 0);
                           $this->db->where('id', $id);
                           $q=$this->db->delete('visitors'); 
                                                    
                }
                if($q)
                {
                    return true;
                }



}
	
function deletenoentry($ids)
{
            foreach($ids as $id)
                {
                           $this->db->where('type', 'exit');
                           $this->db->where('id', $id);
                           $q=$this->db->delete('visitors');                                                
                }
                if($q)
                {
                    return true;
                }

}

function deletelasthours($ids)
{
              foreach($ids as $id)
                {
                        
                           $this->db->where('id', $id);
                           $q=$this->db->delete('visitors');                                                
                }
                if($q)
                {
                    return true;
                }
}
				
}

                            
                            
                            
                            
                            
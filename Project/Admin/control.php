<?php

include_once('model.php');

class control extends model
{
	
	function __construct()
	{
		model::__construct(); 

		$path=$_SERVER['PATH_INFO'];
		
		switch($path)
		{
			case '/':
			include_once('index.php');
			break;

			case '/index':
			include_once('index.php');
			break;
			
			case '/add_category':
			if(isset($_REQUEST['submit']))
			{
				$cate_name=$_REQUEST['cate_name'];
				
				$cate_img=$_FILES['cate_img']['name'];  // get only input type="file"
				$path='images/upload/'.$cate_img;   // PATH
				$tmp_image=$_FILES['cate_img']['tmp_name']; // GET DUPLICATE IMG
				move_uploaded_file($tmp_image,$path); // MOVE DUP IMG IN PATH
				
				$data=array("cate_name"=>$cate_name,"cate_img"=>$cate_img);
			
				$res=$this->insert('category',$data);

				if($res)
				{
					echo "<script> alert('Insert Success')</script>";
				}
				else
				{
					echo "FAILED";
				}
			}
			include_once('add_category.php');
			break;
			
			case '/edit_category':
			if(isset($_REQUEST['btncate_id']))
			{
				$cate_id=$_REQUEST['btncate_id'];
				$where=array('cate_id'=>$cate_id);
				$run=$this->select_where('category',$where);
				$fetch=$run->fetch_object();
				
				$old_file=$fetch->cate_img;
				
				if(isset($_REQUEST['submit']))
				{
					$cate_name=$_REQUEST['cate_name'];
					$cate_img=$_REQUEST['cate_img'];				
					
					$cate_img=$_FILES['cate_img']['name'];  // get only input type="file"
					$path='img/upload/category/'.$file;   // PATH
					$tmp_file=$_FILES['cate_img']['tmp_name']; // GET DUPLICATE IMG
					move_uploaded_file($tmp_file,$path); // MOVE DUP IMG IN PATH
					
					if($_FILES['cate_img']['size']>0)
					{
						$data=array("cate_name"=>$cate_name,"cate_img"=>$cate_img);
						$res=$this->update_where('category',$data,$where);
						if($res)
						{
							unlink('img/upload/category/'.$old_file); // if file get then old file delete
							echo "
							<script> alert('Update Success');
							window.location='profile';
							</script>";
						}
					}
					else
					{
						$data=array("cate_name"=>$cate_name);
						$res=$this->update_where('category',$data,$where);
						if($res)
						{
							echo "
							<script> alert('Update Success');
							window.location='profile';
							</script>";
						}
					}
					
				}
				
			}
			include_once('edit_category.php');
			break;

			case '/manage_category':
			$category_arr=$this->select('category');
			//print_r($category_arr);
			include_once('manage_category.php');
			break;
			
			case '/add_product':
			$category=$this->select('category');

			if(isset($_REQUEST['submit']))
			{
				$prod_name=$_REQUEST['prod_name'];
				$prod_mainprice=$_REQUEST['prod_mainprice'];
				$prod_discount=$_REQUEST['prod_discount'];
				$prod_description=$_REQUEST['prod_description'];
				
				$cate_id=$_REQUEST['cate_id'];

				$prod_img=$_FILES['prod_img']['name'];
				$path='images/upload/product/'.$prod_img;   
				$tmp_image=$_FILES['prod_img']['tmp_name']; 
				move_uploaded_file($tmp_image,$path);
				
				
				$data=array("prod_name"=>$prod_name,"prod_mainprice"=>$prod_mainprice, "prod_discount"=>$prod_discount, "prod_discount"=>$prod_discount, "prod_img"=>$prod_img, "prod_description"=>$prod_description, "cate_id"=>$cate_id);
			
				$res=$this->insert('product',$data);

				if($res)
				{
					echo "<script> alert('Insert Success')</script>";
				}
				else
				{
					echo "FAILED";
				}
			}
			include_once('add_product.php');
			break;
			
			case '/edit_product':
			$category=$this->select('category');

			if(isset($_REQUEST['btnprod_id']))
			{
				$prod_id=$_REQUEST['btnprod_id'];
				$where=array('prod_id'=>$prod_id);
				$run=$this->select_where('product',$where);
				$fetch=$run->fetch_object();
				
				$old_file=$fetch->prod_img;
				
				if(isset($_REQUEST['submit']))
				{
					$prod_name=$_REQUEST['prod_name'];
					$prod_mainprice=$_REQUEST['prod_mainprice'];
					$prod_discount=$_REQUEST['prod_discount'];
					$prod_description=$_REQUEST['prod_description'];
					$cate_id=$_REQUEST['cate_id'];			
					
					$prod_img=$_FILES['prod_img']['name'];
					$path='images/upload/product/'.$prod_img;   
					$tmp_image=$_FILES['prod_img']['tmp_name']; 
					move_uploaded_file($tmp_image,$path);
					
					if($_FILES['prod_img']['size']>0)
					{
						$data=array("prod_name"=>$prod_name,"prod_mainprice"=>$prod_mainprice, "prod_discount"=>$prod_discount, "prod_discount"=>$prod_discount, "prod_img"=>$prod_img, "prod_description"=>$prod_description, "cate_id"=>$cate_id);
						$res=$this->update_where('product',$data,$where);
						if($res)
						{
							unlink('images/upload/product/'.$old_file); // if file get then old file delete
							echo "
							<script> alert('Update Success');
							window.location='manage_product';
							</script>";
						}
					}
					else
					{
						$data=array("prod_name"=>$prod_name,"prod_mainprice"=>$prod_mainprice, "prod_discount"=>$prod_discount, "prod_discount"=>$prod_discount, "prod_description"=>$prod_description, "cate_id"=>$cate_id);
						$res=$this->update_where('product',$data,$where);
						if($res)
						{
							echo "
							<script> alert('Update Success');
							window.location='manage_product';
							</script>";
						}
					}
					
				}
				
			}
			include_once('edit_product.php');
			break;

			case '/manage_product':
			$product_arr=$this->select_join2('product','category','product.cate_id=category.cate_id');
			//print_r($product_arr);
			include_once('manage_product.php');
			break;

			case '/add_doctor':

			if(isset($_REQUEST['submit']))
			{
				$doc_name=$_REQUEST['doc_name'];
				$doc_speciality=$_REQUEST['doc_speciality'];
				$doc_mobile=$_REQUEST['doc_mobile'];
				$doc_email=$_REQUEST['doc_email'];
				$doc_address=$_REQUEST['doc_address'];		

				$doc_img=$_FILES['doc_img']['name'];
				$path='images/upload/doctor/'.$doc_img;   
				$tmp_image=$_FILES['doc_img']['tmp_name']; 
				move_uploaded_file($tmp_image,$path);

				$data=array("doc_name"=>$doc_name,"doc_speciality"=>$doc_speciality, "doc_mobile"=>$doc_mobile, "doc_email"=>$doc_email, "doc_address"=>$doc_address, "doc_img"=>$doc_img);
			
				$res=$this->insert('doctor',$data);

				if($res)
				{
					echo "<script> alert('Insert Success')</script>";
				}
				else
				{
					echo "FAILED";
				}
			}
			include_once('add_doctor.php');
			break;

			case '/edit_doctor':
			if(isset($_REQUEST['btndoc_id']))
			{
				$doc_id=$_REQUEST['btndoc_id'];
				$where=array('doc_id'=>$doc_id);
				$run=$this->select_where('doctor',$where);
				$fetch=$run->fetch_object();

				$old_file=$fetch->doc_img;
								
				if(isset($_REQUEST['submit']))
				{
					$doc_name=$_REQUEST['doc_name'];
					$doc_speciality=$_REQUEST['doc_speciality'];
					$doc_mobile=$_REQUEST['doc_mobile'];
					$doc_email=$_REQUEST['doc_email'];
					$doc_address=$_REQUEST['doc_address'];		
					
					$doc_img=$_FILES['doc_img']['name'];
					$path='images/upload/doctor/'.$doc_img;   
					$tmp_image=$_FILES['doc_img']['tmp_name']; 
					move_uploaded_file($tmp_image,$path);
					
					if($_FILES['doc_img']['size']>0)
					{
						$data=array("doc_name"=>$doc_name,"doc_speciality"=>$doc_speciality, "doc_mobile"=>$doc_mobile, "doc_email"=>$doc_email, "doc_address"=>$doc_address, "doc_img"=>$doc_img);
						$res=$this->update_where('doctor',$data,$where);
						if($res)
						{
							unlink('images/upload/doctor/'.$old_file); // if file get then old file delete
							echo "
							<script> alert('Update Success');
							window.location='manage_doctor';
							</script>";
						}
					}
					else
					{
						$data=array("doc_name"=>$doc_name,"doc_speciality"=>$doc_speciality, "doc_mobile"=>$doc_mobile, "doc_email"=>$doc_email, "doc_address"=>$doc_address);
						$res=$this->update_where('doctor',$data,$where);
						if($res)
						{
							echo "
							<script> alert('Update Success');
							window.location='manage_doctor';
							</script>";
						}
					}
					
				}
				
			}
			include_once('edit_doctor.php');
			break;
			
			case '/manage_doctor':
			$doctor_arr=$this->select('doctor');
			//print_r($doctor_arr);
			include_once('manage_doctor.php');
			break;
			
			case '/add_blog':
			if(isset($_REQUEST['submit']))
			{
				$title=$_REQUEST['title'];
				$description=$_REQUEST['description'];
					
				$image=$_FILES['image']['name'];
				$path='images/upload/blog/'.$image;   
				$tmp_image=$_FILES['image']['tmp_name']; 
				move_uploaded_file($tmp_image,$path);

				$data=array("title"=>$title,"description"=>$description,"image"=>$image);
			
				$res=$this->insert('blog',$data);

				if($res)
				{
					echo "<script> alert('Insert Success')</script>";
				}
				else
				{
					echo "FAILED";
				}
			}
			include_once('add_blog.php');
			break;
			
			case '/manage_blog':
			$blog_arr=$this->select('blog');
			//print_r($blog_arr);
			include_once('manage_blog.php');
			break;

			case '/edit_blog':
			if(isset($_REQUEST['btnblog_id']))
			{
				$blog_id=$_REQUEST['btnblog_id'];
				$where=array('blog_id'=>$blog_id);
				$run=$this->select_where('blog',$where);
				$fetch=$run->fetch_object();

				$old_file=$fetch->image;
								
				if(isset($_REQUEST['submit']))
				{ 
					$title=$_REQUEST['title'];
					$description=$_REQUEST['description'];
						
					$image=$_FILES['image']['name'];
					$path='images/upload/blog/'.$image;   
					$tmp_image=$_FILES['image']['tmp_name']; 
					move_uploaded_file($tmp_image,$path);
					
					if($_FILES['image']['size']>0)
					{
						$data=array("title"=>$title,"description"=>$description,"image"=>$image);
						$res=$this->update_where('blog',$data,$where);
						if($res)
						{
							unlink('images/upload/blog/'.$old_file);
							echo "
							<script> alert('Update Success');
							window.location='manage_blog';
							</script>";
						}
					}
					else
					{
						$data=array("title"=>$title,"description"=>$description);
						$res=$this->update_where('blog',$data,$where);
						if($res)
						{
							echo "
							<script> alert('Update Success');
							window.location='manage_blog';
							</script>";
						}
					}
					
				}
				
			}
			include_once('edit_blog.php');
			break;

			case '/manage_labtest':
			$labtest_arr=$this->select('labtest');
			//print_r($blog_arr);
			include_once('manage_labtest.php');
			break;


			case '/add_labtest':
			if(isset($_REQUEST['submit']))
			{
				$labtest_name=$_REQUEST['labtest_name'];
				$labtest_discription=$_REQUEST['labtest_discription'];
				$labtest_mainprice=$_REQUEST['labtest_mainprice'];
				$labtest_disprice=$_REQUEST['labtest_disprice'];

				$data=array("labtest_name"=>$labtest_name,"labtest_discription"=>$labtest_discription,"labtest_mainprice"=>$labtest_mainprice, "labtest_disprice"=>$labtest_disprice);
			
				$res=$this->insert('labtest',$data);

				if($res)
				{
					echo "<script> alert('Insert Success')</script>";
				}
				else
				{
					echo "FAILED";
				}
			}
			include_once('add_labtest.php');
			break;
			
			case '/edit_labtest':
			if(isset($_REQUEST['btnlabtest_id']))
			{
				$labtest_id=$_REQUEST['btnlabtest_id'];
				$where=array('labtest_id'=>$labtest_id);
				$run=$this->select_where('labtest',$where);
				$fetch=$run->fetch_object();
				
				
				if(isset($_REQUEST['submit']))
				{
					$labtest_name=$_REQUEST['labtest_name'];
					$labtest_discription=$_REQUEST['labtest_discription'];
					$labtest_mainprice=$_REQUEST['labtest_mainprice'];
					$labtest_disprice=$_REQUEST['labtest_disprice'];
									
					
						$data=array("labtest_name"=>$labtest_name, "labtest_discription"=>$labtest_discription, "labtest_mainprice"=>$labtest_mainprice, "labtest_disprice"=>$labtest_disprice);
						$res=$this->update_where('labtest',$data,$where);
						if($res)
						{
							echo "
							<script> alert('Update Success');
							window.location='manage_labtest';
							</script>";
						}
						else
						{
							echo "
							<script> alert('Update Failed');
							window.location='edit_labtest';
							</script>";
						}	
										
				}
				
			}
			include_once('edit_labtest.php');
			break;

			case '/customer_report':
			$customer_arr=$this->select('customer');
			//print_r($customer_arr);
			include_once('customer_report.php');
			break;

			case '/cart_report':
			$cart_arr=$this->select('cart');
			//print_r($cart_arr);
			include_once('cart_report.php');
			break;
			
			case '/order_report':
			$order_arr=$this->select('order');
			//print_r($order_arr);
			include_once('order_report.php');
			break;

			case '/labtest_report':
			$labtest_arr=$this->select('labtest');
			//print_r($labtest_arr);
			include_once('labtest_report.php');
			break;

			case '/contact_report':
			$contact_arr=$this->select('contact');
			//print_r($contact_arr);
			include_once('contact_report.php');
			break;

			case '/login':
			if(isset($_REQUEST['adminlogin']))
			{
				$email=$_REQUEST['email'];
				$password=$_REQUEST['password'];
				$enc_password=md5($password);
				
				$where=array("email"=>$email,"password"=>$enc_password);
				
				$run=$this->select_where('admin',$where);
				$chk=$run->num_rows; // all cond true or false by rows

				if($chk==1) // 1 means true
				{
					$fetch=$run->fetch_object(); //
					$admin_id=$fetch->admin_id;						
					//$name=$fetch->name;	
					
					//$_SESSION['admin_id']=$admin_id;
					//$_SESSION['name']=$name;
					//$_SESSION['email']=$email;
					echo "<script> alert('Login Successful'); 
					window.location='index';
					</script>";
					
				}
				else
				{
					echo "<script> alert('Login Failed'); 
					</script>";
				}
				
			}
			include_once('login.php');
			break;

			

			case '/register':
			if(isset($_REQUEST['adminsignup']))
			{
				$user_name=$_REQUEST['user_name'];
				$email=$_REQUEST['email'];
				$password=$_REQUEST['password'];
				$enc_password=md5($password);
							
				$data=array("user_name"=>$user_name,"email"=>$email,"password"=>$enc_password);
				
				
				$res=$this->insert('admin',$data);
				if($res)
				{
					echo "<script> alert('register Success')
					window.location='login';
					</script>";
				}
				else
				{
					echo "FAILED";
				}
			}
			include_once('register.php');
			break;
			
			case '/delete':
				
			if(isset($_REQUEST['delcate_id']))
			{
				$cate_id=$_REQUEST['delcate_id'];
				$where=array("cate_id"=>$cate_id);

				$run=$this->delete_where('category',$where);
				if($run)
				{
					echo "<script> alert('Delete Success'); 
					window.location='manage_category';
					</script>";
				}	
			}

			
			if(isset($_REQUEST['deldoc_id']))
			{
				$doc_id=$_REQUEST['deldoc_id'];
				$where=array("doc_id"=>$doc_id);

				$run=$this->delete_where('doctor',$where);
				if($run)
				{
					echo "<script> alert('Delete Success'); 
					window.location='manage_doctor';
					</script>";
				}	

			}

			if(isset($_REQUEST['delblog_id']))
			{
				$blog_id=$_REQUEST['delblog_id'];
				$where=array("blog_id"=>$blog_id);

				$run=$this->delete_where('blog',$where);
				if($run)
				{
					echo "<script> alert('Delete Success'); 
					window.location='manage_blog';
					</script>";
				}	

			}

			if(isset($_REQUEST['dellabtest_id']))
			{
				$labtest_id=$_REQUEST['labtest_id'];
				$where=array("labtest_id"=>$labtest_id);

				$run=$this->delete_where('labtest',$where);
				if($run)
				{
					echo "<script> alert('Delete Success'); 
					window.location='manage_labtest';
					</script>";
				}	

			}
			break;
			
			case '/adminlogout':
			
			break;	
		}
	}	
}
$obj=new control;
?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('pages/index');
	}
	public function contact()
	{
		$this->load->view('pages/contact');
	}
	public function about()
	{
		$this->load->view('pages/about');
	}
	public function gallery()
	{
		$this->load->view('pages/gallery');
	}
	public function send_feedback(){
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$mobile = $this->input->post('mobile');
		$message1 = $this->input->post('message');
		$from_email=$email;
		$message = '
			<p style="color:#698291; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 16px;font-family: Georgia, serif; ">
			Massege: <br>'.$message1.'
			</p>
			<hr>
			<p style="color:#698291; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 16px;font-family: Georgia, serif; ">
			Sender Information:
			</p>
			<p style="color:#767676; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 14px;font-family: Georgia, serif; ">
			Name: '.$name.'
			</p>
			<p style="color:#767676; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 14px;font-family: Georgia, serif; ">
			Mobile No: '.$mobile.'
			</p>
			<p style="color:#767676; font-weight: normal; margin: 0; padding: 0; line-height: 20px; font-size: 14px;font-family: Georgia, serif; ">
			Email: <a href="mailto:'.$email.'">'.$email.'</a>
			</p>
		';
		$recipient="info@snehbandhevents.com";
		$subject="Email From snehbandh website.";
		$header="MIME-Version: 1.0"."\r\n";
		$header.='content-type: text/html; charset=iso-8859-1'."\r\n";
		$header.='From:'.$from_email."\r\n".
						'Reply-To:'.$from_email."\r\n".
						'X-Mailer:PHP/'.phpversion();
		$send=mail($recipient, $subject, $message, $header);
		if($send){

			 $this->session->set_flashdata("email_msg","email_success");
		}
		else{
			$this->session->set_flashdata("email_msg","email_error");

		}
		header('location:'.base_url().'Contact');
	}
}

<?php
class Sys_change_passwd extends MY_Controller {
	/* Index */
	public function index(){
		$data['js'] = array('js/index/change_passwd.js');
		if($this->IsMobile) {
			$this->MyView('index/change_passwd_v_mo',$data);
		}else {
			$this->MyView('index/change_passwd_v',$data);
		}
	}
	/* ChangePasswd */
	public function changePasswd(){
		$this->load->model('sys_admin_m');
		echo $this->sys_admin_m->updatePasswd()?'{"status":"y"}':'{"status":"n"}';
	}
}
?>
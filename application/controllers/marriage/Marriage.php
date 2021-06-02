<?php class Marriage extends Admin_controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->data['meta_keyword'] = '';
        $this->data['meta_title'] = '';
        $this->data['meta_description'] = '';
        
        $where = [];
        if($_POST && is_array($_POST['search'])){
            foreach ($_POST['search'] as $key => $value) {
                if($value!=''){
                    $where[$key] = $value;
                }
            }
        }
        $this->data['all_record'] = readTable('marriage', $where);

        $this->load->view('admin/includes/header', $this->data);
        $this->load->view('admin/includes/aside', $this->data);
        $this->load->view('admin/includes/headermenu', $this->data);
        $this->load->view('admin/includes/nav', $this->data);
        $this->load->view('components/marriage/all', $this->data);
        $this->load->view('admin/includes/footer', $this->data);
    }

    public function add() {
        $this->data['meta_keyword'] = '';
        $this->data['meta_title'] = '';
        $this->data['meta_description'] = '';

        if($_POST){
        	$data 		   = $_POST;
            $data['date']  = date('Y-m-d');
    		$data['photo'] = uploadToWebp($_FILES['photo'], 'public/images/marriage/', time(), 520, null, 80);
    		save('marriage', $data);
    		set_msg('success', 'Record Successfully Saved');
    		redirect_back();
        }

        $this->load->view('admin/includes/header', $this->data);
        $this->load->view('admin/includes/aside', $this->data);
        $this->load->view('admin/includes/headermenu', $this->data);
        $this->load->view('admin/includes/nav', $this->data);
        $this->load->view('components/marriage/add', $this->data);
        $this->load->view('admin/includes/footer', $this->data);
    }

    public function edit($id) {
        $this->data['meta_keyword'] 	= '';
        $this->data['meta_title'] 		= '';
        $this->data['meta_description'] = '';

        $this->data['marriage'] 		= readTable('marriage', ['id'=>$id])[0];
        
        if($_POST){
        	$data = $_POST;
    		$path = uploadToWebp($_FILES['photo'], 'public/images/marriage/', time(), 520, null, 80);
            if($path){
                $data['photo'] = $path;
                if($_POST['old_photo']!='' && file_exists($_POST['old_photo'])){
                    unlink($_POST['old_photo']);
                }
            }
            unset($data['old_photo']);
            
    		update('marriage', $data, ['id'=>$id]);
    		set_msg('success', 'Record Successfully Updated');
    		redirect_back();
        }

        $this->load->view('admin/includes/header', $this->data);
        $this->load->view('admin/includes/aside', $this->data);
        $this->load->view('admin/includes/headermenu', $this->data);
        $this->load->view('admin/includes/nav', $this->data);
        $this->load->view('components/marriage/edit', $this->data);
        $this->load->view('admin/includes/footer', $this->data);
    }

    public function delete($id){
        $record = readTable('marriage', ['id'=>$id]);
        if($record && file_exists($record[0]->photo)){
            unlink($record[0]->photo);
        }
    	remove('marriage', ['id'=>$id]);
    	set_msg('success', 'Record Successfully Deleted');
    	redirect_back();
    }

    public function view($id){
        $this->data['meta_keyword']     = '';
        $this->data['meta_title']       = '';
        $this->data['meta_description'] = '';

        $this->data['record'] = readTable('marriage', ['id'=>$id])[0];

        $this->load->view('admin/includes/header', $this->data);
        $this->load->view('admin/includes/aside', $this->data);
        $this->load->view('admin/includes/headermenu', $this->data);
        $this->load->view('admin/includes/nav', $this->data);
        $this->load->view('components/marriage/view', $this->data);
        $this->load->view('admin/includes/footer', $this->data);
    }
}

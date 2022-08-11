<?php
namespace App\Controllers;
use App\Models\UserModel;
use App\Models\CommonModel;
class User extends BaseController
{
    public function __construct()
    {
        if (session("login")["user_name"] == ""){header("Location:" . base_url());exit();}
        if(session("login")["user_name"] == true && session("login")["login_status"] == "locked"){header("Location:" . base_url() . "/lock");exit();}
        $this->db = \Config\Database::connect();
        $this->users = $this->db->table("users");
        $this->role = $this->db->table("roles");
        $this->modules = $this->db->table("modules");
        $this->userModel = model('App\Models\UserModel');

    }
    /* USER START */
    public function userList()
    {
        $model = new CommonModel();
        if($model->rights('6')->allow_view==0){return redirect('no-rights');}
        $data["menu"] = "User";
        $data["submenu"] = "user";
        $data["title"] = "User list";
        $data["userList"] = $this->users->getWhere()->getResult();
        echo view("template/header", $data);
        echo view("user/user_list", $data);
        echo view("template/footer");
    }
    public function getUsers()
    {
    	$input = $this->request->getVar();
    	$model = new UserModel();
        $data = $model->getUsers($input);
        echo json_encode($data);
    }
    public function addUser()
    {
        $model = new CommonModel();
        if($model->rights('6')->allow_create==0){return redirect('no-rights');}
        $data['roles']=$this->role->getWhere(['role_status'=>'1','admin_role !='=>'1'])->getResult();
        echo view("user/model/add_user", $data);
    }
    public function editUser($id)
    {
        $model = new CommonModel();
        if($model->rights('6')->allow_edit==0){return redirect('no-rights');}
        $data["edit"] = $this->users->getWhere(["user_id" => $id])->getRow();
        $data['roles']=$this->role->getWhere(['role_status'=>'1','admin_role !='=>'1'])->getResult();
        echo view("user/model/edit_user", $data);
    }
    public function saveUser($id = 0)
    {
        $input = $this->request->getVar();
        $file = $this->request->getFile("photo");
        $newName = $file->getRandomName();
        if ($_FILES["photo"]["name"]) 
        {
            $file->move("uploads/user", $newName);
            $input["photo"] = $newName;
        }
        $model = new UserModel();
        $data = $model->saveUser($id, $input);
        echo json_encode($data);
    }
    public function deleteUser($id)
    {
        $model = new CommonModel();
        if($model->rights('6')->allow_delete==0){return redirect('no-rights');}
        $user_image = $this->users->getWhere(["user_id" => $id])->getRow()
            ->photo;
        $imgUrl = "./uploads/user/" . $user_image;
        if(file_exists($imgUrl) && $user_image != ""){unlink($imgUrl);}
        $data = $this->users->where(["user_id" => $id])->delete();
        echo json_encode($data);
    }
    public function deleteMultipleUser($id)
    {
        $user_image = $this->users->getWhere(["user_id" => $id])->getRow()
            ->photo;
        $imgUrl = "./uploads/user/" . $user_image;
        if(file_exists($imgUrl) && $user_image != ""){unlink($imgUrl);}
        $data = $this->users->where(["user_id" => $id])->delete();
        return $data;
    }
    public function updateUser()
    {
    	$input = $this->request->getVar();
		foreach($input['users'] as $row)
		{
			$data['status']=$input['action'];
			$result=$this->users->where('user_id',$row)->update($data);
		}
		echo json_encode($result);
    }
    public function userRole()
    {
        $request = $this->request;
        if ($request->getVar("name") == "") 
        {
            $data["menu"] = "User";
            $data["submenu"] = "userRole";
            $data["title"] = "User Role";
            $data['roles']=$this->role->getWhere()->getResult();
            echo view("template/header", $data);
            echo view("user/roles", $data);
            echo view("template/footer");
        } 
        else 
        {
            $result = $this->user->saveUserRole();
            redirect("user-role");
        }
    }
    public function addRole()
    {
        $data['modules']=$this->modules->getWhere(['status'=>'1'])->getResult();
        echo view("user/model/add_role", $data);
    }
    public function editRole($id)
    {
        $data["edit"] = $this->role->getWhere(["role_id" => $id])->getRow();
        $data['modules']=$this->modules->getWhere(['status'=>'1'])->getResult();
        echo view("user/model/edit_role", $data);
    }
    public function deleteRole($id)
    {
        $user=$this->users->getWhere(['role'=>$id])->getResult();
        if(count($user)>0){foreach($user as $row){$this->deleteMultipleUser($row->user_id);}}
        $data = $this->role->where(["role_id" => $id])->delete();
        echo json_encode($data);
    }
    public function saveRole($id = 0)
    {
        $input = $this->request->getVar();
        $model = new UserModel();
        $data = $model->saveRole($id, $input);
        echo json_encode($data);
    }
    public function profile()
	{
		$data['menu']='profile';
		$data['title']='profile';
		$data['user']=$this->users->getWhere(['user_id'=>session('login')['id']])->getRow();
		echo view('template/header',$data);
		echo view('user/profile',$data);
		echo view('template/footer');
	}
	public function saveProfile($user_id)
	{
		$input=$this->request->getVar();
		$file=$this->request->getFile('photo');
		$model = new UserModel();
		$data=$model->saveProfile($user_id,$input);
		echo json_encode($data);
	}
	public function changePassword($user_id)
	{
		$input=$this->request->getVar();
		$model = new UserModel();
		$data=$model->changePassword($user_id,$input);
		echo json_encode($data);
	}
	public function deleteImage($user_id)
	{
		$photo=$this->users->getWhere(['user_id'=>$user_id])->getRow()->photo;
		$imgUrl='./uploads/user/'.$photo;
		if(file_exists($imgUrl) && $photo!=''){unlink($imgUrl);}
		$input=array('photo'=>'');
		$result=$this->users->where('user_id',$user_id)->update($input);	
        $session=session('login');
        $session['photo']='';
        session()->set('login',$session);
		echo json_encode($result);
	}
    /* USER END */
}

<?php 
	//tao cac bien mac dinh
	$area = "frontend";
	$controller = "home";
	$action = "index";
	//lay cac bien truyen tu url/ nếu k có thì -> fontend: homeview
	$area = isset($_GET["area"]) ? $_GET["area"] : $area;
	$controller = isset($_GET["controller"]) ? $_GET["controller"] : $controller;
	$action = isset($_GET["action"]) ? $_GET["action"] : $action;
	//gắn đường dẫn để trở thành đường dẫn file controller
	$fileController = "controllers/$area/$controller"."Controller.php";
	//----------------------
	//include duong dan file controller -> load MVC
	if(file_exists($fileController)){
		include $fileController; 
		// lấy tên Class trong $fileController 
		$className = $controller."Controller";
		/*Ví dụ: "login" 
			- kiểm tra xem có class loginController hay k?
			- nếu có: - khởi tạo class đó (loginController)
					  - sau đó gọi hàm: login
			- ngược lại:  đưa ra thông báo
		*/
		if(class_exists($className)){
			//tao object cua class $fileController
			$obj = new $className();
			//goi ham trong class
			$obj->$action();
		}else{
			die("Class $className not exists!");
		}
	}
 ?>
<?php
class crud{
	public $conn;
	public function __construct()
	{
		$this->conn=new mysqli("localhost","root","","university");
		}
		public function insert($name,$email,$number,$address,$train1,$password,$job1)
		{
			$result=$this->conn->query("insert into user_train  set name='$name',
			email='$email',number='$number',address='$address',train1='$train1',
			password='$password',job1='$job1'");
			}
				public function login($name,$password)
				{
					$res=$this->conn->query("select * from user_info where name='$name'
					and password='$password'");
					if(mysqli_num_rows($res)==1)
					{
						return true;
						}
						else {
							return false;
							}
					}
					public function get_user($name,$table)
					{$result=$this->conn->query("select * from $table where name='$name'");
					  if(mysqli_num_rows($result)==1)
					{
						return true;
						}
						else {
							return false;
							}
						
						}
						public function insert2($name,$password,$table)
						{
							$res=$this->conn->query("insert into $table set name='$name',password='$password'");
							}
							public function detail($table,$name)
							{
								$result=$this->conn->query("select * from $table where name='$name'");
								return $result->fetch_all(MYSQLI_ASSOC);
								}
								public function get_choice($name,$table)
					{
						$result=$this->conn->query("select * from $table where name='$name'");
					return $result->fetch_all(MYSQLI_ASSOC);
						}
						public function get_all_art($table,$name)
						{
							$result=$this->conn->query("select * from $table where name='$name' order by id desc");
							return $result->fetch_all(MYSQLI_ASSOC);
							}
						public function article($id,$table)
						{
							$result=$this->conn->query("select * from $table where id='$id'");
							return $result->fetch_all(MYSQLI_ASSOC);
							}
							public function delete($name)
							{
								$this->conn->query("delete from user_train where name='$name'");
								
								}
								public function insert3($table,$username,$name,$title,$Content,$location)
								{$this->conn->query("insert into $table set username='$username',name='$name',title='$title',
								content='$Content',location='$location'"
								);
									}
									public function report($username)
									{
								    $result=$this->conn->query("insert into report set username='$username',report=1");
										}
										public function admin($name,$password)
				{
					$res=$this->conn->query("select * from admin where username='$name'
					and password='$password'");
					if(mysqli_num_rows($res)==1)
					{
						return true;
						}
						else {
							return false;
							}
					}
						public function report_admin()
									{
								    $result=$this->conn->query("select count(art_id) as rep,username,title,content from report group                                               by(username)");
								return $result->fetch_all(MYSQLI_ASSOC);
										}
						        public function logout(){
	                                        session_destroy();
	                                       return true;
                                               } 
											   public function admin_delete($table,$username)
											   {
												   $this->conn->query("delete from $table where username='$username'");
												   }
												   	public function admin_delete2($table,$name)
							{
								$this->conn->query("delete from $table where name='$name'");
								
								}
								public function report_art($title,$contant,$id,$username)
								{
									$this->conn->query("insert into report set title='$title',content='$contant',
									id='$id',username='$username',art_id=1;");
									}
									public function report_art_see()
									{$result=$this->conn->query("select id,title,username,count(art_id) as report
									 from report group by(content)");
										return $result->fetch_all(MYSQLI_ASSOC);
										}
										public function delete_art($content,$table)
										{
											$this->conn->query("delete from $table where content='$content'");
											}
												
												public function select_art_admin($con,$table)
										{
											$result=$this->conn->query("select * from $table where content='$con'");
											if(mysqli_num_rows($result)==1)
											{
												return true;
												}
												else{
													return false;
													}
											}
											public function select_art_admin2($con,$table)
										{
											$result=$this->conn->query("select * from $table where content='$con'");
											return $result->fetch_all(MYSQLI_ASSOC);
                                        }
										public function  delete_art_user420($id,$table)
										{
											$this->conn->query("delete from $table where id='$id'");
											}
											public function ping_read($id)
											{
												$result=$this->conn->query("select title,content,username from report where id='$id'");
												return $result->fetch_all(MYSQLI_ASSOC);
												}
							  
}
	$obj=new crud;
?>
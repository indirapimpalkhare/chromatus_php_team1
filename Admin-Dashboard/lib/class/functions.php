<?php
	//session_start();
	
		class functions
		{
			private $con;
			function __construct()
			{
				$this->con = new mysqli("localhost","root","","db_chromatus");
			
			}	
			//News Page Code Starts
			
			function add_news($news_title,$news_category,$news_metadesc,$news_desc,$news_permalink)
			{
				$date = date("Y-m-d");
		 
				if($stmt_insert = $this->con->prepare("INSERT INTO `news`(`title`, `category`, `metaDescription`, `description`, `permalink`, `date`) VALUES (?,?,?,?,?,?)"))
				{	
					$stmt_insert->bind_param("ssssss",$news_title,$news_category,$news_metadesc,$news_desc,$news_permalink,$date);
					 
					if($stmt_insert->execute())
					{
						return true;
					}
					return false;
				}
			}
			
			function fetch_news_records()
			{
				if($stmt_select = $this->con->prepare("SELECT `newsID`,`title`, `category`, `metaDescription`, `description`, `permalink`, `date` FROM `news` where `status` = 1"))
				{
					$stmt_select->bind_result($news_id,$news_title,$news_category,$news_metadesc,$news_desc,$news_permalink,$date);
					
					if($stmt_select->execute())
					{	
						$data = array();
						$counter	=	0;
						
						while($stmt_select->fetch())
						{
							$data[$counter][0] = $news_id;
							$data[$counter][1] = $news_title;  	
							$data[$counter][2] = $news_category;  	
							$data[$counter][3] = $news_metadesc;  	
							$data[$counter][4] = $news_desc;  	
							$data[$counter][5] = $news_permalink;  	
							$data[$counter][6] = $date;
	
							$counter++;
						}
						if(!empty($data))
						{
							return $data;
						}
						else
						{
							return false;
						}
					}
				}
			}
			function fetch_news_deleted_records()
			{
				if($stmt_select = $this->con->prepare("SELECT `newsID`,`title`, `category`, `metaDescription`, `description`, `permalink`, `date` FROM `news` where `status` = 0"))
				{
					$stmt_select->bind_result($news_id,$news_title,$news_category,$news_metadesc,$news_desc,$news_permalink,$date);
					
					if($stmt_select->execute())
					{	
						$data = array();
						$counter	=	0;
						
						while($stmt_select->fetch())
						{
							$data[$counter][0] = $news_id;
							$data[$counter][1] = $news_title;  	
							$data[$counter][2] = $news_category;  	
							$data[$counter][3] = $news_metadesc;  	
							$data[$counter][4] = $news_desc;  	
							$data[$counter][5] = $news_permalink;  	
							$data[$counter][6] = $date;
	
							$counter++;
						}
						if(!empty($data))
						{
							return $data;
						}
						else
						{
							return false;
						}
					}
				}
			}
			function delete_news_details_by_id($delete_id)
			{
				if($stmt_update = $this->con->prepare("UPDATE `news` SET `status` = 0 where `newsID` = ?"))
				{
					$stmt_update->bind_param("s",$delete_id);
					
					if($stmt_update->execute())
					{
					return true;
					}
					else
					{
					return false;
					}
				}
			}
			function permanent_delete_news_details_by_id($delete_id)
			{
				if($stmt_delete = $this->con->prepare("delete FROM `news` where `newsId` = ?"))
				{
					$stmt_delete->bind_param("i",$delete_id);
					
					if($stmt_delete->execute())
					{
						return false;
					}
				}
			}
			function restore_deleted_news_details_by_id($restore_id)
			{
				if($stmt_update = $this->con->prepare("UPDATE `news` SET `status` = 1 where `newsID` = ?"))
				{
					$stmt_update->bind_param("s",$restore_id);
					
					if($stmt_update->execute())
					{
					return true;
					}
					else
					{
					return false;
					}
				}
			}
			function add_news_category($news_category)
			{
				if($stmt_insert = $this->con->prepare("INSERT INTO `news_category`(`name`) VALUES (?)"))
				{	
					$stmt_insert->bind_param("s",$news_category);
					 
					if($stmt_insert->execute())
					{
						return true;
					}
					return false;
				}
			}
			function fetch_news_category()
			{
				if($stmt_select = $this->con->prepare("SELECT `newsCategoryID`,`name` FROM `news_category` where `status` = 1"))
				{
					$stmt_select->bind_result($category_id,$category_name);
					
					if($stmt_select->execute())
					{	
						$data = array();
						$counter	=	0;
						
						while($stmt_select->fetch())
						{
							$data[$counter][0] = $category_id;
							$data[$counter][1] = $category_name;  	
							$counter++;
						}
						if(!empty($data))
						{
							return $data;
						}
						else
						{
							return false;
						}
					}
				}
			}
			function fetch_news_deleted_category()
			{
				if($stmt_select = $this->con->prepare("SELECT `newsCategoryID`,`name` FROM `news_category` where `status` = 0"))
				{
					$stmt_select->bind_result($category_id,$category_name);
					
					if($stmt_select->execute())
					{	
						$data = array();
						$counter	=	0;
						
						while($stmt_select->fetch())
						{
							$data[$counter][0] = $category_id;
							$data[$counter][1] = $category_name;  	
							$counter++;
						}
						if(!empty($data))
						{
							return $data;
						}
						else
						{
							return false;
						}
					}
				}
			}
			function delete_news_category_by_id($delete_id)
			{
				if($stmt_update = $this->con->prepare("UPDATE `news_category` SET `status` = 0 where `newsCategoryID` = ?"))
				{
					$stmt_update->bind_param("s",$delete_id);
					
					if($stmt_update->execute())
					{
					return true;
					}
					else
					{
					return false;
					}
				}
			}

			
			function permanent_delete_news_category_by_id($delete_id)
			{
				if($stmt_delete = $this->con->prepare("delete FROM `news_category` where `newsCategoryID` = ?"))
				{
					$stmt_delete->bind_param("i",$delete_id);
					
					if($stmt_delete->execute())
					{
						return false;
					}
				}
			}
			
			function restore_deleted_news_category_by_id($restore_id)
			{
				if($stmt_update = $this->con->prepare("UPDATE `news_category` SET `status` = 1 where `newsCategoryID` = ?"))
				{
					$stmt_update->bind_param("s",$restore_id);
					
					if($stmt_update->execute())
					{
					return true;
					}
					else
					{
					return false;
					}
				}
			}
			//News Page Code Ends
			
			
			
		}	//class end
?>
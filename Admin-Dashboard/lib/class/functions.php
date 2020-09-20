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
				if($stmt_delete = $this->con->prepare("DELETE FROM `news_category` where `newsCategoryID` = ?"))
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
			function update_news_full_details_by_id($news_title,$news_category,$news_metadesc,$news_desc,$news_permalink,$news_id)
			{
				if($stmt_update = $this->con->prepare("UPDATE `news` SET `title`= ? ,`category`= ? ,`metaDescription`=  ? ,`description`= ? ,`permalink`=? where `newsID`= ? "))
				{
					$stmt_update->bind_param("ssssss",$news_title,$news_category,$news_metadesc,$news_desc,$news_permalink,$news_id);

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
			function update_news_category_by_id($category_name,$category_id)
			{
				if($stmt_update = $this->con->prepare("UPDATE `news_category` SET `name`= ? where `newsCategoryID`= ?"))
				{
					$stmt_update->bind_param("ss",$category_name,$category_id);

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
			function fetch_news_full_details_by_id($news_id)
			{
				if($stmt_select = $this->con->prepare("SELECT `newsID`,`title`, `category`, `metaDescription`, `description`, `permalink`, `date` FROM `news` where `newsID` = ?"))
				{
					$stmt_select->bind_param("s",$news_id);
					$stmt_select->bind_result($news_id,$news_title,$news_category,$news_metadesc,$news_desc,$news_permalink,$date);

					if($stmt_select->execute())
					{
						$data = array();


						while($stmt_select->fetch())
						{
							$data[0] = $news_id;
							$data[1] = $news_title;
							$data[2] = $news_category;
							$data[3] = $news_metadesc;
							$data[4] = $news_desc;
							$data[5] = $news_permalink;
							$data[6] = $date;

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
			function fetch_news_category_by_id($category_id)
			{
				if($stmt_select = $this->con->prepare("SELECT `name` FROM `news_category` where `newsCategoryID` = ?"))
				{
					$stmt_select->bind_param("s",$category_id);
					$stmt_select->bind_result($category_name);

					if($stmt_select->execute())
					{
						$data = array();


						while($stmt_select->fetch())
						{
							$data[0] = $category_name;
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
			//frontend code...
			function fetch_news_records_by_name($category)
			{
				if($stmt_select = $this->con->prepare("SELECT `newsID`,`title`, `category`, `metaDescription`, `description`, `permalink`, `date` FROM `news` where `status` = 1 AND category = ?"))
				{
					$stmt_select->bind_param("s",$category);
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
			//News Page Code Ends
			//Contact Us Code
			function set_contact($name,$email,$mobno,$companyname,$country,$position,$msg)
			{
				if($stmt_insert = $this->con->prepare("INSERT INTO `contact_uc`(`name`, `email`, `mobile`, `company`, `country`, `position`, `message`) VALUES (?,?,?,?,?,?,?)"))
				{
					$stmt_insert->bind_param("sssssss",$name,$email,$mobno,$companyname,$country,$position,$msg);

					if($stmt_insert->execute())
					{
						return true;
					}
					return false;
				}

			}

			function fetch_contact_details()
			{
				if($stmt_select = $this->con->prepare("SELECT`contactID`, `name`, `email`, `mobile`, `company`, `country`, `position`, `message`, `date` FROM `contact_uc` where `status` = 1"))
				{
					$stmt_select->bind_result($contact_id,$sender_name,$sender_email,$sender_mobile,$sender_company,$sender_country,$sender_position,$msg,$date);

					if($stmt_select->execute())
					{
						$data = array();
						$counter	=	0;

						while($stmt_select->fetch())
						{
							$data[$counter][0] = $contact_id;
							$data[$counter][1] = $sender_name;
							$data[$counter][2] = $sender_email;
							$data[$counter][3] = $sender_mobile;
							$data[$counter][4] = $sender_company;
							$data[$counter][5] = $sender_country;
							$data[$counter][6] = $sender_position;
							$data[$counter][7] = $msg;
							$data[$counter][8] = $date;

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
			function fetch_deleted_contact_details()
			{
				if($stmt_select = $this->con->prepare("SELECT`contactID`, `name`, `email`, `mobile`, `company`, `country`, `position`, `message`, `date` FROM `contact_uc` where `status` = 0"))
				{
					$stmt_select->bind_result($contact_id,$sender_name,$sender_email,$sender_mobile,$sender_company,$sender_country,$sender_position,$msg,$date);

					if($stmt_select->execute())
					{
						$data = array();
						$counter	=	0;

						while($stmt_select->fetch())
						{
							$data[$counter][0] = $contact_id;
							$data[$counter][1] = $sender_name;
							$data[$counter][2] = $sender_email;
							$data[$counter][3] = $sender_mobile;
							$data[$counter][4] = $sender_company;
							$data[$counter][5] = $sender_country;
							$data[$counter][6] = $sender_position;
							$data[$counter][7] = $msg;
							$data[$counter][8] = $date;

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
			function delete_mail_by_id($delete_id)
			{
				if($stmt_update = $this->con->prepare("UPDATE `contact_uc` SET `status` = 0 where `contactID` = ?"))
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


			function permanent_mail_by_id($delete_id)
			{
				if($stmt_delete = $this->con->prepare("DELETE FROM `contact_uc` where `contactID` = ?"))
				{
					$stmt_delete->bind_param("i",$delete_id);

					if($stmt_delete->execute())
					{
						return false;
					}
				}
			}

			function restore_deleted_mail_by_id($restore_id)
			{
				if($stmt_update = $this->con->prepare("UPDATE `contact_uc` SET `status` = 1 where `contactID` = ?"))
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

		//class end

		// ---- BLOGS FUNCTIONS ---- //
		function add_blog($blog_title,$blog_category,$blog_meta_desc,$blog_desc,$blog_image,$blog_permalink)
		{
			$date = date("Y-m-d");

			if($stmt_insert = $this->con->prepare("INSERT INTO `blog`(`title`,`category`,`metaDescription`,`description`,`dateAdded`,`dateModified`,`image`,`permalink`) VALUES (?,?,?,?,?,?,?,?)"))
			{
				$stmt_insert->bind_param("ssssssss",$blog_title,$blog_category,$blog_meta_desc,$blog_desc,$date,$date,$blog_image,$blog_permalink);

				if($stmt_insert->execute())
				{
					return true;
				}
				return false;
			}
		}

		function get_blogs()
		{
			if($stmt_select = $this->con->prepare("SELECT `blogID`,`title`,`category`,`metaDescription`,`description`,`dateAdded`,`dateModified`,`image`,`permalink`,`status` FROM `blog` WHERE `status` = 1"))
			{
				$stmt_select->bind_result($blogID,$blog_title,$blog_category,$blog_meta_desc,$blog_desc,$date_added, $datemod, $blog_image, $blog_permalink, $status);

				if($stmt_select->execute())
				{
					$data = array();
					$counter	=	0;

					while($stmt_select->fetch())
					{
						$data[$counter][0] = $blogID;
						$data[$counter][1] = $blog_title;
						$data[$counter][2] = $blog_category;
						$data[$counter][3] = $blog_meta_desc;
						$data[$counter][4] = $blog_desc;
						$data[$counter][5] = $date_added;
						$data[$counter][6] = $datemod;
						$data[$counter][7] = $blog_image;
						$data[$counter][8] = $blog_permalink;
						$data[$counter][9] = $status;

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


		function get_blog_deleted_records()
		{
			if($stmt_select = $this->con->prepare("SELECT `blogID`,`title`,`category`,`metaDescription`,`description`,`dateAdded`,`dateModified`,`image`,`permalink`,`status` FROM `blog` WHERE `status` = 0"))
			{
				$stmt_select->bind_result($blogID,$blog_title,$blog_category,$blog_meta_desc,$blog_desc,$date_added, $datemod, $blog_image, $blog_permalink, $status);

				if($stmt_select->execute())
				{
					$data = array();
					$counter	=	0;

					while($stmt_select->fetch())
					{
						$data[$counter][0] = $blogID;
						$data[$counter][1] = $blog_title;
						$data[$counter][2] = $blog_category;
						$data[$counter][3] = $blog_meta_desc;
						$data[$counter][4] = $blog_desc;
						$data[$counter][5] = $date_added;
						$data[$counter][6] = $datemod;
						$data[$counter][7] = $blog_image;
						$data[$counter][8] = $blog_permalink;
						$data[$counter][9] = $status;

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

		function delete_blog_details_by_id($delete_id)
		{
			if($stmt_update = $this->con->prepare("UPDATE `blog` SET `status` = 0 where `bID` log= ?"))
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
		function permanent_delete_blog_details_by_id($delete_id)
		{
			if($stmt_delete = $this->con->prepare("delete FROM `blo`g where `blog_ID` = ?"))
			{
				$stmt_delete->bind_param("i",$delete_id);

				if($stmt_delete->execute())
				{
					return false;
				}
			}
		}

		function restore_deleted_blog_details_by_id($restore_id)
		{
			if($stmt_update = $this->con->prepare("UPDATE `blog` SET `status` = 1 where `blogID` = ?"))
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

		function add_blog_category($blog_category, $image)
		{
			if($stmt_insert = $this->con->prepare("INSERT INTO `blog_category` (`name`, `image`) VALUES (?,?)"))
			{
				$stmt_insert->bind_param("ss",$blog_category,$image);

				if($stmt_insert->execute())
				{
					return true;
				}
				return false;
			}

		}


		function get_blog_categories()
		{
			if($stmt_select = $this->con->prepare("SELECT `blogCategoryID`,`name` FROM `blog_category` where `status` = 1"))
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

		function get_blog_deleted_category()
		{
			if($stmt_select = $this->con->prepare("SELECT `blogCategoryID`,`name` FROM `blog_category` where `status` = 0"))
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

		function delete_blog_category_by_id($delete_id)
		{
			if($stmt_update = $this->con->prepare("UPDATE `blog_category` SET `status` = 0 where `blogCategoryID` = ?"))
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


		function permanent_delete_blog_category_by_id($delete_id)
		{
			if($stmt_delete = $this->con->prepare("DELETE FROM `blog_category` where `blogCategoryID` = ?"))
			{
				$stmt_delete->bind_param("i",$delete_id);

				if($stmt_delete->execute())
				{
					return false;
				}
			}
		}

		function restore_deleted_blog_category_by_id($restore_id)
		{
			if($stmt_update = $this->con->prepare("UPDATE `blog_category` SET `status` = 1 where `blogCategoryID` = ?"))
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
		/*
		function update_news_full_details_by_id($news_title,$news_category,$news_metadesc,$news_desc,$news_permalink,$news_id)
		{
			if($stmt_update = $this->con->prepare("UPDATE `news` SET `title`= ? ,`category`= ? ,`metaDescription`=  ? ,`description`= ? ,`permalink`=? where `newsID`= ? "))
			{
				$stmt_update->bind_param("ssssss",$news_title,$news_category,$news_metadesc,$news_desc,$news_permalink,$news_id);

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
		function update_news_category_by_id($category_name,$category_id)
		{
			if($stmt_update = $this->con->prepare("UPDATE `news_category` SET `name`= ? where `newsCategoryID`= ?"))
			{
				$stmt_update->bind_param("ss",$category_name,$category_id);

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
		function fetch_news_full_details_by_id($news_id)
		{
			if($stmt_select = $this->con->prepare("SELECT `newsID`,`title`, `category`, `metaDescription`, `description`, `permalink`, `date` FROM `news` where `newsID` = ?"))
			{
				$stmt_select->bind_param("s",$news_id);
				$stmt_select->bind_result($news_id,$news_title,$news_category,$news_metadesc,$news_desc,$news_permalink,$date);

				if($stmt_select->execute())
				{
					$data = array();


					while($stmt_select->fetch())
					{
						$data[0] = $news_id;
						$data[1] = $news_title;
						$data[2] = $news_category;
						$data[3] = $news_metadesc;
						$data[4] = $news_desc;
						$data[5] = $news_permalink;
						$data[6] = $date;

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
		function fetch_news_category_by_id($category_id)
		{
			if($stmt_select = $this->con->prepare("SELECT `name` FROM `news_category` where `newsCategoryID` = ?"))
			{
				$stmt_select->bind_param("s",$category_id);
				$stmt_select->bind_result($category_name);

				if($stmt_select->execute())
				{
					$data = array();


					while($stmt_select->fetch())
					{
						$data[0] = $category_name;
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
		//frontend code...
		function fetch_news_records_by_name($category)
		{
			if($stmt_select = $this->con->prepare("SELECT `newsID`,`title`, `category`, `metaDescription`, `description`, `permalink`, `date` FROM `news` where `status` = 1 AND category = ?"))
			{
				$stmt_select->bind_param("s",$category);
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
		} */

		// ---- BLOGS END ---- //







// ---- PRESS RELEASE STARTS HERE ---- //



            function add_pr_category($pr_category)
			{
				if($stmt_insert = $this->con->prepare("INSERT INTO `pr_category`(`name`) VALUES (?)"))
				{
					$stmt_insert->bind_param("s",$pr_category);

					if($stmt_insert->execute())
					{
						return true;
					}
					return false;
				}
			}
			function fetch_pr_category()
			{
				if($stmt_select = $this->con->prepare("SELECT `prCategoryID`,`name` FROM `pr_category` where `status` = 1"))
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
			function fetch_pr_deleted_category()
			{
				if($stmt_select = $this->con->prepare("SELECT `prCategoryID`,`name` FROM `pr_category` where `status` = 0"))
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
			function delete_pr_category_by_id($delete_id)
			{
				if($stmt_update = $this->con->prepare("UPDATE `pr_category` SET `status` = 0 where `prCategoryID` = ?"))
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


			
            function update_pr_category_by_id($category_name,$category_id)
			{
				if($stmt_update = $this->con->prepare("UPDATE `pr_category` SET `name`= ? where `prCategoryID`= ?"))
				{
					$stmt_update->bind_param("ss",$category_name,$category_id);

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

            function fetch_pr_category_by_id($category_id)
			{
				if($stmt_select = $this->con->prepare("SELECT `name` FROM `pr_category` where `prCategoryID` = ?"))
				{
					$stmt_select->bind_param("s",$category_id);
					$stmt_select->bind_result($category_name);

					if($stmt_select->execute())
					{
						$data = array();


						while($stmt_select->fetch())
						{
							$data[0] = $category_name;
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

            function add_pr($pr_title,$pr_category,$pr_metadesc,$pr_desc,$pr_permalink)
			{
				$date = date("Y-m-d");
				if($stmt_insert = $this->con->prepare("INSERT INTO `press_release` (`title`, `category`, `metaDescription`, `description`, `permalink`, `dateAdded`) VALUES (?,?,?,?,?,?)"))
				{
					$stmt_insert->bind_param("ssssss",$pr_title,$pr_category,$pr_metadesc,$pr_desc,$pr_permalink,$date);
					if($stmt_insert->execute())
					{
						return true;
					}
					return false;

				}
			}
        // -------view------- //
            function fetch_pr_records()
			{
				if($stmt_select = $this->con->prepare("SELECT `prID`,`title`, `category`, `metaDescription`, `description`, `permalink`, `dateAdded` FROM `press_release` where `status` = 1"))
				{
					$stmt_select->bind_result($pr_id,$pr_title,$pr_category,$pr_metadesc,$pr_desc,$pr_permalink,$date);

					if($stmt_select->execute())
					{
						$data = array();
						$counter	=	0;

						while($stmt_select->fetch())
						{
							$data[$counter][0] = $pr_id;
							$data[$counter][1] = $pr_title;
							$data[$counter][2] = $pr_category;
							$data[$counter][3] = $pr_metadesc;
							$data[$counter][4] = $pr_desc;
							$data[$counter][5] = $pr_permalink;
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
            //-----------update-----------//
            
            function update_pr_full_details_by_id($pr_title,$pr_category,$pr_metadesc,$pr_desc,$pr_permalink,$pr_id)
			{
				if($stmt_update = $this->con->prepare("UPDATE `press_release` SET `title`= ? ,`category`= ? ,`metaDescription`=  ? ,`description`= ? ,`permalink`=? where `prID`= ? "))
				{
					$stmt_update->bind_param("ssssss",$pr_title,$pr_category,$pr_metadesc,$pr_desc,$pr_permalink,$pr_id);

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
            function fetch_pr_full_details_by_id($pr_id)
			{
				if($stmt_select = $this->con->prepare("SELECT `prID`,`title`, `category`, `metaDescription`, `description`, `permalink`, `dateAdded` FROM `press_release` where `prID` = ?"))
				{
					$stmt_select->bind_param("s",$pr_id);
					$stmt_select->bind_result($pr_id,$pr_title,$pr_category,$pr_metadesc,$pr_desc,$pr_permalink,$date);

					if($stmt_select->execute())
					{
						$data = array();


						while($stmt_select->fetch())
						{
							$data[0] = $pr_id;
							$data[1] = $pr_title;
							$data[2] = $pr_category;
							$data[3] = $pr_metadesc;
							$data[4] = $pr_desc;
							$data[5] = $pr_permalink;
							$data[6] = $date;

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
            
            //-----------soft delete-----------//

            function delete_pr_details_by_id($delete_id)
			{
				if($stmt_update = $this->con->prepare("UPDATE `press_release` SET `status` = 0 where `prID` = ?"))
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
            
            //-----------trash-----------//
            
			function fetch_pr_deleted_records()
			{
				if($stmt_select = $this->con->prepare("SELECT `prID`,`title`, `category`, `metaDescription`, `description`, `permalink`, `dateAdded` FROM `press_release` where `status` = 0"))
				{
					$stmt_select->bind_result($pr_id,$pr_title,$pr_category,$pr_metadesc,$pr_desc,$pr_permalink,$date);

					if($stmt_select->execute())
					{
						$data = array();
						$counter	=	0;

						while($stmt_select->fetch())
						{
							$data[$counter][0] = $pr_id;
							$data[$counter][1] = $pr_title;
							$data[$counter][2] = $pr_category;
							$data[$counter][3] = $pr_metadesc;
							$data[$counter][4] = $pr_desc;
							$data[$counter][5] = $pr_permalink;
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
			
			function permanent_delete_pr_details_by_id($delete_id)
			{
				if($stmt_delete = $this->con->prepare("delete FROM `press_release` where `prId` = ?"))
				{
					$stmt_delete->bind_param("i",$delete_id);

					if($stmt_delete->execute())
					{
						return false;
					}
				}
			}
			function restore_deleted_pr_details_by_id($restore_id)
			{
				if($stmt_update = $this->con->prepare("UPDATE `press_release` SET `status` = 1 where `prID` = ?"))
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
            
            function permanent_delete_pr_category_by_id($delete_id)
			{
				if($stmt_delete = $this->con->prepare("DELETE FROM `pr_category` where `prCategoryID` = ?"))
				{
					$stmt_delete->bind_param("i",$delete_id);

					if($stmt_delete->execute())
					{
						return false;
					}
				}
			}

			function restore_deleted_pr_category_by_id($restore_id)
			{
				if($stmt_update = $this->con->prepare("UPDATE `pr_category` SET `status` = 1 where `prCategoryID` = ?"))
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

            



/*	

			//frontend code...
        
			function fetch_news_records_by_name($category)
			{
				if($stmt_select = $this->con->prepare("SELECT `newsID`,`title`, `category`, `metaDescription`, `description`, `permalink`, `date` FROM `news` where `status` = 1 AND category = ?"))
				{
					$stmt_select->bind_param("s",$category);
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

*/



    // ---- Press release Ends here ----  //
}
?>

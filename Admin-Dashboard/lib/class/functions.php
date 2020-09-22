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
			if($stmt_update = $this->con->prepare("UPDATE `blog` SET `status` = 0 where `blogID` = ?"))
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
			if($stmt_delete = $this->con->prepare("DELETE FROM `blog` where `blogID` = ?"))
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

		function update_blog_full_details_by_id($blog_id,$blog_title,$blog_category,$blog_meta_desc,$blog_desc,$blog_image,$blog_permalink)
		{
			if($stmt_update = $this->con->prepare("UPDATE `blog` SET `title`= ? ,`category`= ? ,`metaDescription`=  ? ,`description`= ? ,`image` = ?, `permalink`=? where `blogID`= ? "))
			{
				$stmt_update->bind_param("sssssss",$blog_title,$blog_category,$blog_meta_desc,$blog_desc,$blog_image,$blog_permalink,$blog_id);

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
		function update_blog_category_by_id($category_name,$category_id)
		{
			if($stmt_update = $this->con->prepare("UPDATE `blog_category` SET `name`= ? where `blogCategoryID`= ?"))
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
		function fetch_blog_full_details_by_id($blog_id)
		{
			if($stmt_select = $this->con->prepare("SELECT `blogID`,`title`,`category`,`metaDescription`,`description`,`dateAdded`,`dateModified`,`image`,`permalink`,`status` FROM `blog` WHERE `blogID` = ?"))
			{
				$stmt_select->bind_param("s", $blog_id);

				$stmt_select->bind_result($blogID,$blog_title,$blog_category,$blog_meta_desc,$blog_desc,$date_added, $datemod, $blog_image, $blog_permalink, $status);

				if($stmt_select->execute())
				{
					$data = array();


					while($stmt_select->fetch())
					{
						$data[0] = $blogID;
						$data[1] = $blog_title;
						$data[2] = $blog_category;
						$data[3] = $blog_meta_desc;
						$data[4] = $blog_desc;
						$data[5] = $date_added;
						$data[6] = $datemod;
						$data[7] = $blog_image;
						$data[8] = $blog_permalink;
						$data[9] = $status;

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
		function fetch_blog_category_by_id($category_id)
		{
			if($stmt_select = $this->con->prepare("SELECT `name` FROM `blog_category` where `blogCategoryID` = ?"))
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

		// HOME //
		/*
		function fetch_latest__records_by_name($category)
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
		// ----- HOMEPAGE ---//
		//For display
		function get_all_carousel_images(){
			if($stmt_select = $this->con->prepare("SELECT `image`, `image_text` FROM `homepage` where `display` = 1 AND `status` = 1"))
			{
				$stmt_select->bind_result($image,$text);

				if($stmt_select->execute())
				{
					$data = array();
					$counter	=	0;

					while($stmt_select->fetch())
					{
						$data[$counter][0] = $image;
						$data[$counter][1] = $text;
						//$data[$counter][1] = $category_name;
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
		//dashboard view
		function get_all_image_details(){
			if($stmt_select = $this->con->prepare("SELECT `imageID`, `image`, `image_text`,`display` FROM `homepage` where `status` = 1"))
			{
				$stmt_select->bind_result($image_id, $image, $image_text, $display);

				if($stmt_select->execute())
				{
					$data = array();
					$counter	=	0;

					while($stmt_select->fetch())
					{
						$data[$counter][0] = $image_id;
						$data[$counter][1] = $image;
						$data[$counter][2] = $image_text;
						$data[$counter][3] = $display;
						//$data[$counter][1] = $category_name;
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

		function get_all_image_details_by_id($id){
			if($stmt_select = $this->con->prepare("SELECT `imageID`, `image`, `image_text` FROM `homepage` where `imageID` = ?"))
			{
				$stmt_select->bind_param("s",$id);
				$stmt_select->bind_result($image_id, $image, $image_text);

				if($stmt_select->execute())
				{
					$data = array();

					while($stmt_select->fetch())
					{
						$data[0] = $image_id;
						$data[1] = $image;
						$data[2] = $image_text;

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

		function get_all_trashed_image_details(){
			if($stmt_select = $this->con->prepare("SELECT `imageID`, `image`, `image_text`,`display` FROM `homepage` where `status` = 0"))
			{
				$stmt_select->bind_result($image_id, $image, $image_text, $display);

				if($stmt_select->execute())
				{
					$data = array();
					$counter	=	0;

					while($stmt_select->fetch())
					{
						$data[$counter][0] = $image_id;
						$data[$counter][1] = $image;
						$data[$counter][2] = $image_text;
						$data[$counter][3] = $display;
						//$data[$counter][1] = $category_name;
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

		function add_image($image, $image_text){
			if($stmt_insert = $this->con->prepare("INSERT INTO `homepage` (`image`, `image_text`) VALUES (?,?)"))
			{
				$stmt_insert->bind_param("ss",$image, $image_text);

				if($stmt_insert->execute())
				{
					return true;
				}
				return false;
			}
		}

		function soft_delete_image_by_id($image_id){
			if($stmt_update = $this->con->prepare("UPDATE `homepage` SET `status` = 0 where `imageID` = ?"))
			{
				$stmt_update->bind_param("s",$image_id);

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

		function permanent_delete_image_by_id($image_id){
			if($stmt_delete = $this->con->prepare("DELETE FROM `homepage` where `imageID` = ?"))
			{
				$stmt_delete->bind_param("i",$image_id);

				if($stmt_delete->execute())
				{
					return false;
				}
			}
		}

		function edit_image($image_id, $image, $image_text){
			if($stmt_update = $this->con->prepare("UPDATE `homepage` SET `image`= ?, `image_text` = ? where `imageID`= ?"))
			{
				$stmt_update->bind_param("sss", $image, $image_text,$image_id);

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

		function change_image_display($image_id, $display){

			if($stmt_update = $this->con->prepare("UPDATE `homepage` SET `display`= ? where `imageID`= ?"))
			{
				$stmt_update->bind_param("ss", $display, $image_id);

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

		function restore_image($image_id){
			if($stmt_update = $this->con->prepare("UPDATE `homepage` SET `status` = 1 where `imageID` = ?"))
			{
				$stmt_update->bind_param("s",$image_id);

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




// ---- PRESS RELEASE STARTS HERE ---- //

                                                //----- PR Category ------//

            //------ add ------//

            function add_pr_category($pr_category,$pr_category_image)
			{
				if($stmt_insert = $this->con->prepare("INSERT INTO `pr_category`(`name`,`image`) VALUES (?,?)"))
				{
					$stmt_insert->bind_param("ss",$pr_category,$pr_category_image);

					if($stmt_insert->execute())
					{
						return true;
					}
                    echo"false";
				}
			}
			function fetch_pr_category()
			{
				if($stmt_select = $this->con->prepare("SELECT `prCategoryID`,`name`,`image` FROM `pr_category` where `status` = 1"))
				{
					$stmt_select->bind_result($category_id,$category_name,$category_image);

					if($stmt_select->execute())
					{
						$data = array();
						$counter	=	0;

						while($stmt_select->fetch())
						{
							$data[$counter][0] = $category_id;
							$data[$counter][1] = $category_name;
                            $data[$counter][2] = $category_image;
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

            //-----Display-----//
			function fetch_pr_deleted_category()
			{
				if($stmt_select = $this->con->prepare("SELECT `prCategoryID`,`name`,`image` FROM `pr_category` where `status` = 0"))
				{
					$stmt_select->bind_result($category_id,$category_name,$category_image);

					if($stmt_select->execute())
					{
						$data = array();
						$counter	=	0;

						while($stmt_select->fetch())
						{
							$data[$counter][0] = $category_id;
							$data[$counter][1] = $category_name;
                            $data[$counter][2] = $category_image;
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

            //--------delete-----------//
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
				if($stmt_update = $this->con->prepare("UPDATE `pr_category` SET `name`= ?,`image`=? where `prCategoryID`= ?"))
				{
					$stmt_update->bind_param("sss",$category_name,$category_image,$category_id);

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
				if($stmt_select = $this->con->prepare("SELECT `name`,`image` FROM `pr_category` where `prCategoryID` = ?"))
				{
					$stmt_select->bind_param("s",$category_id);
					$stmt_select->bind_result($category_name,$category_image);

					if($stmt_select->execute())
					{
						$data = array();


						while($stmt_select->fetch())
						{
							$data[0] = $category_name;
                            $data[1] = $category_image;
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

                                                        //------PR Details--------//

            //------------add-----------//  //done-1
            function add_pr($pr_title,$pr_author,$pr_category,$pr_metadesc,$pr_desc,$pr_image,$pr_permalink)
			{
				$date = date("Y-m-d");
				if($stmt_insert = $this->con->prepare("INSERT INTO `press_release` (`title`,`author`, `category`, `metaDescription`, `description`, `image`,`permalink`, `dateAdded`) VALUES (?,?,?,?,?,?,?,?)"))
				{
					$stmt_insert->bind_param("ssssssss",$pr_title,$pr_author,$pr_category,$pr_metadesc,$pr_desc,$pr_image,$pr_permalink,$date);
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
				if($stmt_select = $this->con->prepare("SELECT `prID`,`title`,`author`, `category`, `metaDescription`, `description`,`image`, `permalink`, `dateAdded`,`dateModified`,`status` FROM `press_release` where `status` = 1"))
				{
					$stmt_select->bind_result($pr_id,$pr_title,$pr_author,$pr_category,$pr_metadesc,$pr_desc,$pr_image,$pr_permalink,$date_added,$date_modified,$status);

					if($stmt_select->execute())
					{
						$data = array();
						$counter	=	0;

						while($stmt_select->fetch())
						{
							$data[$counter][0] = $pr_id;
							$data[$counter][1] = $pr_title;
                            $data[$counter][2] = $pr_author;
							$data[$counter][3] = $pr_category;
							$data[$counter][4] = $pr_metadesc;
							$data[$counter][5] = $pr_desc;
                            $data[$counter][6] = $pr_image;
							$data[$counter][7] = $pr_permalink;
                            $data[$counter][8] = $date_added;
                            $data[$counter][9] = $date_modified;
							$data[$counter][10] = $status;

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
            //-----------update-----------// //done-1

            function update_pr_full_details_by_id($pr_title,$pr_author,$pr_category,$pr_metadesc,$pr_desc,$pr_image,$pr_permalink,$pr_id)
			{
				if($stmt_update = $this->con->prepare("UPDATE `press_release` SET `title`= ? ,`author`=?,`category`= ? ,`metaDescription`=  ? ,`description`= ? ,`image` = ?,`permalink`=? where `prID`= ? "))
				{
					$stmt_update->bind_param("ssssssss",$pr_title,$pr_author,$pr_category,$pr_metadesc,$pr_desc,$pr_permalink,$pr_image,$pr_id);

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
            //done-1
            function fetch_pr_full_details_by_id($pr_id)
			{
				if($stmt_select = $this->con->prepare("SELECT `prID`,`title`,`author`, `category`, `metaDescription`, `description`,`image`, `permalink`, `dateAdded`,`dateModified`,`status` FROM `press_release` where `prID` = ?"))
				{
					$stmt_select->bind_param("s",$pr_id);
					$stmt_select->bind_result($pr_id,$pr_title,$pr_author,$pr_category,$pr_metadesc,$pr_desc,$pr_image,$pr_permalink,$date_added,$date_modified,$status);

					if($stmt_select->execute())
					{
						$data = array();


						while($stmt_select->fetch())
						{
							$data[0] = $pr_id;
							$data[1] = $pr_title;
                            $data[2] = $pr_author;
							$data[3] = $pr_category;
							$data[4] = $pr_metadesc;
							$data[5] = $pr_desc;
                            $data[6] = $pr_image;
							$data[7] = $pr_permalink;
							$data[8] = $date_added;
                            $data[9] = $date_modified;
                            $data[10] = $status;

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

            //----done-2----//
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

            //---done-1---//
			function fetch_pr_deleted_records()
			{
				if($stmt_select = $this->con->prepare("SELECT `prID`,`title`,`author`, `category`, `metaDescription`, `description`,`image`, `permalink`, `dateAdded`,`dateModified`,`status` FROM `press_release` where `status` = 0"))
				{
					$stmt_select->bind_result($pr_id,$pr_title,$pr_author,$pr_category,$pr_metadesc,$pr_desc,$pr_image,$pr_permalink,$date_added,$date_modified,$status);

					if($stmt_select->execute())
					{
						$data = array();
						$counter	=	0;

						while($stmt_select->fetch())
						{
							$data[$counter][0] = $pr_id;
							$data[$counter][1] = $pr_title;
                            $data[$counter][2] = $pr_author;
							$data[$counter][3] = $pr_category;
							$data[$counter][4] = $pr_metadesc;
							$data[$counter][5] = $pr_desc;
                            $data[$counter][6] = $pr_image;
							$data[$counter][7] = $pr_permalink;
                            $data[$counter][8] = $date_added;
                            $data[$counter][9] = $date_modified;
							$data[$counter][10] = $status;

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
            //----done-2----//
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
            //-----done-2----//
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
            //----done-2-----//
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

            //---done-2-----//
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

<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $con = mysqli_connect($host,$user,$pass);
    if (!$con)
      {
      die('Could not connect: ' . mysqli_error());
      }
   if (mysqli_query($con,"CREATE DATABASE onlineshoppingdb"))
           {  
            echo "Database has been created!<br /><br/>";  
           }
    else
    {
     echo "Error creating database: " . mysqli_error();
     }
   
   
    mysqli_select_db($con,"onlineshoppingdb");
    $query = "CREATE TABLE usertb (
                  uid INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
				  username VARCHAR (50) NOT NULL,
				  email VARCHAR (50) NOT NULL ,
				  password VARCHAR (50) NOT NULL,                   
				  country VARCHAR (50) NOT NULL ,  
				  phoneno VARCHAR (50) NOT NULL ,     
                  gender VARCHAR (50) NOT NULL
				  )";
        $result = mysqli_query($con,$query);
		if(!$result) 
                echo "usertb table creation error <br />";
        else 
                echo "usertb table is created successfully!<br /><br/>"; 
		//to create brandtb
		
		$query = "CREATE TABLE brandtb (
                  brandid INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,                 
				  branddescription VARCHAR (100) NOT NULL
				  
				  )";
        $result = mysqli_query($con,$query);
		if(!$result) 
                echo "usertb table creation error <br />";
        else 
                echo "usertb table is created successfully!<br /><br/>"; 
		//to create categorytb
		
		$query = "CREATE TABLE categorytb (
                  categoryid INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                  categorydescription VARCHAR(50) NOT NULL
				  )";
        $result = mysqli_query($con,$query);
		
		//to create itemtb
		
		$query = "CREATE TABLE itemtb (
                  itemid INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                  brandid INT(20) NOT NULL,
				  categoryid INT(20) NOT NULL,
				  price INT(20) NOT NULL,
				  image VARCHAR(50) NOT NULL,
			      description VARCHAR(50) NOT NULL 
				  )";
        $result = mysqli_query($con,$query);	
		
		if(!$result) 
                echo "itemtb table creation error <br />";
        else 
                echo "itemtb table is created successfully!<br /><br/>"; 
				  //Usertb 
                 $str="INSERT INTO
				Usertb(username,email,password,country,phoneno,gender) 	VALUES('john','john@gmail.com','john','Myanmar','0943321113','male')";
									  
	 $result = mysqli_query($con,$str);
		  //brandtb 
                 $str="INSERT INTO brandtb(branddescription) 
					   VALUES('Dell'),('Lenovo'),('Acer'),('Hp')";
        $result = mysqli_query($con,$str);
		
		 //categorytb
                 $str="INSERT INTO categorytb(categorydescription) 
					   VALUES('i3'),('i5'),('i7')";
        $result = mysqli_query($con,$str);
		
		 //itemtb
                 $str="INSERT INTO
				   itemtb(brandid,categoryid,price,image,description) 
					   VALUES(1,1,450,'dell.jpg','Dell i3 brand'),
					   (1,2,500,'dell1.jpg','Dell i5 brand'),
					   (1,3,600,'dell2.jpg','Dell i7 brand.'),
					   (2,1,400,'lenovo.jpg','Lenovo i3 brand.'),
					   (3,1,400,'acer1.jpg','Acer i3 brand.'),
					   (3,2,500,'acer2.jpg','Acer i5 brand.'),
					   (3,3,600,'acer3.jpg','Acer i7 brand.'),
					   (4,2,600,'hp1.jpg','Hp i5 brand.'),
					   (4,3,700,'hp2.jpg','Hp i7 brand.'),
					   (4,2,580,'hp3.jpg','Hp i5 brand.'),
					   (4,3,620,'hp4.jpg','Hp i7 brand.')";
					   
        $result = mysqli_query($con,$str);
		
        if(!$result) 
                echo mysqli_error() . "<br />";
        else 
                echo "insertion is ok <br /><br/>";
                                                     
    mysqli_close($con);  

?>



<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Nunito" />

    <link rel="stylesheet" href="index.css" />
    <meta charset="utf-8" />
    <title></title>
</head>
<body>
    
    <div id="div2">
    <?php
        // require ('header.php');
    ?>
        <div id="header">
            <div id="icon">
                <!-- <a href="">
                    <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" fill="black" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12 3C12.5523 3 13 3.44772 13 4V5.07089C16.0657 5.5094 18.4906 7.93431 18.9291 11H20C20.5523 11 21 11.4477 21 12C21 12.5523 20.5523 13 20 13H18.9291C18.4906 16.0657 16.0657 18.4906 13 18.9291V20C13 20.5523 12.5523 21 12 21C11.4477 21 11 20.5523 11 20V18.9291C7.93431 18.4906 5.5094 16.0657 5.07089 13H4C3.44772 13 3 12.5523 3 12C3 11.4477 3.44772 11 4 11H5.07089C5.5094 7.93431 7.93431 5.5094 11 5.07089V4C11 3.44772 11.4477 3 12 3ZM7 12C7 9.23858 9.23858 7 12 7C14.7614 7 17 9.23858 17 12C17 14.7614 14.7614 17 12 17C9.23858 17 7 14.7614 7 12Z" fill="black" />
                    </svg>

                </a> -->
            </div>
            <div id="heading">
                <p>Welcome</p>

            </div>

        </div>
        <div id="form">
            <form autocomplete="off" novalidate method="post" action="">
                <div class="form1">
                    <div id="username" class="form2">
                        <label for="username">Username</label> <br />
                        <input type="text" class="formclass" name="username" />
                    </div>
                    <div id="userpassword" class="form2">
                        <label for="userpassword">Password</label><br />
                        <input type="password" class="formclass" name="userpassword"/>
                    </div>
                </div>
                <?php
                require ('db_conn.php');
                
               
                if(isset($_POST['signin']))
                {
                    $username = $_POST['username'];
                    $userpassword = $_POST['userpassword'];
                    $sql = "SELECT * FROM `users`";
                    $sql_run = $conn->query($sql);
                    while($quantity = $sql_run->fetch(PDO::FETCH_OBJ))
                    {
                        if ($quantity->user_name == $username && $quantity->user_password == $userpassword)
                        {
                                header("Location:./dashboard.php");
                            
                        }
                    }
                        echo'
                        <div class="form1">
                   
                            <div id="itemtype" class="form2">
                                <label for="itemtype">Price</label><br />
                                <p class="formclass"> Wrong Login Details </p>
                            </div>
                        </div>
                        ';
                    
                }
                    
               
                
                // $sql_run = $conn->query($sql);

                // if($sql_run)
                // {
                // while($quantity = $sql_run->fetch(PDO::FETCH_OBJ))
                // echo'
               
                // <div class="form1">
                //     <div id="itemname" class="form2">
                //         <label for="itemtype">Item Name</label><br />
                //         <p class="formclass"> '.$quantity->item_name.' </p>
                //     </div>
                // </div>
                // ';
                // }
                // }
                ?>


                <div class="form1">
                    <div class="form2">
                        <button type="submit" id="submit" class="formclass" name="signin">Sign In</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>



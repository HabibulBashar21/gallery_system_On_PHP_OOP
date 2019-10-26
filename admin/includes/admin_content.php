<?php require_once("user.php");?>
 <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Admin 
                            <small>Subheading</small>
                        </h1>

                        <?php
           
                         //  $user = new User();

                         // $user->username = "aaroho";
                         // $user->password = "aaroho21";
                         // $user->first_name = "aaaaro";
                         // $user->last_name= "hoooo";

                         // $user->create();


                        // $user = User::find_by_id(5);

                        // echo $user->username;


                         $photo = Photo::find_by_id(4);

                        echo $photo->filename;


                        // $user = User::find_user_by_id(5);
                        // $user->username = "bashar21";
                        // $user->password = "4321";
                        // $user->first_name = "habibul";
                        // $user->last_name = "bashar";
                        // $user->update();


                         // $user = User::find_user_by_id(7);
                         // $user->delete();


                        // $user = User::find_by_id(7);
                        // $user->password = "justpassword";
                        // $user->save();


                         // $user = new User();
                         // $user->username = "NEW USER";
                         // $user->save();



                        // $users = User::find_all();

                        // foreach($users as $user){
                        //   echo $user->username;
                        // }


                        // $photos = Photo::find_all();

                        // foreach($photos as $photo){
                        //   echo $photo->title;
                        // }



                         //  $photo = new Photo();

                         // $photo->title = "just some test title";
                         // $photo->size = 20;
                        
                         // $photo->create();

                        






                        ?>

                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
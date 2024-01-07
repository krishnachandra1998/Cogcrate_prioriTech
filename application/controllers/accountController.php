<?php

class accountController extends framework {


    public function __construct(){

      if(!isset($_SESSION) && session_status() != PHP_SESSION_ACTIVE && session_id() === "")
      {
        session_start();

      }

        $this->helper("link");
        $this->accountModel = $this->model('accountModel');
        
    }

    public function index(){

      if($this->getSession('mobile_number'))
      {
        $this->home_page();
      }
      else{
        $this->view("login");

      }

    }

    public function home_page(){
      $this->view("home_page");
    }

    public function loginForm(){
        $this->view("login");
    }

    public function about_us(){
      $this->view("about_us");
    }

    public function introduction(){
      $this->view("introduction");
    }

    public function overview(){
      $this->view("overview");
    }

    





//........................Login Check Funtion................................    

    public function login_check()
    {

      if (isset($_POST['submit'])) {

            //....capture login date and time..........
            $login_date = date("Y-m-d");
            $login_time = date("H:i:s");
            $logout_date = 'none';
            $logout_time = 'none';

            //.....checking if asd value is empty the set default value to no......
            if(isset($_POST['asd']))
            {
              $asd = 'yes';
            }
            else
            {
              $asd = 'no';
            }

            //.......all form data........

                $formData = [
  
                    'name'          => strtolower($this->input('name')),
                    'age'           => $this->input('age'),
                    'gender'        => $this->input('gender'),
                    'mobile_number' => $this->input('mobile_number'),
                    'asd'           => $asd,
                    ];

                $data = [$formData['name'], $formData['age'], $formData['gender'], $formData['mobile_number'], $formData['asd']];

                 $mobile_number = $formData['mobile_number']; //....array to single string value.....

            //.................DB Qureies.......................................................
            $check_for_mobile_number_in_registration = $this->accountModel->userLogin($mobile_number);
            

            if($check_for_mobile_number_in_registration['status'] == "Mobile_Number_Not_Found") //.....check mobile number in registeration table.....
            {

              $create_new_account = $this->accountModel->createNewAccount($data); //..............new account created when mobile number not found in registeration table.......

              if($create_new_account == true) //........when new account created successfull........
              {

                $login_data_entry = $this->accountModel->ldf_data_inserted($mobile_number, $login_date, $login_time, $logout_date, $logout_time); //......data entered in login table

                //..... this if - else is for checking logging data is successfully entered ........
                if($login_data_entry == true) //......when data is entered in login table successfully.....
                {
              

                  ///.......checking if any session is active or not.....
                  if(session_status() == PHP_SESSION_ACTIVE) //.......checking for any active session.....
                  { 
                    
                    //echo "<hr>Session is active<hr>"; 

                     //.............................................................SESSION MANAGAEMENT................................................//////
                    
                     $checking_logout_value_of_new_registered_user = $this->accountModel->check_User_Logout($mobile_number,$logout_date,$logout_time); //...checking current user login and getting row id......
                    if($checking_logout_value_of_new_registered_user['logout_date'] == 'none' && $checking_logout_value_of_new_registered_user['logout_time'] == 'none')
                     {
                      //.....store row id and user unique id........
                      $this->setSession('login_row_id',$checking_logout_value_of_new_registered_user['login_row_id']);
                      $this->setSession('mobile_number',$mobile_number);

                          //echo "<br>LOC:129: <br>";  print_r($_SESSION); die("<br> die for login row id");


                      //.......checking again if the session is active or not ......

                            if(session_status() !== PHP_SESSION_ACTIVE) //.......checking for any active session.....
                            {
                              //echo "Session is still not active after getting login row id : ";
                              $this->view('login');

                            }
                            else{
                             // echo "Session is now active after getting login row id : ";
                              header("Location: home_page");
                              exit();

                            }
 
                     }//......else part - if the data not matched in login table with given details then.....
                     else{

                      //echo "User is not login - or login data not found for current user : ";
                      $this->view('login');
 
                     }
 
 

                  }//.......else part to check is the session is active .......
                  else{
                    //echo "<hr>Session is not active - line number 155<hr>";
                   
                    $this->redirect('accountController/index');
                    exit();

                  }

                }
                else{

                  //echo "Account Created and Login Data not inserted<hr>";
                  $this->view('login');
                }

              }//......if new account is created successfully then login - if part
              
              else//... if new account is created successfully then throw error - else part
              {

                $login_data_entry = $this->accountModel->ldf_data_inserted($mobile_number, $login_date, $login_time, $logout_date, $logout_time);

                  //..... this if - else is for checking logging data is successfully entered ........
                  if($login_data_entry == true)
                  {
                
                    $this->setSession("mobile_number",$mobile_number);
                   // echo "<br>LOC:185: <br>";  print_r($_SESSION); die("<br> khatam");
                   //echo "Account not Created and Login Data inserted<hr>";
                    header("Location: home_page");
                    exit();
  
                  }
                  else{
                    //echo "Account not Created and Login Data not inserted<hr>";
                    $this->view('login');
                  }
               
              }

            } //......checking mobile number with status Mobile_Number_Not_Found if condition.....
            
            else
            { //....checking mobile number with status Mobile_Number_Found else part....

            //.....fecth logout value fomr login table for given mobile_number.......

            //die("Khatam");

              $logout_value_of_current_user = $this->accountModel->check_User_Logout($mobile_number,$logout_date,$logout_time);
             
              if($logout_value_of_current_user['logout_date'] == 'none' && $logout_value_of_current_user['logout_time'] == 'none')
              {
                
                 $this->setSession('login_row_id',$logout_value_of_current_user['login_row_id']);

                // echo "<br>LOC:214: <br>";  print_r($_SESSION); die("Katai Zeher");
                //....enter logout data of that login user ........

                $logout_date = date("Y-m-d");
                $logout_time = date("H:i:s");
                $logout_data_enter = $this->accountModel->addLogoutDateTime($logout_date, $logout_time,$mobile_number,$logout_value_of_current_user['login_row_id']);

                      if($logout_data_enter == true)
                      {

                        //die("Die at Logout Time");
                        $this->destroy();
                        if(session_status() !== PHP_SESSION_ACTIVE)
                          {
                            //echo "session is destroyed : ";
                          // echo $row_id;    
                            $this->view('login');
                        
                          }
                          else{
                            //echo "session is still active : ";
                            //echo $row_id;    
                                      
                              header("Location: home_page");
                              exit();
                         }
                         ///............end of logout old user ..............

                        }
                        else{
                          echo "<br>No able to logout";
                        }


              }
              else
              {
                $login_data_entry = $this->accountModel->ldf_data_inserted($mobile_number, $login_date, $login_time, $logout_date, $logout_time);
                if($login_data_entry == true)
                {

                $checking_logout_value_for_old_user_new_login_user = $this->accountModel->check_User_Logout($mobile_number,$logout_date,$logout_time); 

                  if($checking_logout_value_for_old_user_new_login_user['status'] == 'Logout_Data_Not_Found')
                  {
                    $this->setSession('login_row_id',$checking_logout_value_for_old_user_new_login_user['login_row_id']);
                    $this->setSession('mobile_number',$mobile_number);
                    header("Location: home_page");
                    
                  }
                  else{
                    header("Location: home_page");
                    exit();
                  }

                }
                else{
                
                  $this->view('login');
                }
              
              }
            }

      }//.....end of if isset submit for all data .........
      else //.......else of if isset submit of  all data ........
      {

        $this->view('login');

      }




    }//......end of login_check function ()...........


//........................End of Login Check Funtion.........................

//.......logout function.....

  public function logout()
  {

    //....set up logout data......

    $logout_date = date("Y-m-d");
    $logout_time = date("H:i:s");
    $mobile_number = $this->getSession('mobile_number');
    //$mobile_number = '8178915459';
    $row_id = $this->getSession('login_row_id');
   // $row_id = 9;
    echo "MN of Login user : ".$mobile_number." and Row id - ".$row_id."<hr>";
    print_r($_SESSION);
    //die("<hr>die at 316 in logout function");
    //..... enter logout data into the table .......where the mobile number is session mobile number and row id matched with logout date and time values are none.....
    $logout_data_enter = $this->accountModel->addLogoutDateTime($logout_date, $logout_time,$mobile_number,$row_id);

    if($logout_data_enter == true)
    {

      //die("Die at Logout Time");
      $this->destroy();
       if(session_status() !== PHP_SESSION_ACTIVE)
        {
          //echo "session is destroyed : ";
         // echo $row_id;    
          $this->redirect('accountController/index');
         
      
        }
        else{
          //echo "session is still active : ";
          //echo $row_id;    
         $this->view('home_page');
      
        }
      
   

    }
    else{

      echo "Not Logout Go Back";
      die("die at logout function at line number 370");
    }


  }



}


?>
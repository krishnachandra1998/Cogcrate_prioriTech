<?php 

class activityController extends framework {

    public function __construct()
    {
     
     
       $this->helper("link");
       $this->activityModel = $this->model("activityModel"); 
    }

    //--------trial page routs----------------------------------------
    public function trial_page(){

        $this->view("trial_page");
    
    }

    public function trial_activity1(){

        $this->view("trial_activity1");
    
    }
    public function trial_activity5(){

        $this->view("trial_activity5");
    
    }
    public function trial_activity8(){

        $this->view("trial_activity8");
    
    }
    public function trial_activity11(){

        $this->view("trial_activity11");
    
    }

    public function trial_forms()
    {
        //......its a trial from, its for practice, so on submit do nothing just redirect to trial page.....
        $this->view('trial_page');
    }

    //----------------end of trial page routs-------------------------

    public function test_page(){

        $this->view("test_page");
    
    }

    public function memory_inventory(){

        $this->view('memory_inventory');

    }

    public function ac_1_memory_inventory_redirector(){

        $row_id = $this->getSession('login_row_id');
        $logout_data_to_check = $this->activityModel->get_current_user_logout_status($row_id);
        
        if($logout_data_to_check['status']=='User_is_Currently_Logged_In')
        {
            $this->setSession('ac_1_url_lock_value','lock');
            $this->view('memory_inventory');
        }
        else{

            $this->view('memory_inventory');
        }
    }

    public function ac_2_memory_inventory_redirector(){

        $row_id = $this->getSession('login_row_id');
        $logout_data_to_check = $this->activityModel->get_current_user_logout_status($row_id);
        
        if($logout_data_to_check['status']=='User_is_Currently_Logged_In')
        {
            $this->setSession('ac_2_url_lock_value','lock');
            $this->view('memory_inventory');
        }
        else{

            $this->view('memory_inventory');
        }
    }

    public function ac_3_memory_inventory_redirector(){

        $row_id = $this->getSession('login_row_id');
        $logout_data_to_check = $this->activityModel->get_current_user_logout_status($row_id);
        
        if($logout_data_to_check['status']=='User_is_Currently_Logged_In')
        {
            $this->setSession('ac_3_url_lock_value','lock');
            $this->view('memory_inventory');
        }
        else{

            $this->view('memory_inventory');
        }
    }

    public function ac_4_memory_inventory_redirector(){

        $row_id = $this->getSession('login_row_id');
        $logout_data_to_check = $this->activityModel->get_current_user_logout_status($row_id);
        
        if($logout_data_to_check['status']=='User_is_Currently_Logged_In')
        {
            $this->setSession('ac_4_url_lock_value','lock');
            $this->view('memory_inventory');
        }
        else{

            $this->view('memory_inventory');
        }
    }

    public function numerical_aptitute_test(){

        $this->view("numerical_aptitute_test");
    
    }

    public function ac_5_numerical_aptitute_test_redirector(){

        $row_id = $this->getSession('login_row_id');
        $logout_data_to_check = $this->activityModel->get_current_user_logout_status($row_id);
        
        if($logout_data_to_check['status']=='User_is_Currently_Logged_In')
        {
            $this->setSession('ac_5_url_lock_value','lock');
            $this->view('numerical_aptitute_test');
        }
        else{

            $this->view('numerical_aptitute_test');
        }
    }

    public function ac_6_numerical_aptitute_test_redirector(){

        $row_id = $this->getSession('login_row_id');
        $logout_data_to_check = $this->activityModel->get_current_user_logout_status($row_id);
        
        if($logout_data_to_check['status']=='User_is_Currently_Logged_In')
        {
            $this->setSession('ac_6_url_lock_value','lock');
            $this->view('numerical_aptitute_test');
        }
        else{

            $this->view('numerical_aptitute_test');
        }
    }

    public function ac_7_numerical_aptitute_test_redirector(){

        $row_id = $this->getSession('login_row_id');
        $logout_data_to_check = $this->activityModel->get_current_user_logout_status($row_id);
        
        if($logout_data_to_check['status']=='User_is_Currently_Logged_In')
        {
            $this->setSession('ac_7_url_lock_value','lock');
            $this->view('numerical_aptitute_test');
        }
        else{

            $this->view('numerical_aptitute_test');
        }
    }

    public function creativity_personality_test(){

        $this->view("creativity_personality_test");
    
    }

    public function ac_8_creativity_personality_test_redirector(){

        $row_id = $this->getSession('login_row_id');
        $logout_data_to_check = $this->activityModel->get_current_user_logout_status($row_id);
        
        if($logout_data_to_check['status']=='User_is_Currently_Logged_In')
        {
            $this->setSession('ac_8_url_lock_value','lock');
            $this->view('creativity_personality_test');
        }
        else{

            $this->view('creativity_personality_test');
        }
    }

    public function ac_9_creativity_personality_test_redirector(){

        $row_id = $this->getSession('login_row_id');
        $logout_data_to_check = $this->activityModel->get_current_user_logout_status($row_id);
        
        if($logout_data_to_check['status']=='User_is_Currently_Logged_In')
        {
            $this->setSession('ac_9_url_lock_value','lock');
            $this->view('creativity_personality_test');
        }
        else{

            $this->view('creativity_personality_test');
        }
    }

    public function ac_10_creativity_personality_test_redirector(){

        $row_id = $this->getSession('login_row_id');
        $logout_data_to_check = $this->activityModel->get_current_user_logout_status($row_id);
        
        if($logout_data_to_check['status']=='User_is_Currently_Logged_In')
        {
            $this->setSession('ac_10_url_lock_value','lock');
            $this->view('creativity_personality_test');
        }
        else{

            $this->view('creativity_personality_test');
        }
    }

    public function motor_performance_test(){

        $this->view("motor_performance_test");
    
    }

    public function ac_11_motor_performance_test_redirector(){

        $row_id = $this->getSession('login_row_id');
        $logout_data_to_check = $this->activityModel->get_current_user_logout_status($row_id);
        
        if($logout_data_to_check['status']=='User_is_Currently_Logged_In')
        {
            $this->setSession('ac_11_url_lock_value','lock');
            $this->view('motor_performance_test');
        }
        else{

            $this->view('motor_performance_test');
        }
    }

    public function ac_12_motor_performance_test_redirector(){

        $row_id = $this->getSession('login_row_id');
        $logout_data_to_check = $this->activityModel->get_current_user_logout_status($row_id);
        
        if($logout_data_to_check['status']=='User_is_Currently_Logged_In')
        {
            $this->setSession('ac_12_url_lock_value','lock');
            $this->view('motor_performance_test');
        }
        else{

            $this->view('motor_performance_test');
        }
    }

    public function ac_13_motor_performance_test_redirector(){

        $row_id = $this->getSession('login_row_id');
        $logout_data_to_check = $this->activityModel->get_current_user_logout_status($row_id);
        
        if($logout_data_to_check['status']=='User_is_Currently_Logged_In')
        {
            $this->setSession('ac_13_url_lock_value','lock');
            $this->view('motor_performance_test');
        }
        else{

            $this->view('motor_performance_test');
        }
    }



    public function workbook(){

        $this->view("workbook");
    
    }

    public function ac_14_workbook_redirector(){

        $row_id = $this->getSession('login_row_id');
        $logout_data_to_check = $this->activityModel->get_current_user_logout_status($row_id);
        
        if($logout_data_to_check['status']=='User_is_Currently_Logged_In')
        {
            $this->setSession('ac_14_url_lock_value','lock');
            $this->view('workbook');
        }
        else{

            $this->view('workbook');
        }
    }
    
    public function ac_15_workbook_redirector(){

        $row_id = $this->getSession('login_row_id');
        $logout_data_to_check = $this->activityModel->get_current_user_logout_status($row_id);
        
        if($logout_data_to_check['status']=='User_is_Currently_Logged_In')
        {
            $this->setSession('ac_15_url_lock_value','lock');
            $this->view('workbook');
        }
        else{

            $this->view('workbook');
        }
    }

    public function ac_16_workbook_redirector(){

        $row_id = $this->getSession('login_row_id');
        $logout_data_to_check = $this->activityModel->get_current_user_logout_status($row_id);
        
        if($logout_data_to_check['status']=='User_is_Currently_Logged_In')
        {
            $this->setSession('ac_16_url_lock_value','lock');
            $this->view('workbook');
        }
        else{

            $this->view('workbook');
        }
    }

    //.....................Performance Page..........................

    public function performance_page(){

        $user_id = $this->getSession('mobile_number');

        //................Call the percentage calculator...............

        // $percentage = $this->activityModel->get_last_7_days_percentage_per_day($user_id);
        // print_r($percentage);
        // die('die at 353 line number in activityController');

        $user_data = $this->activityModel->get_user_data($user_id);
        if($user_data['status']=='Get_User_Data')
        {
            $activity_data = $this->activityModel->get_last_7_days_percentage_per_day($user_id);

            //print_r($activity_data);

              if(empty($activity_data))
              {
                $activity_data = "";

                $all_percentage_data_array = $this->all_activities_percentage_calculator($user_id);
                $this->view("performance",$user_data,$activity_data,$all_percentage_data_array);
              }
              else
              {
                $all_percentage_data_array = $this->all_activities_percentage_calculator($user_id);
                $this->view("performance",$user_data,$activity_data,$all_percentage_data_array);
              }
        }
        else //......else part - when no data found.......
        {
            $this->view("home_page");
        }
    
    }

    public function all_activities_percentage_calculator($user_id)
    {

                        
                $ac_code_array = ['test_ac_01','test_ac_02','test_ac_03','test_ac_04','test_ac_05','test_ac_06','test_ac_07','test_ac_08','test_ac_09','test_ac_10','test_ac_11','test_ac_12','test_ac_13','test_ac_14','test_ac_15','test_ac_16'];
                $ac_code_array_divisor_values = [8,12,15,7,1,18,4,5,2,6,10,8,8,1,1,12];
                
                for($i=0;$i<16;$i++)
                {
                $p_data[$i] = $this->activityModel->get_last_7_days_percentage($user_id,$ac_code_array[$i],$ac_code_array_divisor_values[$i]);
                
                }

                return $p_data;
        
    }


    //.....................End of Performance Page....................

    public function activity1(){

        $this->view("activity1");
    
    }


    public function activity1_11(){

        $this->view("activity1_11");
    
    }
    

    public function activity1_x(){

        $this->view("activity1_x");
    
    }

    public function activity2(){

        $this->view("activity2");
    
    }

    public function activity3(){

        $this->view("activity3");
    
    }

    public function activity4(){

        $this->view("activity4");
    
    }

    public function activity5(){

        $this->view("activity5");
    
    }

    public function activity6(){

        $this->view("activity6");
    
    }

    public function activity7(){

        $this->view("activity7");
    
    }

   public function activity8(){

        $this->view("activity8");
    
    }

    public function activity9(){

        $this->view("activity9");
    
    }

    public function activity10(){

        $this->view("activity10");
    
    }

    public function activity11(){

        $this->view("activity11");
    
    }

    public function activity12(){

        $this->view("activity12");
    
    }

    public function activity13(){

        $this->view("activity13");
    
    }

    public function activity14(){

        $this->view("activity14");
    
    }

    public function activity15(){

        $this->view("activity15");
    
    }

    public function activity16(){

        $this->view("activity16");
    
    }


//..............Fetch the User ID from the Login and Enter the User ID into Session_UID of Activity Score 

    public function fetchUserID(){
      $user_id = $this->input('mobile_number');
      echo "fetch the user id from login <br><br>";
      $session_uid = $this->activityModel->sessionUID($user_id);
      print_r($session_uid);
    }

    public function activity1_start(){

        $session_uid = $_GET['session_uid'];
        $session_url = $_GET['session_url'];
        $ac_code = $_GET['ac_code'];
        $ac_result = $_GET['ac_result'];
        $session_start_time = $_GET['session_start_time'];
        $session_end_time = $_GET['session_end_time'];
        $ac_status = $_GET['ac_status'];
        $activity_lock_value = $_GET['activity_lock_value'];
        $session_end_time = $_GET['session_end_time'];
        $attempt_count = $_GET['attempt_count'];
        
        $startActivityData = [$session_uid, $session_url, $ac_code, $ac_result, $session_start_time, $session_end_time, $ac_status, $activity_lock_value, $attempt_count];
       

        $checkActivityDuplicateData = $this->activityModel->checkActivityDuplicate($session_uid, $session_start_time, $session_end_time, $ac_code);
        if($checkActivityDuplicateData['status'] == "Row_Number_Found"){
           $deleteActivityData = $this->activityModel->deleteActivityData($session_uid, $session_start_time, $session_end_time, $ac_code);
           $this->view('memory_inventory');
            
        }
        else{
            $addStartActivityData = $this->activityModel->addStartData($startActivityData);
           if($addStartActivityData['status'] == 'Data_Inserted') //....check if the activity data is correctlly added into the table........
           {

            //.....now for blocking the activity links we need to setup the session which helps in blocking the activity links.......
            //.............Blocking activity is based on 3 parameters 1. activity status, 2. activity_lock_value and 3. attempt_count for that row id of that activity.....
                if($ac_status == 'incomplete' && $activity_lock_value == 'unlock' && $attempt_count == '-1')
                {
                    $as_row_id['last_inserted_row'] = $addStartActivityData['last_inserted_row'];
                    
                    $this->view('activity1',$as_row_id);
                    exit();
                }
                else{
                  //  $activity_lock_value = 'lock';
                   // $this->setSession('activity_url_lock_value',$activity_lock_value);
                   $data['ac_1_url_lock_value'] = 'unlock';
                   $this->view('memory_inventory',$data);
                    exit();
                } 

           }
           else //.....if the activity data is not inserted into the table........
           {

            $this->view('memory_inventory');

           }

        }

    }

    public function activity2_start(){

        $session_uid = $_GET['session_uid'];
        $session_url = $_GET['session_url'];
        $ac_code = $_GET['ac_code'];
        $ac_result = $_GET['ac_result'];
        $session_start_time = $_GET['session_start_time'];
        $session_end_time = $_GET['session_end_time'];
        $ac_status = $_GET['ac_status'];
        $activity_lock_value = $_GET['activity_lock_value'];
        $session_end_time = $_GET['session_end_time'];
        $attempt_count = $_GET['attempt_count'];
        
        $startActivityData = [$session_uid, $session_url, $ac_code, $ac_result, $session_start_time, $session_end_time, $ac_status, $activity_lock_value, $attempt_count];
       

        $checkActivityDuplicateData = $this->activityModel->checkActivityDuplicate($session_uid, $session_start_time, $session_end_time, $ac_code);
        if($checkActivityDuplicateData['status'] == "Row_Number_Found"){
           $deleteActivityData = $this->activityModel->deleteActivityData($session_uid, $session_start_time, $session_end_time, $ac_code);
           $this->view('memory_inventory');
            
        }
        else{
            $addStartActivityData = $this->activityModel->addStartData($startActivityData);
           if($addStartActivityData['status'] == 'Data_Inserted') //....check if the activity data is correctlly added into the table........
           {

            //.....now for blocking the activity links we need to setup the session which helps in blocking the activity links.......
            //.............Blocking activity is based on 3 parameters 1. activity status, 2. activity_lock_value and 3. attempt_count for that row id of that activity.....
                if($ac_status == 'incomplete' && $activity_lock_value == 'unlock' && $attempt_count == '-1')
                {
                    $as_row_id['last_inserted_row'] = $addStartActivityData['last_inserted_row'];
                    
                    $this->view('activity2',$as_row_id);
                    exit();
                }
                else{
                  //  $activity_lock_value = 'lock';
                   // $this->setSession('activity_url_lock_value',$activity_lock_value);
                   $data['ac_2_url_lock_value'] = 'unlock';
                   $this->view('memory_inventory',$data);
                    exit();
                } 

           }
           else //.....if the activity data is not inserted into the table........
           {

            $this->view('memory_inventory');

           }

        }
    }

    public function activity3_start(){

        $session_uid = $_GET['session_uid'];
        $session_url = $_GET['session_url'];
        $ac_code = $_GET['ac_code'];
        $ac_result = $_GET['ac_result'];
        $session_start_time = $_GET['session_start_time'];
        $session_end_time = $_GET['session_end_time'];
        $ac_status = $_GET['ac_status'];
        $activity_lock_value = $_GET['activity_lock_value'];
        $session_end_time = $_GET['session_end_time'];
        $attempt_count = $_GET['attempt_count'];
        
        $startActivityData = [$session_uid, $session_url, $ac_code, $ac_result, $session_start_time, $session_end_time, $ac_status, $activity_lock_value, $attempt_count];
       

        $checkActivityDuplicateData = $this->activityModel->checkActivityDuplicate($session_uid, $session_start_time, $session_end_time, $ac_code);
        if($checkActivityDuplicateData['status'] == "Row_Number_Found"){
           $deleteActivityData = $this->activityModel->deleteActivityData($session_uid, $session_start_time, $session_end_time, $ac_code);
           $this->view('memory_inventory');
            
        }
        else{
            $addStartActivityData = $this->activityModel->addStartData($startActivityData);
           if($addStartActivityData['status'] == 'Data_Inserted') //....check if the activity data is correctlly added into the table........
           {

            //.....now for blocking the activity links we need to setup the session which helps in blocking the activity links.......
            //.............Blocking activity is based on 3 parameters 1. activity status, 2. activity_lock_value and 3. attempt_count for that row id of that activity.....
                if($ac_status == 'incomplete' && $activity_lock_value == 'unlock' && $attempt_count == '-1')
                {
                    $as_row_id['last_inserted_row'] = $addStartActivityData['last_inserted_row'];
                    
                    $this->view('activity3',$as_row_id);
                    exit();
                }
                else{
                  //  $activity_lock_value = 'lock';
                   // $this->setSession('activity_url_lock_value',$activity_lock_value);
                   $data['ac_3_url_lock_value'] = 'unlock';
                   $this->view('memory_inventory',$data);
                    exit();
                } 

           }
           else //.....if the activity data is not inserted into the table........
           {

            $this->view('memory_inventory');

           }

        }
    }

    public function activity4_start(){

        $session_uid = $_GET['session_uid'];
        $session_url = $_GET['session_url'];
        $ac_code = $_GET['ac_code'];
        $ac_result = $_GET['ac_result'];
        $session_start_time = $_GET['session_start_time'];
        $session_end_time = $_GET['session_end_time'];
        $ac_status = $_GET['ac_status'];
        $activity_lock_value = $_GET['activity_lock_value'];
        $session_end_time = $_GET['session_end_time'];
        $attempt_count = $_GET['attempt_count'];
        
        $startActivityData = [$session_uid, $session_url, $ac_code, $ac_result, $session_start_time, $session_end_time, $ac_status, $activity_lock_value, $attempt_count];
       

        $checkActivityDuplicateData = $this->activityModel->checkActivityDuplicate($session_uid, $session_start_time, $session_end_time, $ac_code);
        if($checkActivityDuplicateData['status'] == "Row_Number_Found"){
           $deleteActivityData = $this->activityModel->deleteActivityData($session_uid, $session_start_time, $session_end_time, $ac_code);
           $this->view('memory_inventory');
            
        }
        else{
            $addStartActivityData = $this->activityModel->addStartData($startActivityData);
           if($addStartActivityData['status'] == 'Data_Inserted') //....check if the activity data is correctlly added into the table........
           {

            //.....now for blocking the activity links we need to setup the session which helps in blocking the activity links.......
            //.............Blocking activity is based on 3 parameters 1. activity status, 2. activity_lock_value and 3. attempt_count for that row id of that activity.....
                if($ac_status == 'incomplete' && $activity_lock_value == 'unlock' && $attempt_count == '-1')
                {
                    $as_row_id['last_inserted_row'] = $addStartActivityData['last_inserted_row'];
                    
                    $this->view('activity4',$as_row_id);
                    exit();
                }
                else{
                  //  $activity_lock_value = 'lock';
                   // $this->setSession('activity_url_lock_value',$activity_lock_value);
                   $data['ac_4_url_lock_value'] = 'unlock';
                   $this->view('memory_inventory',$data);
                    exit();
                } 

           }
           else //.....if the activity data is not inserted into the table........
           {

            $this->view('memory_inventory');

           }

        }
    }

    public function activity5_start(){

        $session_uid = $_GET['session_uid'];
        $session_url = $_GET['session_url'];
        $ac_code = $_GET['ac_code'];
        $ac_result = $_GET['ac_result'];
        $session_start_time = $_GET['session_start_time'];
        $session_end_time = $_GET['session_end_time'];
        $ac_status = $_GET['ac_status'];
        $activity_lock_value = $_GET['activity_lock_value'];
        $session_end_time = $_GET['session_end_time'];
        $attempt_count = $_GET['attempt_count'];
        
        $startActivityData = [$session_uid, $session_url, $ac_code, $ac_result, $session_start_time, $session_end_time, $ac_status, $activity_lock_value, $attempt_count];
       

        $checkActivityDuplicateData = $this->activityModel->checkActivityDuplicate($session_uid, $session_start_time, $session_end_time, $ac_code);
        if($checkActivityDuplicateData['status'] == "Row_Number_Found"){
           $deleteActivityData = $this->activityModel->deleteActivityData($session_uid, $session_start_time, $session_end_time, $ac_code);
           $this->view('numerical_aptitute_test');
            
        }
        else{
            $addStartActivityData = $this->activityModel->addStartData($startActivityData);
           if($addStartActivityData['status'] == 'Data_Inserted') //....check if the activity data is correctlly added into the table........
           {

            //.....now for blocking the activity links we need to setup the session which helps in blocking the activity links.......
            //.............Blocking activity is based on 3 parameters 1. activity status, 2. activity_lock_value and 3. attempt_count for that row id of that activity.....
                if($ac_status == 'incomplete' && $activity_lock_value == 'unlock' && $attempt_count == '-1')
                {
                    $as_row_id['last_inserted_row'] = $addStartActivityData['last_inserted_row'];
                    
                    $this->view('activity5',$as_row_id);
                    exit();
                }
                else{
                  //  $activity_lock_value = 'lock';
                   // $this->setSession('activity_url_lock_value',$activity_lock_value);
                   $data['ac_5_url_lock_value'] = 'unlock';
                   $this->view('numerical_aptitute_test',$data);
                    exit();
                } 

           }
           else //.....if the activity data is not inserted into the table........
           {

            $this->view('numerical_aptitute_test');

           }

        }
    }

    public function activity6_start(){

        $session_uid = $_GET['session_uid'];
        $session_url = $_GET['session_url'];
        $ac_code = $_GET['ac_code'];
        $ac_result = $_GET['ac_result'];
        $session_start_time = $_GET['session_start_time'];
        $session_end_time = $_GET['session_end_time'];
        $ac_status = $_GET['ac_status'];
        $activity_lock_value = $_GET['activity_lock_value'];
        $session_end_time = $_GET['session_end_time'];
        $attempt_count = $_GET['attempt_count'];
        
        $startActivityData = [$session_uid, $session_url, $ac_code, $ac_result, $session_start_time, $session_end_time, $ac_status, $activity_lock_value, $attempt_count];
       

        $checkActivityDuplicateData = $this->activityModel->checkActivityDuplicate($session_uid, $session_start_time, $session_end_time, $ac_code);
        if($checkActivityDuplicateData['status'] == "Row_Number_Found"){
           $deleteActivityData = $this->activityModel->deleteActivityData($session_uid, $session_start_time, $session_end_time, $ac_code);
           $this->view('numerical_aptitute_test');
            
        }
        else{
            $addStartActivityData = $this->activityModel->addStartData($startActivityData);
           if($addStartActivityData['status'] == 'Data_Inserted') //....check if the activity data is correctlly added into the table........
           {

            //.....now for blocking the activity links we need to setup the session which helps in blocking the activity links.......
            //.............Blocking activity is based on 3 parameters 1. activity status, 2. activity_lock_value and 3. attempt_count for that row id of that activity.....
                if($ac_status == 'incomplete' && $activity_lock_value == 'unlock' && $attempt_count == '-1')
                {
                    $as_row_id['last_inserted_row'] = $addStartActivityData['last_inserted_row'];
                    
                    $this->view('activity6',$as_row_id);
                    exit();
                }
                else{
                  //  $activity_lock_value = 'lock';
                   // $this->setSession('activity_url_lock_value',$activity_lock_value);
                   $data['ac_6_url_lock_value'] = 'unlock';
                   $this->view('numerical_aptitute_test',$data);
                    exit();
                } 

           }
           else //.....if the activity data is not inserted into the table........
           {

            $this->view('numerical_aptitute_test');

           }

        }
    }

    public function activity7_start(){

        $session_uid = $_GET['session_uid'];
        $session_url = $_GET['session_url'];
        $ac_code = $_GET['ac_code'];
        $ac_result = $_GET['ac_result'];
        $session_start_time = $_GET['session_start_time'];
        $session_end_time = $_GET['session_end_time'];
        $ac_status = $_GET['ac_status'];
        $activity_lock_value = $_GET['activity_lock_value'];
        $session_end_time = $_GET['session_end_time'];
        $attempt_count = $_GET['attempt_count'];
        
        $startActivityData = [$session_uid, $session_url, $ac_code, $ac_result, $session_start_time, $session_end_time, $ac_status, $activity_lock_value, $attempt_count];
       

        $checkActivityDuplicateData = $this->activityModel->checkActivityDuplicate($session_uid, $session_start_time, $session_end_time, $ac_code);
        if($checkActivityDuplicateData['status'] == "Row_Number_Found"){
           $deleteActivityData = $this->activityModel->deleteActivityData($session_uid, $session_start_time, $session_end_time, $ac_code);
           $this->view('numerical_aptitute_test');
            
        }
        else{
            $addStartActivityData = $this->activityModel->addStartData($startActivityData);
           if($addStartActivityData['status'] == 'Data_Inserted') //....check if the activity data is correctlly added into the table........
           {

            //.....now for blocking the activity links we need to setup the session which helps in blocking the activity links.......
            //.............Blocking activity is based on 3 parameters 1. activity status, 2. activity_lock_value and 3. attempt_count for that row id of that activity.....
                if($ac_status == 'incomplete' && $activity_lock_value == 'unlock' && $attempt_count == '-1')
                {
                    $as_row_id['last_inserted_row'] = $addStartActivityData['last_inserted_row'];
                    
                    $this->view('activity7',$as_row_id);
                    exit();
                }
                else{
                  //  $activity_lock_value = 'lock';
                   // $this->setSession('activity_url_lock_value',$activity_lock_value);
                   $data['ac_7_url_lock_value'] = 'unlock';
                   $this->view('numerical_aptitute_test',$data);
                    exit();
                } 

           }
           else //.....if the activity data is not inserted into the table........
           {

            $this->view('numerical_aptitute_test');

           }

        }
    }

    public function activity8_start(){

        $session_uid = $_GET['session_uid'];
        $session_url = $_GET['session_url'];
        $ac_code = $_GET['ac_code'];
        $ac_result = $_GET['ac_result'];
        $session_start_time = $_GET['session_start_time'];
        $session_end_time = $_GET['session_end_time'];
        $ac_status = $_GET['ac_status'];
        $activity_lock_value = $_GET['activity_lock_value'];
        $session_end_time = $_GET['session_end_time'];
        $attempt_count = $_GET['attempt_count'];
        
        $startActivityData = [$session_uid, $session_url, $ac_code, $ac_result, $session_start_time, $session_end_time, $ac_status, $activity_lock_value, $attempt_count];
       

        $checkActivityDuplicateData = $this->activityModel->checkActivityDuplicate($session_uid, $session_start_time, $session_end_time, $ac_code);
        if($checkActivityDuplicateData['status'] == "Row_Number_Found"){
           $deleteActivityData = $this->activityModel->deleteActivityData($session_uid, $session_start_time, $session_end_time, $ac_code);
           $this->view('creativity_personality_test');
            
        }
        else{
            $addStartActivityData = $this->activityModel->addStartData($startActivityData);
           if($addStartActivityData['status'] == 'Data_Inserted') //....check if the activity data is correctlly added into the table........
           {

            //.....now for blocking the activity links we need to setup the session which helps in blocking the activity links.......
            //.............Blocking activity is based on 3 parameters 1. activity status, 2. activity_lock_value and 3. attempt_count for that row id of that activity.....
                if($ac_status == 'incomplete' && $activity_lock_value == 'unlock' && $attempt_count == '-1')
                {
                    $as_row_id['last_inserted_row'] = $addStartActivityData['last_inserted_row'];
                    
                    $this->view('activity8',$as_row_id);
                    exit();
                }
                else{
                  //  $activity_lock_value = 'lock';
                   // $this->setSession('activity_url_lock_value',$activity_lock_value);
                   $data['ac_8_url_lock_value'] = 'unlock';
                   $this->view('creativity_personality_test',$data);
                    exit();
                } 

           }
           else //.....if the activity data is not inserted into the table........
           {

            $this->view('creativity_personality_test');

           }

        }
    }

    public function activity9_start(){

        $session_uid = $_GET['session_uid'];
        $session_url = $_GET['session_url'];
        $ac_code = $_GET['ac_code'];
        $ac_result = $_GET['ac_result'];
        $session_start_time = $_GET['session_start_time'];
        $session_end_time = $_GET['session_end_time'];
        $ac_status = $_GET['ac_status'];
        $activity_lock_value = $_GET['activity_lock_value'];
        $session_end_time = $_GET['session_end_time'];
        $attempt_count = $_GET['attempt_count'];
        
        $startActivityData = [$session_uid, $session_url, $ac_code, $ac_result, $session_start_time, $session_end_time, $ac_status, $activity_lock_value, $attempt_count];
       

        $checkActivityDuplicateData = $this->activityModel->checkActivityDuplicate($session_uid, $session_start_time, $session_end_time, $ac_code);
        if($checkActivityDuplicateData['status'] == "Row_Number_Found"){
           $deleteActivityData = $this->activityModel->deleteActivityData($session_uid, $session_start_time, $session_end_time, $ac_code);
           $this->view('creativity_personality_test');
            
        }
        else{
            $addStartActivityData = $this->activityModel->addStartData($startActivityData);
           if($addStartActivityData['status'] == 'Data_Inserted') //....check if the activity data is correctlly added into the table........
           {

            //.....now for blocking the activity links we need to setup the session which helps in blocking the activity links.......
            //.............Blocking activity is based on 3 parameters 1. activity status, 2. activity_lock_value and 3. attempt_count for that row id of that activity.....
                if($ac_status == 'incomplete' && $activity_lock_value == 'unlock' && $attempt_count == '-1')
                {
                    $as_row_id['last_inserted_row'] = $addStartActivityData['last_inserted_row'];
                    
                    $this->view('activity9',$as_row_id);
                    exit();
                }
                else{
                  //  $activity_lock_value = 'lock';
                   // $this->setSession('activity_url_lock_value',$activity_lock_value);
                   $data['ac_9_url_lock_value'] = 'unlock';
                   $this->view('creativity_personality_test',$data);
                    exit();
                } 

           }
           else //.....if the activity data is not inserted into the table........
           {

            $this->view('creativity_personality_test');

           }

        }
    }

    public function activity10_start(){

        $session_uid = $_GET['session_uid'];
        $session_url = $_GET['session_url'];
        $ac_code = $_GET['ac_code'];
        $ac_result = $_GET['ac_result'];
        $session_start_time = $_GET['session_start_time'];
        $session_end_time = $_GET['session_end_time'];
        $ac_status = $_GET['ac_status'];
        $activity_lock_value = $_GET['activity_lock_value'];
        $session_end_time = $_GET['session_end_time'];
        $attempt_count = $_GET['attempt_count'];
        
        $startActivityData = [$session_uid, $session_url, $ac_code, $ac_result, $session_start_time, $session_end_time, $ac_status, $activity_lock_value, $attempt_count];
       

        $checkActivityDuplicateData = $this->activityModel->checkActivityDuplicate($session_uid, $session_start_time, $session_end_time, $ac_code);
        if($checkActivityDuplicateData['status'] == "Row_Number_Found"){
           $deleteActivityData = $this->activityModel->deleteActivityData($session_uid, $session_start_time, $session_end_time, $ac_code);
           $this->view('creativity_personality_test');
            
        }
        else{
            $addStartActivityData = $this->activityModel->addStartData($startActivityData);
           if($addStartActivityData['status'] == 'Data_Inserted') //....check if the activity data is correctlly added into the table........
           {

            //.....now for blocking the activity links we need to setup the session which helps in blocking the activity links.......
            //.............Blocking activity is based on 3 parameters 1. activity status, 2. activity_lock_value and 3. attempt_count for that row id of that activity.....
                if($ac_status == 'incomplete' && $activity_lock_value == 'unlock' && $attempt_count == '-1')
                {
                    $as_row_id['last_inserted_row'] = $addStartActivityData['last_inserted_row'];
                    
                    $this->view('activity10',$as_row_id);
                    exit();
                }
                else{
                  //  $activity_lock_value = 'lock';
                   // $this->setSession('activity_url_lock_value',$activity_lock_value);
                   $data['ac_10_url_lock_value'] = 'unlock';
                   $this->view('creativity_personality_test',$data);
                    exit();
                } 

           }
           else //.....if the activity data is not inserted into the table........
           {

            $this->view('creativity_personality_test');

           }

        }
    }

    public function activity11_start(){

        $session_uid = $_GET['session_uid'];
        $session_url = $_GET['session_url'];
        $ac_code = $_GET['ac_code'];
        $ac_result = $_GET['ac_result'];
        $session_start_time = $_GET['session_start_time'];
        $session_end_time = $_GET['session_end_time'];
        $ac_status = $_GET['ac_status'];
        $activity_lock_value = $_GET['activity_lock_value'];
        $session_end_time = $_GET['session_end_time'];
        $attempt_count = $_GET['attempt_count'];
        
        $startActivityData = [$session_uid, $session_url, $ac_code, $ac_result, $session_start_time, $session_end_time, $ac_status, $activity_lock_value, $attempt_count];
       

        $checkActivityDuplicateData = $this->activityModel->checkActivityDuplicate($session_uid, $session_start_time, $session_end_time, $ac_code);
        if($checkActivityDuplicateData['status'] == "Row_Number_Found"){
           $deleteActivityData = $this->activityModel->deleteActivityData($session_uid, $session_start_time, $session_end_time, $ac_code);
           $this->view('motor_performance_test');
            
        }
        else{
            $addStartActivityData = $this->activityModel->addStartData($startActivityData);
           if($addStartActivityData['status'] == 'Data_Inserted') //....check if the activity data is correctlly added into the table........
           {

            //.....now for blocking the activity links we need to setup the session which helps in blocking the activity links.......
            //.............Blocking activity is based on 3 parameters 1. activity status, 2. activity_lock_value and 3. attempt_count for that row id of that activity.....
                if($ac_status == 'incomplete' && $activity_lock_value == 'unlock' && $attempt_count == '-1')
                {
                    $as_row_id['last_inserted_row'] = $addStartActivityData['last_inserted_row'];
                    
                    $this->view('activity11',$as_row_id);
                    exit();
                }
                else{
                  //  $activity_lock_value = 'lock';
                   // $this->setSession('activity_url_lock_value',$activity_lock_value);
                   $data['ac_11_url_lock_value'] = 'unlock';
                   $this->view('motor_performance_test',$data);
                    exit();
                } 

           }
           else //.....if the activity data is not inserted into the table........
           {

            $this->view('motor_performance_test');

           }

        }
    }

    public function activity12_start(){

        $session_uid = $_GET['session_uid'];
        $session_url = $_GET['session_url'];
        $ac_code = $_GET['ac_code'];
        $ac_result = $_GET['ac_result'];
        $session_start_time = $_GET['session_start_time'];
        $session_end_time = $_GET['session_end_time'];
        $ac_status = $_GET['ac_status'];
        $activity_lock_value = $_GET['activity_lock_value'];
        $session_end_time = $_GET['session_end_time'];
        $attempt_count = $_GET['attempt_count'];
        
        $startActivityData = [$session_uid, $session_url, $ac_code, $ac_result, $session_start_time, $session_end_time, $ac_status, $activity_lock_value, $attempt_count];
       

        $checkActivityDuplicateData = $this->activityModel->checkActivityDuplicate($session_uid, $session_start_time, $session_end_time, $ac_code);
        if($checkActivityDuplicateData['status'] == "Row_Number_Found"){
           $deleteActivityData = $this->activityModel->deleteActivityData($session_uid, $session_start_time, $session_end_time, $ac_code);
           $this->view('motor_performance_test');
            
        }
        else{
            $addStartActivityData = $this->activityModel->addStartData($startActivityData);
           if($addStartActivityData['status'] == 'Data_Inserted') //....check if the activity data is correctlly added into the table........
           {

            //.....now for blocking the activity links we need to setup the session which helps in blocking the activity links.......
            //.............Blocking activity is based on 3 parameters 1. activity status, 2. activity_lock_value and 3. attempt_count for that row id of that activity.....
                if($ac_status == 'incomplete' && $activity_lock_value == 'unlock' && $attempt_count == '-1')
                {
                    $as_row_id['last_inserted_row'] = $addStartActivityData['last_inserted_row'];
                    
                    $this->view('activity12',$as_row_id);
                    exit();
                }
                else{
                  //  $activity_lock_value = 'lock';
                   // $this->setSession('activity_url_lock_value',$activity_lock_value);
                   $data['ac_12_url_lock_value'] = 'unlock';
                   $this->view('motor_performance_test',$data);
                    exit();
                } 

           }
           else //.....if the activity data is not inserted into the table........
           {

            $this->view('motor_performance_test');

           }

        }
    }

    public function activity13_start(){

        $session_uid = $_GET['session_uid'];
        $session_url = $_GET['session_url'];
        $ac_code = $_GET['ac_code'];
        $ac_result = $_GET['ac_result'];
        $session_start_time = $_GET['session_start_time'];
        $session_end_time = $_GET['session_end_time'];
        $ac_status = $_GET['ac_status'];
        $activity_lock_value = $_GET['activity_lock_value'];
        $session_end_time = $_GET['session_end_time'];
        $attempt_count = $_GET['attempt_count'];
        
        $startActivityData = [$session_uid, $session_url, $ac_code, $ac_result, $session_start_time, $session_end_time, $ac_status, $activity_lock_value, $attempt_count];
       

        $checkActivityDuplicateData = $this->activityModel->checkActivityDuplicate($session_uid, $session_start_time, $session_end_time, $ac_code);
        if($checkActivityDuplicateData['status'] == "Row_Number_Found"){
           $deleteActivityData = $this->activityModel->deleteActivityData($session_uid, $session_start_time, $session_end_time, $ac_code);
           $this->view('motor_performance_test');
            
        }
        else{
            $addStartActivityData = $this->activityModel->addStartData($startActivityData);
           if($addStartActivityData['status'] == 'Data_Inserted') //....check if the activity data is correctlly added into the table........
           {

            //.....now for blocking the activity links we need to setup the session which helps in blocking the activity links.......
            //.............Blocking activity is based on 3 parameters 1. activity status, 2. activity_lock_value and 3. attempt_count for that row id of that activity.....
                if($ac_status == 'incomplete' && $activity_lock_value == 'unlock' && $attempt_count == '-1')
                {
                    $as_row_id['last_inserted_row'] = $addStartActivityData['last_inserted_row'];
                    
                    $this->view('activity13',$as_row_id);
                    exit();
                }
                else{
                  //  $activity_lock_value = 'lock';
                   // $this->setSession('activity_url_lock_value',$activity_lock_value);
                   $data['ac_13_url_lock_value'] = 'unlock';
                   $this->view('motor_performance_test',$data);
                    exit();
                } 

           }
           else //.....if the activity data is not inserted into the table........
           {

            $this->view('motor_performance_test');

           }

        }
    }

    public function activity14_start(){

        $session_uid = $_GET['session_uid'];
        $session_url = $_GET['session_url'];
        $ac_code = $_GET['ac_code'];
        $ac_result = $_GET['ac_result'];
        $session_start_time = $_GET['session_start_time'];
        $session_end_time = $_GET['session_end_time'];
        $ac_status = $_GET['ac_status'];
        $activity_lock_value = $_GET['activity_lock_value'];
        $session_end_time = $_GET['session_end_time'];
        $attempt_count = $_GET['attempt_count'];
        
        $startActivityData = [$session_uid, $session_url, $ac_code, $ac_result, $session_start_time, $session_end_time, $ac_status, $activity_lock_value, $attempt_count];
       

        $checkActivityDuplicateData = $this->activityModel->checkActivityDuplicate($session_uid, $session_start_time, $session_end_time, $ac_code);
        if($checkActivityDuplicateData['status'] == "Row_Number_Found"){
           $deleteActivityData = $this->activityModel->deleteActivityData($session_uid, $session_start_time, $session_end_time, $ac_code);
           $this->view('workbook');
            
        }
        else{
            $addStartActivityData = $this->activityModel->addStartData($startActivityData);
           if($addStartActivityData['status'] == 'Data_Inserted') //....check if the activity data is correctlly added into the table........
           {

            //.....now for blocking the activity links we need to setup the session which helps in blocking the activity links.......
            //.............Blocking activity is based on 3 parameters 1. activity status, 2. activity_lock_value and 3. attempt_count for that row id of that activity.....
                if($ac_status == 'incomplete' && $activity_lock_value == 'unlock' && $attempt_count == '-1')
                {
                    $as_row_id['last_inserted_row'] = $addStartActivityData['last_inserted_row'];
                    
                    $this->view('activity14',$as_row_id);
                    exit();
                }
                else{
                  //  $activity_lock_value = 'lock';
                   // $this->setSession('activity_url_lock_value',$activity_lock_value);
                   $data['ac_14_url_lock_value'] = 'unlock';
                   $this->view('workbook',$data);
                    exit();
                } 

           }
           else //.....if the activity data is not inserted into the table........
           {

            $this->view('workbook');

           }

        }
    }

    public function activity15_start(){

        $session_uid = $_GET['session_uid'];
        $session_url = $_GET['session_url'];
        $ac_code = $_GET['ac_code'];
        $ac_result = $_GET['ac_result'];
        $session_start_time = $_GET['session_start_time'];
        $session_end_time = $_GET['session_end_time'];
        $ac_status = $_GET['ac_status'];
        $activity_lock_value = $_GET['activity_lock_value'];
        $session_end_time = $_GET['session_end_time'];
        $attempt_count = $_GET['attempt_count'];
        
        $startActivityData = [$session_uid, $session_url, $ac_code, $ac_result, $session_start_time, $session_end_time, $ac_status, $activity_lock_value, $attempt_count];
       

        $checkActivityDuplicateData = $this->activityModel->checkActivityDuplicate($session_uid, $session_start_time, $session_end_time, $ac_code);
        if($checkActivityDuplicateData['status'] == "Row_Number_Found"){
           $deleteActivityData = $this->activityModel->deleteActivityData($session_uid, $session_start_time, $session_end_time, $ac_code);
           $this->view('workbook');
            
        }
        else{
            $addStartActivityData = $this->activityModel->addStartData($startActivityData);
           if($addStartActivityData['status'] == 'Data_Inserted') //....check if the activity data is correctlly added into the table........
           {

            //.....now for blocking the activity links we need to setup the session which helps in blocking the activity links.......
            //.............Blocking activity is based on 3 parameters 1. activity status, 2. activity_lock_value and 3. attempt_count for that row id of that activity.....
                if($ac_status == 'incomplete' && $activity_lock_value == 'unlock' && $attempt_count == '-1')
                {
                    $as_row_id['last_inserted_row'] = $addStartActivityData['last_inserted_row'];
                    
                    $this->view('activity15',$as_row_id);
                    exit();
                }
                else{
                  //  $activity_lock_value = 'lock';
                   // $this->setSession('activity_url_lock_value',$activity_lock_value);
                   $data['ac_15_url_lock_value'] = 'unlock';
                   $this->view('workbook',$data);
                    exit();
                } 

           }
           else //.....if the activity data is not inserted into the table........
           {

            $this->view('workbook');

           }

        }
    }

    public function activity16_start(){

        $session_uid = $_GET['session_uid'];
        $session_url = $_GET['session_url'];
        $ac_code = $_GET['ac_code'];
        $ac_result = $_GET['ac_result'];
        $session_start_time = $_GET['session_start_time'];
        $session_end_time = $_GET['session_end_time'];
        $ac_status = $_GET['ac_status'];
        $activity_lock_value = $_GET['activity_lock_value'];
        $session_end_time = $_GET['session_end_time'];
        $attempt_count = $_GET['attempt_count'];
        
        $startActivityData = [$session_uid, $session_url, $ac_code, $ac_result, $session_start_time, $session_end_time, $ac_status, $activity_lock_value, $attempt_count];
       

        $checkActivityDuplicateData = $this->activityModel->checkActivityDuplicate($session_uid, $session_start_time, $session_end_time, $ac_code);
        if($checkActivityDuplicateData['status'] == "Row_Number_Found"){
           $deleteActivityData = $this->activityModel->deleteActivityData($session_uid, $session_start_time, $session_end_time, $ac_code);
           $this->view('workbook');
            
        }
        else{
            $addStartActivityData = $this->activityModel->addStartData($startActivityData);
           if($addStartActivityData['status'] == 'Data_Inserted') //....check if the activity data is correctlly added into the table........
           {

            //.....now for blocking the activity links we need to setup the session which helps in blocking the activity links.......
            //.............Blocking activity is based on 3 parameters 1. activity status, 2. activity_lock_value and 3. attempt_count for that row id of that activity.....
                if($ac_status == 'incomplete' && $activity_lock_value == 'unlock' && $attempt_count == '-1')
                {
                    $as_row_id['last_inserted_row'] = $addStartActivityData['last_inserted_row'];
                    
                    $this->view('activity16',$as_row_id);
                    exit();
                }
                else{
                  //  $activity_lock_value = 'lock';
                   // $this->setSession('activity_url_lock_value',$activity_lock_value);
                   $data['ac_16_url_lock_value'] = 'unlock';
                   $this->view('workbook',$data);
                    exit();
                } 

           }
           else //.....if the activity data is not inserted into the table........
           {

            $this->view('workbook');

           }

        }
    }

  public function memory_inventory_activity_Result_Submit(){

        $ac_code = $_GET['ac_code'];
        $ac_result = $_GET['ac_result'];
        $session_end_time = $_GET['session_end_time'];
        $ac_status = $_GET['ac_status'];
        $activity_lock_value = $_GET['activity_lock_value'];
        $session_end_time = $_GET['session_end_time'];
        $attempt_count = $_GET['attempt_count'];
        $last_inserted_row = $_GET['last_inserted_row'];

        $session_id = $this->getSession('mobile_number');

        $check_activity_completion = $this->activityModel->checkActivityCompletionToday($session_id,$ac_code);

        if($check_activity_completion['status'] == 'No_Entry_Found_In_Database_For_Today')
        {       
        $final_data_submit = $this->activityModel->addScore($ac_result, $session_end_time, $ac_status, $activity_lock_value, $attempt_count,$last_inserted_row);
            
            if($final_data_submit == true)
                {
                    $row_id = $last_inserted_row;
                    $values = $this->activityModel->get_activity_score_data($row_id);
                    if($values['as_ac_code']== 'test_ac_01' && $values['as_attempt_count'] == '1' && $values['as_ac_status'] == 'complete')
                    {
                        $data['ac_1_url_lock_value'] = $values['as_activity_lock_value'];
                        $this->redirect('activityController/ac_1_memory_inventory_redirector',$data);
                        exit();
                    }

                    elseif ($values['as_ac_code']== 'test_ac_02' && $values['as_attempt_count'] == '1' && $values['as_ac_status'] == 'complete') {
                        $data['ac_2_url_lock_value'] = $values['as_activity_lock_value'];
                        $this->redirect('activityController/ac_2_memory_inventory_redirector',$data);
                        exit();
                    }

                    elseif ($values['as_ac_code']== 'test_ac_03' && $values['as_attempt_count'] == '1' && $values['as_ac_status'] == 'complete') {
                        $data['ac_3_url_lock_value'] = $values['as_activity_lock_value'];
                        $this->redirect('activityController/ac_3_memory_inventory_redirector',$data);
                        exit();
                    }
                    elseif ($values['as_ac_code']== 'test_ac_04' && $values['as_attempt_count'] == '1' && $values['as_ac_status'] == 'complete') {
                        $data['ac_4_url_lock_value'] = $values['as_activity_lock_value'];
                        $this->redirect('activityController/ac_4_memory_inventory_redirector',$data);
                        exit();
                    }
                    else{
                        $data['ac_1_url_lock_value'] = 'unlock';
                        $data['ac_2_url_lock_value'] = 'unlock';
                        $data['ac_3_url_lock_value'] = 'unlock';
                        $this->view('memory_inventory',$data);
                        exit();
                    }

                }
                else
                {
                    $this->view("activity1");
                }
      
            }
            
            elseif($check_activity_completion['status'] == 'Yes_Activity_Already_Performed_Today')
            {
                $get_intial_activity_data_entry_row_id = $this->activityModel->get_Initial_Activity_Entry_Data($session_id,$ac_code);

                
                    if($get_intial_activity_data_entry_row_id['status'] == 'Yes_Incomplete_Activity_Data_Found')
                    { //.......if the status of checkActivityCompletionToday is = 'Yes_Incomplete_Activity_Data_Found'........then lock the activity........
                        //....................now check for ac_code to set up the session value for locking the activity........
                        
                        //................also check if the initial data is submited then delete the row after checking it if it is ac_status is incomplete and attempt_count is -1.......

                        $deleteInitialActivityData = $this->activityModel->quickDeleteInitialActivityScore($get_intial_activity_data_entry_row_id['row_id']);
                        
                               if($deleteInitialActivityData['status']=='Row_Deleted')
                                {
                                            if($ac_code == 'test_ac_01')
                                            {
                                                $data['ac_1_url_lock_value'] = 'lock';
                                                $this->redirect('activityController/ac_1_memory_inventory_redirector',$data);
                                                exit();                    
                                            }

                                            elseif ($ac_code == 'test_ac_02') {
                                                $data['ac_2_url_lock_value'] = 'lock';
                                                $this->redirect('activityController/ac_2_memory_inventory_redirector',$data);
                                                exit();
                                            }

                                            elseif ($ac_code == 'test_ac_03') {
                                                $data['ac_3_url_lock_value'] = 'lock';
                                                $this->redirect('activityController/ac_3_memory_inventory_redirector',$data);
                                                exit();
                                            }
                                            elseif ($ac_code == 'test_ac_04') {
                                                $data['ac_4_url_lock_value'] = 'lock';
                                                $this->redirect('activityController/ac_4_memory_inventory_redirector',$data);
                                                exit();
                                            }
                                            else{

                                                echo '<hr>Else part of checkActivityCompletionToday conditon inner else - else part -> check for Yes_Activity_ALready_Performed_Today and ac_code not matched';
                                                die('<hr>Die at 1479');
                                                // $data['ac_1_url_lock_value'] = 'unlock';
                                                // $data['ac_2_url_lock_value'] = 'unlock';
                                                // $data['ac_3_url_lock_value'] = 'unlock';
                                                // $this->view('memory_inventory',$data);
                                                // exit();
                                            }
                                    
                                }
                                else{
                                    echo "Error in Processing with quickDeleteInitialActivityScore function - data not delete";
                                    die("<hr> Die at 1508");
                                }

                        
                    
                    }
    
                }
               //...........end of checkActivityCompletionToday condition - elseif part for status = 'Yes_Incomplete_Activity_Data_Found'........................  

               else{ //.......if the status of checkActivityCompletionToday is = 'Yes_Activity_Already_Performed_Today'........then lock the activity........
                //....................now check for ac_code to set up the session value for locking the activity........
                
                //................also check if the initial data is submited then delete the row after checking it if it is ac_status is incomplete and attempt_count is -1.......

                        if($ac_code == 'test_ac_01')
                        {
                            $data['ac_1_url_lock_value'] = 'lock';
                            $this->redirect('activityController/ac_1_memory_inventory_redirector',$data);
                            exit();
                        }

                        elseif ($ac_code == 'test_ac_02') {
                            $data['ac_2_url_lock_value'] = 'lock';
                            $this->redirect('activityController/ac_2_memory_inventory_redirector',$data);
                            exit();
                        }

                        elseif ($ac_code == 'test_ac_03') {
                            $data['ac_3_url_lock_value'] = 'lock';
                            $this->redirect('activityController/ac_3_memory_inventory_redirector',$data);
                            exit();
                        }
                        elseif ($ac_code == 'test_ac_04') {
                            $data['ac_4_url_lock_value'] = 'lock';
                            $this->redirect('activityController/ac_4_memory_inventory_redirector',$data);
                            exit();
                        }
                        else{

                            echo '<hr>Else part of checkActivityCompletionToday conditon inner else - else part -> check for Yes_Activity_ALready_Performed_Today and ac_code not matched';
                            // $data['ac_1_url_lock_value'] = 'unlock';
                            // $data['ac_2_url_lock_value'] = 'unlock';
                            // $data['ac_3_url_lock_value'] = 'unlock';
                            // $this->view('memory_inventory',$data);
                            // exit();
                        }
                    
               }//...........end of checkActivityCompletionToday condition - else part........................

  }

  public function numerical_aptitute_activity_Result_Submit(){

        $ac_code = $_GET['ac_code'];
        $ac_result = $_GET['ac_result'];
        $session_end_time = $_GET['session_end_time'];
        $ac_status = $_GET['ac_status'];
        $activity_lock_value = $_GET['activity_lock_value'];
        $session_end_time = $_GET['session_end_time'];
        $attempt_count = $_GET['attempt_count'];
        $last_inserted_row = $_GET['last_inserted_row'];

        $session_id = $this->getSession('mobile_number');

        $check_activity_completion = $this->activityModel->checkActivityCompletionToday($session_id,$ac_code);

        if($check_activity_completion['status'] == 'No_Entry_Found_In_Database_For_Today')
        {       
        $final_data_submit = $this->activityModel->addScore($ac_result, $session_end_time, $ac_status, $activity_lock_value, $attempt_count,$last_inserted_row);
            
            if($final_data_submit == true)
                {
                    $row_id = $last_inserted_row;
                    $values = $this->activityModel->get_activity_score_data($row_id);
                    if($values['as_ac_code']== 'test_ac_05' && $values['as_attempt_count'] == '1' && $values['as_ac_status'] == 'complete')
                    {
                        $data['ac_5_url_lock_value'] = $values['as_activity_lock_value'];
                        $this->redirect('activityController/ac_5_numerical_aptitute_test_redirector',$data);
                        exit();
                    }

                    elseif ($values['as_ac_code']== 'test_ac_06' && $values['as_attempt_count'] == '1' && $values['as_ac_status'] == 'complete') {
                        $data['ac_6_url_lock_value'] = $values['as_activity_lock_value'];
                        $this->redirect('activityController/ac_6_numerical_aptitute_test_redirector',$data);
                        exit();
                    }

                    elseif ($values['as_ac_code']== 'test_ac_07' && $values['as_attempt_count'] == '1' && $values['as_ac_status'] == 'complete') {
                        $data['ac_7_url_lock_value'] = $values['as_activity_lock_value'];
                        $this->redirect('activityController/ac_7_numerical_aptitute_test_redirector',$data);
                        exit();
                    }
                    else{
                        $data['ac_5_url_lock_value'] = 'unlock';
                        $data['ac_6_url_lock_value'] = 'unlock';
                        $data['ac_7_url_lock_value'] = 'unlock';
                        $this->view('numerical_aptitute_test',$data);
                        exit();
                    }

                }
                else
                {
                    $this->view("activity5");
                }
      
            }
            
            elseif($check_activity_completion['status'] == 'Yes_Activity_Already_Performed_Today')
            {
                $get_intial_activity_data_entry_row_id = $this->activityModel->get_Initial_Activity_Entry_Data($session_id,$ac_code);

                
                    if($get_intial_activity_data_entry_row_id['status'] == 'Yes_Incomplete_Activity_Data_Found')
                    { //.......if the status of checkActivityCompletionToday is = 'Yes_Incomplete_Activity_Data_Found'........then lock the activity........
                        //....................now check for ac_code to set up the session value for locking the activity........
                        
                        //................also check if the initial data is submited then delete the row after checking it if it is ac_status is incomplete and attempt_count is -1.......

                        $deleteInitialActivityData = $this->activityModel->quickDeleteInitialActivityScore($get_intial_activity_data_entry_row_id['row_id']);
                        
                               if($deleteInitialActivityData['status']=='Row_Deleted')
                                {
                                            if($ac_code == 'test_ac_05')
                                            {
                                                $data['ac_5_url_lock_value'] = 'lock';
                                                $this->redirect('activityController/ac_5_numerical_aptitute_test_redirector',$data);
                                                exit();                    
                                            }

                                            elseif ($ac_code == 'test_ac_06') {
                                                $data['ac_6_url_lock_value'] = 'lock';
                                                $this->redirect('activityController/ac_6_numerical_aptitute_test_redirector',$data);
                                                exit();
                                            }

                                            elseif ($ac_code == 'test_ac_07') {
                                                $data['ac_7_url_lock_value'] = 'lock';
                                                $this->redirect('activityController/ac_7_numerical_aptitute_test_redirector',$data);
                                                exit();
                                            }
                                            else{

                                                echo '<hr>Else part of checkActivityCompletionToday conditon inner else - else part -> check for Yes_Activity_ALready_Performed_Today and ac_code not matched';
                                                die('<hr>Die at 1479');
                                                // $data['ac_1_url_lock_value'] = 'unlock';
                                                // $data['ac_2_url_lock_value'] = 'unlock';
                                                // $data['ac_3_url_lock_value'] = 'unlock';
                                                // $this->view('memory_inventory',$data);
                                                // exit();
                                            }
                                    
                                }
                                else{
                                    echo "Error in Processing with quickDeleteInitialActivityScore function - data not delete";
                                    die("<hr> Die at 1508");
                                }
                
                    
                    }
    
                }
               //...........end of checkActivityCompletionToday condition - elseif part for status = 'Yes_Incomplete_Activity_Data_Found'........................  

               else{ //.......if the status of checkActivityCompletionToday is = 'Yes_Activity_Already_Performed_Today'........then lock the activity........
                //....................now check for ac_code to set up the session value for locking the activity........
                
                //................also check if the initial data is submited then delete the row after checking it if it is ac_status is incomplete and attempt_count is -1.......

                        if($ac_code == 'test_ac_05')
                        {
                            $data['ac_5_url_lock_value'] = 'lock';
                            $this->redirect('activityController/ac_5_numerical_aptitute_test_redirector',$data);
                            exit();
                        }

                        elseif ($ac_code == 'test_ac_06') {
                            $data['ac_6_url_lock_value'] = 'lock';
                            $this->redirect('activityController/ac_6_numerical_aptitute_test_redirector',$data);
                            exit();
                        }

                        elseif ($ac_code == 'test_ac_07') {
                            $data['ac_7_url_lock_value'] = 'lock';
                            $this->redirect('activityController/ac_7_numerical_aptitute_test_redirector',$data);
                            exit();
                        }
                        else{

                            echo '<hr>Else part of checkActivityCompletionToday conditon inner else - else part -> check for Yes_Activity_ALready_Performed_Today and ac_code not matched';
                            // $data['ac_1_url_lock_value'] = 'unlock';
                            // $data['ac_2_url_lock_value'] = 'unlock';
                            // $data['ac_3_url_lock_value'] = 'unlock';
                            // $this->view('memory_inventory',$data);
                            // exit();
                        }
                    
               }//...........end of checkActivityCompletionToday condition - else part........................


  }

  public function creative_personality_activity_Result_Submit(){

        $ac_code = $_GET['ac_code'];
        $ac_result = $_GET['ac_result'];
        $session_end_time = $_GET['session_end_time'];
        $ac_status = $_GET['ac_status'];
        $activity_lock_value = $_GET['activity_lock_value'];
        $session_end_time = $_GET['session_end_time'];
        $attempt_count = $_GET['attempt_count'];
        $last_inserted_row = $_GET['last_inserted_row'];

        $session_id = $this->getSession('mobile_number');

        $check_activity_completion = $this->activityModel->checkActivityCompletionToday($session_id,$ac_code);

        if($check_activity_completion['status'] == 'No_Entry_Found_In_Database_For_Today')
        {       
        $final_data_submit = $this->activityModel->addScore($ac_result, $session_end_time, $ac_status, $activity_lock_value, $attempt_count,$last_inserted_row);
            
            if($final_data_submit == true)
                {
                    $row_id = $last_inserted_row;
                    $values = $this->activityModel->get_activity_score_data($row_id);
                    if($values['as_ac_code']== 'test_ac_08' && $values['as_attempt_count'] == '1' && $values['as_ac_status'] == 'complete')
                    {
                        $data['ac_8_url_lock_value'] = $values['as_activity_lock_value'];
                        $this->redirect('activityController/ac_8_creativity_personality_test_redirector',$data);
                        exit();
                    }

                    elseif ($values['as_ac_code']== 'test_ac_09' && $values['as_attempt_count'] == '1' && $values['as_ac_status'] == 'complete') {
                        $data['ac_9_url_lock_value'] = $values['as_activity_lock_value'];
                        $this->redirect('activityController/ac_9_creativity_personality_test_redirector',$data);
                        exit();
                    }

                    elseif ($values['as_ac_code']== 'test_ac_10' && $values['as_attempt_count'] == '1' && $values['as_ac_status'] == 'complete') {
                        $data['ac_10_url_lock_value'] = $values['as_activity_lock_value'];
                        $this->redirect('activityController/ac_10_creativity_personality_test_redirector',$data);
                        exit();
                    }
                    else{
                        $data['ac_8_url_lock_value'] = 'unlock';
                        $data['ac_9_url_lock_value'] = 'unlock';
                        $data['ac_10_url_lock_value'] = 'unlock';
                        $this->view('creativity_personality_test',$data);
                        exit();
                    }

                }
                else
                {
                    $this->view("activity8");
                }
      
            }
            
            elseif($check_activity_completion['status'] == 'Yes_Activity_Already_Performed_Today')
            {
                $get_intial_activity_data_entry_row_id = $this->activityModel->get_Initial_Activity_Entry_Data($session_id,$ac_code);

                
                    if($get_intial_activity_data_entry_row_id['status'] == 'Yes_Incomplete_Activity_Data_Found')
                    { //.......if the status of checkActivityCompletionToday is = 'Yes_Incomplete_Activity_Data_Found'........then lock the activity........
                        //....................now check for ac_code to set up the session value for locking the activity........
                        
                        //................also check if the initial data is submited then delete the row after checking it if it is ac_status is incomplete and attempt_count is -1.......

                        $deleteInitialActivityData = $this->activityModel->quickDeleteInitialActivityScore($get_intial_activity_data_entry_row_id['row_id']);
                        
                               if($deleteInitialActivityData['status']=='Row_Deleted')
                                {
                                            if($ac_code == 'test_ac_08')
                                            {
                                                $data['ac_8_url_lock_value'] = 'lock';
                                                $this->redirect('activityController/ac_8_creativity_personality_test_redirector',$data);
                                                exit();                    
                                            }

                                            elseif ($ac_code == 'test_ac_09') {
                                                $data['ac_9_url_lock_value'] = 'lock';
                                                $this->redirect('activityController/ac_9_creativity_personality_test_redirector',$data);
                                                exit();
                                            }

                                            elseif ($ac_code == 'test_ac_10') {
                                                $data['ac_10_url_lock_value'] = 'lock';
                                                $this->redirect('activityController/ac_10_creativity_personality_test_redirector',$data);
                                                exit();
                                            }
                                            else{

                                                echo '<hr>Else part of checkActivityCompletionToday conditon inner else - else part -> check for Yes_Activity_ALready_Performed_Today and ac_code not matched';
                                                die('<hr>Die at 1479');
                                                // $data['ac_1_url_lock_value'] = 'unlock';
                                                // $data['ac_2_url_lock_value'] = 'unlock';
                                                // $data['ac_3_url_lock_value'] = 'unlock';
                                                // $this->view('memory_inventory',$data);
                                                // exit();
                                            }
                                    
                                }
                                else{
                                    echo "Error in Processing with quickDeleteInitialActivityScore function - data not delete";
                                    die("<hr> Die at 1508");
                                }
                
                    
                    }
    
                }
               //...........end of checkActivityCompletionToday condition - elseif part for status = 'Yes_Incomplete_Activity_Data_Found'........................  

               else{ //.......if the status of checkActivityCompletionToday is = 'Yes_Activity_Already_Performed_Today'........then lock the activity........
                //....................now check for ac_code to set up the session value for locking the activity........
                
                //................also check if the initial data is submited then delete the row after checking it if it is ac_status is incomplete and attempt_count is -1.......

                        if($ac_code == 'test_ac_08')
                        {
                            $data['ac_8_url_lock_value'] = 'lock';
                            $this->redirect('activityController/ac_8_creativity_personality_test_redirector',$data);
                            exit();
                        }

                        elseif ($ac_code == 'test_ac_09') {
                            $data['ac_9_url_lock_value'] = 'lock';
                            $this->redirect('activityController/ac_9_creativity_personality_test_redirector',$data);
                            exit();
                        }

                        elseif ($ac_code == 'test_ac_10') {
                            $data['ac_10_url_lock_value'] = 'lock';
                            $this->redirect('activityController/ac_10_creativity_personality_test_redirector',$data);
                            exit();
                        }
                        else{

                            echo '<hr>Else part of checkActivityCompletionToday conditon inner else - else part -> check for Yes_Activity_ALready_Performed_Today and ac_code not matched';
                            // $data['ac_1_url_lock_value'] = 'unlock';
                            // $data['ac_2_url_lock_value'] = 'unlock';
                            // $data['ac_3_url_lock_value'] = 'unlock';
                            // $this->view('memory_inventory',$data);
                            // exit();
                        }
                    
               }//...........end of checkActivityCompletionToday condition - else part........................


  }

  public function motor_performance_activity_Result_Submit(){

        $ac_code = $_GET['ac_code'];
        $ac_result = $_GET['ac_result'];
        $session_end_time = $_GET['session_end_time'];
        $ac_status = $_GET['ac_status'];
        $activity_lock_value = $_GET['activity_lock_value'];
        $session_end_time = $_GET['session_end_time'];
        $attempt_count = $_GET['attempt_count'];
        $last_inserted_row = $_GET['last_inserted_row'];

        $session_id = $this->getSession('mobile_number');

        $check_activity_completion = $this->activityModel->checkActivityCompletionToday($session_id,$ac_code);

        if($check_activity_completion['status'] == 'No_Entry_Found_In_Database_For_Today')
        {       
        $final_data_submit = $this->activityModel->addScore($ac_result, $session_end_time, $ac_status, $activity_lock_value, $attempt_count,$last_inserted_row);
            
            if($final_data_submit == true)
                {
                    $row_id = $last_inserted_row;
                    $values = $this->activityModel->get_activity_score_data($row_id);
                    if($values['as_ac_code']== 'test_ac_11' && $values['as_attempt_count'] == '1' && $values['as_ac_status'] == 'complete')
                    {
                        $data['ac_11_url_lock_value'] = $values['as_activity_lock_value'];
                        $this->redirect('activityController/ac_11_motor_performance_test_redirector',$data);
                        exit();
                    }

                    elseif ($values['as_ac_code']== 'test_ac_12' && $values['as_attempt_count'] == '1' && $values['as_ac_status'] == 'complete') {
                        $data['ac_12_url_lock_value'] = $values['as_activity_lock_value'];
                        $this->redirect('activityController/ac_12_motor_performance_test_redirector',$data);
                        exit();
                    }

                    elseif ($values['as_ac_code']== 'test_ac_13' && $values['as_attempt_count'] == '1' && $values['as_ac_status'] == 'complete') {
                        $data['ac_13_url_lock_value'] = $values['as_activity_lock_value'];
                        $this->redirect('activityController/ac_13_motor_performance_test_redirector',$data);
                        exit();
                    }
                    else{
                        $data['ac_11_url_lock_value'] = 'unlock';
                        $data['ac_12_url_lock_value'] = 'unlock';
                        $data['ac_13_url_lock_value'] = 'unlock';
                        $this->view('motor_performance_test',$data);
                        exit();
                    }

                }
                else
                {
                    $this->view("activity8");
                }
      
            }
            
            elseif($check_activity_completion['status'] == 'Yes_Activity_Already_Performed_Today')
            {
                $get_intial_activity_data_entry_row_id = $this->activityModel->get_Initial_Activity_Entry_Data($session_id,$ac_code);

                
                    if($get_intial_activity_data_entry_row_id['status'] == 'Yes_Incomplete_Activity_Data_Found')
                    { //.......if the status of checkActivityCompletionToday is = 'Yes_Incomplete_Activity_Data_Found'........then lock the activity........
                        //....................now check for ac_code to set up the session value for locking the activity........
                        
                        //................also check if the initial data is submited then delete the row after checking it if it is ac_status is incomplete and attempt_count is -1.......

                        $deleteInitialActivityData = $this->activityModel->quickDeleteInitialActivityScore($get_intial_activity_data_entry_row_id['row_id']);
                        
                               if($deleteInitialActivityData['status']=='Row_Deleted')
                                {
                                            if($ac_code == 'test_ac_11')
                                            {
                                                $data['ac_11_url_lock_value'] = 'lock';
                                                $this->redirect('activityController/ac_11_motor_performance_test_redirector',$data);
                                                exit();                    
                                            }

                                            elseif ($ac_code == 'test_ac_12') {
                                                $data['ac_12_url_lock_value'] = 'lock';
                                                $this->redirect('activityController/ac_12_motor_performance_test_redirector',$data);
                                                exit();
                                            }

                                            elseif ($ac_code == 'test_ac_13') {
                                                $data['ac_13_url_lock_value'] = 'lock';
                                                $this->redirect('activityController/ac_13_motor_performance_test_redirector',$data);
                                                exit();
                                            }
                                            else{

                                                echo '<hr>Else part of checkActivityCompletionToday conditon inner else - else part -> check for Yes_Activity_ALready_Performed_Today and ac_code not matched';
                                                die('<hr>Die at 1479');
                                                // $data['ac_1_url_lock_value'] = 'unlock';
                                                // $data['ac_2_url_lock_value'] = 'unlock';
                                                // $data['ac_3_url_lock_value'] = 'unlock';
                                                // $this->view('memory_inventory',$data);
                                                // exit();
                                            }
                                    
                                }
                                else{
                                    echo "Error in Processing with quickDeleteInitialActivityScore function - data not delete";
                                    die("<hr> Die at 1508");
                                }
                
                    
                    }
    
                }
               //...........end of checkActivityCompletionToday condition - elseif part for status = 'Yes_Incomplete_Activity_Data_Found'........................  

               else{ //.......if the status of checkActivityCompletionToday is = 'Yes_Activity_Already_Performed_Today'........then lock the activity........
                //....................now check for ac_code to set up the session value for locking the activity........
                
                //................also check if the initial data is submited then delete the row after checking it if it is ac_status is incomplete and attempt_count is -1.......

                        if($ac_code == 'test_ac_11')
                        {
                            $data['ac_11_url_lock_value'] = 'lock';
                            $this->redirect('activityController/ac_11_motor_performance_test_redirector',$data);
                            exit();
                        }

                        elseif ($ac_code == 'test_ac_12') {
                            $data['ac_12_url_lock_value'] = 'lock';
                            $this->redirect('activityController/ac_12_motor_performance_test_redirector',$data);
                            exit();
                        }

                        elseif ($ac_code == 'test_ac_13') {
                            $data['ac_13_url_lock_value'] = 'lock';
                            $this->redirect('activityController/ac_13_motor_performance_test_redirector',$data);
                            exit();
                        }
                        else{

                            echo '<hr>Else part of checkActivityCompletionToday conditon inner else - else part -> check for Yes_Activity_ALready_Performed_Today and ac_code not matched';
                            // $data['ac_1_url_lock_value'] = 'unlock';
                            // $data['ac_2_url_lock_value'] = 'unlock';
                            // $data['ac_3_url_lock_value'] = 'unlock';
                            // $this->view('memory_inventory',$data);
                            // exit();
                        }
                    
               }//...........end of checkActivityCompletionToday condition - else part........................


  }

  public function workbook_activity_Result_Submit(){

    $ac_code = $_GET['ac_code'];
        $ac_result = $_GET['ac_result'];
        $session_end_time = $_GET['session_end_time'];
        $ac_status = $_GET['ac_status'];
        $activity_lock_value = $_GET['activity_lock_value'];
        $session_end_time = $_GET['session_end_time'];
        $attempt_count = $_GET['attempt_count'];
        $last_inserted_row = $_GET['last_inserted_row'];

        $session_id = $this->getSession('mobile_number');

        $check_activity_completion = $this->activityModel->checkActivityCompletionToday($session_id,$ac_code);

        if($check_activity_completion['status'] == 'No_Entry_Found_In_Database_For_Today')
        {       
        $final_data_submit = $this->activityModel->addScore($ac_result, $session_end_time, $ac_status, $activity_lock_value, $attempt_count,$last_inserted_row);
            
            if($final_data_submit == true)
                {
                    $row_id = $last_inserted_row;
                    $values = $this->activityModel->get_activity_score_data($row_id);
                    if($values['as_ac_code']== 'test_ac_14' && $values['as_attempt_count'] == '1' && $values['as_ac_status'] == 'complete')
                    {
                        $data['ac_14_url_lock_value'] = $values['as_activity_lock_value'];
                        $this->redirect('activityController/ac_14_workbook_redirector',$data);
                        exit();
                    }

                    elseif ($values['as_ac_code']== 'test_ac_15' && $values['as_attempt_count'] == '1' && $values['as_ac_status'] == 'complete') {
                        $data['ac_15_url_lock_value'] = $values['as_activity_lock_value'];
                        $this->redirect('activityController/ac_15_workbook_redirector',$data);
                        exit();
                    }

                    elseif ($values['as_ac_code']== 'test_ac_16' && $values['as_attempt_count'] == '1' && $values['as_ac_status'] == 'complete') {
                        $data['ac_16_url_lock_value'] = $values['as_activity_lock_value'];
                        $this->redirect('activityController/ac_16_workbook_redirector',$data);
                        exit();
                    }
                    else{
                        $data['ac_14_url_lock_value'] = 'unlock';
                        $data['ac_15_url_lock_value'] = 'unlock';
                        $data['ac_16_url_lock_value'] = 'unlock';
                        $this->view('motor_performance_test',$data);
                        exit();
                    }

                }
                else
                {
                    $this->view("activity14");
                }
      
            }
            
            elseif($check_activity_completion['status'] == 'Yes_Activity_Already_Performed_Today')
            {
                $get_intial_activity_data_entry_row_id = $this->activityModel->get_Initial_Activity_Entry_Data($session_id,$ac_code);

                
                    if($get_intial_activity_data_entry_row_id['status'] == 'Yes_Incomplete_Activity_Data_Found')
                    { //.......if the status of checkActivityCompletionToday is = 'Yes_Incomplete_Activity_Data_Found'........then lock the activity........
                        //....................now check for ac_code to set up the session value for locking the activity........
                        
                        //................also check if the initial data is submited then delete the row after checking it if it is ac_status is incomplete and attempt_count is -1.......

                        $deleteInitialActivityData = $this->activityModel->quickDeleteInitialActivityScore($get_intial_activity_data_entry_row_id['row_id']);
                        
                               if($deleteInitialActivityData['status']=='Row_Deleted')
                                {
                                            if($ac_code == 'test_ac_14')
                                            {
                                                $data['ac_14_url_lock_value'] = 'lock';
                                                $this->redirect('activityController/ac_14_workbook_redirector',$data);
                                                exit();                    
                                            }

                                            elseif ($ac_code == 'test_ac_15') {
                                                $data['ac_15_url_lock_value'] = 'lock';
                                                $this->redirect('activityController/ac_15_workbook_redirector',$data);
                                                exit();
                                            }

                                            elseif ($ac_code == 'test_ac_16') {
                                                $data['ac_16_url_lock_value'] = 'lock';
                                                $this->redirect('activityController/ac_16_workbook_redirector',$data);
                                                exit();
                                            }
                                            else{

                                                echo '<hr>Else part of checkActivityCompletionToday conditon inner else - else part -> check for Yes_Activity_ALready_Performed_Today and ac_code not matched';
                                                die('<hr>Die at 1479');
                                                // $data['ac_1_url_lock_value'] = 'unlock';
                                                // $data['ac_2_url_lock_value'] = 'unlock';
                                                // $data['ac_3_url_lock_value'] = 'unlock';
                                                // $this->view('memory_inventory',$data);
                                                // exit();
                                            }
                                    
                                }
                                else{
                                    echo "Error in Processing with quickDeleteInitialActivityScore function - data not delete";
                                    die("<hr> Die at 1508");
                                }
                
                    
                    }
    
                }
               //...........end of checkActivityCompletionToday condition - elseif part for status = 'Yes_Incomplete_Activity_Data_Found'........................  

               else{ //.......if the status of checkActivityCompletionToday is = 'Yes_Activity_Already_Performed_Today'........then lock the activity........
                //....................now check for ac_code to set up the session value for locking the activity........
                
                //................also check if the initial data is submited then delete the row after checking it if it is ac_status is incomplete and attempt_count is -1.......

                        if($ac_code == 'test_ac_14')
                        {
                            $data['ac_14_url_lock_value'] = 'lock';
                            $this->redirect('activityController/ac_14_workbook_redirector',$data);
                            exit();
                        }

                        elseif ($ac_code == 'test_ac_15') {
                            $data['ac_15_url_lock_value'] = 'lock';
                            $this->redirect('activityController/ac_15_workbook_redirector',$data);
                            exit();
                        }

                        elseif ($ac_code == 'test_ac_16') {
                            $data['ac_16_url_lock_value'] = 'lock';
                            $this->redirect('activityController/ac_16_workbook_redirector',$data);
                            exit();
                        }
                        else{

                            echo '<hr>Else part of checkActivityCompletionToday conditon inner else - else part -> check for Yes_Activity_ALready_Performed_Today and ac_code not matched';
                            // $data['ac_1_url_lock_value'] = 'unlock';
                            // $data['ac_2_url_lock_value'] = 'unlock';
                            // $data['ac_3_url_lock_value'] = 'unlock';
                            // $this->view('memory_inventory',$data);
                            // exit();
                        }
                    
               }//...........end of checkActivityCompletionToday condition - else part........................



  }

}


?>
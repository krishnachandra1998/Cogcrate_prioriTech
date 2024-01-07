<?php 

class activityModel extends database {

  
  public function addScore($ac_result, $session_end_time, $ac_status, $activity_lock_value, $attempt_count,$last_inserted_row){

  	if($this->Query("UPDATE activity_score SET ac_result = ?, session_end_time = ?, ac_status = ?, activity_lock_value = ?, attempt_count = ? WHERE activity_score_id = ?",[$ac_result, $session_end_time, $ac_status,$activity_lock_value,$attempt_count,$last_inserted_row])){
      
        return true;
  	}

  	else{
  		die("die in final submission");
  	}
  }


  public function addStartData($startActivityData){


    if($this->Query("INSERT INTO activity_score(session_uid,session_url,ac_code,ac_result,session_start_time,session_end_time,ac_status,activity_lock_value,attempt_count) VALUES(?,?,?,?,?,?,?,?,?) ",$startActivityData))
  {
   
        $last_inserted_row_in_as = $this->lastInsertedId();
        return['status'=>"Data_Inserted",'last_inserted_row'=>$last_inserted_row_in_as];

  }
  else
  {
      die("die at else in model from start time save");
  }
}

  public function checkActivityDuplicate($session_uid, $session_start_time, $session_end_time, $ac_code)
  {

     //.....................................

     if($this->Query("SELECT * FROM activity_score WHERE session_uid = ? and session_start_time = ? and session_end_time = 'none' and ac_code = ? ORDER BY session_end_time DESC LIMIT 1",[$session_uid,$session_start_time,$ac_code]))
    {

        $row = $this->fetch();
        //$activity_score_id = $row->activity_score_id;
        // $sessionEndTime = $row->session_end_time;
        // $fac_code = $row->ac_code;
        // echo "<br> activity score id is: ".$activity_score_id."<br>";
        // echo "session end time is: ".$sessionEndTime;
        if($this->rowCount()>0 && $row->ac_code  == $ac_code && $row->session_end_time == 'none')
        {
            return ['status'=>'Row_Number_Found','activity_score_id'=>$row->activity_score_id, 'sessionTIme'=>$row->session_end_time];
        }
        else
        {
            return ['status'=>'Row_Number_Not_Found'];

        }
    }

    //......................................

  }

  public function deleteActivityData($session_uid, $session_start_time, $session_end_time, $ac_code)
  {
     //.....................................

    if($this->Query("DELETE FROM activity_score WHERE session_uid = ? and session_start_time = ? and session_end_time IS NOT NULL and ac_code = ? ORDER BY session_end_time DESC LIMIT 1",[$session_uid,$session_start_time,$ac_code]))
    {
        return ['status'=>'Row_Deleted'];
    }
    else
    {
        return ['status'=>'Row_Not_Deleted'];

    }

    //......................................

  }

  public function get_activity_score_data($row_id)
  {
    if($this->Query("SELECT * FROM activity_score WHERE activity_score_id = ?",[$row_id]))
    {

        if($this->rowCount()>0)
        {
            $row = $this->fetch();
            $as_id = $row->activity_score_id;
            $as_session_end_time = $row->session_end_time;
            $as_status = $row->ac_status;
            $as_attempt_count = $row->attempt_count;
            $as_activity_lock_value = $row->activity_lock_value;
            $as_ac_code = $row->ac_code;
            $as_ac_result = $row->ac_result;

            return ['status'=>'Get_Activity_Data','as_session_end_time'=>$as_session_end_time,'as_ac_status'=>$as_status,'as_attempt_count'=>$as_attempt_count,'as_activity_lock_value'=>$as_activity_lock_value,'as_ac_code'=>$as_ac_code,'as_ac_result'=>$as_ac_result];    

        }
        else
        {
            return ['status'=>'Not_Get_Activity_Lock_Value']; 
        }
    }

  }

  public function get_user_data($row_id)
  {
    if($this->Query("SELECT * FROM registration WHERE mobile_number = ?",[$row_id]))
    {

        if($this->rowCount()>0)
        {
            $row = $this->fetch();
            $name = $row->name;
            $age = $row->age;
            $gender = $row->gender;
            $mobile_number = $row->mobile_number;
            $asd = $row->asd;

            return ['status'=>'Get_User_Data','name'=>$name,'age'=>$age,'gender'=>$gender,'mobile_number'=>$mobile_number,'asd'=>$asd];    

        }
        else
        {
            return ['status'=>'Not_Get_User_Data']; 
        }
    }

  }

  public function get_user_activity_data_of_7_days($user_id){
    if($this->Query("SELECT * FROM activity_score WHERE created_at >= NOW() - INTERVAL 7 DAY AND session_uid = ? GROUP BY created_at;",[$user_id]))
    {

        if($this->rowCount()>0)
        {
            $activity_data = $this->fetchall();
            
            //return ['status'=>'Get_Last_7_Days_Activities_Data','activity_data'=>$activity_data]; 
            return $activity_data;
        }
        else
        {
            $activity_data = "";
            return $activity_data; 
        }
    }
  }

  public function get_current_user_logout_status($row_id)
  {
    if($this->Query("SELECT * FROM login WHERE logout_date = 'none' AND logout_time = 'none' AND login_id = ?",[$row_id]))
    {

        if($this->rowCount()>0)
        {
            $row = $this->fetch();
            $current_user_logout_date = $row->logout_date;
            $current_user_logout_time = $row->logout_time;

            return ['status'=>'User_is_Currently_Logged_In','current_user_logout_date'=>$current_user_logout_date,'current_user_logout_time' => $current_user_logout_time];

        }
        else
        {
            return ['status'=>'User_is_Currently_Logged_Out'];
        }
    }

  }
  

    public function checkActivityCompletionToday($session_id,$ac_code){

        if($this->Query("SELECT * from activity_score where session_uid = ? and ac_code = ? and date(created_at) = CURDATE() and ac_status = 'complete' and attempt_count = 1",[$session_id,$ac_code]))
        {
            if($this->rowCount()>0)
            {
                $row = $this->fetchall();
                print_r($row);
                return ['status'=>'Yes_Activity_Already_Performed_Today'];
            }
            else
            {
                return ['status'=>'No_Entry_Found_In_Database_For_Today'];
            }

        }
        else{
            echo "<hr>Error in Processing the Qurey at activityModel <br>";
            die('line no 194 in activityModel');
        }
    }

    public function get_Initial_Activity_Entry_Data($session_id,$ac_code)
    {
        if($this->Query("SELECT * from activity_score where session_uid = ? and ac_code = ? and date(created_at) = CURDATE() and ac_status = 'incomplete' and attempt_count = -1",[$session_id,$ac_code]))
            {
                
                if($this->rowCount()>0)
                {
                    $row = $this->fetch();
                    $row_id = $row->activity_score_id;
                    print_r($row);
                    //die('<hr> Die at 208 in activityModel');
                    return ['status'=>'Yes_Incomplete_Activity_Data_Found','row_id'=>$row_id];
                }
                else
                {
                    return ['status'=>'No_Entry_Found_In_Database_For_Today'];
                }

            }

            else{
                echo "<hr>Error in Processing the Qurey at activityModel for get_Initial_Activity_Entry_Data function <br>";
                die('line no 220 in activityModel');
            }
    }

    public function quickDeleteInitialActivityScore($row_id)
    {

        if($this->Query("DELETE FROM activity_score WHERE activity_score_id = ?",[$row_id]))
        {
            return ['status'=>'Row_Deleted'];
        }
        else
        {
            return ['status'=>'Row_Not_Deleted'];
    
        }

    }


  public function sessionUID($user_id){
    if($this->Query("SELECT user_id FROM login WHERE user_id = ?",[$user_id]))
    {

        if($this->rowCount()>0)
        {
            $row = $this->fetch();
            $ui = $row->user_id;
            return ['status'=>'Mobile_Number_Found','data'=>$ui];    

        }
        else
        {
            return ['status'=>'Mobile_Number_Not_Found']; 
        }
    }
  }

  //............................Performance Percentage data......................................


 public function get_last_7_days_percentage($session_uid,$ac_code,$divisor_value){

    $qurey = "SELECT round((SUM(ac_result) * 100) / (SELECT COUNT(*)*? FROM activity_score WHERE session_uid = ? AND ac_code = ? AND date(created_at) >= CURDATE() - INTERVAL 7 day), 2) AS percentage FROM activity_score WHERE session_uid = ? AND ac_code = ? AND date(created_at) >= CURDATE() - INTERVAL 7 day";
    if($this->Query($qurey,[$divisor_value,$session_uid,$ac_code,$session_uid,$ac_code]))
    {
    $row = $this->fetch();
    $percentage_value = $row -> percentage;
    
    return $percentage_value;
    //return['status'=>'Percentage_For_Last_7_Days_Calculated','ac_code'=>$ac_code,'percentage_value'=>$percentage_value];


    }
    else
    {
        $percentage_value = -1;
        return $percentage_value;
        //return['status'=>'Percentage_For_Last_7_Days_Not_Calculated','ac_code'=>$ac_code,'percentage_value'=>0];
    }

 }

public function get_last_7_days_percentage_per_day($user_id){
    if ($this->Query("SELECT session_uid, date(created_at) AS date, ROUND(SUM(ac_result) * 100 / 118, 2) AS percentage FROM activity_score WHERE session_uid = ? AND date(created_at) >= CURDATE() - INTERVAL 7 day GROUP BY date(created_at) ORDER BY `created_at` DESC",[$user_id])) {
        if($this->rowCount()>0)
        {
            $percentage_data = $this->fetchall();
            
            //return ['status'=>'Get_Last_7_Days_Activities_Data','activity_data'=>$activity_data]; 
            return $percentage_data;
        }
        else
        {
            $percentage_data = "";
            return $percentage_data; 
        }
    }
}

}


?>
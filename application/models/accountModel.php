<?php

class accountModel extends database{

public function checkEmail($email)
{
    if($this->Query("SELECT email FROM register WHERE email = ?",[$email])){
        if($this->rowCount()>0){
            return false;
        }
        else{
            return true;
        }
    }  
}

public function checkMobile($mobile)
{
    if($this->Query("SELECT mobile FROM registration WHERE mobile_number = ?",[$mobile])){
        if($this->rowCount()>0){
            return false;
        }
        else{
            return true;
        }
    }  
}

public function createNewAccount($data)
{
    if($this->Query("INSERT INTO registration(name,age,gender,mobile_number,asd) VALUES(?,?,?,?,?)",$data))
    {
        return true;
    }
    else 
    {
       return false;
    }  
}


public function userLogin($mobile_number)
{
    if($this->Query("SELECT mobile_number FROM registration WHERE mobile_number = ?",[$mobile_number]))
    {
        if($this->rowCount()>0)
        {
            $row = $this->fetch();
            $mn = $row->mobile_number;
            return ['status'=>'Mobile_Number_Found','data'=>$mn];    

        }
        else
        {
            return ['status'=>'Mobile_Number_Not_Found']; 
        }
    }

} 

//.........Check User Logout Value.........

public function check_User_Logout($mobile_number,$logout_date,$logout_time)
{

    if($this->Query("SELECT * FROM login WHERE user_id = ? and logout_date = 'none' and logout_time = 'none' ORDER BY login_date DESC, login_time DESC LIMIT 1",[$mobile_number]))
    {
        $row = $this->fetch();
        $login_row_id = $row->login_id;
        $mn = $row->user_id;
        $logout_date = $row->logout_date;
        $logout_time = $row->logout_time;

       // echo "<br>Inside Account Model - Login Row Id : " . $login_row_id . " | MN : " . $mn . " | Logout date : " . $logout_date . " | Logout Time : " . $logout_time . "<hr>";
        //die("Die at Line Number 75 in Account Model");

        if($this->rowCount()>0 && $logout_date  == 'none' && $logout_time == 'none')
        {
            return ['status'=>'Logout_Data_Not_Found','mn'=>$mn,'logout_date'=>$logout_date,'logout_time'=>$logout_time,'login_row_id' => $login_row_id];
                
        }
        else
        {
            return ['status'=>'Already_Logout','mn'=>$mn,'logout_date'=>$logout_date,'logout_time'=>$logout_time,'login_row_id' => $login_row_id];

        }
    }

} 

//........End of User Logout Value.........

//....LDF FORM.........

public function ldf_data_inserted($mobile_number, $login_date,$login_time,$logout_date, $logout_time){

    if($this->Query("INSERT INTO login(user_id,login_date,login_time,logout_date,logout_time) VALUES(?,?,?,?,?)",[$mobile_number,$login_date, $login_time,$logout_date, $logout_time])){
        return true;
    }
    else{
        die("ldf die at account model");
    }

}



//.....END OF LDF FORM.....

//......... Update the Logout date value and Logout time value..............

public function addLogoutDateTime($logout_date, $logout_time,$mobile_number,$row_id){
    if ($this->Query("UPDATE login SET logout_date = ?, logout_time=? WHERE login_id = ? AND user_id = ?",[$logout_date,$logout_time,$row_id,$mobile_number])) {
        return true;
    }
    else{
        return false;
    }
}

//.........END of Update the Logout date value and Logout time value..............

public function getUserName($user_id)
{
       if( $this->Query("SELECT name FROM users WHERE id = ?",[$user_id])){

            $data = $this->fetchAll();
    
            return $data;
    
        }
        else{
            
            echo "<div style='margin:0px;padding:10px;background-color:#999;color:#000'>
            Sorry there is an error with the user data !!
            </div>";
            
            return false;
        }
    
    
}


//...end of accountModel class....
}


?>
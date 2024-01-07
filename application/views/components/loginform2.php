<div class="form-container">
        <form id="loginForm" action="<?php echo BASEURL;?>/accountController/login_check" method="post" class="loginForm">
            <div class="logo-name">
            <a href="<?php echo BASEURL;?>/accountController/index"><img src="<?php echo BASEURL;?>/public/assets/img/logo.png"></a>
        </div>
        <h2>Login</h2>

            <div class="form-group">
                <input type="text" name="name" id="name" placeholder="Name" required>
            </div>
            <div class="form-group">
                <input type="number" name="age" id="age" placeholder="Age" required>
                <input type="checkbox" id="asd" name="asd" value="yes">
                <label for="ASD"><b>ASD</b></label>
                <select id="gender" name="gender" required>
                    <option value="" disabled selected>Gender</option>
                    <option name="gender" value="male">Male</option>
                    <option name="gender" value="female">Female</option>
                    <option name="gender" value="other">Other</option>
                </select>

            </div>
            <div class="form-group">
                <input type="text" name="mobile_number" id="mobile" placeholder="Mobile Number" maxlength="10" pattern="[0-9]{10}" required>
            </div>
            <div class="form-group">
                <input class="btn btn-primary" type="submit" name="submit" value="Submit">
            </div>
            
          <!---  <button type="button" onclick="submitForm()" >Submit</button> -->
        </form>
    </div>

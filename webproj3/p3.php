<?php

/*
    John, Angeline Flora
    jadrn021
    Project #3
    Fall 2017
*/


function validate_data($params) {
    $msg = "";

    $states = array("AK","AL","AR","AZ","CA","CO","CT","DC",
    "DE","FL","GA","GU","HI","IA","ID","IL","IN","KS","KY","LA","MA",
    "MD","ME","MH","MI","MN","MO","MS","MT","NC","ND","NE","NH","NJ",
    "NM","NV","NY","OH","OK","OR","PA","PR","RI","SC","SD","TN","TX",
    "UT","VA","VT","WA","WI","WV","WY");
    
    
    if(empty($params[1]))
        $msg .= "Please enter the firstname<br />";  
    elseif(strlen($params[3]) == 0)
        $msg .= "Please enter the lastname<br />"; 
    elseif(strlen($params[4]) == 0)
        $msg .= "Please enter the address<br />"; 
    elseif(strlen($params[5]) == 0)
        $msg .= "Please enter the apartment number<br />"; 
    elseif(strlen($params[6]) == 0)
        $msg .= "Please enter the city<br />"; 
    elseif(strlen($params[7]) == 0)
        $msg .= "Please enter the state<br />";  
    elseif(!in_array($params[7],$states))  
        $msg .= "Please enter valid two letter state abbreviation in uppercase";                   
    elseif(empty($params[8]))
        $msg .= "Zip code may not be empty<br />";
    elseif(strlen($params[8]) < 5)
        $msg .= "Please enter 5 digit zip code<br />";
    elseif(!is_numeric($params[8])) 
        $msg .= "Zip code may contain only numeric digits<br />";
    elseif(strlen($params[9]) == 0)
        $msg .= "Please enter month<br />";
    elseif(strlen($params[10]) == 0)
        $msg .= "Please enter date<br />";
    elseif(strlen($params[11]) == 0)
        $msg .= "Please enter year<br />";
    elseif(!is_numeric($params[9]) || !is_numeric($params[10]) || !is_numeric($params[11]))
        $msg .= "Date may contain only numeric digits <br/>";
    elseif(strlen($params[12]) == 0)
        $msg .= "Please enter email<br />";
    elseif(!filter_var($params[12], FILTER_VALIDATE_EMAIL))
        $msg .= "Your email appears to be invalid<br/>";
    elseif(empty($params[13]))
        $msg .= "Area code may not be empty<br />";
    elseif(!empty($params[13]) && strlen($params[13]) < 3)
        $msg .= "Please enter 3 digit area code<br/>";
    elseif(strlen($params[14]) == 0)
        $msg .= "Please enter the phone prefix<br />";
    elseif(!empty($params[14]) && strlen($params[14]) < 3)
        $msg .= "Please enter 3 digit phone prefix<br/>";
    elseif(strlen($params[15]) == 0)
        $msg .= "Please enter the phone number<br />";
    elseif(!empty($params[15]) && strlen($params[15]) < 4)
        $msg .= "Please enter 4 digit phone number<br/>";
    elseif(!is_numeric($params[13]) || !is_numeric($params[14]) || !is_numeric($params[15]))
        $msg .= "Phone number may contain only numeric digits <br/>";
    elseif(empty($params[16]))
        $msg .= "Please enter gender<br />";
    elseif(empty($params[17]))
        $msg .= "Please select experience level <br/>";
    elseif(empty($params[18]))
        $msg .= "Please select experience category <br/>";            
    if($msg) {
        write_form_error_page($msg);
        exit;
        }
    }
    
function write_form_error_page($msg) {
    write_header();
    echo "<div id=\"message_line\">",
    $msg,"</div>";
    write_form();
    write_footer();
    }  
    
function write_form() {
   print <<<ENDBLOCK
    
 <body class="form-body">

    <div class="links">
        <a href="index.html"> SDSU Marathon</a>
        <br />
        <a href="index.html#about"> About</a>
        <br />
        <a href="forms.html">Sign Up!</a>
    </div>
    <div class="form-style">
    <form name="submit" id="signup" action="process_request.php" method="post" enctype="multipart/form-data">
    <fieldset>
    <legend><span class="number">1</span> Candidate Info</legend>
            <label for="img">Upload your image*</label><br />
            <input type="file" accept="image/*" name="img" value="img" id="img" required="">  
            <br />
            <br />
            <div id ="message_line">&nbsp;</div>            
            <br />
            <div class="sameline">
         <label >Name</label>
         <input type="text"  placeholder="First Name*" id="fname" name = "fname" value="$_POST[fname]" style="width:250px;" /> 
         <input type="text"  placeholder="Middle Name" id="mname" name = "mname" value="$_POST[mname]" style="width:250px;" />
        <input type="text" placeholder="Last Name*" id="lname" name="lname" value="$_POST[lname]" style="width:250px;" />
        </div>

                                    <label>Address Line 1</label>
                                    <input type="text"  placeholder="Street address*" id="address1" value="$_POST[address1]" name="address1" />
                                    <label>Address Line 2</label>
                                        <input type="text"  placeholder="Apartment,Floor,etc*" id="address2" value="$_POST[address2]" name="address2" />
                                        <div class="sameline">
                                    <input type="text"  placeholder="City*" id="city" name="city" value="$_POST[city]" style="width:250px;" />
     
                                    <input type="text" placeholder="State*" id="state" name="state" value="$_POST[state]" style="width:250px;" />
                                   
                                    <input type="text" placeholder="Zip/Postal code*" id="zip" name="zip" value="$_POST[zip]" maxlength="5" style="width:250px;" />
                                 </div>
                                 <div class="sameline">
                                   <label>Date Of Birth*</label>
                                    <div class="sameline">
                                    <input type="text" name="month" id="month" value="" placeholder="MM" value="$_POST[month]"  size="4" maxlength="2" style="width:50px;"  />
                                    <input type="text" name="date" id="date" value="" placeholder="DD" size="4" maxlength="2" value="$_POST[date]" style="width:50px;"/>
                                    <input type="text" name="year" id="year" value="" placeholder="YYYY" size="4" maxlength="4" value="$_POST[year]" style="width:60px;" /> 
                                    </div>

                                         <label>Email</label>
                                    <input type="text" placeholder="Email*" id="email" name="email" value="$_POST[email]" />
                                    <label>Primary Phone</label>
                                    <div class="sameline">
                                        
                                    (
                                        <input type="text" name="area_code" size="3" maxlength="3" id="area_code" value="$_POST[area_code]" style="width:100px;" >
                                    )
                                    
                                    <input type="text" name="prefix" size="3" maxlength="3" id="prefix" value="$_POST[prefix]" style="width:100px;" >
                                    <input type="text" name="phone" size="3" maxlength="4" id="phone" value="$_POST[phone]" style="width:100px;">
                                    </div>
                                    
                                    </div>
                                    
                                    
                                    </fieldset>

                        <legend><span class="number">2</span> Additional Info</legend>
                         <label>Gender*</label>
                                    <input type="radio" value="male" name="gender" />Male <br />
                                    <input type="radio" value="femal" name="gender" />Female <br />
                                    <input type="radio" value="others" name="gender" />Others <br />
                                     <br />
                                      <label>Experience level*</label> 
                                    <input type="radio" value="expert" name="explevel" />Expert <br />
                                    <input type="radio" value="experienced" name="explevel" />Experienced <br />
                                    <input type="radio" value="novice" name="explevel" />Novice <br />
                                     <br />
                                    <label>Category*</label>
                                   
                                    <input type="radio" value="teen" name="category" />Teen <br />
                                    <input type="radio" value="adult" name="category" />Adult <br />
                                    <input type="radio" value="senior" name="category" />Senior <br />
                                     <br />
                                    <label>Medical Condition (If Any)</label>
                                    <textarea rows="5" cols="60" name="medcondition" id="medcondition" value="$_POST[medcondition]"></textarea>
                        <legend><span class="number">*</span> Mandatory fields</legend>
                    <div id="input_buttons">
                        <input type="submit" value="Submit" id = "SubmitBtn">
                        <input type="reset" value="Clear">
            </div>

                            </form>
    <br />

    <footer>
        <div class="container text-center">
            <p>Copyright &copy; SDSU Marathon 2017</p>
        </div>
    </footer>

</body>
                   
ENDBLOCK;
}                        

function process_parameters($params) {
    global $UPLOAD_DIR;
    global $bad_chars;
    $params = array();
    $params[] = $UPLOAD_DIR.trim(str_replace($bad_chars, "",$_POST['img']));
    $params[] = trim(str_replace($bad_chars, "",$_POST['fname']));
    $params[] = trim(str_replace($bad_chars, "",$_POST['mname']));
    $params[] = trim(str_replace($bad_chars, "",$_POST['lname']));
    $params[] = trim(str_replace($bad_chars, "",$_POST['address1']));
    $params[] = trim(str_replace($bad_chars, "",$_POST['address2']));
    $params[] = trim(str_replace($bad_chars, "",$_POST['city']));
    $params[] = trim(str_replace($bad_chars, "",$_POST['state']));
    $params[] = trim(str_replace($bad_chars, "",$_POST['zip'])); //8
    $params[] = trim(str_replace($bad_chars, "",$_POST['month']));
    $params[] = trim(str_replace($bad_chars, "",$_POST['date']));
    $params[] = trim(str_replace($bad_chars, "",$_POST['year']));
    $params[] = trim(str_replace($bad_chars, "",$_POST['email'])); 
    $params[] = trim(str_replace($bad_chars, "",$_POST['area_code']));//13
    $params[] = trim(str_replace($bad_chars, "",$_POST['prefix']));
    $params[] = trim(str_replace($bad_chars, "",$_POST['phone']));
    $params[] = trim(str_replace($bad_chars, "",$_POST['gender']));
    $params[] = trim(str_replace($bad_chars, "",$_POST['explevel']));
    $params[] = trim(str_replace($bad_chars, "",$_POST['category']));
    $params[] = trim(str_replace($bad_chars, "",$_POST['medcondition']));
    
    return $params;
    }
    
function store_data_in_db($params) {
    
    // get a database handler
    $db = get_db_handle();  //method in helpers.php
    
    //echo " in store_data_in_db function";
    $sql = "SELECT * FROM runner WHERE ".
    "fname='$params[1]' AND ".
    "mname='$params[2]' AND ".
    "lname='$params[3]' AND ".
    "addr1='$params[4]' AND ".
    "addr2 = '$params[5]' AND ".
    "city='$params[6]' AND ".
    "state = '$params[7]' AND ".
    "zip = '$params[8]' AND ".
    "month='$params[9]' AND ".
    "dob='$params[10]' AND ".
    "year='$params[11]' AND ".
    "email = '$params[12]' AND ".
    "area = '$params[13]' AND ".
    "prefix = '$params[14]' AND ".  
    "phone='$params[15]' AND ".
    "gender='$params[16]' AND ".
    "explevel='$params[17]' AND ".
    "category='$params[18]' AND ".
    "medcondition ='$params[19]' AND ".
    "impath='$params[0]';";
//echo "The SQL statement is ",$sql;    
    $result = mysqli_query($db, $sql);
    if(mysqli_num_rows($result) > 0) {
        write_form_error_page('This record appears to be a duplicate');
        exit;
    }
//now insert
     //echo "inserting....function";
     $sql = "INSERT INTO runner(fname,mname,lname,addr1,addr2,city,state,zip,area,prefix,phone,email,gender,month,dob,year,medcondition,explevel,category,imgpath) ".
    "VALUES('$params[1]','$params[2]','$params[3]','$params[4]','$params[5]','$params[6]','$params[7]','$params[8]','$params[13]','$params[14]','$params[15]','$params[12]','$params[16]','$params[9]','$params[10]','$params[11]','$params[19]','$params[17]','$params[18]','$params[0]');";
     
//echo "The SQL statement is ",$sql;    
//echo "inserted....";
    mysqli_query($db,$sql);
    $how_many = mysqli_affected_rows($db);
    if ($how_many<0) {
        write_error_page('SQL ERROR: '.mysqli_error($db));
    }
  //echo("There was $how_many row affected");
    close_connector($db);
    }
?>

/*  
        John, Angeline Flora
        Jadrn021
        Project #3
        Fall 2017
*/    

    
    function isEmpty(fieldValue) {
        return $.trim(fieldValue).length == 0;    
        } 
        
    function isValidState(state) {                                
        var stateList = new Array("AK","AL","AR","AZ","CA","CO","CT","DC",
        "DE","FL","GA","GU","HI","IA","ID","IL","IN","KS","KY","LA","MA",
        "MD","ME","MH","MI","MN","MO","MS","MT","NC","ND","NE","NH","NJ",
        "NM","NV","NY","OH","OK","OR","PA","PR","RI","SC","SD","TN","TX",
        "UT","VA","VT","WA","WI","WV","WY");
        for(var i=0; i < stateList.length; i++) 
            if(stateList[i] == $.trim(state))
                return true;
        return false;
        }  
        
    function isValidEmail(emailAddress) {
        var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
        return pattern.test(emailAddress);
        }      


    function isValidDate() {
    var day = document.getElementById("date").value; 
    var month = document.getElementById("month").value;
    var year = document.getElementById("year").value;
    
    // now turn the three values into a Date object and check them
    var checkDate = new Date(year, month-1, day);    
    var checkDay = checkDate.getDate();
    var checkMonth = checkDate.getMonth()+1;
    var checkYear = checkDate.getFullYear();
    
    if(day == checkDay && month == checkMonth && year == checkYear)
        return true;
    else
        return false;         
        }   

function filesize() {
   
    return size;
}     
$(document).ready( function() {
    var errorStatusHandle = $('#message_line');
    var elementHandle = new Array(50);
    elementHandle[0] = $('[name="fname"]');
    elementHandle[1] = $('[name="lname"]');
    elementHandle[2] = $('[name="address1"]');
    elementHandle[3] = $('[name="address2"]');
    elementHandle[4] = $('[name="city"]');
    elementHandle[5] = $('[name="state"]');
    elementHandle[6] = $('[name="zip"]');
    elementHandle[7] = $('[name="date"]');
    elementHandle[8] = $('[name="month"]');
    elementHandle[9] = $('[name="year"]');
    elementHandle[10] = $('[name="email"]');
    elementHandle[11] = $('[name="area_code"]');
    elementHandle[12] = $('[name="prefix"]');
    elementHandle[13] = $('[name="phone"]');
    elementHandle[14] = $('[name="explevel"]');
   elementHandle[15] = $('[name="category"]');
    elementHandle[16] = $('[name="medcondition"]');
   elementHandle[19] = $('[name="img"]');
    
  $('input[type="file"]').on('change',function(e) {
       size = this.files[0].size;
   });
    function isValidData() {
    	if(size == 0) {
           elementHandle[19].addClass("error");
           errorStatusHandle.text("Please upload image");
           elementHandle[19].focus();
           return false;
       }
       if(size/1000 > 1000) {
           elementHandle[19].addClass("error");
           errorStatusHandle.text("File size is greater than 1MB");
           elementHandle[19].focus();
           return false;
       }
        if(isEmpty(elementHandle[0].val())) {
            elementHandle[0].addClass("error");
            errorStatusHandle.text("Please enter your first name");
            elementHandle[0].focus();
            return false;
            }
        if(isEmpty(elementHandle[1].val())) {
            elementHandle[1].addClass("error");
            errorStatusHandle.text("Please enter your last name");
            elementHandle[1].focus();            
            return false;
            }
        if(isEmpty(elementHandle[2].val())) {
            elementHandle[2].addClass("error");
            errorStatusHandle.text("Please enter your street address");
            elementHandle[2].focus();            
            return false;
            }
        if(isEmpty(elementHandle[3].val())) {
            elementHandle[3].addClass("error");
            errorStatusHandle.text("Please enter your apartment address");
            elementHandle[3].focus();            
            return false;
            }
        if(isEmpty(elementHandle[4].val())) {
            elementHandle[4].addClass("error");
            errorStatusHandle.text("Please enter your city");
            elementHandle[4].focus();            
            return false;
            }
        if(isEmpty(elementHandle[5].val())) {
            elementHandle[5].addClass("error");
            errorStatusHandle.text("Please enter your state");
            elementHandle[5].focus();            
            return false;
            }
        if(!isValidState(elementHandle[5].val())) {
            elementHandle[5].addClass("error");
            errorStatusHandle.text("The state appears to be invalid "+
            "please use the two letter state abbreviation");
            elementHandle[5].focus();            
            return false;
            }
        if(isEmpty(elementHandle[6].val())) {
            elementHandle[6].addClass("error");
            errorStatusHandle.text("Please enter your zip code");
            elementHandle[6].focus();            
            return false;
            }
        if(!$.isNumeric(elementHandle[6].val())) {
            elementHandle[6].addClass("error");
            errorStatusHandle.text("The zip code appears to be invalid "+
            "numbers only please. ");
            elementHandle[6].focus();            
            return false;
            }
        if(elementHandle[6].val().length != 5) {
            elementHandle[6].addClass("error");
            errorStatusHandle.text("The zip code must have exactly five digits")
            elementHandle[6].focus();            
            return false;
            }
        if(isEmpty(elementHandle[7].val())) {
            elementHandle[7].addClass("error");
            errorStatusHandle.text("Please enter your birth day");
            elementHandle[7].focus();            
            return false;
            }   

         if(isEmpty(elementHandle[8].val())) {
            elementHandle[8].addClass("error");
            errorStatusHandle.text("Please enter your birth month");
            elementHandle[8].focus();            
            return false;
            }    
        if(isEmpty(elementHandle[9].val())) {
            elementHandle[9].addClass("error");
            errorStatusHandle.text("Please enter your birth year");
            elementHandle[9].focus();            
            return false;
            }      
        if(!isValidDate(elementHandle[7].val(),elementHandle[8].val(),elementHandle[9].val())) {
            elementHandle[7].addClass("error");
            elementHandle[8].addClass("error");
            elementHandle[9].addClass("error");
            errorStatusHandle.text("Please enter a valid date");
            elementHandle[7].focus();     
            elementHandle[8].focus();     
            elementHandle[9].focus();            
            return false;
            }  
        if(isEmpty(elementHandle[10].val())) {
            elementHandle[10].addClass("error");
            errorStatusHandle.text("Please enter your email address");
            elementHandle[10].focus();            
            return false;
            }            
        if(!isValidEmail(elementHandle[10].val())) {
            elementHandle[10].addClass("error");
            errorStatusHandle.text("The email address appears to be invalid");
            elementHandle[10].focus();            
            return false;
            }  
        if(isEmpty(elementHandle[11].val())) {
            elementHandle[11].addClass("error");
            errorStatusHandle.text("Please enter your area code");
            elementHandle[11].focus();            
            return false;
            }             
        if(!$.isNumeric(elementHandle[11].val())) {
            elementHandle[11].addClass("error");
            errorStatusHandle.text("The area code appears to be invalid "+
            "numbers only please. ");
            elementHandle[11].focus();            
            return false;
            }
        if(elementHandle[11].val().length != 3) {
            elementHandle[11].addClass("error");
            errorStatusHandle.text("The area code must have exactly three digits")
            elementHandle[11].focus();            
            return false;
            }   
        if(isEmpty(elementHandle[12].val())) {
            elementHandle[12].addClass("error");
            errorStatusHandle.text("Please enter your phone number prefix");
            elementHandle[12].focus();            
            return false;
            }           
        if(!$.isNumeric(elementHandle[12].val())) {
            elementHandle[12].addClass("error");
            errorStatusHandle.text("The phone number prefix appears to be invalid "+
            "numbers only please. ");
            elementHandle[12].focus();            
            return false;
            }
        if(elementHandle[12].val().length != 3) {
            elementHandle[12].addClass("error");
            errorStatusHandle.text("The phone number prefix must have exactly three digits")
            elementHandle[12].focus();            
            return false;
            }
        if(isEmpty(elementHandle[13].val())) {
            elementHandle[13].addClass("error");
            errorStatusHandle.text("Please enter your phone number");
            elementHandle[13].focus();            
            return false;
            }            
        if(!$.isNumeric(elementHandle[13].val())) {
            elementHandle[13].addClass("error");
            errorStatusHandle.text("The phone number appears to be invalid "+
            "numbers only please. ");
            elementHandle[13].focus();            
            return false;
            }
        if(elementHandle[13].val().length != 4) {
            elementHandle[13].addClass("error");
            errorStatusHandle.text("The phone number must have exactly four digits")
            elementHandle[13].focus();            
            return false;
            }                                                                       
        return true;
        }       

   elementHandle[0].focus();
   


// on blur, if the user has entered valid data, the error message should no longer show.
    elementHandle[0].on('blur', function() {
        if(isEmpty(elementHandle[0].val()))
            return;
        $(this).removeClass("error");
        errorStatusHandle.text("");
        });

     elementHandle[1].on('blur', function() {
        if(isEmpty(elementHandle[1].val()))
            return;
        $(this).removeClass("error");
        errorStatusHandle.text("");
        });

    elementHandle[2].on('blur', function() {
        if(isEmpty(elementHandle[2].val()))
            return;
        $(this).removeClass("error");
        errorStatusHandle.text("");
        });
    
    elementHandle[3].on('blur', function() {
        if(isEmpty(elementHandle[3].val()))
            return;
        $(this).removeClass("error");
        errorStatusHandle.text("");
        });
         
     elementHandle[4].on('blur', function() {
        if(isEmpty(elementHandle[4].val()))
            return;
        $(this).removeClass("error");
        errorStatusHandle.text("");
        });
     
      elementHandle[5].on('blur', function() {
        if(isEmpty(elementHandle[5].val()))
            return;
        $(this).removeClass("error");
        errorStatusHandle.text("");
        });

      elementHandle[6].on('blur', function() {
        if(isEmpty(elementHandle[6].val()))
            return;
        $(this).removeClass("error");
        errorStatusHandle.text("");
        });

      elementHandle[7].on('blur', function() {
        if(isEmpty(elementHandle[7].val()))
            return;
        $(this).removeClass("error");
        errorStatusHandle.text("");
        });

      elementHandle[8].on('blur', function() {
        if(isEmpty(elementHandle[8].val()))
            return;
        $(this).removeClass("error");
        errorStatusHandle.text("");
        });

      elementHandle[9].on('blur', function() {
        if(isEmpty(elementHandle[9].val()))
            return;
        $(this).removeClass("error");
        errorStatusHandle.text("");
        });

      elementHandle[10].on('blur', function() {
        if(isEmpty(elementHandle[10].val()))
            return;
        $(this).removeClass("error");
        errorStatusHandle.text("");
        });

      elementHandle[11].on('blur', function() {
        if(isEmpty(elementHandle[11].val()))
            return;
        $(this).removeClass("error");
        errorStatusHandle.text("");
        });

      elementHandle[12].on('blur', function() {
        if(isEmpty(elementHandle[12].val()))
            return;
        $(this).removeClass("error");
        errorStatusHandle.text("");
        });

      elementHandle[13].on('blur', function() {
        if(isEmpty(elementHandle[13].val()))
            return;
        $(this).removeClass("error");
        errorStatusHandle.text("");
        });
             
    elementHandle[10].on('blur', function() {
        if(isEmpty(elementHandle[10].val()))
            return;
        if(isValidEmail(elementHandle[10].val())) {
            $(this).removeClass("error");
            errorStatusHandle.text("");
            }
        });     

   elementHandle[19].on('blur', function() {
        if(isEmpty(elementHandle[10].val()))
            return;
        if(isValidEmail(elementHandle[10].val())) {
            $(this).removeClass("error");
            errorStatusHandle.text("");
            }
        });    

    elementHandle[5].on('keyup', function() {
        elementHandle[5].val(elementHandle[5].val().toUpperCase());
        });
        
    elementHandle[11].on('keyup', function() {
        if(elementHandle[11].val().length == 3)
            elementHandle[12].focus();
            });
            
    elementHandle[12].on('keyup', function() {
        if(elementHandle[12].val().length == 3)
            elementHandle[13].focus();
            }); 


    $(':submit').on('click', function() {
        for(var i=0; i < 10; i++)
            elementHandle[i].removeClass("error");
        errorStatusHandle.text("");
        return isValidData();
        });

 $(document).ready(function() {
       $('input[name="fname"]').focus();

       var size = 0;

       $('input[name="img"]').on('change',function(e) {
           size = this.files[0].size;
       });

       $(':submit').on('click', function(e) {
           e.preventDefault();
           processUpload();
       });

   });

   $(':reset').on('click', function() {
       for(var i=0; i < 18; i++)
           elementHandle[i].removeClass("error");
           errorStatusHandle.text("");
   });     

   function dup_handler(response) {
   if(response == "dup") {
      $('#message_line').css('color','red');
      $('#message_line').css('text-align','center'); 
      $('#message_line').text("ERROR, this is a duplicate record. The user has already registered!");
   }
    else if(response == "OK") {
       $('form').serialize();
       $('form').submit(); 
       }
   else
       alert(response);
   }              

   function processUpload() {
       send_file();    
   }  

   function handleData(response) {
        $('#message_line').css('color','blue');
        $('#answer').html(response);    
    }

   function send_file() {    
       var form_data = new FormData($('form')[0]);
       var file_name = $('#img').val();
       if(size == 0) {
           $('#message_line').html("Please upload image");
           return;
       }
       if(size > 2000000) {
           $('#message_line').html("Error, Image too big!");
           return;
       }

       var where = file_name.lastIndexOf("\\"); 
       file_name = file_name.substring(where+1);          
       form_data.append("image", document.getElementById("img").files[0]);
       $.ajax( {
           url: "ajax_file_upload.php",
           type: "post",
           data: form_data,
           processData: false,
           contentType: false,
           success: function(response) {
           if(response.startsWith("Success")) {
               var fname = $("#img").val();
               var toDisplay = "<img src=\"/~jadrn021/proj3/imgs/" + file_name + "\" />";   
               var params = "email="+$('#email').val();
               var url = "check_dup.php?"+params;
               $.get(url, dup_handler);
           }
          else {
               $('#message_line').css('color','red');
               $('#message_line').html(response);    
               }
           },
           error: function(response) {
              $('#message_line').css('color','red');
              $('#message_line').html("Sorry, an upload error occurred, 2MB maximum size");
               }
           });
       }          
});



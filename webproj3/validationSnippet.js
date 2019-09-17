var phonePattern = /\(?([1-9][0-9]{2})\)?-?([0-9]{3})-?([0-9]{4})$/;
var areacodePattern = /^\d{3}$/;
var rentPattern = /^R\$\s\d+(?:\.\d{3})*,\d{2}$/;
var initCap = /[A-Z][a-z]/;
var alphaNumericPattern = /[A-Za-z0-9]/;
var numericPattern = /[0-9]/;
var emailPattern = /^[a-z0-9]+[.]?[a-z0-9]+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;

//get the form fields
var phone = document.getElementById("phone");
var phone2 = document.getElementById("phone2");
var phone3 = document.getElementById("phone3");
var areacode = document.getElementById("areacode");
var areacode2 = document.getElementById("areacode2");
var areacode3 = document.getElementById("areacode3");
var rent = document.getElementById("rent");
var city = document.getElementById("city");

//get the error message containers
var cityError = document.getElementById("cityError");
var rentError = document.getElementById("rentError");
var areacodeError = document.getElementById("areacodeError");
var areacode2Error = document.getElementById("areacode2Error");
var areacode3Error = document.getElementById("areacode3Error");
var phoneError = document.getElementById("phoneError");
var phone2Error = document.getElementById("phone2Error");
var phone3Error = document.getElementById("phone3Error");

//shared error messages
var phoneErrorMsg = "Please enter a valid phone number";
var areacodeErrorMsg = "Please enter a valid area code";
var nameErrorMsg = "Please enter a valid name";
var PTphoneErrorMsg = "Por favor, coloque um numero de telefone válido";
var PTareacodeErrorMsg = "Por favor insira um código de área válida";
var PTnameErrorMsg = "Por favor, indique um nome válido";

//Validate Fields
function validateFields(whichField, whichFieldError, errorHTML, whichPattern) {
    whichField.addEventListener("keyup", function() {

    
        var str = whichField.value;
        //If the string doesn't match the expression, show the error under the field
        if (whichPattern.test(str) == false) {
            whichFieldError.style.display = "block";
            whichFieldError.innerHTML = errorHTML;
        }else {
            
            //if it's a phone field
            if(whichField === phone || whichField === phone2 || whichField === phone3){
                
                if(whichField.value.length == 10){
                    var newstr = str.replace(whichPattern, '$1-$2-$3');
                    whichField.value = newstr;                     
                }                      
            }            
            //remove the error message
            whichFieldError.style.display = "none";
        }//end else

        //hide the error message when the field is empty, UNLESS the field is required
        if( whichField != phone && 
            whichField != areacode && 
            whichField != rent && 
            whichField != city && 
            whichField != address && 
            whichField != number && 
            whichField != district && 
            whichField != fname && 
            whichField != lname && 
            whichField != area){
            if(whichField.value == "" || whichField.value == null){
                whichFieldError.style.display = "none";
            }
        }
    });//end event listener        
}//end function

if(window.location.href.indexOf("/WORKING") < 1) {
    
    validateFields(phone, phoneError, phoneErrorMsg, phonePattern);   
    validateFields(phone2, phone2Error, phoneErrorMsg, phonePattern);  
    validateFields(phone3, phone3Error, phoneErrorMsg, phonePattern);  
    validateFields(areacode, areacodeError, areacodeErrorMsg, areacodePattern);   
    validateFields(areacode2, areacode2Error, areacodeErrorMsg, areacodePattern);  
    validateFields(areacode3, areacode3Error, areacodeErrorMsg, areacodePattern);  
    validateFields(rent, rentError, "Please enter a valid rent amount", rentPattern);  
    validateFields(city, cityError, "Please enter a valid city", initCap);  
    validateFields(district, districtError, "Please enter a valid district", initCap); 
    validateFields(address, addressError, "Please enter a valid address", alphaNumericPattern); 
    validateFields(number, numberError, "Please enter a valid number", numericPattern);   
    validateFields(area, areaError, "Please enter a valid area", alphaNumericPattern);   
    validateFields(fname, fnameError, nameErrorMsg, initCap);   
    validateFields(lname, lnameError, nameErrorMsg, initCap);  
    validateFields(email, emailError, "Please enter a valid email address", emailPattern);    
}else {
    validateFields(phone, phoneError, PTphoneErrorMsg, phonePattern);   
    validateFields(phone2, phone2Error, PTphoneErrorMsg, phonePattern);  
    validateFields(phone3, phone3Error, PTphoneErrorMsg, phonePattern);  
    validateFields(areacode, areacodeError, PTareacodeErrorMsg, areacodePattern);   
    validateFields(areacode2, areacode2Error, PTareacodeErrorMsg, areacodePattern);  
    validateFields(areacode3, areacode3Error, PTareacodeErrorMsg, areacodePattern);  
    validateFields(rent, rentError, "Por favor insira um valor do aluguel válido", rentPattern);  
    validateFields(city, cityError, "Por favor insira uma cidade válida", initCap);  
    validateFields(district, districtError, "Por favor, indique um distrito válida", initCap); 
    validateFields(address, addressError, "Por favor insira um endereço válido", alphaNumericPattern); 
    validateFields(number, numberError, "Por favor insira um número válido", numericPattern);   
    validateFields(area, areaError, "Por favor, indique uma área válida", alphaNumericPattern);   
    validateFields(fname, fnameError, PTnameErrorMsg, initCap);   
    validateFields(lname, lnameError, PTnameErrorMsg, initCap);  
    validateFields(email, emailError, "Por favor digite um email válido", emailPattern);    
}
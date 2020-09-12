//*************** CONFIG ***********************************//


//Not implemented yet.
var CONFIG = Array;
CONFIG['date_seperator'] = '-';
CONFIG['date_format'] = 0; //mm-dd-yyyy
CONFIG['time_seperator'] = ':';
CONFIG['time_format'] = 0; //hh:mm:ss




//*************** CONFIG ***********************************//



//Input : str (string)
//return type : string
//Desc : Remove white spaces from left side of input string.
function ltrim(str)
{
    return str.replace(/^\s+/, '');
}


//Input : str (string)
//return type : string
//Desc : Remove white spaces from right side of input string.
function rtrim(str)
{
    return str.replace(/\s+$/, '');
}

//Input : str (string)
//return type : string
//Desc : Remove white spaces from both side of input string.
function trim(str)
{
    a = ltrim(str);
    b = rtrim(a);
    return b;
}


//new function same as trim() added since the above function conflicts with other library func.
//Input : str (string)
//return type : string
//Desc : Remove white spaces from both side of input string.
function trimStr(str)
{

    a = ltrim(str);

    b = rtrim(a);

    return b;

}


//Input : str (string)
//return type : boolean
//Desc : returns true if i/p string is empty else false.
function isEmpty(str)
{
    trimmedStr = trimStr(str);

    if (trimmedStr == '')
    {
        return true;
    }
    return false;
}

//Input : str (string) , allowWhiteSpace (string)
//return type : boolean
//Desc : If str is alphabetic , return true else return false.
// if allowWhiteSpace = true , then allow white space in input str.
function isAlpha(str, allowWhiteSpace)
{
    if (isEmpty(str))
    {
        return false;
    }

    if (allowWhiteSpace)
    {
        return /^[a-zA-Z\s\.]+$/.test(str);
    } else
    {
        return /^[a-zA-Z]+$/.test(str);
    }
}


//Input : str (string) , allowWhiteSpace (string)
//return type : boolean
//Desc : If str is numeric , return true else return false.
// if allowWhiteSpace = true , then allow white space in input str.
function isNum(str, allowWhiteSpace)
{
    if (isEmpty(str))
    {
        return false;
    }

    if (allowWhiteSpace)
    {
        return /^[0-9\s]+$/.test(str);
    } else
    {
        return /^[0-9]+$/.test(str);
    }
}


//Input : str (string) , allowWhiteSpace (string)
//return type : boolean
//Desc : If str is alphanumeric , return true else return false.
// if allowWhiteSpace = true , then allow white space in input str.
function isAlphaNum(str, allowWhiteSpace)
{
    if (isEmpty(str))
    {
        return false;
    }

    if (allowWhiteSpace)
    {
        return /^[0-9a-zA-Z\s]+$/.test(str);
    } else
    {
        return /^[0-9a-zA-Z]+$/.test(str);
    }
}


//Input : str (string)
//return type : boolean
//Desc : If str is float(positve or negative) , return true else return false.
function isFloat(str)
{
    trimmedStr = trimStr(str);

    if (trimmedStr == '')
    {
        return false;
    } else if (trimmedStr == '.' || trimmedStr == '-' || trimmedStr == '+')
    {
        return false;
    }


    result = /^[\+\-]?[0-9]*\.?[0-9]*$/.test(str);

    return result;

}


//Input : str (string)
//return type : boolean
//Desc : If str is integer(positve or negative), return true else return false.
function isInt(str)
{
    if (isEmpty(str))
    {
        return false;
    }

    result = /^[\+\-]?[0-9]+$/.test(str);

    return result;

}


//Input : radioName (string) => Name of the radio element
//return type : boolean
//Desc : Returns true if a radio button is checked.
function IsRadioChecked(radioName)
{

    var arrElem = document.getElementsByName(radioName);

    for (var i = 0; i < arrElem.length; i++)
    {
        if (arrElem[i].checked == true)
        {
            return true;
        }

    }

    return false;
}


//Input : chkboxName (string) => name of check box element
//return type : boolean
//Desc : Returns true if any one check box button is checked.
function IsCheckBoxChecked(chkboxName)
{

    var arrElem = document.getElementsByName(chkboxName);

    for (var i = 0; i < arrElem.length; i++)
    {
        if (arrElem[i].checked == true)
        {
            return true;
        }

    }

    return false;
}


//Input : selectBoxId (string) => id of select box.
//return type : boolean
//Desc : Returns false if first element is selected.
function IsSelectBoxChecked(selectBoxId)
{
    var objSelect = document.getElementById(selectBoxId);
    if (objSelect.selectedIndex == 0)
    {
        return false;
    } else
    {
        return true;
    }
}

//added by supriya
function isValidEmail(email)
{
    result = /^[A-Za-z0-9_\+-]+(\.[A-Za-z0-9_\+-]+)*@[A-Za-z0-9-]+(\.){0,1}([A-Za-z0-9-]+)*\.([A-Za-z]{2,4})$/.test(email);
    return result;
}

//Input : email (string)
//return type : boolean
//Desc : Returns true if var email is a valid email id else return false.
function isValidEmail_old(email)
{
    // First, we check that there's one @ symbol, and that the lengths are right
    if (!/^[^@]{1,64}@[^@]{1,255}$/.test(email)) {
        // Email invalid because wrong number of characters in one section, or wrong number of @ symbols.
        return false;
    }
    // Split it into sections.
    email_array = email.split('@');
    local_array = email_array[0].split('.');
    for (i = 0; i < local_array.length; i++) {
        if (!'/^(([A-Za-z0-9!$%&\'*+/=?^_`{|}~-][A-Za-z0-9!$%&\'*+/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$/'.test(local_array[i])) {
            return false;
        }
    }
    if (!/^\[?[0-9\.]+\]?$/.test(email_array[1])) {
        // Check if domain is IP. If not, it should be valid domain name
        domain_array = email_array[1].split('.');
        if (domain_array.length < 2) {
            return false; // Not enough parts to domain
        }
        for (i = 0; i < domain_array.length; i++) {
            if (!/^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|([A-Za-z0-9]+))$/.test(domain_array[i])) {
                return false;
            }
        }
    }
    return true;
}




//Input : strDate (string) , format (int)
//return : bool / Date Object
//Desc : forms date object and returns it.
/*
 format_code		format
 0			mm-dd-yyyy
 1			dd-mm-yyyy
 */
function getObjDate(strDate, format)
{
    strDate = trimStr(strDate);
    var dd = 0;
    var mm = 0;
    var yy = 0;

    //extract date , month and year from given date string.
    switch (format)
    {
        case 0:
            arrDate = strDate.split(CONFIG['date_seperator']);
            dd = arrDate[1];
            mm = arrDate[0] - 1;
            yy = arrDate[2];
            break;


        case 1:
            arrDate = strDate.split(CONFIG['date_seperator']);
            dd = arrDate[0];
            mm = arrDate[1] - 1;
            yy = arrDate[2];
            break;


        default :
            return false;
    }


    //creating Date object
    var objDate = new Date();
    objDate.setDate(dd);
    objDate.setMonth(mm);
    objDate.setFullYear(yy);

    return objDate;

}


//Input : strTime (string) , format (int)
//return : bool / Date Object
//Desc : forms date object and returns it.
/*
 format_code		format
 0			hh:mm:ss
 */
function getObjTime(strTime, format)
{
    strTime = trimStr(strTime);

    var hh, mm, ss;

    //extract hrs , mins and secs from given time string.
    switch (format)
    {
        case 0:
            arrDate = strTime.split(CONFIG['time_seperator']);
            hh = arrDate[0];
            mm = arrDate[1];
            ss = arrDate[2];
            break;

        default :
            return false;
    }


    //creating Date object
    var objDate = new Date();
    objDate.setHours(hh);
    objDate.setMinutes(mm);
    objDate.setSeconds(ss);

    return objDate;

}



//Input : strDate (string) , format (int)
//return : bool
//Desc : Returns true if date is a valid date else false.
/*
 format_code		format
 0			mm-dd-yyyy
 1			dd-mm-yyyy
 */
function isValidDate(strDate, format)
{
    strDate = trimStr(strDate);
    var dd = 0;
    var mm = 0;
    var yy = 0;

    //extract date , month and year from given date string.
    switch (format)
    {
        case 0:
            pattern = '^[0-9]{2}\\' + CONFIG['date_seperator'] + '[0-9]{2}\\' + CONFIG['date_seperator'] + '[0-9]{4}$';
            datePatt = new RegExp(pattern, '');
            //if(/^[0-9]{2}\-[0-9]{2}\-[0-9]{4}$/.test(strDate))
            if (datePatt.test(strDate))
            {
                arrDate = strDate.split(CONFIG['date_seperator']);
                dd = arrDate[1];
                mm = arrDate[0];
                yy = arrDate[2];
            } else
            {
                return false;
            }
            break;


        case 1:
            pattern = '^[0-9]{2}\\' + CONFIG['date_seperator'] + '[0-9]{2}\\' + CONFIG['date_seperator'] + '[0-9]{4}$';
            if (pattern.test(strDate))
            {
                arrDate = strDate.split(CONFIG['date_seperator']);
                dd = arrDate[0];
                mm = arrDate[1];
                yy = arrDate[2];
            } else
            {
                return false;
            }
            break;


        default :
            return false;

    }



    //validating date
    //no of days in each month.
    var day = new Array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);

    if (yy < 100)
        yy += 2000;
    if (yy < 1582 || yy > 4881)
        return false;
    if (mm == 2 && (yy % 400 == 0 || (yy % 4 == 0 && yy % 100 != 0)))
        day[1] = 29;
    else
        day[1] = 28;
    if (mm < 1 || mm > 12)
        return false;
    if (dd < 1 || dd > day[mm - 1])
        return false;

    return true;




}



//Input : strTime (string) , format (int)
//return : bool
//Desc : Returns true if time is valid else false.
/*
 format_code		format
 0			hh:mm:ss
 */
function isValidTime(strTime, format)
{

    strTime = trimStr(strTime);

    var hh, mm, ss;


    //extract hours , mins and secs from given time string.
    switch (format)
    {
        case 0:
            pattern = '^[0-9]{2}\\:[0-9]{2}\\:[0-9]{2}$';
            timePatt = new RegExp(pattern, '');

            if (timePatt.test(strTime))
            {
                arrTime = strTime.split(':');
                hh = arrTime[1];
                mm = arrTime[0];
                ss = arrTime[2];

            } else
            {
                return false;
            }
            break;
        case 1:
            pattern = '^[0-9]{2}\\:[0-9]{2}$';
            timePatt = new RegExp(pattern, '');

            if (timePatt.test(strTime))
            {
                arrTime = strTime.split(':');
                hh = arrTime[1];
                mm = arrTime[0];
                return true;
            } else
            {
                return false;
            }
            break;

        default :
            return false;

    }



    if (hh >= 24 || mm >= 60 || ss >= 60)
    {
        return false;
    }

    return true;

}


var lib_show_single_error = true;
function validate(objForm, arrElemId, arrCode, arrRefValue, arrMsg)
{
    var final_result = true;
    var total = arrElemId.length;

    for (var i = 0; i < total; i++)
    {
        id = arrElemId[i];

        code = arrCode[i];
        if (code != "RADIO_BUTTON" && code != "CHKBOX") {
            value = document.getElementById(id).value;
        }
        msg = arrMsg[i];
        refValue = arrRefValue[i];

        result = true;
        switch (code)
        {
            /* Filter Names Available as Follows:
             * IS_EMPTY
             * ALPHA
             * ALPHA_S
             * NUM
             * NUM_S
             * ALPHANUM
             * ALPHANUM_S
             * INT
             * FLOAT
             * EMAIL
             * MOBILE
             * LANDLINE
             * REGEX
             * NREGEX
             * VALUE_SET
             * GREATER
             * GREATER_EQUAL
             * LESSER
             * LESSER_EQUAL
             * EQUAL_LENGTH
             * EQUAL
             * EQUAL_VAL
             * NEQUAL
             * BETWEEN
             * NBETWEEN
             * LENGTH_GREATER
             * LENGTH_LESSER
             * LENGTH_EQUAL
             * LENGTH_NEQUAL
             * DATE_GREATER_OR_EQUAL
             * DATE
             * DATE_LESSER_OR_EQUAL
             * DATE_GREATER
             * DATE_LESSER
             * DATE_EQUAL
             * DATE_NEQUAL
             * DATE_BETWEEN
             * DATE_NBETWEEN
             * TIME
             * TIME_LESSER
             * TIME_GREATER
             * RADIO_BUTTON
             * CHKBOX
             * SELECTBOX
             * IFSC
             * */
            case 'IS_EMPTY':
                value = document.getElementById(id).value;

                if (isEmpty(value) === true)
                {
                    result = false;
                }
                break;


            case 'ALPHA':
                value = document.getElementById(id).value;
                // Bypass validation for empty values.
                if (!isEmpty(value))
                {
                    result = isAlpha(value, false);
                }
                break;


            case 'ALPHA_S':
                value = document.getElementById(id).value;
                if (!isEmpty(value))
                {
                    result = isAlpha(value, true);
                }
                break;


            case 'NUM':
                value = document.getElementById(id).value;
                if (!isEmpty(value))
                {
                    result = isNum(value, false);
                }
                break;


            case 'NUM_S':
                value = document.getElementById(id).value;
                if (!isEmpty(value))
                {
                    result = isNum(value, true);
                }
                break;


            case 'ALPHANUM':
                value = document.getElementById(id).value;
                if (!isEmpty(value))
                {
                    result = isAlphaNum(value, false);
                }
                break;


            case 'ALPHANUM_S':
                value = document.getElementById(id).value;
                if (!isEmpty(value))
                {
                    result = isAlphaNum(value, true);
                }
                break;


            case 'INT':
                value = document.getElementById(id).value;
                if (!isEmpty(value))
                {
                    result = isInt(value);
                }
                break;


            case 'FLOAT':
                value = document.getElementById(id).value;
                if (!isEmpty(value))
                {
                    result = isFloat(value);
                }
                break;


            case 'EMAIL':
                value = document.getElementById(id).value;
                if (!isEmpty(value))
                {
                    result = isValidEmail(value);
                }
                break;


            case 'MOBILE':
                value = document.getElementById(id).value;
                if (!isEmpty(value))
                {
                    result = /^[987][0-9]{9}$/.test(value);
                    // result = /^0?[0-9]{9}$/.test(value);
                }
                break;

            case 'LANDLINE':
                value = document.getElementById(id).value;
                if (!isEmpty(value))
                {
                    result = /^[0]{1}[0-9]{2,4}\-[1-9]{1}[0-9]{5,7}$/.test(value);
                    // result = /^0?[0-9]{9}$/.test(value);
                }
                break;

            case 'REGEX':
                value = document.getElementById(id).value;
                if (!isEmpty(value))
                {
                    result = refValue.test(value);
                }
                break;
            case 'PHONE':
            //Nutan Gosavi 11th April 2017 - As per Requirement from bhavika on Contact us inerface dont allow alphabets in phone number
                    value = document.getElementById(id).value;
                    if (!isEmpty(value))
                    {
                        result = refValue.test(value);
                        if(result){//If it has alphabet in string then return false
                          result = false;
                        }else{//If it does not have alphabet in string then return true
                          result = true;
                        }
                    }
                    break;
            case 'IMG':
                value = document.getElementById(id).value;
                if (!isEmpty(value))
                {
                    IMG = /^([a-zA-Z0-9()\s_\\.\-:])+(.jpg|.jpeg|.gif|.png)$/;
                    result = IMG.test(value);
                }
                break;

            case 'IMGPDF':
                value = document.getElementById(id).value;
                if (!isEmpty(value))
                {
                    IMGPDF = /^([a-zA-Z0-9()\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.pdf)$/;
                    result = IMGPDF.test(value);
                }
                break;


            case 'NREGEX':
                value = document.getElementById(id).value;
                if (!isEmpty(value))
                {
                    result = !refValue.test(value);
                }
                break;


            case 'VALUE_SET':
                value = document.getElementById(id).value;
                if (!isEmpty(value))
                {
                    result = inArray(value, refValue);
                }
                break;


            case 'N_VALUE_SET':
                value = document.getElementById(id).value;
                if (!isEmpty(value))
                {
                    result = !inArray(value, refValue);
                }
                break;


            case 'GREATER':
                value = document.getElementById(id).value;
                if (!isEmpty(value))
                {
                    console.log("Value " + value + " refValue " + refValue);
                    if (value > refValue)
                    {
                        result = true;
                    } else
                    {
                        result = false;
                    }
                }
                break;

                //added by sakshi
            case 'GREATER_EQUAL':
                value = document.getElementById(id).value;

                if (!isEmpty(value))
                {
                    if (value >= refValue)
                    {
                        result = true;
                    } else
                    {
                        result = false;
                    }
                }
                break;

            case 'LESSER':
                value = document.getElementById(id).value;

                if (!isEmpty(value))
                {
                    if (value.length < refValue)
                    {
                        result = true;
                    } else
                    {
                        result = false;
                    }
                }
                break;

            case 'LESSER_EQUAL':
                value = document.getElementById(id).value;
                if (!isEmpty(value))
                {
                    if (value.length <= refValue)
                    {
                        result = true;
                    } else
                    {
                        result = false;
                    }
                }
                break;

            case 'EQUAL':
                value = document.getElementById(id).value;
                if (!isEmpty(value))
                {
                    if (value == refValue)
                    {
                        result = true;
                    } else
                    {
                        result = false;
                    }
                }
                break;
            case 'EQUAL_LENGTH':
                value = document.getElementById(id).value;
                if (!isEmpty(value))
                {
                    if (value.length == refValue)
                    {
                        result = true;
                    } else
                    {
                        result = false;
                    }
                }
                break;

            case 'EQUAL_VAL':
                value = document.getElementById(id).value;
                if (!isEmpty(value))
                {
                    if (value == refValue)
                    {
                        result = true;
                    } else
                    {
                        result = false;
                    }
                }
                break;


            case 'NEQUAL':
                value = document.getElementById(id).value;
                if (!isEmpty(value))
                {
                    if (value != refValue)
                    {
                        result = true;
                    } else
                    {
                        result = false;
                    }
                }
                break;


            case 'BETWEEN':
                value = document.getElementById(id).value;
                if (!isEmpty(value))
                {
                    arrLimit = refValue.split('#');
                    min = arrLimit[0];
                    max = arrLimit[1];

                    if (min <= value && value <= max)
                    {
                        result = true;
                    } else
                    {
                        result = false;
                    }
                }
                break;


            case 'NBETWEEN':
                value = document.getElementById(id).value;
                if (!isEmpty(value))
                {
                    arrLimit = refValue.split('#');
                    min = arrLimit[0];
                    max = arrLimit[1];

                    if (min <= value && value <= max)
                    {
                        result = false;
                    } else
                    {
                        result = true;
                    }
                }
                break;


            case 'LENGTH_GREATER':
                value = document.getElementById(id).value;

                if (!isEmpty(value))
                {
                    txtLen = value.length;
                    if (txtLen > refValue)
                    {
                        result = true;
                    } else
                    {
                        result = false;
                    }
                }
                break;


            case 'LENGTH_LESSER':
                value = document.getElementById(id).value;

                if (!isEmpty(value))
                {
                    txtLen = value.length;

                    if (txtLen < refValue)
                    {
                        result = true;
                    } else
                    {
                        result = false;
                    }
                }
                break;


            case 'LENGTH_EQUAL':
                value = document.getElementById(id).value;
                if (!isEmpty(value))
                {
                    txtLen = value.length;
                    if (txtLen == refValue)
                    {
                        result = true;
                    } else
                    {
                        result = false;
                    }
                }
                break;


            case 'LENGTH_NEQUAL':
                value = document.getElementById(id).value;

                if (!isEmpty(value))
                {
                    txtLen = value.length;

                    if (txtLen != refValue)
                    {
                        result = true;
                    } else
                    {
                        result = false;
                    }
                }
                break;


            case 'DATE'://assuming mm-dd-yyyy fmt.
                value = document.getElementById(id).value;

                if (!isEmpty(value))
                {
                    if (isValidDate(value, 0))
                    {
                        result = true;
                    } else
                    {
                        result = false;
                    }
                }
                break;

                // added by supriya for checking date greater or equal
            case 'DATE_GREATER_OR_EQUAL':
                value = document.getElementById(id).value;

                if (!isEmpty(value))
                {
                    // to get date in dd-mm-yyyy format, second param of getObjDate is set to 1
                    objDate1 = getObjDate(value, 1);
                    objDate2 = getObjDate(refValue, 1);
                    if (!objDate1 || !objDate2)
                    {
                        result = false;
                    } else
                    {

                        timestamp1 = objDate1.valueOf();
                        timestamp2 = objDate2.valueOf();

                        if (timestamp1 >= timestamp2)
                        {
                            result = true;
                        } else
                        {
                            result = false;
                        }
                    }
                }
                break;

            case 'DATE_LESSER_OR_EQUAL':
                value = document.getElementById(id).value;
                if (!isEmpty(value))
                {
                    objDate1 = getObjDate(value, 1);
                    objDate2 = getObjDate(refValue, 1);
                    if (!objDate1 || !objDate2)
                    {
                        result = false;
                    } else
                    {

                        timestamp1 = objDate1.valueOf();
                        timestamp2 = objDate2.valueOf();
                        if (timestamp1 <= timestamp2)
                        {
                            result = true;
                        } else
                        {
                            result = false;
                        }
                    }
                }
                break;

            case 'DATE_GREATER':
                value = document.getElementById(id).value;

                if (!isEmpty(value))
                {
                    // to get date in dd-mm-yyyy format, second param of getObjDate is set to 1
                    objDate1 = getObjDate(value, 1);
                    objDate2 = getObjDate(refValue, 1);
                    if (!objDate1 || !objDate2)
                    {
                        result = false;
                    } else
                    {

                        timestamp1 = objDate1.valueOf();
                        timestamp2 = objDate2.valueOf();

                        if (timestamp1 > timestamp2)
                        {
                            result = true;
                        } else
                        {
                            result = false;
                        }
                    }
                }
                break;


            case 'DATE_LESSER':
                value = document.getElementById(id).value;

                if (!isEmpty(value))
                {
                    objDate1 = getObjDate(value, 1);
                    objDate2 = getObjDate(refValue, 1);
                    if (!objDate1 || !objDate2)
                    {
                        result = false;
                    } else
                    {

                        timestamp1 = objDate1.valueOf();
                        timestamp2 = objDate2.valueOf();

                        if (timestamp1 < timestamp2)
                        {
                            result = true;
                        } else
                        {
                            result = false;
                        }
                    }
                }
                break;


            case 'DATE_EQUAL':
                value = document.getElementById(id).value;

                if (!isEmpty(value))
                {
                    objDate1 = getObjDate(value, 1);
                    objDate2 = getObjDate(refValue, 1);

                    if (!objDate1 || !objDate2)
                    {
                        result = false;
                    } else
                    {

                        timestamp1 = objDate1.valueOf();
                        timestamp2 = objDate2.valueOf();

                        if (timestamp1 == timestamp2)
                        {
                            result = true;
                        } else
                        {
                            result = false;
                        }
                    }
                }
                break;


            case 'DATE_NEQUAL':
                value = document.getElementById(id).value;

                if (!isEmpty(value))
                {
                    objDate1 = getObjDate(value, 1);
                    objDate2 = getObjDate(refValue, 1);

                    if (!objDate1 || !objDate2)
                    {
                        result = false;
                    } else
                    {

                        timestamp1 = objDate1.valueOf();
                        timestamp2 = objDate2.valueOf();

                        if (timestamp1 != timestamp2)
                        {
                            result = true;
                        } else
                        {
                            result = false;
                        }
                    }
                }
                break;


            case 'DATE_BETWEEN':
                value = document.getElementById(id).value;

                if (!isEmpty(value))
                {
                    arrLimit = refValue.split('#');
                    minDate = arrLimit[0];
                    maxDate = arrLimit[1];


                    objDate1 = getObjDate(value, 1);
                    objDate2 = getObjDate(minDate, 1);
                    objDate3 = getObjDate(maxDate, 1);

                    if (!objDate1 || !objDate2 || !objDate3)
                    {
                        result = false;
                    } else
                    {

                        timestamp1 = objDate1.valueOf();
                        timestamp2 = objDate2.valueOf();
                        timestamp3 = objDate3.valueOf();

                        if (timestamp2 <= timestamp1 && timestamp1 <= timestamp3)
                        {
                            result = true;
                        } else
                        {
                            result = false;
                        }
                    }
                }
                break;


            case 'DATE_NBETWEEN':
                value = document.getElementById(id).value;

                if (!isEmpty(value))
                {
                    arrLimit = refValue.split('#');
                    minDate = arrLimit[0];
                    maxDate = arrLimit[1];


                    objDate1 = getObjDate(value, 1);
                    objDate2 = getObjDate(minDate, 1);
                    objDate3 = getObjDate(maxDate, 1);

                    if (!objDate1 || !objDate2 || !objDate3)
                    {
                        result = false;
                    } else
                    {

                        timestamp1 = objDate1.valueOf();
                        timestamp2 = objDate2.valueOf();
                        timestamp3 = objDate3.valueOf();

                        if (timestamp2 <= timestamp1 && timestamp1 <= timestamp3)
                        {
                            result = false;
                        } else
                        {
                            result = true;
                        }
                    }
                }
                break;



            case 'TIME'://assuming hh:mm:ss fmt ->arrRefValue 0 hh:mm -> arrRefValue 1.
                value = document.getElementById(id).value;
                if (arrRefValue)
                    k = arrRefValue;
                else
                    k = 0
                if (!isEmpty(value))
                {
                    if (isValidTime(value, k))
                    {
                        result = true;
                    } else
                    {
                        result = false;
                    }
                }
                break;



            case 'TIME_GREATER':
                value = document.getElementById(id).value;

                if (!isEmpty(value))
                {
                    objDate1 = getObjTime(value, 0);
                    objDate2 = getObjTime(refValue, 0);

                    if (!objDate1 || !objDate2)
                    {
                        result = false;
                    } else
                    {

                        timestamp1 = objDate1.valueOf();
                        timestamp2 = objDate2.valueOf();

                        if (timestamp1 > timestamp2)
                        {
                            result = true;
                        } else
                        {
                            result = false;
                        }
                    }
                }
                break;


            case 'TIME_LESSER':
                value = document.getElementById(id).value;

                if (!isEmpty(value))
                {
                    objDate1 = getObjTime(value, 0);
                    objDate2 = getObjTime(refValue, 0);

                    if (!objDate1 || !objDate2)
                    {
                        result = false;
                    } else
                    {

                        timestamp1 = objDate1.valueOf();
                        timestamp2 = objDate2.valueOf();

                        if (timestamp1 < timestamp2)
                        {
                            result = true;
                        } else
                        {
                            result = false;
                        }
                    }
                }
                break;


            case 'TIME_EQUAL':
                value = document.getElementById(id).value;

                if (!isEmpty(value))
                {
                    objDate1 = getObjTime(value, 0);
                    objDate2 = getObjTime(refValue, 0);

                    if (!objDate1 || !objDate2)
                    {
                        result = false;
                    } else
                    {

                        timestamp1 = objDate1.valueOf();
                        timestamp2 = objDate2.valueOf();

                        if (timestamp1 == timestamp2)
                        {
                            result = true;
                        } else
                        {
                            result = false;
                        }
                    }
                }
                break;


            case 'TIME_NEQUAL':
                value = document.getElementById(id).value;

                if (!isEmpty(value))
                {
                    objDate1 = getObjTime(value, 0);
                    objDate2 = getObjTime(refValue, 0);

                    if (!objDate1 || !objDate2)
                    {
                        result = false;
                    } else
                    {

                        timestamp1 = objDate1.valueOf();
                        timestamp2 = objDate2.valueOf();

                        if (timestamp1 != timestamp2)
                        {
                            result = true;
                        } else
                        {
                            result = false;
                        }
                    }
                }
                break;


            case 'TIME_BETWEEN':
                value = document.getElementById(id).value;

                if (!isEmpty(value))
                {
                    arrLimit = refValue.split('#');
                    minDate = arrLimit[0];
                    maxDate = arrLimit[1];


                    objDate1 = getObjTime(value, 0);
                    objDate2 = getObjTime(minDate, 0);
                    objDate3 = getObjTime(maxDate, 0);

                    if (!objDate1 || !objDate2 || !objDate3)
                    {
                        result = false;
                    } else
                    {

                        timestamp1 = objDate1.valueOf();
                        timestamp2 = objDate2.valueOf();
                        timestamp3 = objDate3.valueOf();

                        if (timestamp2 <= timestamp1 && timestamp1 <= timestamp3)
                        {
                            result = true;
                        } else
                        {
                            result = false;
                        }
                    }
                }
                break;



            case 'TIME_NBETWEEN':
                value = document.getElementById(id).value;

                if (!isEmpty(value))
                {
                    arrLimit = refValue.split('#');
                    minDate = arrLimit[0];
                    maxDate = arrLimit[1];


                    objDate1 = getObjTime(value, 0);
                    objDate2 = getObjTime(minDate, 0);
                    objDate3 = getObjTime(maxDate, 0);

                    if (!objDate1 || !objDate2 || !objDate3)
                    {
                        result = false;
                    } else
                    {

                        timestamp1 = objDate1.valueOf();
                        timestamp2 = objDate2.valueOf();
                        timestamp3 = objDate3.valueOf();

                        if (timestamp2 <= timestamp1 && timestamp1 <= timestamp3)
                        {
                            result = false;
                        } else
                        {
                            result = true;
                        }
                    }
                }
                break;

            case 'RADIO_BUTTON':
                result = IsRadioChecked(id);
                break;


            case 'CHKBOX':
                result = IsCheckBoxChecked(id);
                break;


            case 'SELECTBOX':
                result = IsSelectBoxChecked(id);
                break;
                //added by sakshi
            case 'IFSC':
                value = document.getElementById(id).value;
                if (!isEmpty(value))
                {
                    result = /[A-Z|a-z]{4}[0][\d]{6}$/.test(value);
                }
                break;
                //added by sakshi
            case 'MAC':
                value = document.getElementById(id).value;
                if (!isEmpty(value))
                {
                    result = /^([0-9A-F]{2}[:-]){5}([0-9A-F]{2})$/.test(value);
                }
                break;

            case 'PASS_MIN_LENGTH':
               value = document.getElementById(id).value;
                if (!isEmpty(value) && value.length >= 6)
                {
                    result = true;
//                    result = /^([0-9A-F]{2}[:-]){5}([0-9A-F]{2})$/.test(value);
                }else{
                    result = false;
                }
                break;

            default:
                result = false;
                break;


        } // end of switch.

        if (result)
        {
            //show_loader();
        }

        if (result === false)
        {
            final_result = false;

            //display the error message in corresponding element div.

            alertDivId = id + '_alert';

            document.getElementById(alertDivId).style.display = 'block';
            document.getElementById(alertDivId).style.margin = '10px 0';
            document.getElementById(alertDivId).innerHTML = msg;
            if (code != 'CHKBOX')
            {
                var classname = document.getElementById(id).className;
            }
            if (code != 'RADIO_BUTTON' && (classname != 'dateTxtBox') && (classname != 'input-xlarge datepicker hasDatepicker') && (classname != 'innerSearchTxtBox dateTxtBox') && (classname != "input-xlarge hasDatepicker") && (classname != "form-control empty margin_bottom date") && (classname != "form-control margin_bottom date") && (classname != "form-control date") && (classname != "form-control margin_bottom date hasDatepicker") && (classname != "form-control  date hasDatepicker") && (classname != "form-control empty  date") && (classname != "form-control offer_date hasDatepicker") && (classname != "form-control empty  offer_date hasDatepicker") && (classname != "form-control empty  bdate hasDatepicker") && (classname != "date form-control  hasDatepicker") && (classname != "form-control  offer_date hasDatepicker"))
            {
                document.getElementById(id).focus();
            } else
            {
                document.getElementById(alertDivId).focus();
            }

            if (lib_show_single_error == true)
            {
                return false;
                break;
            }
        }

    }//end of for loop



    return final_result;
}




//************************************************************************************************
//************************************************************************************************

//Input : arrData (array)
//Return : int
//Desc : returns the size of an input associative or nonassociative array.
function getArraySize(arrData)
{
    var l = 0;

    for (var k in arrData)
    {
        l++;
    }
    return l;
}


//Input : arrData (array) , search (mixed)
//Return : bool
//Desc : returns true if search element is present in array else returns false.
function inArray(search, arrData)
{

    for (var k in arrData)
    {
        if (search == arrData[k])
        {
            return k;
        }
    }

    return false;
}


//Input : arrData (array) , search (mixed)
//Return : array
//Desc : returns array key corresponding to value that matches search element.
function getArrayKeys(arrData, search)
{
    var j = 0;
    var key = Array();
    for (var k in arrData)
    {
        if (search == arrData[k])
        {
            key[j++] = k;
        }
    }

    return key;
}



function generateRandomNumber()
{
    num = Math.random();
    return num;
}


//pass event object to this function. Eg : onclick="isEnter(event)"
function isEnterKey(evt)
{
    var charCode = (evt.which) ? evt.which : event.keyCode
    // if not a digit or arrow key abort
    if (charCode == 13) {
        return true
    } else {
        return false
    }
}


//clears all the alert msg set in the div
//call this function before calling validation function.
function clearAlertMsg()
{
    var divArr = document.getElementsByTagName("div");

    for (var i = 0; i < divArr.length; i++)
    {
        if (divArr[i].id.indexOf("_alert") != -1)
        {
            divArr[i].innerHTML = "";
            divArr[i].style.display = 'none';
        }
    }
}

//Nutan Gosavi 09/03/2017
function copy_english_content(target,is_checkd){
    var domElementLength = $('#en').length;
    var domId = '';
    if(domElementLength){
        domId = 'en';
    }else{
        domId = document.querySelector('div[id^="en-"]').id;
    }
    $('#'+domId).find('input,textarea,select').each(function(){
        if(!$(this).attr('name')){
            return;
        }
        var name = $(this).attr('name');
        var val = $(this).val();
        var id = val;//Incase of checkboxes having id like sp_value
        if(!is_checkd)
        {
            val = '';
        }
        name = name.replace(domId,target);
        if($(this).is('textarea')){
            $('textarea[name='+name+']').val(val);
            if($('textarea[name='+name+']').data("kendoEditor")){
                y = $("<textarea/>").html(val).val();
                $('textarea[name='+name+']').data("kendoEditor").value(y);
            }
        }else if($(this).attr('type') == 'checkbox' || $(this).attr('type') == 'radio'){
            //  $('input[name='+name+']').val(val);
            if($(this).is(':checked') && val!=''){
                $('#'+target+'_'+id).prop('checked',true);
                //  $('input[name='+name+']').prop('checked',true);
            }else{
                $('#'+target+'_'+id).prop('checked',false);
                //  $('input[name='+name+']').prop('checked',false);
            }
        }else if($(this).is('select')){
            $('#'+name).val(val);
        }else{
            $('input[name='+name+']').val(val);
        }

    });
}

function copy_english_content_test(target,is_checkd){
  var fields  = $("#en :input").serializeArray();console.log(fields);
  $.each(fields, function (index, value) {console.log(value);
    var x = value.name.replace('en','');
     console.log(x,target+x);
    $("#"+target+x).val(value.value);

  });

}

function copy_image_radio(element)
{   
    if(mode==undefined)
    {
        mode='single';
    }
    var mode =$(element).parents('.imageBox-radio').attr('data-mode');
    var name =$(element).parents('.imageBox-radio').attr('data-field-name');
    var locale = $(element).parents('.imageBox-radio').attr('data-locale');
    var option= $(element).parents('.imageBox-radio').find('input[type=radio]:checked').val();
    var source = $('#'+option).find('.imageBox[data-field-name='+option+'_'+name+']');
    var target='';
    var deleted = 0;
    if(mode!='single')
    {
        source = $('#'+option).find('.imageBox[data-field-name='+name+']');
    }
    

   source.find('li').each(function(index, el) {
       if($(this).attr('data-deleted') == 'true')
       {
        deleted++;
       }
   });;
    
    if(source.find('img').length>0 && deleted == 0)
    {   html='';
        if(mode=='single')
        {
            target=locale+'_'+name;
            var dataId=source.find('li').attr('data-id');
            var img = source.find('img').attr('src');
            var imgId=$('#'+option).find('.imageBox[data-field-name='+option+'_'+name+'] li input').val();
            html='<li data-id="'+dataId+'" class="imageItems"><a href="javascript:void(0);" class="image-confirm-box"><span class="fa fa-times"></span></a><img src="'+img+'"><input type="hidden" name="'+target+'" id ="'+target+'" value="'+imgId+'"/></li>';
            $('#'+locale).find('.imageBox[data-field-name='+target+']').first().html(html);

        }else{
            target=name+'['+locale+']';
            $('#'+option).find('.imageBox[data-field-name='+name+'] li').each(function(index){
            var dataId=$(this).attr('data-id');
             var img = $(this).find('img').attr('src');
            var imgId=$(this).find('input').val();
            html+='<li data-id="'+dataId+'" class="imageItems"><a href="javascript:void(0);" class="image-confirm-box"><span class="fa fa-times"></span></a><img src="'+img+'"><input type="hidden" class="'+locale+'_imageId" name="'+target+'[]" id ="'+name+'_'+locale+'.'+index+'" value="'+imgId+'"/></li>';

            });
             $('#'+locale).find('.imageBox[data-field-name='+name+']').first().html(html);
        }
       
     
     
    }
    else
    {
      kendo.alert('No Image Found');
      $(element).removeProp('checked');
    }
    
}

/*
 function checkCreditCardDetail(ccNum,)
 {
 var flag = true;


 if(form.cc_number.value=='')
 {
 alert("Please enter  Credit Card Number");
 form.cc_number.focus();
 flag = false;
 return false;
 }
 else if(!checkInt(form.cc_number.value))
 {
 alert("Please enter  valid CreditCard Number");
 form.cc_number.focus();
 flag = false;
 return false;
 }
 else if(form.cc_number.value.length >=21)
 {
 alert("Please enter  valid CreditCard Number");
 form.cc_number.focus();
 flag = false;
 return false;
 }

 if(form.cc_cvv_number.value=='')
 {
 alert("Please enter CVV Number ");
 form.cc_cvv_number.focus();
 flag = false;
 return false;
 }
 else if(!checkInt(form.cc_cvv_number.value))
 {
 alert("Please enter valid CVV Number ");
 form.cc_cvv_number.focus();
 flag = false;
 return false;
 }
 else if(form.cc_cvv_number.value.length !=3 && form.cc_cvv_number.value.length !=4  )
 {
 alert("Please enter  valid CVV Number");
 form.cc_cvv_number.focus();
 flag = false;
 return false;
 }

 var	date = new Date();
 date.setFullYear(form.cc_expiry_year.value,(form.cc_expiry_month.value-1),1)
 var today = new Date()

 if (date<today)
 {
 alert("expiry date invalid.");
 flag = false;
 return false;
 }
 if(form.key.value =="")
 {
 alert("Text code cannot be blank.");
 document.frm.key.focus();
 flag = false;
 return false;
 }

 if(flag == true)
 {
 document.getElementById('CO1').style.display = "none";
 document.getElementById('CO2').style.display = "block";
 form.submit();
 return true;
 }
 }
 */

jQuery.fn.ForceNumericOnly =
        function () {
            return this.each(function () {
                jQuery(this).keydown(function (e) {
                    var key = e.charCode || e.keyCode || 0;
                    // allow backspace, tab, delete, arrows, numbers and keypad numbers ONLY
                    return (
                            key == 8 ||
                            key == 13 ||
                            key == 9 ||
                            key == 45 ||
                            key == 46 ||
                            (key >= 48 && key <= 57) ||
                            (key >= 96 && key <= 105) ||
                            key == 189 ||
                            key == 173 || key == 37 || key == 39 ||
                            key == 109 ||
                            key == 190 ||
                            key == 110
                            );
                });
            });
        };

//Nutan 
function clearValidationMsg()
{
   $(".fm-valid-error,#searchValidation").html('');
   $(".validationAlert").html('');
}
<?php
#-------------------------------------------------------------------------
Write a function ReadXml($xmlstr) which accepts an XML string as its only argument. Your function should write the names of the nodes and their values. 
for eg 
$xmstr= '<Address><to>James</to><from>Jani</from><heading>Reminder</heading><body>Please check your mail.</body></Address>';
echo ReadXml($xmstr);
should write out 
Address
To: James
From: Jani
Heading: Reminder
Body: Please check your mail
//--------------------------
function ReadXml($xmlstr)
{
    static $res = '';
    $xml = new SimpleXMLElement($xmlstr);

    if(count($xml->children()))
    {
        $res .= $xml->getName().PHP_EOL;
        foreach($xml->children() as $child)
        {
            ReadXml($child->asXML());
        }
    }
    else
    {
        $res .= $xml->getName().': '.(string)$xml.PHP_EOL;
    }

    return $res;
}

#-------------------------------------------------------------------------
Write a function declared as function SplitEmailAddress($address), whose argument will contain string data consisting of a valid e-mail address. This function will take the email address as the argument and return an array with two keys: user for the username part and domain for the domain part of the address. For example, after calling:

$arr = SplitEmailAddress('myuser_1@mailserver.example.com')

$arr['user'] should contain the string myuser_1, and 
$arr['domain'] should contain the string mailserver.example.com

//--------------------------
function SplitEmailAddress($address)
{	
    list($user, $domain) = explode('@',$address);
    return array('user' => $user, 'domain' => $domain);
}

#-------------------------------------------------------------------------
Write a function declared as function ReformatPhoneNumber($number), whose argument will contain string data representing some phone number data (entered by the user). A valid phone number may consist of between 7 and 12 digits (0..9). Assume that in between some adjacent digits there may optionally appear either a single space, or a single hyphen (-). Any other phone number should be considered invalid.

If the phone number is valid, the return value of your function should contain a string containing between 7 and 12 digits, representing the same phone number after removing all hyphens and spaces. If the phone number is invalid, throw a standard PHP5 Exception initialized with the text "Invalid phone number".

The first and the last character of the string should be a number.

For example, after calling ReformatPhoneNumber('012-345 69') the return value should be '01234569'. Calling the function with any of these values: '012345', '-012345 678', '01203- 34566', '123456678875432', '1234x567' should result in an exception.
//--------------------------
function ReformatPhoneNumber($number)
{
    if (preg_match('/^(\d[ -]?){7,12}$/', $number, $matches)){
        return preg_replace('/[ -]/', '', $number);
    }
    throw new Exception('Invalid phone number');
}

#-------------------------------------------------------------------------
Write a function GetUniqueOnes, which accepts a single argument. The argument is an array of integers, and the function should return the unique integers separated by commas.

For Example : GetUniqueOnes($arr) 

$arr = array(34,54,67,68,141,151,161,141,54,151,54)

should return 
34,54,67,68,141,151,161

//--------------------------
function GetUniqueOnes($arr)
{
    $res = implode(',',array_unique($arr));
   
    return $res;
}

#-------------------------------------------------------------------------
Write a function GeneratePassword which accepts two arguments, an integer and a character string consisting of letters (a-z) and digits (0-9).

When GeneratePassword(5,'abc0123') is called, it should return a random string of 5 characters taken from 'abc0123'. 



For Example : GeneratePassword(7,'abczxc012394') could return any of the following outputs : 
2c00acb 
2c23z93 
030b2a4

//--------------------------
function GeneratePassword($length, $chars)
{
return substr(str_shuffle($chars), 0, $length);
}
function GetLongestString()
{
return max(array_map(strlen, func_get_args()));
}

#-------------------------------------------------------------------------
Write a function GetLongestString, whose arguments are character strings. It should return an integer representing the length of the longest string passed as its argument; for example:

GetLongestString("a", "aaa", "aa") should return 3,

GetLongestString("a", "bcd", "efgh", "ij", "") should return 4. 
//--------------------------
function GetLongestString()
{
    $length = 0;
    foreach(func_get_args() as $arg)
    {
   
        $var = strlen($arg);
        if($var > $length)
        {
            $length = $var;
        }
    }
    return $length;
}
#-------------------------------------------------------------------------
You are given an array in PHP, which contains positive integers and/or recursively nested arrays of positive integers. It may, for example, be initialized as:

$arr = array(array(141,151,161), 2, 3, array(101, 202, array(303,404)));

Write a function "function MaxArray($arr)" which returns the maximum value contained in $arr or some array nested within $arr. In the example, the returned value should be 404. 
//--------------------------

function MaxArray($arr)
{
    $GLOBALS['max'] = 0;
    array_walk_recursive($arr,create_function('$item,$key','if($item > $GLOBALS["max"]) $GLOBALS["max"] = $item;'));
    return $GLOBALS['max'];
}
#----------------------------------------------------------------------------
Consider a database with one table called "user" having two fields:

"id" (type: INTEGER, PRIMARY KEY) 
"name" (type: VARCHAR(32))

Write a standard SQL query which retrieves the second highest value of "id" from the "user" table. The value returned should be represented using the column name "id". 

//--------------------------------------
SELECT id FROM user ORDER BY id DESC LIMIT 1,1

#-----------------------------------------------------------------------------------
You are given an HTML form, which contains the following entries: … The form has been submitted using the “POST” method. Identify, which of the check-boxes and write (output) their numbers in increasing order. Separate all numbers by spaces (not new lines) and do not use any HTML formatting. For example, if check-boxes 3, 5, and 10 are checked, the only valid output would be:3 5 10
//---------------------------------------------------------
$res = array();
while(list($checkbox,) = each($_POST))
{
$res[] = intval(substr($checkbox,strpos($checkbox,'_') + 1));
}
sort($res);
echo implode(' ',$res);

#------------------------------------------------------------------------------
Write a program that outputs the numbers that are divisible by 8 and are between 200 and 600 (inclusive), separated by commas (without spaces or line breaks).
//------------------------------------------
for($i = 200; $i <= 592; $i+=8)
{
    echo $i.',';
}
echo $i;
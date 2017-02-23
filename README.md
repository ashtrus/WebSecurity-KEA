# WebSecurity-KEA 
web security projects - Project 1 

Connect to my sql db - > USE PHP my admin ( XAMPP )
db name = secuirty
db table = users

CREATE TABLE users ( 
id SERIAL, username VARHCAR(30), password(30)
PRIMARY KEY(id))

--------------------------------------------------------------

Input Sanitation 
- Removing Escape sequence Characters  --->   $input = preg_replace('/\s+/', ' ', $input); 
- Lockout 5 minutes if same username is trying to logged in  -->  (We try this client side first) 
- Removing <Script> tag to prevent SQL injection 


--------------------------------------------------------------

Database Input - How to prevent SQL Injection

Check to make sure data of type integer, for example, is valid by ensuring it actually is an integer
In the case of non-strings you need to ensure that the data actually is the correct type

In the case of strings you need to make sure the string is surrounded by quotes in the query (obviously, otherwise it wouldn't even work)
Enter the value into the database while avoiding SQL injection (mysql_real_escape_string or parameterized queries)

When Retrieving the value from the database be sure to avoid Cross Site Scripting attacks by making sure HTML can't be injected into the page (htmlspecialchars)

You need to escape user input before inserting or updating it into the database. Here is an older way to do it. You would want to use parameterized queries now (probably from the PDO class).

//EXAMPLE 
$mysql['username'] = mysql_real_escape_string($clean['username']);
$sql = "SELECT * FROM users WHERE username = '{$mysql['username']}'";
$result = mysql_query($sql);



CLient Sde Security -> Session 4 - Web Sec Class 

-OWASP
-HTTP Headers 
-Cookies
-Request / Hostname /origin /refer / Useragent 
-Respond  / 

Form inputs 
Disabled  / hidden field 
Modify header - request 

Attacks 
-Sessions Hijacking 



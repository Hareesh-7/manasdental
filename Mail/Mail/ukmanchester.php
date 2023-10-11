<?php
print file_get_contents("http://www.bath.ac.uk/common/includes/comp-sci/header-contact.html");
?>
                <div id="sidebar">
<?php
/* Check to see whether a contact name is present in the url or not. Do not have to worry if it isn't because can just display no additional information **
** the page. The CMS page always displays contact information throughout the system.								 */

if (!empty($_GET['contact']))
{
  // Retrieve the user's image details
  $details = getImage($_GET['contact']);

  // Path to images stored within the CMS
  $file="/comp-sci/images/people/$details[Image]";

  // Take image size file and separate into Height and Width sections
  $size=explode("x", $details[Image_Size]);
  $height=$size[1]; $width=$size[0];

  // Only create in an image if have both a file and a size for it. Don't want to display zero sized files!
  if (!empty($details[Image]) && !empty($details[Image_Size]))
  {
 	// HTML code to display the correct image with specific size and name details
  	echo "<p><i><img height=\"$height\" width=\"$width\" alt=\"$details[Title] $details[Forename] $details[Surname]\" src=\"$file\"/><br />
              </i></p>";
  }
}

/* Function to retreive image details for a selected contact's name. The provided name is separated by the _ used within the pages urls and searched for **
** in the database. The result row is returned with the user's image file name and size for processing. The images are stored within the CMS file   **
** structure.																		 */

function getImage($name)
{
  $components = explode ("_", $name);
  $size=count($components);
  connect();

  // Get query data
  if ($size > 3) { $surname = $size-1; $query = "SELECT Title, Surname, Image, Image_Size FROM staff WHERE Title = '$components[0]' AND Forename LIKE '%$components[1]%' AND Surname LIKE '%$components[$surname]%'"; }
  else if ($size == 3) { $query = "SELECT Title, Surname, Image, Image_Size FROM staff WHERE Title = '$components[0]' AND Forename = '$components[1]' AND Surname = '$components[2]'";}
  else if ($size == 2) { $query = "SELECT Title, Surname, Image, Image_Size FROM staff WHERE Forename = '$components[0]' AND Surname = '$components[1]'";}
  else if ($size == 1) { $query = "SELECT Title, Surname, Image, Image_Size FROM staff WHERE Surname = '$components[0]'";}

  $result = mysql_query($query);

  if ($row = mysql_fetch_array ($result))
  {
     return $row;
  }
}

?>
                    <h4>How to find us</h4>
                    <ul>
                        <li><font face="Arial" size="2"><span class="345070908-13072009">We are located in the East building which is adjacent to the East Car Park.</span></font></li>
                        <li><a target="blank" href="/maps/">Map of the Campus</a></li>
                    </ul>
                    <h4>Contact</h4>
                    <p>Department of Computer Science<br />
                    +44 (0)1225 386811</p>
                </div><!-- /sidebar -->

                <div id="contentContainer">
                    <div id="content">
                        <h1>Staff and Contacts</h1>
<?php
// Global variable that sets what the current page is that the contacts system is being loaded from.
$curpage="index.php";

// Have a URL variable to request the list of contacts within a category
if (!empty($_GET['category']))
{
  echo "<p>The following are the main contacts for the Department of Computer Science. For the 'phone numbers, use the area code and prefix for each number: 01225 38, or if 'phoning from outside the UK, use the prefix: +44 1225 38
        To send a message to any of the Department members, click on their link below. </p><br/>";

  // Display the categories members
  displayCategory($_GET['category'], $curpage);
}

// Have a URL variable to request the details of an individual contact
else if (!empty($_GET['contact']))
{
  // Display the individual user's details
  displayContact($_GET['contact'], $curpage);
}

// Not looking for either contact or category so display contacts front page with all details.
else
{
   // Standard department details
   echo "<p>Department of Computer Science<br />University of Bath<br />
	    Bath<br />
	    BA2 7AY<br />
	    United Kingdom<br />
	    </p><p>
	    Phone: +44 (0)1225 386811<br />Fax: +44 (0)1225 383493</p>";

   // Special groups that should not require changing in future
   echo "<h3> Admissions: </h3>
	 <ul> <li> <a href=\"$curpage?contact=Department_Coordinator\"> Department Coordinator</a></li>
              <li> <a href=\"https://secure.bath.ac.uk/prospectus/cgi-bin/adm-enquiry.pl\">Undergraduate Admissions</a></li>
	      <li> <a href=\"$curpage?contact=MSc_Admissions\"> MSc Admissions </a></li>
	      <li> <a href=\"$curpage?contact=EngD_Admissions\"> EngD Admissions </a></li>
	      <li> <a href=\"$curpage?contact=PhD_Admissions\"> PhD/MPhil Admissions </a></li>
	      <li> <a href=\"$curpage?contact=Internships\"> Internships </a></li>
	 </ul>";

   echo "<h3> Department Team: </h3>
	 <ul> <li> <a href=\"$curpage?contact=Head_of_Department\"> Head of Department </a></li>
	      <li> <a href=\"$curpage?contact=Director_of_Teaching\"> Director of Teaching </a></li>
	      <li> <a href=\"$curpage?contact=Miss_Louise_Oliver\"> Placements Officer </a></li>
         </ul>";

   echo "<h3> Department Members </h3>";
   echo "Please use the links provided below to contact individual members of the Department. <br/>";

   // Print list of categories for the contacts
   printCategories($curpage);
}

/* Function used to create a connection with the mysql database. User only has select priveleges so can't **
** perform any other actions from the outside world.		                                          */

function connect()
{
  // Connect to the database for details
  mysql_connect('mysql.cs.bath.ac.uk','staffcms','bbb212b0');
  mysql_select_db('staff') or die("Unable to select database");
}

/* Function takes in the user's name, the contact system's current page and prints the contact's details **
** onto the screen so that it can be used. 	                                                         */

function displayContact($name, $curpage)
{
   // Take user's username from their name in URL
   $username=getUsername($name);

   // Get user's contact details
   $details = userDetails($username, $curpage);

   // If received error message from userDetails. Message is dealt with in the userDetails function.
   if ($details == -1) {}

   // Have user's details so can print them out on screen in the set format
   else
   {
     echo "<h3> $details[Title] $details[Forename] $details[Surname]</h3>";

     echo "<h4> $details[Position]</h4>";

     echo "<b> Contact Details </b>
          <ul>";

     // Only display if have a phone number
     if ($details[Phone] !== "")
     {
	$components=explode("ext ",$details[Phone]);
	$phone=$components[1];
	echo "<li> Tel: +44 1225 38$phone</li>";
     }

     echo "<li> Fax: +44 1225 383493 </li>";

     // Only display if have a web page set
     if ($details[WebPage] !== "")
     {
      echo "<li> Web Page: <a target=\"other\" href=\"http://$details[WebPage]\"> http://$details[WebPage] </a> </li>";
     }

     echo "</ul>";

     // Only display if have a role within the department
     if ($details[Roles] !== "")
     {
       echo "<p><b> Roles </b> <br/>
          $details[Roles] </p>";
     }

     // Only display if have a research interest set
     if ($details[Research] !== "")
     {
       echo "<p><b> Research Interests </b>
            $details[Research] </p>";
     }
    // Display publications button and / or publications
    if ($details[Publications] == "on")
     {
	  $webpage = $_SERVER['REQUEST_URI'];  // Current webpage
	  echo "<p><b> Publications </b> <br/>";

	  // Checking to see whether have to display the hide or show publications buttons
          if (!isset($_POST['username']))
          {
             echo "<p> <b> Warning: </b> For some users this may be a very long list and could take some time to load. </p>";
             if ($details[BUCS_Username] != "") {$username = $details[BUCS_Username];}
             pubForm("show","$username",$webpage); // Show publications button
          }

          else
	  {
            if ($details[BUCS_Username] != "") {$username = $details[BUCS_Username];}
	    pubForm("hide","$username",$webpage);   // Hide publications button
	    $context = stream_context_create(array('http' => array('proxy' => 'http://wwwproxy.bath.ac.uk:3128','request_fulluri' => true)));
            $text = file_get_contents("http://opus.bath.ac.uk/view/people_cv/$username=40bath=2Eac=2Euk.default.include",false, $context);

            if (strpos($text,"404 File not Found")) { echo "<p> <b> Note: </b> There are no publications currently stored for this user within the OPUS system.</p>"; }
            else { echo "$text </p>"; }
	  }
     }

     // Checking to see whether the page is being reloaded by the e-mail form
     if ($_POST['sending'] == 1)
     {
         $error = checkForm();

         // All is fine so can now focus on sending the e-mail
         if ($error == 0) { $sent = sendMail(); } else { $sent =-1; }

         // Sent
         if ($sent && $error ==0) { echo "<p> <b> Success: </b> Your message has been sent to the e-mail address of $details[Title] $details[Forename] $details[Surname].</p>"; }
         else if ($error == -1) {}
         else { echo "<p><b> Error: </b> There has been an error with sending your e-mail. Our support team has been informed of this and will try and deal with it
                                         as soon as possible. Please try again later. </p>"; }
     }

     // Call e-mail form so shows at the bottom of the contacts pages, only if have e-mail address
     if ($details[Email] !== "") {emailForm($name,$curpage,$error);}
   }
}

/* Function used by several others to get a username from the database after being provided with a name (normally from **
** a URL). The name is separated out into its components using the _ as a delimeter. The correct search string is then **
** chosen depending on how many parts there are (1+). The username is returned if there is a result and -1 is returned **
** if there was an error so the calling function can deal with it.	                                               */

function getUsername($name)
{
  // Separate out name by _
  $components = explode ("_", $name);
  $size = count($components);

  for ($i=0; $i<size; $i++)
  {
      $components[$i] = mysql_real_escape_string ($components[$i]);
  }

  // Choose correct query dependent on how many components there are
  if ($size > 3) { $surname = $size-1; $query = "SELECT Username, Forename, Title, Surname FROM staff WHERE Title = '$components[0]' AND Forename LIKE '%$components[1]%' AND Surname LIKE '%$components[$surname]%'"; }
  else if ($size == 3) { $query = "SELECT Username, Forename, Title, Surname FROM staff WHERE Title = '$components[0]' AND Forename = '$components[1]' AND Surname = '$components[2]'";}
  else if ($size == 2) { $query = "SELECT Username, Title, Surname FROM staff WHERE Forename = '$components[0]' AND Surname = '$components[1]'";}
  else if ($size == 1) { $query = "SELECT Username, Title, Surname FROM staff WHERE Surname = '$components[0]'";}

  // Connect to database
  connect();

  // Get query data
  $result = mysql_query($query) or die(mysql_error());

  // Have a valid result
  if ($row = mysql_fetch_array ($result))
  {
     return $row[Username];
  }

  // No result so return -1 for calling function
  else { return -1; }
}

/* This function takes the user's username and the current contacts page to search for all of their details. If the **
** details are returned then the result row is returned. If there is an error then an error message is printed onto **
** the screen with an automatic redirect back to the front page.                                                    */

function userDetails ($username, $curpage)
{
   // Get query data
   $query = "SELECT * FROM staff WHERE Username = '$username'";
   $result = mysql_query($query);

   // Have a valid result
   if ($row = mysql_fetch_array ($result))
   {
     return $row;
   }

   // No result row so print error message, redirect and return -1 for calling function
   else
   {
      echo "<p><b> Error: </b> There has been an error trying to retrieve the user's details. You will be automatically taken back to the
               front page of the contacts section in 10 seconds where you can try again or you can <a href=\"$curpage\"> click here. </a>
               If this problem does continue then please contact <a href=\"$curpage?contact=Computer_Support\"> Computer Support </a> with the details. </p>";

      echo "<META HTTP-EQUIV=\"REFRESH\" CONTENT = \"10; URL = $curpage\">";
      return -1;
   }
}

/* The function takes in the current category and web page being used by the contacts database. First the category **
** shorthand and title are retrieved by calling getCategory. This info is used to get all of the details of the    **
** contacts within the category and printed out in a table for easy reading. If there are no results for the       **
** category then an error message is printed out and a -1 returned for feedback                                    */

function displayCategory($category, $curpage)
{
  // Get title and mysql shorthand for provided category
  $return = getCategory($category);
  $title=$return[0]; $type=$return[1];

  // Connect to mysql database
  connect();

  // Get details of all user's within the selected category
  $query = "SELECT Title, Forename, Surname, Position, Phone FROM staff WHERE Type = '$type' ORDER BY Surname ASC";
  $result = mysql_query($query) or die(mysql_error());

   // Check if have result
   if ($row = mysql_fetch_array ($result))
   {
     echo "<h3> $title </h3>";

     // Create table outside without lines before populating rows with details
     echo "<table class=\"noborder\">";

     // Details of each user
     do
     {
       // Replace spaces in forename and surname with _ for putting in URL
       $forename = str_replace(" ","_",$row[Forename]);
       $surname = str_replace(" ","_",$row[Surname]);

       // Take resulting string and replace, escape special characters
       $fore=cleanup($forename);
       $sur=cleanup($surname);

       // Create correct link for type of contact. RT Queues may not have titles
       if ($row[Title] == "") { $link="$fore"."_$sur"; } else { $link="$row[Title]_"."$fore"."_$sur"; }

       // Create individual row within table
       echo " <tr><td valign=\"top\"> <a href=\"$curpage?contact=$link\"> $row[Title] $row[Forename] $row[Surname] </a></td><td align=\"top\"> &nbsp; $row[Phone] &nbsp; </td><td valign=\"top\"> $row[Position]</td></tr>";

     } while ($row = mysql_fetch_array($result));
     echo "</table><br/>";
   }

   // Have not got a result for the category. Display an error message and return -1 for calling function
   else
   {
      echo "<p><b> Error: </b> There has been an error trying to retrieve the category's details. You will be automatically taken back to the
               front page of the contacts section in 10 seconds where you can try again or you can <a href=\"$curpage\"> click here. </a>
               If this problem does continue then please contact <a href=\"$curpage?contact=Computer_Support\"> Computer Support </a> with the details. </p>";

      echo "<META HTTP-EQUIV=\"REFRESH\" CONTENT = \"10; URL = $curpage\">";
      return -1;
   }

   // Print categories underneath the results so can navigate away.
   printCategories($curpage);

}

/* Function called with the current page of the contacts database which then prints out a  **
** list of all the current categories as links to their individual pages. If the variables **
** in this list are changed then they need to be replicated in the getCategory function    **
** below for the mysql queries to function.                                                */

function printCategories($curpage)
{
     echo "<ul> <li> <a href=\"$curpage?category=academic\"> Academic Staff </a> </li>
              <li> <a href=\"$curpage?category=postgraduates\"> Postgraduates </a> </li>
              <li> <a href=\"$curpage?category=research_officers\"> Research Officers </a> </li>
              <li> <a href=\"$curpage?category=support_staff\"> Support Staff</a> </li>
              <li> <a href=\"$curpage?category=technical\"> Technical Support Staff </a> </li>
              <li> <a href=\"$curpage?category=vis_prof\"> Visiting Professors </a> </li>
              <li> <a href=\"$curpage?category=vis_fellows\"> Visiting Research Fellows </a> </li>
     </ul>";
}

/* Function takes in a category name (normally taken from a URL) and using a switch **
** statement returns the code that is employed within the contacts details database **
** Used for then inputting into mysql queries.	                                    */

function getCategory ($category)
{
  switch ($category)
  {
    case "academic":
          $code="ACC";
          $title="Academic Staff";
          break;

    case "postgraduates":
          $code="PG";
          $title="Postgraduates";
          break;

    case "research_officers":
          $code="RO";
          $title="Research Officers";
          break;

    case "support_staff":
          $code="SUP";
          $title="Support Staff";
          break;

    case "technical":
          $code="TEC";
          $title="Technical Support Staff";
          break;

    case "vis_prof":
          $code="VP";
          $title="Visiting Professors";
          break;

    case "vis_fellows":
          $code="VRF";
          $title="Visiting Research Fellows";
          break;
  }
  $return=array($title,$code);

  return $return;
}

/* Function taken from the publications database. Removes all bad mysql characters from strings **
** and escapes special characters so can be used in query data. Takes in the string and returns **
** the resulting string for the calling function to process.                                    */

function cleanup($querystring)
{
  // Bad character removal
  $badchar = array("\\","%", ";");
  $querystring = str_replace($badchar, "", $querystring);

  // Special character escaping
  $querystring = addslashes($querystring);

//  Replaced ereg_replace as will be deprecated as of php 5.3.0
//  $querystring=ereg_replace("\"","\\\"",$querystring);
//  $querystring=ereg_replace("'","\\'",$querystring);

  return trim($querystring);
}

/* Prints out an e-mail form on screen within individual user's profiles. Takes in the current page **
** so that it can reload the user's profile with any error messages or feedback from the mailing    **
** process.                                                                                         */

function emailForm($name, $curpage, $error)
{
   if ($error != "-1") { echo "<p> Send an e-mail to this Contact by filling in <b>all</b> of the fields below </p>"; }
   if ($error == "-1") { $formname = $_POST['name'];  $formemail = $_POST['email']; $formsub = $_POST['subject']; $formtext = $_POST['text']; }

  echo "<form action=\"$curpage?contact=$name\" name=\"emailForm\" method=\"post\">
        <p> Enter your name: <br/>
        <input type=\"text\" name=\"name\" id=\"contact_name\" size=\"30\" class=\"inputbox\" value=\"$formname\" /> </p>
        <p> E-mail address: <br/>
        <input type=\"text\" name=\"email\" id=\"e-mail_address\" size=\"30\" class=\"inputbox\" value=\"$formemail\" /> </p>
        <p> Message Subject: <br/>
        <input type=\"text\" name=\"subject\" id=\"subject\" size=\"30\" class=\"inputbox\" value=\"$formsub\" /> </p>
        <p> Enter your message: <br />
        <textarea cols=\"50\" rows=\"10\" name=\"text\" id=\"contact_text\" class=\"inputbox\">$formtext</textarea></p>
        <input type=\"hidden\" name=\"sending\" value=\"1\" />
        <input type=\"submit\" value=\"Send\" />
        </form>";
}

/* This function checks the data received from the e-mail form on the contact page and ensures that **
** it is all correct. This is done by checking if all the fields are filled and then checking the   **
** validity of the e-mail address supplied.                                                         */

function checkForm()
{
   // Check to see whether one or more fields has been left empty on the e-mail form
   if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['subject']) || empty($_POST['text']))
   {
      echo "<p><b> Error: </b> One or more of the fields within the e-mail form were not filled in please ensure that <b> all </b> fields
                               are filled in before submitting the form. </p>";
      return -1;
   }

   // Check to see if e-mail address supplied is of a valid format
   else
   {
      $valid = validEmail($_POST['email']);

      if (!$valid)
      {
         echo "<p><b> Error: </b> The supplied e-mail address is in an invalid format. Please edit it to a valid address.</p>";
         return -1;
      }

      else { return 0; } // From and e-mail address are all valid
   }
}

function pubForm($purpose,$username,$webpage)
{
  if ($purpose == "show") {$value = "Show Individual's Publications";}
  else {$value = "Hide Individual's Publications";}

  echo "<form action=\"http://www.bath.ac.uk$webpage\" method=\"post\">";
  if ($purpose == "show") { echo "<input type=\"hidden\" name=\"username\" value=\"$username\"/>";}
  echo "<input type=\"submit\" value=\"$value\"/> <br/><br/>";
  echo "</form>";
}


/* Validate an email address. Provide email address (raw input). Returns true if the email address has the email **
** address format and the domain exists. This e-mail address checking code was taken from the website:           **
** http://www.linuxjournal.com/article/9585 and edited.                                                          */

function validEmail($email)
{
   $isValid = true;
   $atIndex = strrpos($email, "@");
   if (is_bool($atIndex) && !$atIndex)
   {
      $isValid = false;
   }
   else
   {
      $domain = substr($email, $atIndex+1);
      $local = substr($email, 0, $atIndex);
      $localLen = strlen($local);
      $domainLen = strlen($domain);
      if ($localLen < 1 || $localLen > 64)
      {
         // local part length exceeded
         $isValid = false;
      }
      else if ($domainLen < 1 || $domainLen > 255)
      {
         // domain part length exceeded
         $isValid = false;
      }
      else if ($local[0] == '.' || $local[$localLen-1] == '.')
      {
         // local part starts or ends with '.'
         $isValid = false;
      }
      else if (preg_match('/\\.\\./', $local))
      {
         // local part has two consecutive dots
         $isValid = false;
      }
      else if (!preg_match('/^[A-Za-z0-9\\-\\.]+$/', $domain))
      {
         // character not valid in domain part
         $isValid = false;
      }
      else if (preg_match('/\\.\\./', $domain))
      {
         // domain part has two consecutive dots
         $isValid = false;
      }
      else if(!preg_match('/^(\\\\.|[A-Za-z0-9!#%&`_=\\/$\'*+?^{}|~.-])+$/',
                 str_replace("\\\\","",$local)))
      {
         // character not valid in local part unless
         // local part is quoted
         if (!preg_match('/^"(\\\\"|[^"])+"$/',
             str_replace("\\\\","",$local)))
         {
            $isValid = false;
         }
      }
      if ($isValid && !(checkdnsrr($domain,"MX") || checkdnsrr($domain,"A")))
      {
         // domain not found in DNS
         $isValid = false;
      }
   }
   return $isValid;
}

// Function called to format the e-mail form's data into an e-mail and then send. If the mail fails
// then the function prints out an error message returns a -1 to inform the page

function sendMail ()
{
    // Set up e-mail paramters
    $to = getEmail($_GET['contact']);
    $subject = $_POST['subject'];
    $message = $_POST['text'];
    $name = $_POST['name'];
    $from = $_POST['email'];

    // Add standard text to e-mail sections
    $sub = "Department of Computer Science: $subject";
    $mes = "This is an enquiry e-mail via http://www.bath.ac.uk/comp-sci/ from: \n$name <$from> \n\n$message";

    // Additional headers
    $headers = "From: $from";

    // Have a valid to address from the database so send mail
    if ($to != "-1")
    {
       // Mail it
       mail($to, $sub, $mes, $headers);
    }
    else { return -1; }

    // Check to see if the mail was sent correctly
    if ($mail) { return 0; }
    else { return -1; }
}

/* Function to get the e-mail address for any user. Is a copy of getUsername but returns the e-mail **
** address on success and -1 on failure.                                                            */

function getEmail ($name)
{
  // Separate out name by _
  $components = explode ("_", $name);
  $size = count($components);

  // Choose correct query dependent on how many components there are
  if ($size > 3) { $surname = $size-1; $query = "SELECT Email, Forename, Title, Surname FROM staff WHERE Title = '$components[0]' AND Forename LIKE '%$components[1]%' AND Surname LIKE '%$components[$surname]%'"; }
  else if ($size == 3) { $query = "SELECT Email, Forename, Title, Surname FROM staff WHERE Title = '$components[0]' AND Forename = '$components[1]' AND Surname = '$components[2]'";}
  else if ($size == 2) { $query = "SELECT Email, Title, Surname FROM staff WHERE Forename = '$components[0]' AND Surname = '$components[1]'";}
  else if ($size == 1) { $query = "SELECT Email, Title, Surname FROM staff WHERE Surname = '$components[0]'";}

  // Connect to database
  connect();

  // Get query data
  $result = mysql_query($query) or die(mysql_error());

  // Have a valid result
  if ($row = mysql_fetch_array ($result))
  {
     return $row[Email];
  }

  // No result so return -1 for calling function
  else { return -1; }
}

// end of content for <div id="content">

print file_get_contents("http://www.bath.ac.uk/common/includes/comp-sci/footer.html");
?>
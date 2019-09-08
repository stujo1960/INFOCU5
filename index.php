<!DOCTYPE html>
<html>
<head>
<style>
p.ex {
  color: rgb(255,255,255);
}
</style>
</head>
<body>

<?PHP
$page = $_POST[page];
if (!$page){$page = $_GET[page];}
$nextpage = $page + 1;
$job = "Junior Developer";
$yrsExp = 17;
$interest = "yes";
$contactInfo = "
<h1>
Stuart Johnson<BR>
785-734-7176<br>
stuart.n.johnson@gmail.com</h1>
";

$question = array(
"Is a ".$job." position a good match for me and am I the right person for the job?",
"Will I follow the lead of a person much younger than myself?",
"Can I adapt to quick changing technology?"

);

switch ($page) {
    case "1":
        pageone($job,$yrsExp,$question);
        break;
    case "2":
        pagetwo($interest);
        break;
    case "3":
        pagethree();
        break;
    case "4":
        pagefour();
        break;
    case "5":
        pagefive();
        break;
    default:
        echo "something went terribly wrong!";
        die;
}
function pageone($job,$yrsExp,$question){
printf ("<h1>Good morning,</h1>
       With %u years experience at my previous employer a number of questions come to mind when
       considering a %s position.<p>",$yrsExp,$job);
printf ("<ul><li>".$question[0]."</li><li>".$question[1]."</li><li>".$question[2]."</li></ul><p>");
}

function pagetwo($interest){
  printf("<h1>Of course the answer is <B><U>".$interest."</u></b> or I wouldn't be asking for your time.</h1>
        <ul>
        <li>When I received that free disc from AOL I started learning how to make web pages with Netscape Navigator-WYSIWYG.</li>
        <li>Then hand coding HTML.</li>
        <li>Then PHP/MySQL, CSS and Javascript .... I am now learning about Android app development.</li>
        <li>None of this fell under my job description, I just have this thirst for new skills not to mention building a<BR>
           scheduling/inventory/tracking system to make a smoother work flow for my team.</li>
        </ul>
  ");
}

function pagethree(){
  printf("
          <h1>Nice story but what is in it for INFOCU5?</h1>
          <ul>
          <li>A loyal, determined & long term team member.</li>
          <li>A rock solid work ethic not often seen today.</li>
          <li>Maturity & professionalism but young at heart.</li>
          <li>I know the real education begins after a diploma, not before.</li>
          <li>I'm a backwards thinker-whats the end goal then how do I get there.</li>
          <li>A methodical troubleshooter - divide and conquer.</li>
          </ul>
          ");
}
function pagefour(){
  printf("
          <h1>What do I need from INFOCU5?</h1>
          <ul>
          <li>A confident team leader.</li>
          <li>Limited company politics-we are a team.</li>
          <li>Majority of work done remotely. Until Lily graduates high school I have roots (4 years)</li>
          <li>Occasional travel to Denver and beyond.</li>
          <li>Fair financial & benefit compensation.</li>
          <li>Regular & honest performance evaluations.</li>
          <li>A pat on the back or kick from behind when deserved.</li>
          </ul>
          ");
}
function pagefive(){
  printf("
          <h1>Ok - we made it!</h1>
          Lets cut to the chase.
          <ul>
          <li>This script just shows I know a few practices and commands.</li>
          <li>I rarely try to reinvent the wheel but when I do it rolls smooth.</li>
          <li>Lately I find myself using W3schools.com for quick reminders but PHP.net & I are old friends</li>
          <li>Even as a hiring manager interviews were never my favorite thing. I'd rather see results than a slick presentation.</li>
          <li>Give me 60 days. If I'm not in the groove we need to rethink our relationship.</li>
          <li>Let me know where the Easter Egg is in this code, otherwise I assume you are a robot.</li>
          <li>My latest favorite saying is 'Eat the frog'. Look it up and live by it.</li>
          <li>Have a wonderful day</li><p class=ex>and a Happy Easter</p>
          </ul>
          ");
}

printf("<p>%s",$contactInfo);
?>
<p>
<center>
<form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF'].'?page='.$nextpage; ?>" >
<table border=0 width=50%>
<tr>         
    <?PHP
    $pagesleft = 5 - $page;
    if ($page < 5){?>
    <td width=50%>
    <input type="submit" value="Continue - only <?PHP echo $pagesleft;?> more to go.">
    </td>
    <td width=50%>
      <button type="button" onclick="alert('Nope. You must read on!')">Die</button>
      <?PHP
    }
    else{?>
      <button type="button" onclick="alert('Thats it. Use the contact info below to move this process along. Lets go to work!')">Die</button>
      <?PHP
    }
    ?>
    </td>
</tr>
</table>
</form>
</body>
</html>
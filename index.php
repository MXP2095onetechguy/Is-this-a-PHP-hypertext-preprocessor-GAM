<!--Written in Vs-Code -->
<?php 
session_start();
$yes = "";
if(session_id() == "")
{
  $yes = "session not initialized, failed to get session variables.";
}
else{
  if(isset($_SESSION["yournumber"]) && $_SESSION["mynumber"])
  {
    $yes = "Your last number was " . $_SESSION["yournumber"] . " and my last number is " . $_SESSION["mynumber"] . ".";
  }
  else{
    $yes = "session is initialized, but session variable not set";
  }
}
?>
<!DOCTYPE html>  
<head>
<script type="text/javascript">
    console.error("Error: Krab is barK. Krob is borK. Ffur is rufF.");
    function submitForm()
    {
        document.getElementById("inputform").submit();
    }
    function resetForm()
    {
        document.getElementById("inputform").reset();
    }
</script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
<!--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://www.w3schools.com/w3css/4/w3.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12"></script>
<?php 

class AbigailSaphiroRuntimeThiccBreastException extends Exception {
  public function errorMessage() {
    //error message
    $errorMsg = "Exception because Abigail Saphiro's breast are to fat and your t-strap high heel shoes bow tie is falling off, also your t-strap is torn on your t-strap high heel shoe
    and also the fact that you are sexy and better destory those flats and high heel
    and tear the straps on the flats and the high heel and now your bow tie on your t-strap high heel shoes bow tie has fallen off, and they smell horrible as Abigail Spahiro's breast scent and her feet scent combined, P-U!";
    return $errorMsg;
  }
}

function cleaninput($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
// set_exception_handler('AbigailSaphiroRuntimeThiccBreastException');
if(session_id() == "")
{
  $yes = "session not initialized, failed to get session variables.";
}
else{
  if(isset($_SESSION["yournumber"]) && $_SESSION["mynumber"])
  {
    $yes = "Your last number was " . $_SESSION["yournumber"] . " and my last number is " . $_SESSION["mynumber"] . ".";
  }
  else{
    $yes = "session is initialized, but session variable not set";
  }
}
?>
<title>Game number guessing</title>
<style>
.error {
  color: #ffffff;
  transition-duration: 0.4s;
  background-color: #000;
}

.error-noh {
  /* @include blacknredcolor(); */
  color: #ff0000;
  background-color: #000;
}

.error:hover {
  /* @include blacknredcolor(); */
  color: #ff0000;
  background-color: #000;
}

.space {
  padding-top: 10px;
  padding-right: 10px;
  padding-bottom: 10px;
  padding-left: 10px;
}

.flloat-left {
  float: left;
}

input[type=number] {
  transition-duration: 0.4s;
  border: 3px solid #4CAF50;
  color: white;
  border-radius: 999px;
  background-color: black;
}

input[type=number]:focus {
  border: 3x solid #4CAF50;
  /* @include blacknredcolor(); */
  color: #ff0000;
  background-color: #000;
}

input[type=number]:hover {
  border: 3px solid #4CAF50;
  /* @include blacknredcolor(); */
  color: #ff0000;
  background-color: #000;
}

input[type=text] {
  transition-duration: 0.4s;
  border: 3px solid #4CAF50;
  color: white;
  border-radius: 999px;
  background-color: black;
}

input[type=text]:focus {
  border: 3x solid #4CAF50;
  /* @include blacknredcolor(); */
  color: #ff0000;
  background-color: #000;
}

input[type=text]:hover {
  border: 3px solid #4CAF50;
  /* @include blacknredcolor(); */
  color: #ff0000;
  background-color: #000;
}

body {
  font-family: Arial, Helvetica, sans-serif, "Tangerine", "Lucida Console", "Courier New", monospace;
  margin: auto;
}

hr {
  color: blue;
  background-color: blue;
}

/* latin */
@font-face {
  font-family: "Tangerine";
  font-style: normal;
  font-weight: 400;
  src: url(https://fonts.gstatic.com/s/tangerine/v12/IurY6Y5j_oScZZow4VOxCZZM.woff2) format("woff2");
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
.button {
  border-radius: 999px;
  color: white;
  background-color: black;
  border: 2px solid #4CAF50;
  /* Green */
  transition-duration: 0.4s;
}

.button:hover {
  border-radius: 999px;
  /* @include blacknredcolor(); */
  color: #ff0000;
  background-color: #000;
}

.backbtn {
  border-radius: 999px;
  /* @include blacknredcolor(); */
  color: #ff0000;
  background-color: #000;
  border: 2px solid #4CAF50;
  /* Green */
  transition-duration: 0.4s;
}

.tangerine {
  font-family: "Tangerine";
  font-size: 48px;
}

.tangerine-blacknred {
  font-family: "Tangerine";
  font-size: 48px;
  /* @include blacknredcolor(); */
  color: #ff0000;
  background-color: #000;
}

.black {
  color: black;
}

.green {
  color: green;
}

.redonblack {
  /* @include blacknredcolor(); */
  color: #ff0000;
  background-color: #000;
}

.red {
  color: red;
}

/*# sourceMappingURL=output.css.map */

</style>
</head>
<body class="w3-teal">  

<?php
// define variables and set to empty values
$numerr = $throwerr = $num = $restext = cleaninput("");
$indexdir = "<a class='backbtn' href='../index.html'><i class='bi bi-skip-backward-circle'></i>back home</a>";
$refreshlink = cleaninput("");
$outofbound = cleaninput(false);
$max = cleaninput(10);
$min = cleaninput(1);
$randnum = cleaninput(rand($min, $max));

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["e"])) {
    $numerr = "Number is required!";
  }
  else{
    $num = cleaninput($_POST["e"]); 
      if($num > $max)
      {
          $numerr = "My maximum limit is " . $max . " and your number is over it!";
          $outofbound = true;
      }
      else if($num < $min){
        $numerr = "My minimum limit is " . $min . " and your number is below it!";
        $outofbound = true;
      }
      else{
        if (strpos("abcdefghijklmnopqrstuvwxyz!@#$%^&*()", $num)) {
          $numerr = "Hey, I see letters and characters. Get them out of here and put numbers only! Thanks to that, i have to reveal my number and it is " . $randnum;
          $outofbound = true;
        }
        else{
          if(session_id() == "")
          {
            $yes = "session not initialized, failed to get session variables.";
          }
          else{
            if(isset($_SESSION["yournumber"]) && $_SESSION["mynumber"])
            {
              $yes = "Your last number was " . $_SESSION["yournumber"] . " and my last number is " . $_SESSION["mynumber"] . ".";
            }
            else{
              $yes = "session is initialized, but session variable not set";
            }
          }
          if(session_id() == "")
          {
            $restext = "session not initialized, failed to set session variables.";
          }
          else{
            $_SESSION["yournumber"] = $num;
            $_SESSION["mynumber"] = $randnum;
          }

          if($num > $randnum)
          {
              $restext = "<p>Nah. Your number " . $num . " is bigger than my number " . $randnum . "</p>";
          }
          else if($num < $randnum)
          {
              $restext = "<p>NO.wav is playing,  your number " . $num . " is smaller than my number " . $randnum . "</p>";
          }
          else if($num == $randnum){
            $restext = "<p>YEAH! Sure, your number " . $num . " is equal with my number " . $randnum . "</p>";
          }
        }
      }
  }
}
?>
<div class="w3-teal">
<h2 class="tangerine-blacknred">What is my number and YOU GUESS it.</h2>
<hr>
<p>My number is from <?php echo $min ?> to <?php echo $max ?></p>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo cleaninput($_SERVER["PHP_SELF"]);?>" id="inputform">  
<span class="error-noh">*</span> <label>Number:</label><input type="number" name="e" value="5" min="1" max="10"><span class="error"><?php echo $numerr; ?></span>
<br>
<button class="button" onclick="submitForm();"><!--<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
  <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
  <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
   </svg>--> <i class="bi bi-download"></i> Submit Input Form</button>
   <br>
   <?php echo $indexdir; ?>
</form>
<hr>
<p><?php 
if(!empty($yes)){
  echo "<p>Last numbers during this browsing session: ";
  echo "<p>" . $yes . "</p>"; 
}
?></p>
<?php 
if (!empty($num) && !$outofbound)
{
    echo "<hr>";
    echo $restext;
}
?>
<script>
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>
</div>
</body>
</html>
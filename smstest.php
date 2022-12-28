<?php

include 'DBconfig.php';

if (isset($_POST['submit'])) {
  /*$mobile = '91'.$_GET['mobile'];
        $message = $_GET['message'];
        print $mobile;*/
  $mobile = $_POST['mobile'];
  $message = $_POST['message'];
  //echo $message;

  $query = "INSERT INTO test0 (mobile, message) values ('$mobile','$message');";

  $exe = mysqli_query($con, $query);
  if (!$exe) {
    die("Not executed!");
  }
  /*// Account details
        $apiKey = urlencode('NDM1MDRjNDg2YjZiNzYzMDQ3NGY0MjQ0NmI3NjM5NGM=');
        // Message details
        $numbers = array($mobile);
        $sender = urlencode('TXTLCL');
        $message = rawurlencode($message);
        
        $numbers = implode(',', $numbers);
        
        // Prepare data for POST request
        $data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
        // Send the POST request with cURL
        $ch = curl_init('https://api.textlocal.in/send/');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        // Process your response here
        echo $response; */
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>PHP sms blast</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

  <div class="container">
    <h2 class="text-center">SMS Test Form</h2>
    <form class="form-horizontal" method="post">
      <div class="form-group">
        <label class="control-label col-sm-2" for="mobile">Mobile:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="mobile" placeholder="Enter mobile number" name="mobile">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="message">Message Number:</label>
        <div class="col-sm-10">
          <textarea name="message" class="form-control" placeholder="Enter Message"></textarea>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" name="submit" class="btn btn-default">Submit</button>
        </div>
      </div>
    </form>
  </div>

</body>

</html>
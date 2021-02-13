<?php
  $name= $_POST['name'];
  $email= $_POST['email'];
  $phone= $_POST['phone'];
  $amount= $_POST['amount'];

  include 'instamojo/Instamojo.php';
  $api = new Instamojo\Instamojo('test_ec9c409adccbf9ffec55e790fa1', 
    'test_d521d796b10ab90161c2943dfb1',
  'https://test.instamojo.com/api/1.1/');

  try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => "Donation for Stray Animals",
        "amount" => $amount,
        "send_email" => true,
		"name" => $name,
        "email" => $email,
        "phone" => $phone,
        "send_sms" => true,
		"allow repeated payment"=>false,
        "redirect_url" => "http://helpinghands.byethost32.com/hope-center/thankyou.php"
        //"webhook" =>
        ));
        //print_r($response);
        $pay_url=$response['longurl'];
        header("location:$pay_url");
  }
  catch (Exception $e) {
      print('Error: ' . $e->getMessage());
  }
?>
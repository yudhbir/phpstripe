<?php
require_once('vendor/autoload.php');
\Stripe\Stripe::setApiKey('xxxxxxxxxxxxxxxxxxxxxxxx');
/**
*
* Make a charge payment
*
**/

		// $myCard = array('number' => '4242424242424242', 'exp_month' => 8, 'exp_year' => 2018);
		// $charge = \Stripe\Charge::create(array('card' => $myCard, 'amount' => 60, 'currency' => 'usd'));
		// echo "<pre>";print_r($charge->__toArray(true));echo"</pre>";

/**
*
* Get a charge payment list
*
**/
		// $payment_list = \Stripe\Charge::all();
		// $list=$payment_list->__toArray(true);
		// $result=$list['data'];
		// echo "<pre>";print_r($result);echo"</pre>";
		// echo "<pre>";print_r($payment_list->__toArray(true));echo"</pre>";

/**
*
* Get single charge payment list
*
**/
		// $payment_list = \Stripe\Charge::retrieve("ch_19SOYsHq0yqvbS8NbB1ERrFH");
		// $list=$payment_list->__toArray(true);
		// echo "<pre>";print_r($list);echo"</pre>";
		// echo "<pre>";print_r($payment_list->__toArray(true));echo"</pre>";

/**
*
* Create a customer with plan of the stripe payment 
* 1) user is created 
* 2) subscription is haapen
* 3) plan is created
* 4) payment is made
*
**/

/* customer Creation*/		

		// $customer = \Stripe\Customer::create(array(
		  // "description" => "Customer for rajbir@example.com",
		  // "email" => "rajbir@example.com" // obtained with Stripe.js
		// ));
		// $r_customer=$customer->__toArray(true);
		// echo "<pre>";print_r($r_customer);echo"</pre>";
		
		
	/* customer subscription*/
		
		//$customer_Subscription= \Stripe\Subscription::create(array(
		//  "customer" => "cus_9lvrafLd03wyW3",
		//  "plan" => "platinum-starter-571"
		//));	
		//$cus_Subscription=$customer_Subscription->__toArray(true);
		//echo "<pre>";print_r($cus_Subscription);echo"</pre>";

	/* customer subscription Plan*/		
		// $customer_plan =\Stripe\Plan::create(array(
					  // "amount" => 500,
					  // "interval" => "month",
					  // "name" => "Quartz complete",
					  // "currency" => "usd",
					  // "id" => "quartz-complete")
					// );
		// $cus_plan=$customer_plan->__toArray(true);
		// echo "<pre>";print_r($cus_plan);echo"</pre>";

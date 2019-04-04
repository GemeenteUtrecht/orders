<?php
// api/src/Controller/CreateBookPublication.php

namespace App\Controller;

use App\Entity\Order;

class OrderController
{
	public function __invoke(Order $data): Order
	{
		//$this->bookPublishingHandler->handle($data);
		
		return $data;
	}
}
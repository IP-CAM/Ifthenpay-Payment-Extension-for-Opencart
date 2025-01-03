<?php

declare(strict_types=1);

namespace Ifthenpay\Factory\Callback;

use Ifthenpay\Factory\Factory;
use Ifthenpay\Callback\CallbackDataCCard;
use Ifthenpay\Callback\CallbackDataMbway;
use Ifthenpay\Callback\CallbackDataPayshop;
use Ifthenpay\Callback\CallbackDataMultibanco;
use Ifthenpay\Callback\CallbackDataCofidis;
use Ifthenpay\Callback\CallbackDataPix;
use Ifthenpay\Callback\CallbackDataIfthenpaygateway;
use Ifthenpay\Contracts\Callback\CallbackDataInterface;
use Ifthenpay\Payments\Gateway;


class CallbackDataFactory extends Factory
{
	public function build(): CallbackDataInterface
	{
		switch (strtolower($this->type)) {
			case Gateway::MULTIBANCO:
				return new CallbackDataMultibanco();
			case Gateway::MBWAY:
				return new CallbackDataMbway();
			case Gateway::PAYSHOP:
				return new CallbackDataPayshop();
			case Gateway::CCARD:
				return new CallbackDataCCard();
			case Gateway::COFIDIS:
				return new CallbackDataCofidis();
			case Gateway::PIX:
				return new CallbackDataPix();
			case Gateway::IFTHENPAYGATEWAY:
				return new CallbackDataIfthenpaygateway();
			default:
				throw new \Exception('Unknown Callback Data Class');
		}
	}
}

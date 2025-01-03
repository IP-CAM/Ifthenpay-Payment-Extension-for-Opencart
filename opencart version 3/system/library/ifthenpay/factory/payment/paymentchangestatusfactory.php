<?php

declare(strict_types=1);

namespace Ifthenpay\Factory\Payment;

use Ifthenpay\Factory\Factory;
use Illuminate\Container\Container;
use Ifthenpay\Base\CheckPaymentStatusBase;
use Ifthenpay\Builders\GatewayDataBuilder;
use Ifthenpay\Payments\MbWayPaymentStatus;
use Ifthenpay\Payments\PayshopPaymentStatus;
use Ifthenpay\Payments\MultibancoPaymentStatus;
use Ifthenpay\Payments\CCardPaymentStatus;
use Ifthenpay\Payments\CofidisPaymentStatus;
use Ifthenpay\Payments\PixPaymentStatus;
use Ifthenpay\Payments\Data\MbwayChangePaymentStatus;
use Ifthenpay\Payments\Data\PayshopChangePaymentStatus;
use Ifthenpay\Payments\Data\MultibancoChangePaymentStatus;
use Ifthenpay\Payments\Data\CCardChangePaymentStatus;
use Ifthenpay\Payments\Data\CofidisChangePaymentStatus;
use Ifthenpay\Payments\Data\PixChangePaymentStatus;
use Ifthenpay\Payments\Data\IfthenpaygatewayChangePaymentStatus;
use Ifthenpay\Request\WebService;
use Ifthenpay\Payments\Gateway;
use Ifthenpay\Payments\IfthenpaygatewayPaymentStatus;

class PaymentChangeStatusFactory extends Factory
{
	private $gatewayDataBuilder;

	public function __construct(Container $ioc, GatewayDataBuilder $gatewayDataBuilder)
	{
		parent::__construct($ioc);
		$this->gatewayDataBuilder = $gatewayDataBuilder;
	}

	public function build(): CheckPaymentStatusBase
	{
		switch ($this->type) {
			case Gateway::MULTIBANCO:
				return new MultibancoChangePaymentStatus(
					$this->gatewayDataBuilder,
					$this->ioc->make(MultibancoPaymentStatus::class),
					$this->ioc->make(WebService::class),
					$this->ifthenpayController
				);
			case Gateway::MBWAY:
				return new MbwayChangePaymentStatus(
					$this->gatewayDataBuilder,
					$this->ioc->make(MbWayPaymentStatus::class),
					$this->ioc->make(WebService::class),
					$this->ifthenpayController
				);
			case Gateway::PAYSHOP:
				return new PayshopChangePaymentStatus(
					$this->gatewayDataBuilder,
					$this->ioc->make(PayshopPaymentStatus::class),
					$this->ioc->make(WebService::class),
					$this->ifthenpayController
				);
			case Gateway::CCARD:
				return new CCardChangePaymentStatus(
					$this->gatewayDataBuilder,
					$this->ioc->make(CCardPaymentStatus::class),
					$this->ioc->make(WebService::class),
					$this->ifthenpayController
				);
			case Gateway::COFIDIS:
				return new CofidisChangePaymentStatus(
					$this->gatewayDataBuilder,
					$this->ioc->make(CofidisPaymentStatus::class),
					$this->ioc->make(WebService::class),
					$this->ifthenpayController
				);
			case Gateway::PIX:
				return new PixChangePaymentStatus(
					$this->gatewayDataBuilder,
					$this->ioc->make(PixPaymentStatus::class),
					$this->ioc->make(WebService::class),
					$this->ifthenpayController
				);
			case Gateway::IFTHENPAYGATEWAY:
				return new IfthenpaygatewayChangePaymentStatus(
					$this->gatewayDataBuilder,
					$this->ioc->make(IfthenpaygatewayPaymentStatus::class),
					$this->ioc->make(WebService::class),
					$this->ifthenpayController
				);
			default:
				throw new \Exception('Unknown Payment Change Status Class');
		}
	}
}

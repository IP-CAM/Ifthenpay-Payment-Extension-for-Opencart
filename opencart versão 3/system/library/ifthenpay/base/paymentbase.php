<?php

declare(strict_types=1);

namespace Ifthenpay\Base;

use Ifthenpay\Payments\Gateway;
use Ifthenpay\Builders\TwigDataBuilder;
use Ifthenpay\Builders\GatewayDataBuilder;
use Ifthenpay\Builders\DataBuilder;


abstract class PaymentBase
{
    protected $dataConfig;
    protected $gatewayBuilder;
    protected $paymentDefaultData;
    protected $smartyDefaultData;
    protected $paymentGatewayResultData;
    protected $ifthenpayGateway;
    protected $paymentDataFromDb;
    protected $paymentTable;
    protected $paymentMethod;
    protected $paymentMethodAlias;
    protected $ifthenpayController;
    protected $redirectUrl;

    public function __construct(
        DataBuilder $paymentDefaultData,
        GatewayDataBuilder $gatewayBuilder,
        Gateway $ifthenpayGateway,
        array $configData,
        $ifthenpayController,
        TwigDataBuilder $twigDefaultData = null
    ) {
        $this->gatewayBuilder = $gatewayBuilder;
        $this->paymentDefaultData = $paymentDefaultData->getData();
        $this->twigDefaultData = $twigDefaultData;
        $this->ifthenpayGateway = $ifthenpayGateway;
        $this->configData = $configData;
        $this->ifthenpayController = $ifthenpayController;
    }

    public function getRedirectUrl(): array
    {
        return $this->redirectUrl;
    }

    public function setRedirectUrl(bool $redirect = false, string $url = '')
    {
        $this->redirectUrl = [
            'redirect' => $redirect,
            'url' => $url
        ];
        return $this;
    }

    public function setTwigVariables(): void
    {
        $this->twigDefaultData->setIfthenpayPaymentPanelTitle(
            $this->ifthenpayController->language->get('ifthenpayPaymentPanelTitle') . $this->paymentMethodAlias);
    }

    public function setPaymentTable(string $tableName): PaymentBase
    {
        $this->paymentTable = $tableName;
        return $this;
    }

    public function getFromDatabaseById(): void
    {
        $this->ifthenpayController->load->model('extension/payment/ifthenpay');
		
		$this->paymentDataFromDb = $this->ifthenpayController->model_extension_payment_ifthenpay->getPaymentByOrderId(
            $this->paymentMethod, $this->paymentDefaultData->order['order_id']
        )->row; 
    }

    public function getTwigVariables(): TwigDataBuilder
    {
        return $this->twigDefaultData;
    }

    protected function saveToDatabase(): void
    {
        $this->ifthenpayController->load->model('extension/payment/ifthenpay');
		
		$this->ifthenpayController->model_extension_payment_ifthenpay->savePayment($this->paymentMethod, $this->paymentDefaultData, $this->paymentGatewayResultData);
    }

    abstract protected function setGatewayBuilderData(): void;
    
    /**
     * Get the value of paymentDataFromDb
     */
    public function getPaymentDataFromDb()
    {
        return $this->paymentDataFromDb;
    }

    /**
     * Get the value of paymentGatewayResultData
     */ 
    public function getPaymentGatewayResultData()
    {
        return $this->paymentGatewayResultData;
    }
}

<?php

namespace App\Services;

use Iyzipay\Model\Address;
use Iyzipay\Model\BasketItem;
use Iyzipay\Model\Buyer;
use Iyzipay\Model\Payment;
use Iyzipay\Model\PaymentCard;
use Iyzipay\Options;
use Iyzipay\Request\CreatePaymentRequest;

class IyzicoPaymentService
{
    protected Options $iyzipayOptions;
    protected CreatePaymentRequest $paymentRequest;
    protected PaymentCard $paymentCard;
    protected Buyer $buyer;
    protected Address $address;

    public function __construct()
    {
        $this->iyzipayOptions = new Options();
        $this->paymentRequest = new CreatePaymentRequest();
        $this->paymentCard = new PaymentCard();

        $this->iyzipayOptions->setApiKey(config("payments.api_key"));
        $this->iyzipayOptions->setSecretKey(config("payments.secret_key"));
        $this->iyzipayOptions->setBaseUrl(config("payments.base_url"));
    }

    public function generatePaymentRequest(array $requestOptions)
    {
        $this->paymentRequest->setLocale(\Iyzipay\Model\Locale::TR);
        $this->paymentRequest->setConversationId("123456789");
        $this->paymentRequest->setPrice("1");
        $this->paymentRequest->setPaidPrice("1.2");
        $this->paymentRequest->setCurrency(\Iyzipay\Model\Currency::TL);
        $this->paymentRequest->setInstallment(1);
        $this->paymentRequest->setBasketId("B67832");
        $this->paymentRequest->setPaymentChannel(\Iyzipay\Model\PaymentChannel::WEB);
        $this->paymentRequest->setPaymentGroup(\Iyzipay\Model\PaymentGroup::PRODUCT);
        $this->paymentRequest->setPaymentCard($this->paymentCard);
    }

    public function generatePaymentCart(array $cardOptions)
    {
        $this->paymentCard->setCardHolderName("John Doe");
        $this->paymentCard->setCardNumber("5528790000000008");
        $this->paymentCard->setExpireMonth("12");
        $this->paymentCard->setExpireYear("2030");
        $this->paymentCard->setCvc("123");
        $this->paymentCard->setRegisterCard(0);
    }

    public function generateBasketItems(array $items)
    {
        $basketItems = [];

        foreach ($items as $item) {
            $basketItem = new \Iyzipay\Model\BasketItem();
            $basketItem->setId($item->id);
            $basketItem->setName($item->name);
            $basketItem->setCategory1($item->category);
            $basketItem->setItemType(\Iyzipay\Model\BasketItemType::PHYSICAL);
            $basketItem->setPrice($item->price);
            $basketItems[] = $basketItem;
        }

        $this->paymentRequest->setBasketItems($basketItems);
    }

    public function paymentRequest()
    {
        return Payment::create($this->paymentRequest, $this->iyzipayOptions);
    }
}

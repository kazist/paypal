<?php

namespace Paypal\Payments\Code\Tables;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paypal
 *
 * @ORM\Table(name="paypal_payments", indexes={@ORM\Index(name="payment_id_index", columns={"payment_id"}), @ORM\Index(name="created_by_index", columns={"created_by"}), @ORM\Index(name="modified_by_index", columns={"modified_by"})})
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 */
class Payments extends \Kazist\Table\BaseTable {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="payment_id", type="integer", length=11, nullable=false)
     */
    protected $payment_id;

    /**
     * @var string
     *
     * @ORM\Column(name="transaction_code", type="string", length=255, nullable=false)
     */
    protected $transaction_code;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", length=11, nullable=true)
     */
    protected $status;

    /**
     * @var integer
     *
     * @ORM\Column(name="amount", type="integer", length=11, nullable=false)
     */
    protected $amount;

    /**
     * @var string
     *
     * @ORM\Column(name="currency", type="string", length=255, nullable=true)
     */
    protected $currency;

    /**
     * @var string
     *
     * @ORM\Column(name="item_number", type="string", length=255, nullable=true)
     */
    protected $item_number;

    /**
     * @var integer
     *
     * @ORM\Column(name="created_by", type="integer", length=11, nullable=false)
     */
    protected $created_by;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_created", type="datetime", nullable=false)
     */
    protected $date_created;

    /**
     * @var integer
     *
     * @ORM\Column(name="modified_by", type="integer", length=11, nullable=false)
     */
    protected $modified_by;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_modified", type="datetime", nullable=false)
     */
    protected $date_modified;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set payment_id
     *
     * @param integer $paymentId
     * @return Paypal
     */
    public function setPaymentId($paymentId) {
        $this->payment_id = $paymentId;

        return $this;
    }

    /**
     * Get payment_id
     *
     * @return integer 
     */
    public function getPaymentId() {
        return $this->payment_id;
    }

    /**
     * Set transaction_code
     *
     * @param string $transactionCode
     * @return Paypal
     */
    public function setTransactionCode($transactionCode) {
        $this->transaction_code = $transactionCode;

        return $this;
    }

    /**
     * Get transaction_code
     *
     * @return string 
     */
    public function getTransactionCode() {
        return $this->transaction_code;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Paypal
     */
    public function setStatus($status) {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * Set amount
     *
     * @param integer $amount
     * @return Paypal
     */
    public function setAmount($amount) {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return integer 
     */
    public function getAmount() {
        return $this->amount;
    }

    /**
     * Set currency
     *
     * @param string $currency
     * @return Paypal
     */
    public function setCurrency($currency) {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get currency
     *
     * @return string 
     */
    public function getCurrency() {
        return $this->currency;
    }

    /**
     * Set item_number
     *
     * @param string $itemNumber
     * @return Paypal
     */
    public function setItemNumber($itemNumber) {
        $this->item_number = $itemNumber;

        return $this;
    }

    /**
     * Get item_number
     *
     * @return string 
     */
    public function getItemNumber() {
        return $this->item_number;
    }

    /**
     * Get created_by
     *
     * @return integer 
     */
    public function getCreatedBy() {
        return $this->created_by;
    }

    /**
     * Get date_created
     *
     * @return \DateTime 
     */
    public function getDateCreated() {
        return $this->date_created;
    }

    /**
     * Get modified_by
     *
     * @return integer 
     */
    public function getModifiedBy() {
        return $this->modified_by;
    }

    /**
     * Get date_modified
     *
     * @return \DateTime 
     */
    public function getDateModified() {
        return $this->date_modified;
    }

}

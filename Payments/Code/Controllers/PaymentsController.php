<?php

/*
 * This file is part of Kazist Framework.
 * (c) Dedan Irungu <irungudedan@gmail.com>
 *  For the full copyright and license information, please view the LICENSE file that was distributed with this source code.
 * 
 */

/**
 * Description of PaymentsController
 *
 * @author sbc
 */

namespace Paypal\Payments\Code\Controllers;

defined('KAZIST') or exit('Not Kazist Framework');

use Payments\Payments\Code\Controllers\PaymentsController AS BasePaymentsController;

class PaymentsController extends BasePaymentsController {

    public function cancelAction() {

        $payment_id = $this->request->query->get('item_number');

        $this->model->cancelTransaction($payment_id);

        return $this->redirectToRoute('payments.payments');
    }

    public function returnAction() {

        $payment_id = $this->request->query->get('item_number');

        $this->model->completeTransaction($payment_id);

        return $this->redirectToRoute('payments.payments');
    }

    public function notifyAction() {
        $payment_id = $this->request->get('item_number');

        $this->model->notificationTransaction($payment_id);

        return $this->redirectToRoute('payments.payments');
    }

}

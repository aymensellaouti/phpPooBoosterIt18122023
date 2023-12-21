<?php 
class HandlePaiement {

    function processPaiement(IPayment $payment) {
        // Log du paiement 
        var_dump($payment->getPaymentId());
        // envoyer un email à l'admin 
        echo "J'envoi un mail à ".$payment->getPaymentInfos()->email;
        // executer le process de paiement
        $payment->pay();
    }
}
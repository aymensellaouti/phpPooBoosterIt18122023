<?php 

    interface IPayment {
        public function getPaymentId();
        public function pay();
        public function getPaymentInfos();
    }
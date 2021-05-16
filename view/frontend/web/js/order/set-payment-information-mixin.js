define([
    'jquery',
    'mage/utils/wrapper',
    'Kaushikofficial_OrderComment/js/order/ordercomment-assigner'
], function ($, wrapper, ordercommentAssigner) {
    'use strict';
    return function (placeOrderAction) {
        /** Override place-order-mixin for set-payment-information action as they differs only by method signature */
        return wrapper.wrap(placeOrderAction, function (originalAction, messageContainer, paymentData) {
            ordercommentAssigner(paymentData);
            return originalAction(messageContainer, paymentData);
        });
    };
});
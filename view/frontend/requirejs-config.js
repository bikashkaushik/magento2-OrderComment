
var config = {
	config: {
	    mixins: {
	        'Magento_Checkout/js/action/place-order': {
	            'Kaushikofficial_OrderComment/js/order/place-order-mixin': true
	        },
	        'Magento_Checkout/js/action/set-payment-information': {
	            'Kaushikofficial_OrderComment/js/order/set-payment-information-mixin': true
	        }
	    }
	}
};
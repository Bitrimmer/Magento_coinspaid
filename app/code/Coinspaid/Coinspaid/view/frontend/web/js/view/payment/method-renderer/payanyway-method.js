define(
    [
        'ko',
        'Magento_Checkout/js/view/payment/default',
		'mage/url'
    ],
    function (ko, Component, url) {
        'use strict';

        return Component.extend({
            defaults: {
                template: 'Coinspaid_Coinspaid/payment/Coinspaid',
				redirectAfterPlaceOrder: false
            },
            /**
             * Get value of instruction field.
             * @returns {String}
             */
            getInstructions: function () {
                //console.log("try to find instructions:"+this.item.method);
                //return window.checkoutConfig.payment.instructions[this.item.method];
            },
			afterPlaceOrder: function () {
				window.location.replace(url.build('Coinspaid/url/redirect/'));
			}
        });
    }
);

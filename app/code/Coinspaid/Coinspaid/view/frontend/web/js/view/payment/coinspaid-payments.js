/*browser:true*/
/*global define*/
define(
    [
        'uiComponent',
        'Magento_Checkout/js/model/payment/renderer-list'
    ],
    function (
        Component,
        rendererList
    ) {
        'use strict';
        rendererList.push(
           
            {
                type: 'Coinspaid',
                component: 'Coinspaid_Coinspaid/js/view/payment/method-renderer/Coinspaid-method'
            }
            
        );
        /** Add view logic here if needed */
        return Component.extend({});
    }
);
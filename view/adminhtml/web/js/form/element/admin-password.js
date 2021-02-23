/**
 * Do not edit or add to this file if you wish to upgrade to newer versions in the future.
 * If you wish to customise this module for your needs.
  *
 * @category  Ripen
 * @package   Ripen_CustomerPassword
 * @copyright Copyright (c) 2018 Kiwi Commerce Ltd (https://kiwicommerce.co.uk/)
 * @copyright Copyright (c) Ripen, LLC (https://ripen.com/)
 * @license   https://opensource.org/licenses/OSL-3.0
 */
define(
    [
    'uiRegistry',
    'Magento_Ui/js/form/element/abstract'
    ],
    function (registry, Abstract) {
        'use strict';

        return Abstract.extend({
            defaults: {
                focused: false
            },
            initialize: function () {
                this._super();
                var self = this;

                var infoTab = registry.get('customer_form.areas.customer');
                if (infoTab.active()) {
                    self.prepareInfoTab();
                } else {
                    var infoTabActiveSubscriber = infoTab.active.subscribe(function(status) {
                        if (status) {
                            self.prepareInfoTab();
                            infoTabActiveSubscriber.dispose();
                        }
                    });
                }

                registry.get(
                    'customer_form.areas.customer.customer.email',
                    function (element) {
                        if (element.value() === '') {
                            var password_section = registry.get(self.parentName);
                            password_section.visible(false);
                        }
                    }
                );
            },
            prepareInfoTab: function () {
                var self = this;

                var admin_password = registry.get(self.parentName + '.' + 'admin_password');
                admin_password.hide();
                self.focused.subscribe(function (value) {
                    if (value) {
                        admin_password.show();
                    } else if (!self.value().length) {
                        admin_password.hide();
                    }
                });
            }
        });
    }
);

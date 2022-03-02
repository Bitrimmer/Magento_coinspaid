<?php
/**
 * Created by PhpStorm.
 * User: tim
 * Date: 13.09.16
 * Time: 10:17
 */

namespace Coinspaid\Coinspaid\Model;


class PaymentAction
{
	/**
	 * Options getter
	 *
	 * @return array
	 */
	public function toOptionArray()
	{
		return array(
			array('value' => 'https://pay.crypto.com/api/payments/', 'label'=>''),
			array('value' => 'https://pay.crypto.com/api/payments/', 'label'=>'')
		);
	}
}

<?php
/**
 * Parcelforce globalexpress rates.
 *
 * @package WC_RoyalMail/Rate
 */

/**
 * Rates for Parcelforce globalexpress.
 *
 * Based on http://www.parcelforce.com/sites/default/files/Parcelforce_retail_prices_2017.pdf.
 */
class RoyalMail_Rate_Parcelforce_Globalexpress extends Parcelforce_Rate {
	/**
	 * ID/Name of rate.
	 *
	 * @var string
	 */
	protected $rate_id = 'parcelforce_globalexpress';

	/**
	 * Pricing bands.
	 *
	 * Key is zone and value is an array where key is weight (up to) in gram
	 * and value is the price (in penny).
	 *
	 * @var array
	 */
	protected $bands = array(
		'2018' => array(
			'4' => array(
				500   => 5195,
				1000  => 5450,
				1500  => 5705,
				2000  => 5960,
				2500  => 6205,
				3000  => 6450,
				3500  => 6695,
				4000  => 6940,
				4500  => 7185,
				5000  => 7430,
				5500  => 7705,
				6000  => 7980,
				6500  => 8255,
				7000  => 8530,
				7500  => 8805,
				8000  => 9080,
				8500  => 9355,
				9000  => 9630,
				9500  => 9905,
				10000 => 10180,
				15000 => 12280,
				20000 => 14580,
				25000 => 16880,
				30000 => 19180,
			),
			'5' => array(
				500   => 4746,
				1000  => 4992,
				1500  => 5238,
				2000  => 5484,
				2500  => 5850,
				3000  => 6216,
				3500  => 6582,
				4000  => 6948,
				4500  => 7314,
				5000  => 7680,
				5500  => 7848,
				6000  => 8016,
				6500  => 8184,
				7000  => 8352,
				7500  => 8520,
				8000  => 8688,
				8500  => 8856,
				9000  => 9024,
				9500  => 9192,
				10000 => 9360,
				15000 => 11640,
				20000 => 13320,
				25000 => 15000,
				30000 => 16680,
			),
			'6' => array(
				500   => 4302,
				1000  => 4704,
				1500  => 5106,
				2000  => 5508,
				2500  => 5838,
				3000  => 6168,
				3500  => 6498,
				4000  => 6828,
				4500  => 7158,
				5000  => 7488,
				5500  => 7692,
				6000  => 7896,
				6500  => 8100,
				7000  => 8304,
				7500  => 8508,
				8000  => 8712,
				8500  => 8916,
				9000  => 9120,
				9500  => 9324,
				10000 => 9528,
				15000 => 11388,
				20000 => 13068,
				25000 => 14748,
				30000 => 16428,
			),
			'7' => array(
				500   => 4428,
				1000  => 4782,
				1500  => 5136,
				2000  => 5490,
				2500  => 5904,
				3000  => 6318,
				3500  => 6732,
				4000  => 7146,
				4500  => 7560,
				5000  => 7974,
				5500  => 8286,
				6000  => 8598,
				6500  => 8910,
				7000  => 9222,
				7500  => 9534,
				8000  => 9846,
				8500  => 10158,
				9000  => 10470,
				9500  => 10782,
				10000 => 11094,
				15000 => 13494,
				20000 => 15474,
				25000 => 17454,
				30000 => 19434,
			),
			'8' => array(
				500   => 4758,
				1000  => 5136,
				1500  => 5514,
				2000  => 5892,
				2500  => 6198,
				3000  => 6504,
				3500  => 6810,
				4000  => 7116,
				4500  => 7422,
				5000  => 7728,
				5500  => 8034,
				6000  => 8340,
				6500  => 8646,
				7000  => 8952,
				7500  => 9258,
				8000  => 9564,
				8500  => 9870,
				9000  => 10176,
				9500  => 10482,
				10000 => 10788,
				15000 => 13788,
				20000 => 16488,
				25000 => 19188,
				30000 => 21888,
			),
			'9' => array(
				500   => 5196,
				1000  => 5658,
				1500  => 6120,
				2000  => 6582,
				2500  => 7320,
				3000  => 8058,
				3500  => 8796,
				4000  => 9534,
				4500  => 10272,
				5000  => 11010,
				5500  => 11508,
				6000  => 12006,
				6500  => 12504,
				7000  => 13002,
				7500  => 13500,
				8000  => 13998,
				8500  => 14496,
				9000  => 14994,
				9500  => 15492,
				10000 => 15990,
				15000 => 19290,
				20000 => 22950,
				25000 => 26610,
				30000 => 30270,
			),
			'10' => array(
				500   => 5200,
				1000  => 5695,
				1500  => 6190,
				2000  => 6685,
				2500  => 7080,
				3000  => 7475,
				3500  => 7870,
				4000  => 8265,
				4500  => 8660,
				5000  => 9055,
				5500  => 9475,
				6000  => 9895,
				6500  => 10315,
				7000  => 10735,
				7500  => 11155,
				8000  => 11575,
				8500  => 11995,
				9000  => 12415,
				9500  => 12835,
				10000 => 13255,
				15000 => 16455,
				20000 => 19605,
				25000 => 22755,
				30000 => 25905,
			),
			'11' => array(
				500   => 6305,
				1000  => 6955,
				1500  => 7605,
				2000  => 8255,
				2500  => 8820,
				3000  => 9385,
				3500  => 9950,
				4000  => 10515,
				4500  => 11080,
				5000  => 11645,
				5500  => 12110,
				6000  => 12575,
				6500  => 13040,
				7000  => 13505,
				7500  => 13970,
				8000  => 14435,
				8500  => 14900,
				9000  => 15365,
				9500  => 15830,
				10000 => 16295,
				15000 => 21345,
				20000 => 26345,
				25000 => 31345,
				30000 => 36345,
			),
			'12' => array(
				500   => 7195,
				1000  => 8060,
				1500  => 8925,
				2000  => 9790,
				2500  => 10590,
				3000  => 11390,
				3500  => 12190,
				4000  => 12990,
				4500  => 13790,
				5000  => 14590,
				5500  => 15210,
				6000  => 15830,
				6500  => 16450,
				7000  => 17070,
				7500  => 17690,
				8000  => 18310,
				8500  => 18930,
				9000  => 19550,
				9500  => 20170,
				10000 => 20790,
				15000 => 27340,
				20000 => 33990,
				25000 => 40640,
				30000 => 47290,
			),
		),
	);

	/**
	 * Maximum inclusive compensation.
	 *
	 * @version 2.5.3
	 * @since 2.5.3
	 *
	 * @var int
	 */
	protected $maximum_inclusive_compensation = 200;

	/**
	 * Maximum total cover.
	 *
	 * @version 2.5.3
	 * @since 2.5.3
	 *
	 * @var int
	 */
	protected $maximum_total_cover = 2500;
}

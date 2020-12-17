<?php
if (!function_exists('array_unique2')) {
	function array_unique2(array $array, $key){
		if ( is_array( $array ) ) {
			$result = [];
			foreach ($array as $k=> $v) {
				if ( !isset($result[$v[$key]]) ) {
					$result[$v[$key]] = $v;
				}
			}
			return array_values( $result );
		}
	}
}
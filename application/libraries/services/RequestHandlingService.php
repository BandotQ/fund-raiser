<?php



/**
 * 
 */
class RequestHandlingService
{
	/**
     * Convert requests to array
     * @param json $request
     * @return array
     */
	public function toArray($request)
	{
		return json_decode($request, true);
	}
}
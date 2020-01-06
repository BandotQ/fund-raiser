<?php



/**
 * 
 */
class ResponseHandlingService
{
	/**
     * Convert requests to array
     * @param json $request
     * @return array
     */
	public function toJson($request)
	{
		return json_encode($request, true);
	}
}
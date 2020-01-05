<?php



/**
 * 
 */
class FundraiserService
{
	/**
     * Process data to create a fundraise
     * @param array
     * @return array
     */
	public function createFundRaiser($request)
	{
		$reference = $this->generateFundraiserReference();
		$fundraiserLink = $this->generateFundraiserLink($reference);

		return array(
			'title' => $request['title'],
			'avatarId' => 22,
			'createdBy' => (int)$request['createdBy'],
			'targetAmount' => (int)$request['targetAmount'],
			'reference' => $reference,
			'fundraiserLink' => $fundraiserLink,
			'allowPledge' => (int)$request['allowPledge'],
			'description' => $request['description'],
			'dateDue' => strtotime($request['dateDue'])
		);
	}

	/**
     * Generate fundraise reference
     * @return string
     */
	public function generateFundraiserReference()
	{
		return random_string('alnum', 30);
	}

	/**
     * Generate fundraise link
     * @param string $reference
     * @return deeplink
     */
	public function generateFundraiserLink($reference)
	{
		$segments = array('fund-raiser', $reference);
		return site_url($segments);
	}
}
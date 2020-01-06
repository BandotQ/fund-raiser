<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FundRaiserCollections extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();

		$this->load->library('services/RequestHandlingService');
		$this->requestService = new RequestHandlingService();

		$this->load->library('services/FundraiserService');
		$this->fundraiserService = new FundraiserService();

		$this->load->library('repositories/FundRaiserCollectionRepository');
		$this->fundraiserRepo = new FundRaiserCollectionRepository();
	}

	/**
     * Create fundraiser
     * @return Response
     */
    public function createFundraiserCollection()
    {
        $requestData = $this->input->raw_input_stream;
        $convertedRequest = $this->requestService->toArray($requestData);

        $processedRequest = $this->fundraiserService->createFundRaiser($convertedRequest);

        $id = $this->fundraiserRepo->addFundRaiser($processedRequest);
        $data = $this->fundraiserRepo->getFundRaiser($id);
        print_r($data);
    }
}
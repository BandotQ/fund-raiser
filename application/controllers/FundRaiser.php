<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FundRaiser extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();

		$this->load->library('services/RequestHandlingService');
		$this->requestService = new RequestHandlingService();

		$this->load->library('services/FundraiserService');
		$this->fundraiserService = new FundraiserService();

		$this->load->library('repositories/FundRaiserRepository');
		$this->fundraiserRepo = new FundRaiserRepository();
	}

	/**
     * Create fundraiser
     * @return Response
     */
    public function createFundraiser()
    {
        $requestData = $this->input->raw_input_stream;
        $convertedRequest = $this->requestService->toArray($requestData);

        $processedRequest = $this->fundraiserService->createFundRaiser($convertedRequest);

        $id = $this->fundraiserRepo->addFundRaiser($processedRequest);
        $data = $this->fundraiserRepo->getFundRaiser($id);
        print_r($data);
    }

    /**
     * Get fundraiser
     * @return Response
     */
    public function getFundraiser()
    {
        $requestData = $this->input->raw_input_stream;
        $convertedRequest = $this->requestService->toArray($requestData);

        $id = $this->fundraiserRepo->getFundRaiser($convertedRequest['id']);
        print_r($id);
    }

    /**
     * Update fundraiser
     * @return Response
     */
    public function updateFundraiser($id)
    {
        $requestData = $this->input->raw_input_stream;
        $convertedRequest = $this->requestService->toArray($requestData);

        $processedRequest = $this->fundraiserService->updateFundRaiser($convertedRequest);

        $id = $this->fundraiserRepo->updateFundRaiser($processedRequest, $id);
    }
}
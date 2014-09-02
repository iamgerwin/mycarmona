<?php

use Illuminate\Http\Response as IlluminateResponse;
use Illuminate\Pagination\Paginator;

class ApiController extends BaseController {
	protected $statusCode = 200;

	public function getStatusCode()
	{
		return $this->statusCode;
	}

	public function setStatusCode($statusCode)
	{
		$this->statusCode = $statusCode;
		return $this;
	}

	public function respondNotFound($message = 'Not Found')
	{
		return $this->setStatusCode(IlluminateResponse::HTTP_NOT_FOUND)->respondWithError($message);
	}

	public function respondInternalError($message = 'Internal Error')
	{
		return $this->setStatusCode(IlluminateResponse::HTTP_INTERNAL_SERVER_ERROR)->respondWithError($message);
	}

	public function respond($data, $headers = [])
	{
		return Response::json($data, $this->getStatusCode(), $headers);
	}

	public function respondWithError($message)
	{
		return $this->respond([
				'error' => [
					'message' => $message,
					'status_code' => $this->getStatusCode()
				]
			]);
	}

	public function respondCreated($message)
	{
		return $this->setStatusCode(201)->respond([
				'message' => $message
			]);
	}

	protected function respondWithPagination(Paginator $articles, $data)
	{
		$data = array_merge($data ,[
				'paginator' => [
					'total_count' => $articles->getTotal(),
					'total_pages' => ceil($articles->getTotal() / $articles->getPerPage()),
					'current_page' => $articles->getCurrentPage(),
					'limit' => $articles->getPerPage()
				]
			]);

		return $this->respond($data);
	}
}
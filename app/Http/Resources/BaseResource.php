<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BaseResource extends JsonResource
{
    private $message;
    private $status;

    public function __construct($resource = [], $message = 'Success', $status = true)
    {
        parent::__construct($resource);
        $this->message = $message;
        $this->status = $status;
    }

    public function with($request)
    {
        sleep(2);
        return [
            'success' => $this->status,
            'message' =>  $this->message
        ];
    }
}

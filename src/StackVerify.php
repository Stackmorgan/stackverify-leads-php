<?php

namespace StackVerify;


class StackVerify
{

    private Client $client;


    public function __construct()
    {
        $this->client = new Client();
    }


    public function forms(string $formId): Forms
    {
        return new Forms(
            $this->client,
            $formId
        );
    }

}

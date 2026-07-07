<?php

namespace StackVerify;


class Forms
{

    private Client $client;

    private string $formId;


    private string $baseUrl =
        "https://stackverify.site/api/f/";


    public function __construct(
        Client $client,
        string $formId
    ){

        $this->client = $client;
        $this->formId = $formId;

    }



    public function submit(array $data)
    {

        return $this->client
            ->http()
            ->post(
                $this->baseUrl . $this->formId
            )
            ->json($data)
            ->sendJson();

    }


}

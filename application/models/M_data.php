<?php

use GuzzleHttp\Client;

class M_data extends CI_Model
{
    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost/rest/api/karyawan'
        ]);
    }


    public function get_data()
    {
        $response = $this->_client->request('GET', 'karyawan');

        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'];
    }

    public function insert($data)
    {
        $response = $this->_client->request('POST', 'karyawan', [
            'form_params' => $data
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function update($data)
    {
        $response = $this->_client->request('PUT', 'karyawan', [
            'form_params' => $data
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function delete($id)
    {
        $response = $this->_client->request('DELETE', 'karyawan', [
            'form_params' => [
                'id' => $id
            ]
        ]);
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function get_id($id)
    {
        $response = $this->_client->request('GET', 'karyawan', [

            'query' => [
                'id' => $id
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'][0];
    }
}

/* End of file M_data.php */

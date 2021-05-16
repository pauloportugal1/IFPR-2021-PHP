
<?php
class climaApi
{
    private $id = "78GCFv311dk0STI6FjDWD";
    private $secret = "VrxpD7idRVlDKFpWGpoRmrvQCCpQgVmWcTGq9Hgt";

    public function obter_clima_cidade($cidade)
    {
        $json  = file_get_contents("https://api.aerisapi.com/conditions/" . "{" . urlencode($cidade) . "},br?client_id=" . $this->id . "&client_secret=" . $this->secret);
        $dados = json_decode($json, true);

        if (count($dados["response"])) {
            return [
                "nome" => $dados['response'][0]['place']['name'],
                "temperatura" => $dados['response'][0]['periods'][0]['tempC'],
                "sensacao" => $dados['response'][0]['periods'][0]['humidity'],
                "umidade" => $dados['response'][0]['periods'][0]['humidity'],
                "velocidade" => $dados['response'][0]['periods'][0]['windSpeedKPH']
            ];
        } else {
            return [];
        }
    }
}

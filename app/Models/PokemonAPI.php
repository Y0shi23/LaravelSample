<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use PokePHP\PokeApi;
use PokeAPI\Client;

class PokemonAPI extends Model
{
    public function getData($test = '') {
        $client = new PokeAPI();
        $str = strval($test);

        // Returns a PokeAPI\Pokemon\Species instance
        // pokemonSpecies
        $species = $client->pokemon($str);
        return $species;
    }
    public function getBerry($test = '') {
        $client = new PokeAPI();
        $str = strval($test);

        // Returns a PokeAPI\Pokemon\Species instance
        // pokemonSpecies
        $species = $client->berry($str);
        return $species;
    }
}
?>
<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class SearchDropdown extends Component
{
    public $search = '';

    public function render()
    {
        $searchResults = [];

        if (strlen($this->search) >= 2) {

        $searchResults = Http::get('https://api.themoviedb.org/3/search/movie?api_key='. config('services.tmdb.token').'&query='.$this->search)
        ->json()['results'];
        }
        

       // dump($searchResults);

        return view('livewire.search-dropdown', [
            'searchResults' => collect($searchResults)->take(7),
        ]);
    }
}
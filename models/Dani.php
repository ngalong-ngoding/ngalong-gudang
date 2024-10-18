<?php



class Dani
{

    
    private $daftarGameDani = [];

    
    public function __construct()
    {
        
        if (isset($_SESSION["daftarGameDani"])) {
            $this->daftarGameDani = $_SESSION["daftarGameDani"];
        } else {
            $this->daftarGameDani = [
                
            ];
               
            
        }
    }

    
    public function getAllGames()
    {
        return $this->daftarGameDani;
    }

    
    public function tambahGame($game)
    {
        
        $newId = count($this->daftarGameDani) + 1;
        $this->daftarGameDani[] = [
            "id" => $newId,
            "game" => $game
        ];

        $_SESSION["daftarGameDani"] = $this->daftarGameDani;
    }

    
    public function hapusGame($id)
    {
        foreach ($this->daftarGameDani as $key => $game) {
            if ($game["id"] == $id) {
                unset($this->daftarGameDani[$key]);
                $this->daftarGameDani = array_values($this->daftarGameDani);
                $_SESSION["daftarGameDani"] = $this->daftarGameDani;
                return true;
            }
        }
        return false;
    }

   
    public function editGame($id, $newGame)
    {
        foreach ($this->daftarGameDani as $key => $game) {
            if ($game["id"] == $id) {
                $this->daftarGameDani[$key]["game"] = $newGame;
                $_SESSION["daftarGameDani"] = $this->daftarGameDani;
                return true;
            }
        }
        return false;
    }
}
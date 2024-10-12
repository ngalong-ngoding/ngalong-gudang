<?php



class Majid
{

    
    private $daftarGame = [];

    
    public function __construct()
    {
        
        if (isset($_SESSION["daftarGame"])) {
            $this->daftarGame = $_SESSION["daftarGame"];
        } else {
            $this->daftarGame = [
                
            ];
               
            
        }
    }

    
    public function getAllGames()
    {
        return $this->daftarGame;
    }

    
    public function tambahGame($game)
    {
        
        $newId = count($this->daftarGame) + 1;
        $this->daftarGame[] = [
            "id" => $newId,
            "game" => $game
        ];

        $_SESSION["daftarGame"] = $this->daftarGame;
    }

    
    public function hapusGame($id)
    {
        foreach ($this->daftarGame as $key => $game) {
            if ($game["id"] == $id) {
                unset($this->daftarGame[$key]);
                $this->daftarGame = array_values($this->daftarGame);
                $_SESSION["daftarGame"] = $this->daftarGame;
                return true;
            }
        }
        return false;
    }

   
    public function editGame($id, $newGame)
    {
        foreach ($this->daftarGame as $key => $game) {
            if ($game["id"] == $id) {
                $this->daftarGame[$key]["game"] = $newGame;
                $_SESSION["daftarGame"] = $this->daftarGame;
                return true;
            }
        }
        return false;
    }
}
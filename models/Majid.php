<?php



class Majid
{

    
    private $daftarGameMajid = [];

    
    public function __construct()
    {
        
        if (isset($_SESSION["daftarGameMajid"])) {
            $this->daftarGame = $_SESSION["daftarGameMajid"];
        } else {
            $this->daftarGameMajid = [
                
            ];
               
            
        }
    }

    
    public function getAllGames()
    {
        return $this->daftarGameMajid;
    }

    
    public function tambahGame($game)
    {
        
        $newId = count($this->daftarGameMajid) + 1;
        $this->daftarGameMajid[] = [
            "id" => $newId,
            "game" => $game
        ];

        $_SESSION["daftarGameMajid"] = $this->daftarGameMajid;
    }

    
    public function hapusGame($id)
    {
        foreach ($this->daftarGameMajid as $key => $game) {
            if ($game["id"] == $id) {
                unset($this->daftarGameMajid[$key]);
                $this->daftarGameMajid = array_values($this->daftarGameMajid);
                $_SESSION["daftarGameMajid"] = $this->daftarGameMajid;
                return true;
            }
        }
        return false;
    }

   
    public function editGame($id, $newGame)
    {
        foreach ($this->daftarGameMajid as $key => $game) {
            if ($game["id"] == $id) {
                $this->daftarGameMajid[$key]["game"] = $newGame;
                $_SESSION["daftarGameMajid"] = $this->daftarGameMajid;
                return true;
            }
        }
        return false;
    }
}
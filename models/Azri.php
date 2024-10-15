<?php



class Azri
{

    
    private $daftarGameAzri = [];

    
    public function __construct()
    {
        
        if (isset($_SESSION["daftarGameAzri"])) {
            $this->daftarGameAzri = $_SESSION["daftarGameAzri"];
        } else {
            $this->daftarGameAzri = [
                
            ];
               
            
        }
    }

    
    public function getAllGames()
    {
        return $this->daftarGameAzri;
    }

    
    public function tambahGame($game)
    {
        
        $newId = count($this->daftarGameAzri) + 1;
        $this->daftarGameAzri[] = [
            "id" => $newId,
            "game" => $game
        ];

        $_SESSION["daftarGameAzri"] = $this->daftarGameAzri;
    }

    
    public function hapusGame($id)
    {
        foreach ($this->daftarGameAzri as $key => $game) {
            if ($game["id"] == $id) {
                unset($this->daftarGameAzri[$key]);
                $this->daftarGameAzri = array_values($this->daftarGameAzri);
                $_SESSION["daftarGameAzri"] = $this->daftarGameAzri;
                return true;
            }
        }
        return false;
    }

   
    public function editGame($id, $newGame)
    {
        foreach ($this->daftarGameAzri as $key => $game) {
            if ($game["id"] == $id) {
                $this->daftarGameAzri[$key]["game"] = $newGame;
                $_SESSION["daftarGameAzri"] = $this->daftarGameAzri;
                return true;
            }
        }
        return false;
    }
}
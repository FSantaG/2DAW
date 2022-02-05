<?php
class DifadiCleanUsers implements DifadiScript{
    public $consulta;
    public function run(){
        $users = DifadiTools::getAllUsers();
        $counter = 0;
        foreach($users as $user){
            if($user["active"] == 0){
                array_splice($users, $counter, 1);
            }
            else{
                $counter++;
            }
        }
        $this->consulta=$users;
    }
    public function getResult(){
        var_dump($this->consulta);
    }
}
?>
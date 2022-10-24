<?php

class AppServiceProvider extends ServiceProvider {
    public function boot(){
        $dataUser = $this->db->table('tb_user')->where('username', '=', 'kietgolx65234');
        $data['copyright'] = 'Copyright &copy; 2022';
        View::share($dataUser);
    }
}
?>
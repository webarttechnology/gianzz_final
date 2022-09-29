<?php 
    function getroopDetails($produtId){
        $data = \App\Models\Rope_chain::where('blog_id', $produtId) -> get();
        return $data;
    }

?>
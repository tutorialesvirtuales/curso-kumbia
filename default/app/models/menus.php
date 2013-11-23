<?php

class Menus extends ActiveRecord {

    /**
     * Retorna los menu para ser paginados
     *
     */
    public function getMenus($page, $ppage = 3) {
        return $this->paginate("page: $page", "per_page: $ppage", 'order: id desc');
    }

}

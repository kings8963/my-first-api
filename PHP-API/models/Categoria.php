<?php

class Categoria extends Conectar{

    public function get_categoria(){
        #se accede desde la clase hija al resultado de la funcion conexion()
        $conectar=parent::conexion();
        parent::set_name();
        $sql="SELECT * FROM tm_categories WHERE est=1";
        $sql=$conectar->prepare($sql);
        $sql->execute();

        return $resultado= $sql->fetchAll(PDO::FETCH_ASSOC);
    }


    public function get_categoria_x_id($cat_id){
        #se accede desde la clase hija al resultado de la funcion conexion()
        $conectar=parent::conexion();
        parent::set_name();
        $sql="SELECT * FROM tm_categories WHERE est=1 AND cat_id=?";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1,$cat_id);
        $sql->execute();

        return $resultado= $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insert_categoria($cat_nom,$cat_obs){
        #se accede desde la clase hija al resultado de la funcion conexion()
        $conectar=parent::conexion();
        parent::set_name();
        $sql="INSERT INTO tm_categories(cat_id, cat_nom, cat_obs,est) VALUES(NULL,?,?,'1')";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1,$cat_nom);
        $sql->bindValue(2,$cat_obs);
        $sql->execute();

        return $resultado= $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function update_categoria($cat_id, $cat_nom,$cat_obs){
        #se accede desde la clase hija al resultado de la funcion conexion()
        $conectar=parent::conexion();
        parent::set_name();
        $sql="UPDATE tm_categories set cat_nom=?, cat_obs=? WHERE cat_id=?";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1,$cat_nom);
        $sql->bindValue(2,$cat_obs);
        $sql->bindValue(3,$cat_id);
        $sql->execute();

        return $resultado= $sql->fetchAll(PDO::FETCH_ASSOC);
    }


    public function delete_categoria($cat_id){
        #se accede desde la clase hija al resultado de la funcion conexion()
        $conectar=parent::conexion();
        parent::set_name();
        $sql="UPDATE tm_categories set est='0' WHERE cat_id=?";
        $sql=$conectar->prepare($sql);
        $sql->bindValue(1,$cat_id);
        $sql->execute();

        return $resultado= $sql->fetchAll(PDO::FETCH_ASSOC);
    }


}

?>
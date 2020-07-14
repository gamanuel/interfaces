<?php

require_once 'model.php';

class modularModel extends model {

    public function __construct() {
        parent::__construct();
    }

    public function getRegistrosTabla($la_tabla,$el_filtro,$el_orden, $tipo){
        try {
          if(!empty($el_filtro)){
              $el_filtro = "WHERE $el_filtro";
          }
          if(!empty($el_orden)){
              $el_orden = "ORDER BY $el_orden";
          }
          //echo "SELECT * from $la_tabla $el_filtro $el_orden";
          $sentencia = $this->conectarBaseDeDatos->prepare("SELECT * from $la_tabla $el_filtro $el_orden");
          $sentencia->execute();
          if($tipo=="O"){
            return $sentencia->fetchAll(PDO::FETCH_OBJ);
          }
          elseif($tipo=="N"){
            return $sentencia->fetchAll(PDO::FETCH_NUM);
          }
          elseif($tipo=="B"){
            return $sentencia;
          }
          else{
            return $sentencia->fetchAll(PDO::FETCH_ASSOC);
          }
        } catch (PDOException $e) {
          //crear base de datos
          echo "error base";
          print "¡Error!: " . $e->getMessage() . "<br/>";
        } catch (Exception $e) {
          echo "error base";
          print "¡Error!: " . $e->getMessage() . "<br/>";
        }
        finally{
          //$this->conectarBaseDeDatos->closeCursor();
          //$this->conectarBaseDeDatos = null;
        }
    }
    
    //devuelve un registro segun ID
    public function getRegistroID($la_tabla, $el_id, $tipo){
        if(!empty($el_id)){
            $el_id = "WHERE id".$la_tabla." = ".$el_id;
        }
        $sentencia = $this->conectarBaseDeDatos->prepare("SELECT * from $la_tabla $el_id");
        $sentencia->execute(array($la_tabla,$el_id));
        if($tipo=="O"){
            return $sentencia->fetch(PDO::FETCH_OBJ);
        }
        elseif($tipo=="N"){
            return $sentencia->fetch(PDO::FETCH_NUM);
        }
        elseif($tipo=="B"){
            return $sentencia;
        }
        else{
            return $sentencia->fetch(PDO::FETCH_ASSOC);
        }
    }
    
    //devuelve un registro segun ID Completo con tablas externas
    public function getRegistroIDCompleto($la_tabla, $el_id, $tipo){
        $el_filtro = "id".$la_tabla." = ".$el_id;
        $el_sel = $this->armarConsulta($la_tabla,$el_filtro);
        
        $sentencia = $this->conectarBaseDeDatos->prepare($el_sel);
        $sentencia->execute();
        if($tipo=="O"){
            return $sentencia->fetch(PDO::FETCH_OBJ);
        }
        elseif($tipo=="N"){
            return $sentencia->fetch(PDO::FETCH_NUM);
        }
        elseif($tipo=="B"){
            return $sentencia;
        }
        else{
            return $sentencia->fetch(PDO::FETCH_ASSOC);
        }
    }

    //devuelve las columnas de una tabla 
    public function GetColumnasTabla($tabla, $tipo){
        $sentencia = $this->sqlVariosReturn('SHOW COLUMNS from '.$tabla,$tipo);
        return $sentencia;
    }

    //devuelve un registro segun filtro
    public function getRegistro($la_tabla,$el_filtro, $tipo){
        if(!empty($el_filtro)){
            $el_filtro = "WHERE $el_filtro";
        }    
        //echo "SELECT * from $la_tabla $el_filtro";
        $sentencia = $this->conectarBaseDeDatos->prepare("SELECT * from $la_tabla $el_filtro");
        $sentencia->execute();
        if($tipo=="O"){
            return $sentencia->fetch(PDO::FETCH_OBJ);
        }
        elseif($tipo=="N"){
            return $sentencia->fetch(PDO::FETCH_NUM);
        }
        elseif($tipo=="B"){
            return $sentencia;
        }
        else{
            return $sentencia->fetch(PDO::FETCH_ASSOC);
        }
    }
    
    function armarINSERT($laTabla){
        // traigo los campos
        $columnas_aux = $this->GetColumnasTabla($laTabla, "A");
        $sqlInsert = "Insert into ".$laTabla." (";
        $sqlValores = " VALUES (";  
        $adicional_campo_empresa = "";
        $adicional_valor_empresa = "";
        foreach ($columnas_aux as $key => $value) {
            if (strtoupper($value["Field"])=="CODIGO_EMPRESA"){
                $adicional_campo_empresa = "codigo_empresa";
                $adicional_valor_empresa = $_SESSION["EMPRESA"];
            }
        }
        foreach($_POST as $campo => $valor){
            $sqlInsert .= $campo.",";
            if($campo=="clave"){
                if(strlen($valor)<15){
                    $valor = password_hash($valor, PASSWORD_DEFAULT);
                }
            }     
            if($campo=="nivel"){
                if($valor>$_SESSION["NIVEL"]){
                    $valor = $_SESSION["NIVEL"];
                }
            }            
            $sqlValores .= "'".$valor."',";              
        }
        if($adicional_campo_empresa == 'codigo_empresa'){
            $sqlInsert .= $adicional_campo_empresa;
            $sqlValores .= "'".$adicional_valor_empresa."',"; 
        }
        $sqlTotal = $sqlInsert .= ")".$sqlValores .= ")";      
        $sqlTotal = str_replace(",)",")",$sqlTotal);
        return $sqlTotal;
    }
    
    function armarUPDATE($laTabla,$id){
        $sqlInsert = "UPDATE ".$laTabla." SET ";
        foreach($_POST as $campo => $valor){
            if($campo=="clave"){
                if(strlen($valor)<15){
                    $valor = password_hash($valor, PASSWORD_DEFAULT);
                }
            }            
            if($campo=="nivel"){
                if($valor>$_SESSION["NIVEL"]){
                    $valor = $_SESSION["NIVEL"];
                }
                
            }    
            if (strtoupper($campo)=="CODIGO_EMPRESA"){
                $valor = $_SESSION["EMPRESA"];
            }
            $sqlInsert .= $campo."='".$valor."',";      
        }
        $sqlWHERE = " WHERE id".$laTabla."=".$id;
        $sqlTotal = $sqlInsert .= ")".$sqlWHERE;      
        $sqlTotal = str_replace(",)","",$sqlTotal);        
        return $sqlTotal;

    }

    function armarConsulta($la_tabla, $el_filtro)    {
        $tabla = $la_tabla;
        $strConsulta_tabla = "Select * from " . $tabla . " LIMIT 0,1";
        $result =  $this->sqlVariosReturn($strConsulta_tabla, "B");
        
        $n = $result->columnCount();
        $seleccion = "";
        $externas = "";
        $subselec = "";    
        for ($i = 0; $i < $n; $i++) {
            $tmp = $result->getColumnMeta($i);      
            $campo = $tmp["name"];
            $tipo = $tmp["native_type"];
            $union = "=";
            if ($tipo == "VAR_STRING") {
                    $tipo = "STRING_TYPE";
                    $union = "%";
            }
            else if ($tipo == "BLOB") {
                    $tipo = "STRING_TYPE";
                    $union = "%";
            }
            else if ($tipo == "INT") {
                $tipo = "NUMERIC_TYPE";
                $union = "=";
            }
            else if ($tipo == "LONG") {
                $tipo = "NUMERIC_TYPE";
                $union = "=";
            }            
            else if ($tipo == "DOUBLE") {
                $tipo = "DOUBLE_TYPE";
                $union = "=";
            }
            else if ($tipo == "DATETIME") {
                $tipo = "DATE_TYPE";
                $union = "=";
            }
            else if ($tipo == "DATE") {
                $tipo = "DATE_TYPE";
                $union = "=";
            }
            if (strtoupper(substr($campo,0,7)) == "CODIGO_") {
                $campo2= "id".strtolower (substr($campo,7));
                $tabla2 = strtolower (substr($campo,7));
                if (strpos($tabla2,"_") > 0) {
                    $tabla2 = strtolower(substr($tabla2,0,strpos($tabla2,"_")));
                    // $campo2= "id".substr($campo,7,strlen($tabla2));
                    $campo2= "id".$tabla2;
                }
                $sql = "Select * from $tabla2 LIMIT 1,1";
                $result_externa = $this->sqlVariosReturn($sql,"B");
                $tmp = $result_externa->getColumnMeta(1);          
                $campo3 = $tmp["name"];
                //$seleccion = $seleccion . $tabla2 . ".nombre" .$campo2 . " AS " . $campo;
                $seleccion = $seleccion . $tabla2 . "." . $campo3 . " AS " . $campo;
                $externas = $externas . " LEFT JOIN " . $tabla2 . " ON " . $tabla . "." .$campo . " = " . $tabla2 . "." . $campo2;
            } else if (strtoupper(substr($campo,0,3)) == "SN_") {
                $campo2= "idopcion";
                $campo3= substr($campo,3);
                $tabla2 = "subalias".$i;
                $subselec = $subselec.", (Select * from opcion) as ".$tabla2;
                $seleccion = $seleccion . $tabla2 . ".descripcion AS " . $campo;
                $externas = $externas . " LEFT JOIN (Select * from opcion) as " .$tabla2 . " ON " . $tabla . "." .$campo . " = " . $tabla2 . "." . $campo2;
            } else {
                $seleccion = $seleccion . $tabla . "." . $campo;
            }
            if ($i<$n-1) {
                $seleccion = $seleccion . ", ";
            }
        }
        $query_rs_tabla1 = sprintf("SELECT %s from $tabla %s WHERE %s", $seleccion, $externas, $el_filtro);
        //echo $query_rs_tabla1;
        return $query_rs_tabla1;
    }
    
    public function insertRegistro($la_tabla,$losCampos, $losValores){
        try{
            $elInsertSQL = $this->armarINSERT($la_tabla,$losCampos,$losValores);
            $this->graboCambios($elInsertSQL);    
            $sentencia = $this->conectarBaseDeDatos->prepare($elInsertSQL);
            $sentencia->execute($losValores);
            return $sentencia->errorInfo();
        } catch (PDOException $e) {
            //crear base de datos
            echo "error base";
            print "¡Error!: " . $e->getMessage() . "<br/>";
        } catch (Exception $e) {
            echo "error base";
            print "¡Error!: " . $e->getMessage() . "<br/>";
        }
        finally{
            
        }
    }
    
    //delete by ID
    public function deleteRegistroID($la_tabla,$el_id){
        $this->graboCambios("DELETE from $la_tabla WHERE id$la_tabla = $el_id");            
        $sentencia = $this->conectarBaseDeDatos->prepare("DELETE from $la_tabla WHERE id$la_tabla = $el_id");
        return $sentencia->execute();
    }

    //delete by FILTRO
    public function deleteRegistroFiltro($la_tabla,$el_filtro){
        $this->graboCambios("DELETE from $la_tabla WHERE $el_filtro");
        $sentencia = $this->conectarBaseDeDatos->prepare("DELETE from $la_tabla WHERE $el_filtro");
        return $sentencia->execute();
    }

    //sql Varios
    public function sqlVarios($el_sql){
        if(strpos(strtoupper($el_sql),"SELECT")===false){
            $this->graboCambios($el_sql);
        }
        $sentencia = $this->conectarBaseDeDatos->prepare($el_sql);
        $sentencia->execute();
        $error = $sentencia->errorInfo(); //sirve para ir debugeando y ver si hay error en la consulta
        return $this->conectarBaseDeDatos->lastInsertId();
    }

    //sql Varios con return
    public function sqlVariosReturn($el_sql, $tipo){
        if(strpos(strtoupper($el_sql),"SELECT")===false){
            $this->graboCambios($el_sql);
        }
        $sentencia = $this->conectarBaseDeDatos->prepare($el_sql);
        $sentencia->execute();
        if($tipo=="O"){
            // $error = $sentencia->errorInfo(); //sirve para ir debugeando y ver si hay error en la consulta
            return $sentencia->fetchAll(PDO::FETCH_OBJ);
        }
        elseif($tipo=="N"){
            return $sentencia->fetchAll(PDO::FETCH_NUM);
        }
        elseif($tipo=="B"){
            return $sentencia;
        }
        else{
            return $sentencia->fetchAll(PDO::FETCH_ASSOC);
        }    
    }

    public function graboCambios($el_sql){
        $cambios_sincomillas =str_replace("'"," ",utf8_decode($el_sql));
            $cambios_base = "Insert into auditoria (Cambios, Operador) values ('".$cambios_sincomillas."','".$_SESSION['USER']."')";
            $sentencia = $this->conectarBaseDeDatos->prepare($cambios_base);
        $sentencia->execute();
    }

    // obtener el nivel de la tabla secundaria
    public function getNivelAux($tablaAux, $tipo){
        $sentencia = $this->getRegistro('tablasaux', 'ucase(Descripcion)="'.$tablaAux.'" and Nivel <='.$_SESSION["NIVEL"],$tipo);
        return $sentencia;
      }

}

<?php
/**
 * Test que simula una actualización de stock de un producto en una base de datos.
 *
 * @author Fernando Santamaría García fsantagestiones@gmail.com
 * @date 04/02/2022
 * 
 */

/**
 * Clase que actualiza stocks individuales, necesario escribir consulta SQL.
 */
class StockUpdate {
    /**
     * Función que actualiza un solo producto.
     * 
     * Se debe de escribir una consulta SQL que actualice el stock del
     * producto. Imaginemos que los stocks se guardan en una tabla 
     * llamada "df_stock_available" que tiene los siguientes campos:
     * ( id_product, stock )
     * 
     * @param Int $id_product. Id del producto
     * @param Int $stock. Cantidad del producto
     * @return Bool. Si es correcto, devuelve true.
     */
    public static function updateProduct( $id_product, $stock )
    {
        return DB::Execute("UPDATE df_stock_available SET stock=$stock WHERE id_product=$id_product");
    }
}

/**
 * Clase que itera un array de productos y actualiza todos.
 */
class UpdateIterator {
    private $products; // Lista de productos a actualizar.

    /**
     * Carga la propiedad "products" con un array de stocks
     * en formato [ id_producto => stock, id_producto => stock ]
     * 
     * @param Array $products. Array de productos a actualizar.
     */
    public function __construct( $products )
    {
        $this->products = $products;
    }

    /* 
     * Escribir una función llamada "run" que recorra
     * el array de productos uno por uno y utilizando la clase "StockUpdate"
     * actualice su stock (Virtualmente ya que no tenemos base de datos) 
     * 
     * Esta función deberá de devolver true si todas las actualizaciones son 
     * correctas. No tendrá ningún parámetro, usará la propiedad "products" de
     * la clase.
     */
    public function run(){
        $query = new StockUpdate();
        $count_checked = "0";
        foreach($this->products as $id_product=>$stock){
            $check = $query::updateProduct($id_product, $stock);
            if($check){
                $count_checked++;
            }
        }
        if($count_checked==count($this->products)){
            return true;
        }
    }

}

/**
 * Clase que simula conectar con la base de datos, no hace falta modificarla.
 */
class DB {
    /**
     * Lanza una consulta SQL
     * 
     * Para no montar un server de BBDD, simplemente muestra la consulta
     * por pantalla y devuelve true siempre, como si el resultado fuera
     * correcto.
     * 
     * @param String $query. Consulta SQL.
     * @return Bool. Si es correcto, devuelve true.
     */
    public static function Execute( $query )
    {
        echo "Ejecución simulada de ( {$query} )<br/>";
        return true;
    }
}


$stocks = [
    //id_product => stock
    1337 => 21,
    1010 => 0,
    1000 => 3,
    2176 => 90,
    5673 => 1
];

// Iniciar actualización.
$ui = new UpdateIterator( $stocks );

// Tener en cuenta que run() no existe dentro de UpdateIterator al empezar, hay que crearla.
if( $ui->run() )
{
    echo "Todos los stocks actualizados correctamente";
} else {
    echo "Ha ocurrido un error";
}
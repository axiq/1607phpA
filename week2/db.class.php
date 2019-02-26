<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 2019/2/26
 * Time: 9:24
 */

class Db{
    //三私一公
    private static $db;
    private static $ins;
    private function __clone(){
        // TODO: Implement __clone() method.
    }
    private function __construct(){
        $dbconfig=['127.0.0.1','07a','root','root'];
        list($ip,$dbname,$user,$password)=$dbconfig;
        self::$db=new pdo("mysql:host=$ip;dbname=$dbname",$user,$password);
    }
    public static function getIns(...$dbconfig){
        if(self::$ins instanceof self){
            return self::$ins;
        }
        return self::$ins=new SELF;
    }
    public function select($sql){
        return self::$db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
    public function find($sql){
        return self::$db->query($sql)->fetch(PDO::FETCH_ASSOC);
    }
    public function create($sql){
        return self::$db->query($sql)->execute();
    }
    public function delete($sql){
        return self::$db->query($sql)->execute();
    }
    public function update($sql){
        return self::$db->query($sql)->execute();
    }
}
$dbconfig=['127.0.0.1','07a','root','root'];
$db=Db::getIns(...$dbconfig);
$data=$db->select("select * from good");
echo "<pre>";
print_r($data);
$data2=$db->find("select * from good");
echo "<pre>";
print_r($data2);
$res=$db->create("insert into good values(null,'啤酒','60','./uploads/5.jpg','5')");
var_dump($res);
$res2=$db->delete("delete from good where id=4");
var_dump($res2);
$res3=$db->delete("update good set name='ff' where id=1");
var_dump($res3);
?>
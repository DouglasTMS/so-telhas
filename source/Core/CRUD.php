<?php

namespace Source\Core;

use PDOException;
use Source\Core\Connect;
use stdClass;

abstract class CRUD
{
 //**********----------**********----------**********----------**********----------**********---------- */
 //**********----------**********----------**********----------**********----------**********---------- */
 //**********----------**********----------**********----------**********----------**********---------- */

 /**
  * Dados a serem manipulados.
  *
  * @var object|null
  */
 protected $data;

 /**
  * Armazenará o erro caso exista.
  * Caso não exista, ficará NULL.
  *
  * @var \PDOException|null
  */
 protected $fail;

 /**
  * Armazenará a mensagem gerada.
  * Caso não haja mensagem, ficará NULL.
  *
  * @var string|null
  */
 protected $message;

 //**********----------**********----------**********----------**********----------**********---------- */
 //**********----------**********----------**********----------**********----------**********---------- */
 //**********----------**********----------**********----------**********----------**********---------- */

 public function __set($name, $value)
 {
  if (empty($this->data)) {
   $this->data = new \stdClass();
  }

  $this->data->$name = $value;
 }

 public function __isset($name)
 {
  return isset($this->data->$name);
 }

 public function __get($name)
 {
  return ($this->data->$name ?? null);
 }

 //**********----------**********----------**********----------**********----------**********---------- */
 //**********----------**********----------**********----------**********----------**********---------- */
 //**********----------**********----------**********----------**********----------**********---------- */

 /**
  * Retorna os dados a serem manipulados.
  *
  * @return object|null
  */
 public function data(): ?object
 {
  return $this->data;
 }

 /**
  * Retorna o erro, caso exista.
  *
  * @return \PDOException|null
  */
 public function fail(): ?\PDOException
 {
  return $this->fail;
 }

 /**
  * Retorna a mensagem gerada pelo sistema, caso exista.
  *
  * @return string|null
  */
 public function message(): ?string
 {
  return $this->message;
 }

 //**********----------**********----------**********----------**********----------**********---------- */
 //**********----------**********----------**********----------**********----------**********---------- */
 //**********----------**********----------**********----------**********----------**********---------- */

 /**
  * Cria novo registro no banco de dados.
  *
  * @return integer|null
  */
 protected function create(): ?int
 {
  try {
   $data    = $this->filteredData($this->safe());
   $columns = implode(", ", array_keys($data));
   $values  = ":" . implode(", :", array_keys($data));

   $stmt = Connect::getInstance()->prepare("INSERT INTO " . static::$entity . " ({$columns}) VALUES ({$values})");

   $stmt->execute($data);
   return Connect::getInstance()->lastInsertId();
  } catch (\PDOException $e) {
   $this->fail = $e;
   return null;
  }
 }

 /**
  * Responsável por fazer a leitura de dados no banco de dados.
  *
  * @param string $select
  * @param string|null $params
  * @return \PDOStatement|null
  */
 protected function read(string $select, string $params = null): ?\PDOStatement
 {
  try {
   $stmt = Connect::getInstance()->prepare($select);

   if ($params) {
    parse_str($params, $params_str);

    foreach ($params_str as $key => $value) {
     $type = (is_numeric($value) ? \PDO::PARAM_INT : \PDO::PARAM_STR);
     $stmt->bindValue(":{$key}", $value, $type);
    }
   }

   $stmt->execute();
   return $stmt;
  } catch (PDOException $e) {
   $this->fail = $e;
   return null;
  }
 }

 /**
  * Responsável por fazer o update de dados no banco de dados.
  *
  * @param string $where
  * @param string $place
  * @return integer|null
  */
 protected function update(string $where, string $place): ?int
 {
  try {

   $data = [];

   foreach ($this->data as $key => $value) {
    $data[] = "{$key} = :{$key}";
   }

   $dataSet = implode(", ", $data);

   $stmt = Connect::getInstance()->prepare("UPDATE " . static::$entity . " SET {$dataSet} WHERE {$where}");

   parse_str($place, $place_str);

   $stmt->execute(array_merge($this->filteredData((array) $this->data, $place_str)));

   return ($stmt->rowCount() ?? 1);
  } catch (\PDOException $e) {
   $this->fail = $e;
   return null;
  }
 }

 /**
  * Responsável por fazer o delete.
  *
  * @param string $where
  * @param string $place
  * @return integer|null
  */
 public function delete(string $where, string $place): ?int
 {
  try {
   $stmt = Connect::getInstance()->prepare("DELETE FROM " . static::$entity . " WHERE {$where}");
   parse_str($place, $place_str);

   $stmt->execute($place_str);
   return ($stmt->rowCount() ?? 1);
  } catch (PDOException $e) {
   $this->fail = $e;
   return null;
  }
 }

 //**********----------**********----------**********----------**********----------**********---------- */
 //**********----------**********----------**********----------**********----------**********---------- */
 //**********----------**********----------**********----------**********----------**********---------- */

 /**
  * Elimina os campos do banco de dados que não podem ser alterados.
  *
  * @return array|null
  */
 private function safe(): ?array
 {
  $data = (array) $this->data();

  foreach (CONF_DB_DENIED_ACCESS_FIELDS as $unset) {
   unset($data[$unset]);
  }
  return $data;
 }

 /**
  * Filtra os dados limpando códigos maliciosos.
  *
  * @return array|null
  */
 private function filteredData(array $data): ?array
 {
  $dataFilter = [];

  foreach ($data as $key => $value) {
   $dataFilter[$key] = (is_null($value) ? null : filter_var($value, FILTER_SANITIZE_FULL_SPECIAL_CHARS));
  }

  return $dataFilter;
 }

 //**********----------**********----------**********----------**********----------**********---------- */
 //**********----------**********----------**********----------**********----------**********---------- */
 //**********----------**********----------**********----------**********----------**********---------- */

 /**
  * Faz o cadastro ou atualização de dados.
  *
  * @return void
  */
 public function save(string $where = null, string $place = null): ?int
 {
  /** Atualizar. */
  if (!empty($this->id)) {
   return $this->update($where, $place);
  }

  /** Criar. */
  if (empty($this->id)) {
   return $this->create();
  }
 }

 /**
  * Atalho para fazer leituras no banco de dados.
  *
  * @param string|null $where
  * @param string|null $place
  * @param string $columns
  */
 public function get(string $where = null, string $place = null, string $columns = "*")
 {

  return $this->read("SELECT {$columns} FROM " . static::$entity . " {$where}", $place)->fetchAll();
 }

 //**********----------**********----------**********----------**********----------**********---------- */
 //**********----------**********----------**********----------**********----------**********---------- */
 //**********----------**********----------**********----------**********----------**********---------- */

}

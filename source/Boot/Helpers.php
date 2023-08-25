<?php

use Source\Core\Session;
use Source\Models\Branch;
use Source\Models\Category;
use Source\Models\Contact;
use Source\Supports\Thumb;

/**
 * Verifica se um e-mail é válido.
 *
 * @param string $email
 * @return bool
 */
function is_email(string $email): bool
{
 return filter_var($email, FILTER_VALIDATE_EMAIL);
}

/**
 * Verifica se uma senha é válida.
 *
 * @param string $password
 * @return bool
 */
function is_pass(string $password): bool
{
 if (mb_strlen($password) < CONF_PASS_MIN_LEN || mb_strlen($password) > CONF_PASS_MAX_LEN) {
  return false;
 }

 return true;
}

/**
 * Cria uma hash para a senha.
 *
 * @param string $password
 * @return string
 */
function pass(string $password): string
{
 return password_hash($password, CONF_PASS_ALGO, CONF_PASS_OPTION);
}

/**
 * Verifica se senha bate com hash.
 *
 * @param string $password
 * @param string $hash
 * @return bool
 */
function pass_verify(string $password, string $hash): bool
{
 return password_verify($password, $hash);
}

/**
 * Verifica se hash precisa ser atualizada.
 *
 * @param  mixed $hash
 * @return bool
 */
function pass_rehash(string $hash): bool
{
 return password_needs_rehash($hash, CONF_PASS_ALGO, CONF_PASS_OPTION);
}

/**
 * Converte o texto em URL amigável.
 *
 * @param string $string
 * @return string
 */
function str_slug(string $string): string
{
 $string = filter_var(mb_strtolower($string), FILTER_SANITIZE_STRIPPED);

 $formats = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜüÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿRr"!@#$%&*()_-+={[}]/?;:.,\\\'<>°ºª';
 $replace = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr                                 ';

 $string = strtr(utf8_decode($string), utf8_decode($formats), $replace);
 $string = trim($string);
 $string = str_replace(" ", "-", $string);
 $string = str_replace(["-----", "----", "---", "--"], "-", $string);

 return $string;
}

/**
 * Limita o texto com o determinado número de palavras.
 *
 * @param string $string
 * @param int $limit
 * @param string $pointer
 * @return string
 */
function str_limit_words(string $string, int $limit, string $pointer = "..."): string
{
 $string   = filter_var($string, FILTER_SANITIZE_SPECIAL_CHARS);
 $string   = trim($string);
 $arrWords = explode(" ", $string);
 $numWords = count($arrWords);

 if ($numWords <= $limit) {
  return $string;
 }

 $string = implode(" ", array_slice($arrWords, 0, $limit));

 return "{$string}{$pointer}";
}

/**
 * Limita o texto com o determinado número de chars. Não corta palavras no meio.
 *
 * @param string $string
 * @param int $limit
 * @param string $pointer
 * @return string
 */
function str_limit_chars(string $string, int $limit, string $pointer = "..."): string
{
 $string = filter_var($string, FILTER_SANITIZE_SPECIAL_CHARS);
 $string = trim($string);

 if (mb_strlen($string) <= $limit) {
  return $string;
 }

 $string    = mb_substr($string, 0, $limit);
 $lastSpace = mb_strrpos($string, " ");
 $string    = mb_substr($string, 0, $lastSpace);

 return "{$string}{$pointer}";
}

/**
 * Configura URL padrão do sistema. Faz a verificação se está em ambiente de teste ou produção.
 *
 * @param null|string $path
 * @return string
 */
function url(string $path = null): string
{
 if (mb_strpos($_SERVER["HTTP_HOST"], "localhost")) {
  if (!empty($path)) {
   return CONF_URL_TEST . "/" . ($path[0] == "/" ? mb_substr($path, 1) : $path);
  }

  return CONF_URL_TEST;
 }

 if (!empty($path)) {
  return CONF_URL_BASE . "/" . ($path[0] == "/" ? mb_substr($path, 1) : $path);
 }

 return CONF_URL_BASE;
}

/**
 * Configura URL padrão do tema. Faz a verificação se está em ambiente de teste ou produção.
 *
 * @param null|string $path
 * @return string
 */
function url_theme(string $path = null): string
{
 if (mb_strpos($_SERVER["HTTP_HOST"], "localhost")) {
  if (!empty($path)) {
   return CONF_URL_TEST . "/themes/" . CONF_THEME_NAME . "/" . ($path[0] == "/" ? mb_substr($path, 1) : $path);
  }

  return CONF_URL_TEST . "/themes/" . CONF_THEME_NAME;
 }

 if (!empty($path)) {
  return CONF_URL_BASE . "/themes/" . CONF_THEME_NAME . "/" . ($path[0] == "/" ? mb_substr($path, 1) : $path);
 }

 return CONF_URL_BASE . "/themes/" . CONF_THEME_NAME;
}

/**
 * Configura URL padrão do admin. Faz a verificação se está em ambiente de teste ou produção.
 *
 * @param null|string $path
 * @return string
 */
function url_admin(string $path = null): string
{
 if (mb_strpos($_SERVER["HTTP_HOST"], "localhost")) {
  if (!empty($path)) {
   return CONF_URL_TEST . "/themes/admin/" . ($path[0] == "/" ? mb_substr($path, 1) : $path);
  }

  return CONF_URL_TEST . "/themes/admin";
 }

 if (!empty($path)) {
  return CONF_URL_BASE . "/themes/admin/" . ($path[0] == "/" ? mb_substr($path, 1) : $path);
 }

 return CONF_URL_BASE . "/themes/admin";
}

function to_real(float $price): string
{
 return "R$ " . number_format($price, 2, ",", ".");
}

/**
 * Faz o redirecionamento de URL.
 *
 * @param string $url
 * @return void
 */
function redirect(string $url): void
{
 header("HTTP/1.1 302 Redirect");

 if (filter_var($url, FILTER_VALIDATE_URL)) {
  header("Location: {$url}");
  exit;
 }

 $location = url($url);
 header("Location: {$location}");
 exit;
}

/**
 * Configura o número para o padrão utilizado nos links.
 *
 * @param string $whatsAppNumber
 *
 * @return string
 */
function whatsapp(string $whatsAppNumber): string
{
 return $whatsAppNumber = "55" . str_replace(["(", ")", " ", "-"], "", $whatsAppNumber);
}

/**
 * Trigger da classe Session.
 *
 * @return Session
 */
function session(): Session
{
 return new Session();
}

/**
 * Trigger da classe Thumb.
 */
function thumb(): Thumb
{
 return new Thumb();
}

/**
 * Retorna uma coluna específica de uma categoria buscada pelo ID.
 */
function getCategoryById(int $categoryId, string $column)
{
 $category     = new Category();
 $categoryName = $category->get("WHERE id = :id", "id={$categoryId}");

 if (!empty($categoryName[0])) {
  return $categoryName[0]->$column;
 }

 return null;

}

function getCategoryByUri(string $uri, string $column)
{
 $category     = new Category();
 $categoryName = $category->get("WHERE uri = :uri", "uri={$uri}");

 if (!empty($categoryName[0])) {
  return $categoryName[0]->$column;
 }

 return null;

}

/**
 * Retorna uma coluna específica de uma categoria buscada pelo ID.
 */
function getBranchByUri(string $branchUri, string $column)
{
 $branch     = new Branch();
 $result = $branch->get("WHERE uri = :uri", "uri={$branchUri}");

 if (!empty($result[0])) {
  return $result[0]->$column;
 }

 return null;

}

function getBranchByName(string $branchName, string $column)
{
 $branch     = new Branch();
 $result = $branch->get("WHERE name = :name", "name={$branchName}");

 if (!empty($result[0])) {
  return $result[0]->$column;
 }

 return null;

}

function getBranchById(int $branchId, string $column)
{
 $branch     = new Branch();
 $result = $branch->get("WHERE id = :id", "id={$branchId}");

 if (!empty($result[0])) {
  return $result[0]->$column;
 }

 return null;

}

function getContact(string $column)
{
 $contact     = new Contact();
 $result = $contact->get("WHERE id = :id", "id=1");

 if (!empty($result[0])) {
  return $result[0]->$column;
 }

 return null;

}

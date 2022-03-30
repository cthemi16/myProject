<?php

/** @var yii\web\View $this */

use yii\helpers\Html;

$this->title = 'Tasks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <h3>Тестовое задание для PHP-разработчика.</h3>
<p>Используя фреймворк Yii2 (basic):</p>
<ul>
  <li>Реализовать сущности авторы и книги</li>
      <li>Реализовать административную часть
        <ul>
            <li>CRUD операции для авторов и книг</li>
            <li>вывести список книг с обязательным указанием имени автора в списке</li>
            <li>вывести список авторов с указанием кол-ва книг</li>
        </ul>
    </li>
  <li>Реализовать публичную часть сайта с отображение авторов и их книг (простой вывод списка на странице)</li>
      <li>Реализовать выдачу данных в формате json по RESTful протоколу отдельным контроллером
        <ul>
            <li>GET /api/v1/books/list получение списка книг с именем автора </li>
            <li>GET /api/v1/books/by-id получение данных книги по id </li>
            <li>POST /api/v1/books/update обновление данных книги </li>
            <li>DELETE /api/v1/books/id удаление записи книги из бд </li>
        </ul>
    </li>
</ul> 
   

    <code>https://docs.google.com/document/d/1UG-1I6C7vxLTm9ohNj4By25Q0mV0nw5Mmd1CXZm1iAg/edit</code>
</div>

<?php
//Данные для заголовка
$title = 'Открыть статью';//Данные тега <title>
$headMain = 'Открытие статьи';
$robots = 'noindex, nofollow';
$stylePath = '../../styles.css';

//Данные для задания

$articleText = '<p align = "justify">У программиста Пети есть код на PHP. У него было N фатальных ошибок и M ворнингов. Петя решил заставить код работать без ошибок и ворнингов, для чего ему его друг подарил подписку на хорошую IDE и github, так как только с помощью этих инструментов Петя смог бы найти и устранить все проблемы. Петя не очень опытный разработчик. Если Петя исправляет одну фатальную ошибку за коммит, то вместо неё появляется одна новая, если исправляет ворнинг в коммите, то вместо него появляется два новых ворнинга. Если Петя исправляет два ворнинга за один коммит, то появляется одна новая фатальная ошибка, и только когда Петя исправляет сразу две фатальные ошибки за один коммит, то не появляется ничего нового. Петя считает, что код будет полностью рабочим только если исправить все фатальные ошибки и ворнинги.
</p>';

include 'fulltext.html.php';
	
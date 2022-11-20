# PHP Html Parser
- - - 
## Тестовое задание

Написать на <b>PHP</b> парсер html страницы (на входе url), 
который на выходе будет отображать количество и название всех используемых html тегов. 
Использование готовых парсеров и библиотек запрещено, включая модуль DOM.  
Обязательно использование ООП подхода, демонстрирующее основные принципы структурирования и взаимодействия объектов. 
Не нужно придерживаться принципа KISS, приветствуется преувеличение уровня абстракции.

## Basic Usage

```php
$url = 'https://www.w3schools.com/html/';
$urlParser = new \Kemel91\HtmlParser\UrlParser($url);
$tags = $urlParser->parse()->tags();
$tagsCount = $tags->count();
$tagsUnique = $tags->unique();
$tagsAll = $tags->all();
$tagsGroup = $tags->groupInKeys();
```
Also, you can use your wrapper over Psr\Http\Client\ClientInterface and Psr\Http\Message\RequestInterface

```php
$request = new \Request('METHOD', 'https://www.w3schools.com/html/');
$client = new \Client();
$urlParser = new \Kemel91\HtmlParser\UrlParser($request, $client);
```
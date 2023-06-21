<?php

use Symfony\Component\Templating\Loader\FilesystemLoader;
use Symfony\Component\Templating\PhpEngine;
use Symfony\Component\Templating\Helper\SlotsHelper;
use Symfony\Component\Templating\TemplateNameParser;
use Symfony\Component\HttpFoundation\Response;

function view($fileName, $data = [])
{
  $filesystemLoader = new FilesystemLoader(__DIR__ . '/views/%name%');

  $templating = new PhpEngine(new TemplateNameParser(), $filesystemLoader);
  $templating->set(new SlotsHelper());

  $response = new Response(
    $templating->render($fileName, $data),
    200
  );
  return $response;
}

function redirect($path)
{
  $response = new Response("", 302, ['location' => $path]);
  return $response;
}

function notFound()
{
  die("404");
}

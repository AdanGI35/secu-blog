<?php


abstract class AbstractController
{
    protected function render(string $template, array $data) : void
    {
        require "templates/layout.phtml";
    }

    protected function redirect(string $route) : void
    {
        header("Location: $route");
    }
    protected Translator $translator;

    public function __construct(string $file, protected string $currentLang = "fr")
    {
        $this->translator = new Translator($file, $this->currentLang);
    }
}
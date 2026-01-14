<?php

namespace app\Core;

class View
{
    private static string $viewPath = __DIR__ . "/../views/";
    private static string $layoutPath = __DIR__ . "/../views/layouts/";

    public static function render(string $view, array $data = []): void
    {
        if (!empty($data)) {
            extract($data);
        }

        ob_start();
        require self::$viewPath . $view . ".php";
        $content = ob_get_clean();

        require self::$layoutPath . 'main.php';
    }

    /// nman3o XXS 
    public static function e(string $value): string
    {
        return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
    }
}

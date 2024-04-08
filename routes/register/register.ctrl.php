<?php

if ($_SERVER['REQUEST_METHOD'] == "POST")
{
    if ($_POST["password"] == $_POST["repeatpassword"])
    {
        try {
            new User(0, [
                "username" => $_POST["username"],
                "password" => $_POST["password"],
                "company" => $_POST["company"],
                "email" => $_POST["email"],
            ]);
        } catch (mysqli_sql_exception $databaseException) {
            Renderer::includeTemplate("frontend/components/layout.php", [
                "layout_path" => "routes/register/register.view.php",
                "layout_data" => [
                    "error_message" => [
                        "message" => var_dump($databaseException)
                    ]
                ]
            ]);

            exit();
        }

        header("Location: /auth");
        exit();
    } else {
        Renderer::includeTemplate("frontend/components/layout.php", [
            "layout_path" => "routes/register/register.view.php",
            "layout_data" => [
                "error_message" => [
                    "message" => $GLOBALS["locale"]["errors"]["notEqualPassword"]
                ]
            ]
        ]);
    }
} else {
    Renderer::includeTemplate("frontend/components/layout.php", [
        "layout_path" => "routes/register/register.view.php",
        "layout_data" => []
    ]);
}
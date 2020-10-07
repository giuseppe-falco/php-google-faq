<!-- repo: php-google-faq
Riscrivere questa pagina del sito google https://policies.google.com/faq.
Ci sono diverse domande con relative risposte. Gestire il “Database” e la visualizzazione di queste domande e risposte con PHP. -->

<?php

    $faq = [
        [
            "question" => "How are you implementing the recent Court of Justice of the European Union (CJEU) decision on the right to be forgotten?",

            "answer" => "The recent ruling by the Court of Justice of the European Union has profound consequences for search engines in Europe. The court found that certain users have the right to ask search engines like Google to remove results for queries that include the person's name. To qualify, the results shown would need to be inadequate, irrelevant, no longer relevant, or excessive..",
        ],
        [
            "question" => "How does Google protect my privacy and keep my information secure?",
            
            "answer" => "We know security and privacy are important to you – and they are important to us, too. We make it a priority to provide strong security and give you confidence that your information is safe and accessible when you need it.

            ",
        ],

    ];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php 
        foreach ( $faq as $block){
            echo "<h2>".$block["question"]."</h2>";
            echo "<p>".$block["answer"]."</p>";
        }
    ?>
</body>
</html>
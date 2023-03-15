<?php
declare(strict_types=1);
function displayErrors()
{
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
}
displayErrors();
require('ads.php');
require('articles.php');
require('vacancies.php');

$articles=[
    new Article("Fennel: The Vegetable that Makes You Look Good and Smell Good", "Fennel is the ultimate multi-tasking vegetable. Not only does it taste great in salads, roasted, or sautéed, but it also has some unique properties that make it a true beauty booster.<br><br>

    Did you know that fennel has been used as a breath freshener for centuries? Yes, forget about those artificial mints or gums, fennel seeds are the way to go. Chew on a few seeds after a meal, and you'll have the freshest breath in town.<br><br>

    But wait, there's more! Fennel also contains compounds that are known to stimulate the production of estrogen, the hormone responsible for giving women their feminine curves. So if you're looking for a natural way to enhance your assets, look no further than fennel.<br><br>

    And there you have it, folks, fennel: the vegetable that makes you look good and smell good. Don't forget to stock up on this versatile veggie, your taste buds and your body will thank you.","Article",true),
    new Article("The Ultimate Scam Artists", "Dogs, man's best friend, or so they say. But have you ever stopped to think about what these furry little freeloaders are really up to? Let's take a closer look.<br><br>

First of all, dogs are expert moochers. They'll stare you down with those big puppy eyes until you cave and give them a scrap of food from your plate. And don't even think about leaving your sandwich unattended, because it'll be gone in a flash.<br><br>

But that's not all, folks. Dogs are also masters of the guilt trip. If you dare to leave them alone for more than five minutes, they'll act like you've just abandoned them on a deserted island. And don't even try to resist those sad whimpers, because they know just how to tug at your heartstrings.<br><br>

And let's not forget about the ultimate scam: doggy daycare. Yes, that's right, people are actually paying money to have their dogs hang out with other dogs all day. It's a genius business model, really. Dogs get to socialize and play all day, while their owners fork over the cash.<br><br>

So there you have it, folks. Dogs may be cute and cuddly, but don't let their innocent faces fool you. They're just a bunch of scam artists looking for their next free meal.","Article",false),

new Commercial("Sausage: The Meaty Delight You Can't Resist", "Sausage: Because vegetables are what food eats.","Commercial"),

new Vacancies("Fullstack Developer", "Looking for a fullstack developer who can do everything from coding to fixing the printer. Must have superhuman abilities.","Job")
];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CASE 3</title>
</head>
<body>
    <?php
    foreach ($articles as $item) {
        switch ($item->getType()) {
            case 'Article':
                echo '<article class="' . ($item->getStatus() ? 'breaking' : '') . '">';
                echo '<h1 class="article-title"> '. ($item->getStatus() ? 'Breaking News!!! ' : '') . $item->getTitle() . '</h1>';
                echo '<p class="article-text">' . $item->getText() . '</p>';
                echo '</article>';
                break;
            case 'Commercial':
                echo "<aside>
        <h1 class=\"commercial-title\">{$item->getTitle()}</h1>
        <p class=\"commercial-text\">{$item->getText()}</p>
    </aside>";
                break;
            case 'Job':
                echo "<div class=\"Job\">
        <h1 class=\"job-title\">
        {$item->getTitle()}, Apply Now!</h1>
        <p class=\"job-text\">{$item->getText()}</p>
    </div>";
                break;
            default:
                "";
                break;
        }
    }
    ?>
</body>
</html>



<?

class Post{
    static $id = 1;
    static $title = 'The Impact of Artificial Intelligence on Modern Healthcare';
    static $author = 'John Doe';
    static $date = '2024-06-10';
    static $body = [
        'heading'   => "Predictive Analytics",
        'paragraph' =>  "Predictive analytics involves  using historical data to predict future outcomes. In healthcare, AI-driven predictive analytics can forecast disease outbreaks, patient admissions, and even individual patient outcomes.For instance, AI algorithms can analyze electronic health records (EHRs) to identify patients at risk of chronic diseases, enabling early intervention and better management."
    ];
    static $likes = 10;
    static $views = 20;
    static $conclusion = 'AI is undoubtedly a game-changer in healthcare, offering numerous benefits from improved diagnostics to personalized treatments. However, addressing the accompanying challenges and ethical considerations is crucial to harnessing its full potential.';

    static function renderAsHTML() {
        print("<h2>".static::$title."</h2>");
        print("<small>"."Author:".static::$author."</small>");
        print("<h3>".static::$body['heading']."</h3>");
        print("<p>".static::$body['paragraph']."</p>");
        print("<p>"."<em>"."Conclusion:".static::$conclusion."</em>"."</p>");

        print("<div>"."Likes:".static::$likes."<br>".
                "Views:".static::$views."<br>".
                "Published on:".static::$date."<br>".

        "</div>");
      
    }
}
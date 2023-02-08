<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Url shotener in PHP</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    </head>
    <body>
        <div class="wrapper">
            <form action="#">
                <input type="text" name="full-url" placeholder="Enter or paste a log url" required>
                <i class="url-icon uil uil-link"></i>
                <button>Shorten</button>

            </form>
            <div class="count">
                <span>total links: <span>10</span> & Total Clicks: <span>140</span></span>
                <a href="#">Clear All</a>
            </div>
            <div class="urls-area">
                <div class="title">
                    <li>Shorten URL</li>
                    <li>Original URL</li>
                    <li>Clicks</li>
                    <li>Actions</li>
                </div>
                <div class="data">
                    <li><a href="#">example.com/dasdas</a></li>
                    <li>https://www.youtube.com/watch?v=2oc4KeGOjn4</li>
                    <li>2</li>
                    <li><a href="#">Delete</a></li>
                </div>
                <div class="data">
                    <li><a href="#">example.com/dasdas</a></li>
                    <li>https://www.youtube.com/watch?v=2oc4KeGOjn4</li>
                    <li>2</li>
                    <li><a href="#">Delete</a></li>
                </div>
                <div class="data">
                    <li><a href="#">example.com/dasdas</a></li>
                    <li>https://www.youtube.com/watch?v=2oc4KeGOjn4</li>
                    <li>2</li>
                    <li><a href="#">Delete</a></li>
                </div>
                <div class="data">
                    <li><a href="#">example.com/dasdas</a></li>
                    <li>https://www.youtube.com/watch?v=2oc4KeGOjn4</li>
                    <li>2</li>
                    <li><a href="#">Delete</a></li>
                </div>
                <div class="data">
                    <li><a href="#">example.com/dasdas</a></li>
                    <li>https://www.youtube.com/watch?v=2oc4KeGOjn4</li>
                    <li>2</li>
                    <li><a href="#">Delete</a></li>
                </div>
                <div class="data">
                    <li><a href="#">example.com/dasdas</a></li>
                    <li>https://www.youtube.com/watch?v=2oc4KeGOjn4</li>
                    <li>2</li>
                    <li><a href="#">Delete</a></li>
                </div>
                <div class="data">
                    <li><a href="#">example.com/dasdas</a></li>
                    <li>https://www.youtube.com/watch?v=2oc4KeGOjn4</li>
                    <li>2</li>
                    <li><a href="#">Delete</a></li>
                </div>
            </div>
        </div>

        <div class="blur-effect"></div>
        <div class="popup-box">
            <div class="info-box">Your short link is ready. You can also edit your short link now but can't edit once you save it</div>
            <form action="#">
                <label>Edit your shorten url</label>
                <input type="text" spellcheck="false" value="example.com">
                <i class="copy-icon uil uil-copy-alt"></i>
                <button>Save</button>
            </form>
        </div>
        <script src="script.js"></script>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<style>

    .border_solid_lighter{
        border:solid 1px black;
    }

    .background_bg_color{
        background: cadetblue;
    }
    
    .inner_content_bg_color{
        background: bisque;
    }
    
    .flex_side_by_side{
        display:flex;
        justify-content: space-around;
        align-items: center;
        flex: 1;
    }
</style>
<body>
    <div class="background_bg_color">
        <header>
            <h1>Test App</h1>
            <nav>
                <ul class="flex_side_by_side">
                    <li class="inner_content_bg_color border_solid_lighter">top</li>
                    <li class="inner_content_bg_color border_solid_lighter">introduction</li>
                    <li class="inner_content_bg_color border_solid_lighter">contact</li>
                </ul>
            </nav>
        </header>
    </div>
    <main role="main">
        @yield('main_content')
    </main>
    <div class="background_bg_color">
        <footer>
            @yield('footer')
        </footer>
    </div>
</body>
</html>
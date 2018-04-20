<style>
    .border_solid_lighter{
        border:solid 1px black;
    }

    .background_bg_color{
        background: cadetblue;
    }
    
    .inner_content_bg_color{
        background: aqua;
    }
    
    .flex_side_by_side{
        display:flex;
        justify-content: space-around;
        align-items: center;
        flex: 1;
    }

    li{
        list-style: none;
    }
</style>
<div class="background_bg_color">
    <header>
        <h1>Test App</h1>
        <nav>
            <ul class="flex_side_by_side">
                <li class="inner_content_bg_color border_solid_lighter"><a href="#">top</a></li>
                <li class="inner_content_bg_color border_solid_lighter"><a href="#">introduction</a></li>
                <li class="inner_content_bg_color border_solid_lighter"><a href="#">contac</a></li>
            </ul>
        </nav>
    </header>
</div>
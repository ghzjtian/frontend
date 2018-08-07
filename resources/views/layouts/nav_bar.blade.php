<!-- Navbar (sit on top) -->

<div class="w3-top">
    <div class="w3-bar w3-white w3-card" id="myNavbar">
        <a href="/" class="w3-bar-item w3-button w3-wide">{{ setting('site.title') }}</a>
        <!-- Right-sided navbar links , icons from https://www.w3schools.com/icons/fontawesome_icons_webapp.asp -->
        <div class="w3-right w3-hide-small">
            <a href="/" class="w3-bar-item w3-button"><i class="fa fa-home"></i>{{setting('site.home_title')}}</a>
            <a href="/products" class="w3-bar-item w3-button"><i class="fa fa-window-restore"></i> 我们的产品</a>
            <a href="/gallery" class="w3-bar-item w3-button"><i class="fa fa-camera"></i> 图片欣赏</a>
            <a href="/news" class="w3-bar-item w3-button"><i class="fa fa-info-circle"></i> 最新动态</a>
            <a href="/about" class="w3-bar-item w3-button"><i class="fa fa-user"></i> 关于我们</a>
            <a href="/contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> 联系我们</a>
        </div>
        <!-- Hide right-floated links on small screens and replace them with a menu icon -->

        <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium"
           onclick="w3_open()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none"
     id="navSidebar">
    <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">关闭 ×</a>

    <a href="/" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-home"></i>首页</a>
    <a href="/products" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-window-restore"></i> 我们的产品</a>
    <a href="/gallery" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-camera"></i> 图片欣赏</a>
    <a href="/news" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-info-circle"></i> 最新动态</a>
    <a href="/about" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-user"></i> 关于我们</a>
    <a href="/contact" onclick="w3_close()" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> 联系我们</a>
</nav>



<script>
    // Toggle between showing and hiding the sidebar when clicking the menu icon
    var navSidebar = document.getElementById("navSidebar");

    function w3_open() {
        if (navSidebar.style.display === 'block') {
            navSidebar.style.display = 'none';
        } else {
            navSidebar.style.display = 'block';
        }
    }

    // Close the sidebar with the close button
    function w3_close() {
        navSidebar.style.display = "none";
    }

</script>
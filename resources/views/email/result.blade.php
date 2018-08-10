<!DOCTYPE html>
<html>

<header>
    {{--头部及 styles .--}}
    @section('style')
        @include('layouts.style')
    @show
    <script language="javascript">
        var cTime = 5;//这个变量是倒计时的秒数设置为10就是10秒
        function TimeClose() {
            window.setTimeout('TimeClose()', 1000);//让程序每秒重复执行当前函数。
            if (cTime <= 0)//判断秒数如果为0
                CloseWindow_Click();//执行关闭网页的操作
            this.ShowTime.innerHTML = "倒计时 " + cTime + " 秒后当前窗口将会关闭";//显示倒计时时间
            cTime--;//减少秒数
        }

        function CloseWindow_Click() {
            window.close();
        }
    </script>


</header>
<body onLoad="TimeClose();">


{{--头顶的导航条--}}
@section('nav_bar')
    @include('layouts.nav_bar')
@show

<style>
    .myBody {
        min-height: 45%;
    }
</style>

<div style="margin-top: 100px " class="myBody">
    <h1 style="color: red"> {{ $result  }}</h1>
    <div id="ShowTime">倒计时 5 秒后当前窗口将会关闭</div>
</div>
    <p>
        <button class="w3-btn w3-block w3-red " onClick="CloseWindow_Click();">立即关闭当前页面</button>
    </p>


{{-- footer 信息--}}
@section('footer')
    @include('layouts.footer')
@show

</body>
</html>



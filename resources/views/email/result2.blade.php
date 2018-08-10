@extends('layouts.base')

@section('custom_script')

    <script language="javascript">
        var cTime = 10;//这个变量是倒计时的秒数设置为10就是10秒
        function TimeClose() {
            window.setTimeout('TimeClose()', 1000);//让程序每秒重复执行当前函数。
            if (cTime <= 0)//判断秒数如果为0
                CloseWindow_Click();//执行关闭网页的操作
            this.ShowTime.innerHTML = "倒计时 " + cTime + " 秒后关闭当前窗口";//显示倒计时时间
            cTime--;//减少秒数
        }

        function CloseWindow_Click() {
            window.close();
        }
    </script>

@show

@section('email_result')

    <style>
        .myBody {
            min-height: 50%;
        }
    </style>

    <div style="margin-top: 100px " class="myBody">
        <div id="ShowTime">倒计时10秒后关闭当前窗口</div>

        <p>
            <button class="w3-btn w3-block w3-red " onClick="CloseWindow_Click();">立即关闭当前页面</button>
        </p>

    </div>



@endsection
<!doctype html>

<html class="no-js" lang="en">


<head>
   
    @include('admin.Css')
</head>

<body>


    <!-- Left Panel -->

        @include('admin.SideBar')
    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        @include('admin.Header')
        <!-- Header-->

        @include('admin.Body')
    </div><!-- /#right-panel -->

    <!-- Right Panel -->
    @include('admin.Script')

</body>

</html>

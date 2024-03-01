<?php 
extendLayout();

_include('components.header');
_include('components.sidebar');
_include('components.mainpanel');
_include('components.script');

section('title', config('library_subname') . ' :: ' . config('library_name'));

section('content', function() {
    return 
        _yield('header') . 
        _yield('sidebar') .
        _yield('mainpanel') . 
        _yield('script');
});
?>
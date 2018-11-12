<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ANOESIS Gestion SITE</title>

    <link href="{{asset("css/app.css")}}" rel="stylesheet"> 
    <link href="{{asset("css/back-office/dataTables.bootstrap4.min.css")}}" rel="stylesheet">
    <link href="{{asset("css/back-office/responsive.bootstrap4.min.css")}}" rel="stylesheet">
    <link href="{{asset("css/fontawesome-all.min.css")}}" rel="stylesheet">
  

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css">
    {{-- <link href="{{asset("css/dropzone.min.css")}}" rel="stylesheet"> --}}
    <link href="{{asset("css/back-office/style_back.css")}}" rel="stylesheet">
    <link href="{{asset("css/back-office/style_note.css")}}" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-lite.css" rel="stylesheet">


   
</head>
<body>

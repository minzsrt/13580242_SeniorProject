@extends('layouts.mainsuccess')
@section('page_title', 'Create Album Success')
@section('text_success', 'สร้างการ์ดค่าบริการเรียบร้อย')
@section('link_page', 'profile/'.Auth::user()->username.'/listPackage/'.$get_id)
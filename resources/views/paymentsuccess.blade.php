@extends('layouts.mainsuccess')
@section('page_title', 'Payment Success')
@section('text_success', 'ชำระเงินเรียบร้อย')
@section('link_page', '/notification/'.Auth::user()->username)
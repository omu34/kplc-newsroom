@extends('components.layouts.app')

@section('title', 'KPLC News')

@livewire('basic-banner')
{{-- @livewire('featured-news') --}}
@livewire('breadcrumb')
@livewire('tags')
@livewire('search') 
@livewire('read-next')
{{-- @livewire('banner')
--}}
@livewire('footer')

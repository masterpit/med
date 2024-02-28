@extends('layouts.app')
@section('layouts.sidebar')
<div class="col-md-3 mt-3">
    <div id="map" style="width:200px; height:300px">
        <script type="text/javascript" charset="utf-8" async
            src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A0b3d74f93fd8ed91f52e44c3089b82661b13000f2c88617c0ca2c376c99551b2&amp;width=250&amp;height=240&amp;lang=ru_RU&amp;scroll=true">
        </script>
    </div>
    <div class="row div_line">
        <div class="col-1">
            <img src="{{ asset('img/geoicon.svg') }}">
        </div>
        <div class="col-11">
            <p>Казахстан, п. Бесагаш (Талгарский район, Алматинская обл.), ул. ​Момышулы, д. 45А</p>
        </div>
    </div>
    <div class="row div_line">
        <div class="col-1">
            <img src="{{ asset('img/mailicon.svg') }}">
        </div>
        <div class="col-11">
            <a data-v-da27ce88="" style="text-decoration: none;"
                href="mailto: promedical.too@mail.ru">promedical.too@mail.ru</a>
        </div>
    </div>
    <div class="row div_line">
        <div class="col-1">
            <img src="{{ asset('img/clockicon.png') }}" style="height: 24px;">
        </div>
        <div class="col-11">
            режим работы 8:00 - 20:00
        </div>
    </div>
    <div class="row div_line">
        <div class="col-1">
            <img src="{{ asset('img/phoneicon.svg') }}" style="height: 24px;">
        </div>
        <div class="col-11">
            +7 771 765 95 35
        </div>

        <div class="col-1">
            <img src="{{ asset('img/phoneicon.svg') }}" style="height: 24px;">
        </div>
        <div class="col-11">
            +7 771 765 95 35
        </div>
    </div>
    <div class="row div_line">
        <div class="col-1">
            <img src="{{ asset('img/instaicon.png') }}" style="height: 24px;">
        </div>
        <div class="col-11">
            <span data-v-4019ae13="">@promedical.kz</span>
        </div>
    </div>
</div>
@endsection
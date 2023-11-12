<br>
@php
    $data = json_decode($content);
    $lang = [
        'name' => "İsim",
        "email" => 'E-Posta',
        'phone' => "Telefon",
        "company" => 'Firma',
        'message' => "Mesaj"
    ];
@endphp
@foreach ($data as $key => $item)
    <strong style="width:100px;display:inline-block">{{$lang[$key] ?? $key}}:</strong> {{$item}} <br>
@endforeach 